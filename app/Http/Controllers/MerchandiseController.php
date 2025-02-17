<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\Merchandise;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

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
        }

        $binding = [
            'title' => '編輯商品',
            'merchandise' => $merchandise,
        ];

        return view('merchandise.edit', $binding);
    }

    public function MerchandiseItemEditProcess($merchandise_id)
    {
        $merchandise = Merchandise::find($merchandise_id);

        if (is_null($merchandise)) {
            return redirect('/');
        }

        $input = request()->all();

        $rules = [
            'status' => ['required', 'in:C,S'],
            'name' => ['required', 'max:80'],
            'introduction' => ['required', 'max:200'],
            'photo' => ['file', 'image', 'max:10240'],
            'price' => ['required', 'integer', 'min:0'],
            'remain_count' => ['required', 'integer', 'min:0'],
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect('/merchandise/' . $merchandise_id . '/edit')
                ->withErrors($validator)
                ->withInput();
        }

        if (isset($input['photo'])) {
            $photo = $input['photo'];
            $file_extension = $photo->getClientOriginalExtension();
            $file_name = uniqid() . '.' . $file_extension;
            $file_relative_path = 'images/merchandise/' . $file_name;
            $file_path = public_path($file_relative_path);
            $file_url = asset($file_relative_path);

            $photo->move('images/merchandise/', $file_name);

            $merchandise->photo = $file_url;
        }

        $merchandise->status = $input['status'];
        $merchandise->name = $input['name'];
        $merchandise->introduction = $input['introduction'];
        $merchandise->price = $input['price'];
        $merchandise->remain_count = $input['remain_count'];

        $merchandise->save();

        return redirect('/merchandise/' . $merchandise_id . '/edit');
    }

    public function index(): View
    {
        $item = Merchandise::paginate(5);

        return view('index', [
            'Merchandises' => $item,
        ]);
    }

    public function MerchandiseListPage(): View
    {
        return view('merchandise');
    }
}