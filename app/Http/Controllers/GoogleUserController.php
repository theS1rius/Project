<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\GoogleUser;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // 導向 Google 登入頁面
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google 回傳授權碼，處理登入邏輯
    public function handleGoogleCallback()
    {
        try {
            // 取得 Google 使用者資訊
            $googleUser = Socialite::driver('google')->user();

            // 檢查使用者是否已註冊
            $user = User::where('email', $googleUser->getEmail())->first();

            if (!$user) {
                // 若 `users` 表無該 Email，則先建立 User
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'password' => bcrypt(str()->random(16)), // 設置隨機密碼
                ]);
            }

            // 確保 `google_users` 表內有對應的紀錄
            GoogleUser::updateOrCreate(
                ['email' => $googleUser->getEmail()], // 條件
                [
                    'google_id' => $googleUser->getId(),
                    'name' => $googleUser->getName()
                ]
            );

            // 登入使用者
            Auth::login($user);

            // 導向首頁
            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect('/login')->with('error', 'Google 登入失敗，請再試一次！');
        }
    }
}
