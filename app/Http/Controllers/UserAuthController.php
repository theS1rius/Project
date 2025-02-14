<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class UserAuthController extends Controller
{
    public function ShowRegisterForm()
    {
        return view('user.auth.register');
    }

    public function RegisterProcess()
    {
        $input = request()->all();

        $rules = [
            'name' => ['required','min:2','max:10'],
            'account' => ['required','alpha_num','min:2','max:20'],
            'password' => ['required','min:6','max:20','same:password_confirmation'],
            'password_confirmation' => ['required','min:6','max:20'],
            'email' => ['required','email','max:100'],
        ];

        $validator = Validator::make($input, $rules, [
            'name.required' => '請填寫名稱',
            'name.min' => '名稱最少2個字',
            'name.max' => '名稱最多10個字',
            'account.required' => '請填寫帳號',
            'account.alpha_num' => '帳號只能是英文和數字',
            'account.min' => '帳號最少2個字',
            'account.max' => '帳號最多20個字',
            'password.required' => '請填寫密碼',
            'password.min' => '密碼最少6個字',
            'password.max' => '密碼最多20個字',
            'password.same' => '確認密碼與密碼不相同',
            'password_confirmation.required' => '請填寫確認密碼',
            'password_confirmation.min' => '確認密碼最少6個字',
            'password_confirmation.max' => '確認密碼最多20個字',
            'email.required' => '請填寫電子郵件',
            'email.email' => '電子郵件格式錯誤',
            'email.max' => '電子郵件最多100個字',
        ]);

        if ($validator->fails()) {
            return redirect('user/auth/register')
            ->withErrors($validator)
            ->withInput();
        }

        if (User::where('account', $input['account'])->exists()) {
            return redirect('user/auth/register')
            ->withErrors(['account' => '帳號已被使用'])
            ->withInput();
        } else if (User::where('email', $input['email'])->exists()) {
            return redirect('user/auth/register')
            ->withErrors(['email' => '電子郵件已被使用'])
            ->withInput();
        }

        $input['password'] = Hash::make($input['password']);

        $User = User::create($input);

        if ($User) {
            $this->SendRegisterMail($input);
        }

        return redirect('user/auth/login');
    }

    public function SendRegisterMail($input){
        Mail::send('email.RegisterEmailNotification',
        ['nickname' => $input['name']],
        function ($message) use ($input) {
        $message->to($input['email'], $input['name'])
        ->from('thesirius0927@gmail.com')
        ->subject('恭喜註冊成功');
        });
    }

    public function ShowLoginForm()
    {
        return view('user.auth.login');
    }

    public function LoginProcess()
    {
        $input = request()->all();

        $rules = [
            'account' => ['required','alpha_num'],
            'password' => ['required'],
        ];

        $validator = Validator::make($input, $rules, [
            'account.required' => '請填寫帳號',
            'account.alpha_num' => '帳號只能是英文和數字',
            'password.required' => '請填寫密碼',
        ]);

        if ($validator->fails()) {
            return redirect('user/auth/login')
            ->withErrors($validator)
            ->withInput();
        }

        if (Auth::attempt(['account' => $input['account'], 'password' => $input['password']])) {
            return redirect()->intended('user/auth/dashboard');
        } else {
            return redirect('user/auth/login')
            ->withErrors(['msg' => '登入失敗，帳號或密碼錯誤！'])
            ->withInput();
        }
    }

    public function Dashboard()
    {
        return view('user.auth.dashboard', ['user' => Auth::user()]);
    }

    public function Logout()
    {
        Auth::logout();
        return redirect()->route('ShowLoginForm');
    }
}