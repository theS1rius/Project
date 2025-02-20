<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthUserAdminMiddleware;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MerchandiseController;
use App\Http\Controllers\TransactionController;
use Illuminate\Container\Attributes\Auth;
use Ycs77\NewebPay\Facades\NewebPay;

#到首頁
Route::get('/', [HomeController::class, 'indexPage'])->name('indexPage');

#使用者
Route::group(['prefix' => 'user'], function () {
    Route::group(['prefix' => 'auth'], function () {
            // 使用者驗證
            Route::post('/login', [UserAuthController::class, 'LoginProcess'])->name('LoginProcess');
            Route::get('/register', [UserAuthController::class, 'ShowRegisterForm'])->name('ShowRegisterForm');
            Route::post('/register', [UserAuthController::class, 'RegisterProcess'])->name('RegisterProcess');
            Route::get('/dashboard', [UserAuthController::class, 'Dashboard'])->name('Dashboard');
            Route::get('/logout', [UserAuthController::class, 'Logout'])->name('Logout');
            // Google 登入
            Route::get('/google', [GoogleController::class, 'redirectToProvider'])->name('redirectToProvider');
            Route::get('/google/callback', [GoogleController::class, 'handleProviderCallback']);
    });
});

#商品
Route::group(['prefix' => 'merchandise'], function () {
    Route::get('/', [MerchandiseController::class, 'MerchandiseListPage'])->name('MerchandiseListPage');
    Route::post('/',function(){ return view('merchandise'); });
    Route::get('/create', [MerchandiseController::class, 'MerchandiseCreateProcess'])->name('MerchandiseCreateProcess');
    Route::get('/manage', [MerchandiseController::class, 'MerchandiseManagePage'])->name('MerchandiseManagePage');
    Route::group(['prefix' => '{merchandise_id}'], function () {
        Route::get('/', [MerchandiseController::class, 'MerchandiseItemPage'])->name('MerchandiseItemPage');
        Route::get('/edit', [MerchandiseController::class, 'MerchandiseItemEditPage'])->name('MerchandiseItemEditPage');
        Route::post('/edit', [MerchandiseController::class, 'MerchandiseItemEditProcess'])->name('MerchandiseItemEditProcess');
        Route::get('/item', [MerchandiseController::class, 'ItemPage'])->name('ItemPage');
    });
});

#交易紀錄頁面
Route::get('/transaction', [TransactionController::class, 'TransactionListPage'])->name('TransactionListPage');

#金流API
Route::group(['prefix' => 'buy'], function () {
    Route::get('/', function(){
        return view('buy');
    });
    
    Route::post('/',function(){
        $no = 'Vanespl_ec_'.time();  // 訂單編號
        $amt = 120;                  // 交易金額
        $desc = '我的商品';           // 商品名稱
        $email = 'test@example.com'; // 付款人信箱

        return NewebPay::payment($no, $amt, $desc, $email)
        ->tradeLimit() // 交易秒數限制
        ->expireDate() // 交易截止日
        ->returnUrl('https://siriuslab.website/merchandise') // 由藍新回傳後前景畫面要接收資料顯示的網址
        ->notifyUrl('https://siriuslab.website/merchandise') // 由藍新回傳後背景處理資料的接收網址
        ->customerUrl() // 商店取號網址
        ->clientBackUrl() // 付款時點擊「返回按鈕」的網址
        ->emailModify() // 是否開放 email 修改
        ->loginType() // 是否需要登入藍新金流會員
        ->orderComment() // 商店備註
        ->paymentMethods() // 付款方式 *依照 config 格式傳送*
        ->CVSCOM() // 物流方式
        ->lgsType() // 物流型態
        ->submit();
    });

    Route::post('/callback', function (Request $request) {
        $result = NewebPay::result($request);

        if ($result->isFail()) {
            return redirect()->to('/buy')->with('error', $result->message());
        }

        // 訂單付款成功，處裡訂單邏輯...

        return redirect()->to('/buy')->with('success', '付款成功');
    });
});

#購物車
Route::post('/cart', [UserAuthController::class, 'Cart'])->name('Cart');