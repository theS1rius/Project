<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Illuminate\Http\Request;
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
        print_r($input);
        
        if ($input['name'] == '') {
            print('暱稱不得為空');
            return redirect('/user/auth/register')
                ->withErrors(['暱稱不得為空', '請重新輸入'])
                ->withInput();
        } else if ($input['password'] == '') {
            print('密碼不得為空');
            return redirect('/user/auth/register')
                ->withErrors(['密碼不得為空', '請重新輸入'])
                ->withInput();
        } else {
            $input['password'] = Hash::make($input['password']);
            User::create($input);

            Mail::send('email.RegisterEmailNotification', ['nickname' => $input['name']], function ($message) use ($input) {
                $message->to($input['email']);
                $message->from('thesirius0927@gmail.com');
                $message->subject('恭喜註冊成功');
            });
        }
    }
    //     $input = request()->all();

    //     $rules = [
    //         'name' => ['required','min:2','max:10'],
    //         'account' => ['required','alpha_num','min:2','max:20'],
    //         'password' => ['required','min:6','max:20','same:password_confirmation'],
    //         'password_confirmation' => ['required','min:6','max:20'],
    //         'email' => ['required','email','max:100'],
    //     ];

    //     $validator = Validator::make($input, $rules, [
    //         'nickname.required' => '請填寫 :attribute',
    //         'nickname.max' => ':attribute 不得超過30字元',
    //         'password.required' => '請填寫 :attribute',
    //         'password.min' => ':attribute 不得低於6字元',
    //         'password.max' => ':attribute 不得超過20字元',
    //         'password.same' => ':attribute 與 確認密碼 不相同',
    //         'password_confirmation.required' => '請填寫 :attribute',
    //         'password_confirmation.min' => ':attribute 不得低於6字元',
    //         'password_confirmation.max' => ':attribute 不得超過20字元',
    //         'email.required' => '請填寫 :attribute',
    //         'email.email' => '請填寫正確的 :attribute 格式',
    //         'email.max' => ':attribute 不得超過100字元',
    //     ], [
    //         'nickname' => '暱稱',
    //         'password' => '密碼',
    //         'password_confirmation' => '確認密碼',
    //         'email' => '電子郵件',
    //     ]);
    //     if ($validator->fails()) {
    //         return redirect('user/auth/register')
    //         ->withErrors($validator)
    //         ->withInput();
    //     }

    //     $input['password'] = Hash::make($input['password']);

    //     $Users = User::create($input);

    //     $mail_binding = [ 'nickname' => $input['nickname'] ];

    //     Mail::send('email.RegisterEmailNotification', $mail_binding, function ($mail) use ($input) {
    //         $mail->to($input['email']);

    //         $mail->from('thesirius0927@gmail.com'); //寄件者
    //         $mail->subject('恭喜註冊成功');
    //     });

    //     return view('user.auth.login');
    // }

    public function ShowLoginForm()
    {
        return view('user.auth.login');
    }

    public function LoginProcess(Request $request)
    {
        $request->validate([
            'account' => 'required|string',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($request->only('account', 'password'))) {
            return redirect()->route('Dashboard');
        }
        return back()->withErrors(['account' => '錯誤']);
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