<?php
namespace App\Http\Controllers;
use TsaiYiHua\ECPay\Checkout;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    protected $checkout;
    
    public function __construct(Checkout $checkout)
    {
        $this->checkout = $checkout;
    }

    public function sendOrder()
    {
        $input = request()->all();
        $UserId = Auth::id();

        $formData = [
            'UserId' => $UserId,
            'ItemDescription' => '產品簡介',
            'ItemName' => '產品名稱',
            'TotalAmount' => $input['total'],
            'PaymentMethod' => 'Credit', // ALL, Credit, ATM, WebATM
        ];
        return $this->checkout->setPostData($formData)->send();
    }
}