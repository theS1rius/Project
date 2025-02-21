<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\Merchandise;
use App\Shop\Entity\Cart;
use Illuminate\Support\Facades\Auth;

class MerchandiseController extends Controller
{
    public function MerchandiseCreateProcess()
    {
        $merchandise_data = [
            'status' => 'C',
            'name' => '',
            'introduction' => '',
            'photo' => '',
            'price' => 0,
            'remain_count' => 0,
        ];

        $merchandise_sql_data = Merchandise::create($merchandise_data);

        return redirect('/merchandise/' . $merchandise_sql_data->id . '/edit');
    }

    // 編輯

    public function MerchandiseItemEditPage($merchandise_id)
    {
        $merchandise = Merchandise::where('id',$merchandise_id);

        if ($merchandise->count() === 0) {
            return redirect('/');
        } else {
            $merchandise = $merchandise->first();
            $binding = [
                'title' => '編輯商品',
                'merchandise' => $merchandise,
            ];
            return view('merchandise.edit', $binding);
        }
    }

    public function MerchandiseItemEditProcess($merchandise_id)
    {
        $input = request()->all();
        $rules = [
            'status' => ['required', 'in:C,S'],
            'name' => ['required', 'max:80'],
            'introduction' => ['required', 'max:200'],
            'photo' => ['file', 'image', 'max:10240'],
            'price' => ['required', 'integer', 'min:0'],
            'remain_count' => ['required', 'integer', 'min:0'],
        ];

        unset($input['_token']);

        Merchandise::where('id', $merchandise_id)
            ->update($input);

        if (isset($input['photo'])) {
            // 上傳圖片
            $photo = $input['photo'];
            // 檔案副檔名
            $file_extension = $photo->getClientOriginalExtension();
            // 檔案名稱
            $file_name = 'item' . $merchandise_id . '.' . $file_extension;
            // 檔案相對位置
            $file_relative_path = 'images/merchandise/';
            // 檔案存放位置
            $file_path = public_path($file_relative_path);
            // 搬移檔案
            $photo->move($file_path, $file_name);
            // 設定圖片檔案名稱
            $photo = $file_relative_path . $file_name;

            Merchandise::where('id', $merchandise_id)
            ->update([
                'photo' => $photo,
            ]);
        }

        return redirect('/merchandise/' . $merchandise_id . '/edit');
    }

    public function MerchandiseManagePage()
    {
        $merchandise = Merchandise::get();
        $binding = [
            'title' => '管理商品',
            'merchandises' => $merchandise,
        ];
        return view('merchandise.manage', $binding);
    }

    public function ItemPage($merchandise_id)
    {
        $merchandise = Merchandise::where('id', $merchandise_id)->first();

        $binding = [
            'id' => $merchandise->id,
            'name' => $merchandise->name,
            'photo' => $merchandise->photo,
            'introduction' => $merchandise->introduction,
            'price' => $merchandise->price,
            'remain_count' => $merchandise->remain_count,
        ];
        return view('merchandise.item', $binding);
    }

    public function CartPage()
    {
        if (Auth::check()) {
            $userId = Auth::id();
            $input = request()->all();
            if (isset($input['merchandise_id'])) {
                $merchandise_id = $input['merchandise_id'];
                $count = 1;
                $merchandise = Merchandise::where('id', $merchandise_id)->first();
                if ($merchandise) {
                    $cart = Cart::where('user_id', $userId)
                        ->where('merchandise_id', $merchandise_id)
                        ->first();
                    if ($cart) {
                        $cart->count = $cart->count + $count;
                        $cart->save();
                    } else {
                        Cart::create([
                            'user_id' => $userId,
                            'merchandise_id' => $merchandise_id,
                            'count' => $count,
                        ]);
                    }
                }
            }

            $carts = Cart::where('user_id', $userId)->get();
            $user_merchandise_id = [];
            foreach ($carts as $cart) {
                $user_merchandise_id[] = $cart->merchandise_id;
            }
            $merchandiseArray = [];
            foreach ($user_merchandise_id as $usermerchandiseID) {
                $merchandiseArray[] = Merchandise::where('id', $usermerchandiseID)->first();
            }
            $binding = [
                'userCart' => $merchandiseArray,
            ];

            return view('cart', $binding);

        } else {
            return redirect()->to('/');
        }
    }
}