<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/favicon.ico">

        <title>官網 | 註冊會員</title>
    </head>
    <body>
        <main>
            <h1>請註冊會員</h1>
            <form action="{{ route('RegisterProcess') }}" method="post">
                {!! csrf_field() !!}
                <div>
                    名稱：<input type="text" name="name" placeholder="請輸入註冊的姓名" value="{{ old('name') }}" required>
                    <br>
                    帳號：<input type="text" name="account" placeholder="請輸入註冊的帳號" value="{{ old('account') }}" required>
                    <br>
                    密碼：<input type="password" name="password" placeholder="請輸入註冊的密碼" value="{{ old('password') }}" required>
                    <br>
                    確認密碼：<input type="password" name="password_confirmation" placeholder="請再次輸入註冊的密碼" value="{{ old('password_confirmation') }}" required>
                    <br>
                    電子郵件：<input type="email" name="email" placeholder="請輸入註冊的電子郵件" value="{{ old('email') }}" required>
                    <br>
                    使用者類型：
                    <input type="radio" name="type" value="G"
                        @if (old("type")=="G" )
                        checked
                        @endif> 一般使用者
                    <input type="radio" name="type" value='A'
                        @if (old("type")=="A" )
                        checked
                        @endif> 管理員<br>
                    <button type="submit">送出</button>
                </div>
            </form>
            @include('components.validationErrorMessage')
        </main>
    </body>
</html>
