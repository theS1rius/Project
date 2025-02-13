<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Validator;
use App\Shop\Entity\Merchandise;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MerchandiseController extends Controller
{
    public function MerchandiseCreateProcess()
    {
        $merchandise_data = [
            'status' => 'C',
            'name' => '',
            'name_en' => '',
            'introduction' => '',
            'introduction_en' => '',
            'photo' => null,
            'price' => 0,
            'remain_count' => 0,
        ];

        $Merchandise = Merchandise::create($merchandise_data);

        return redirect('/merchandise/' . $Merchandise->id . '/edit');


    }

    // 編輯

    public function MerchandiseItemEditPage($merchandise_id)
    {
        $Merchandise = Merchandise::findOrFail($merchandise_id);

        if (!is_null($Merchandise->photo)) {
            $Merchandise->photo = url($Merchandise->photo);
        }

        $binding = [
            'title' => '編輯商品',
            'Merchandise' => $Merchandise,
        ];

        return view('merchandise_manage', $binding);
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