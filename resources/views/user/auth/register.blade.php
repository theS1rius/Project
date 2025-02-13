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
                    <input type="text" name="nickname" placeholder="請輸入註冊的姓名" value="{{ old('name') }}" required>
                    <br>
                    <input type="text" name="account" placeholder="請輸入註冊的帳號" value="{{ old('account') }}" required>
                    <br>
                    <input type="password" name="password" placeholder="請輸入註冊的密碼" value="{{ old('password') }}" required>
                    <br>
                    <input type="password" name="password_confirmation" placeholder="請再次輸入註冊的密碼" value="{{ old('password_confirmation') }}" required>
                    <br>
                    <input type="email" name="email" placeholder="請輸入註冊的電子郵件" value="{{ old('email') }}" required>
                    <br>
                    <button type="submit">送出</button>
                </div>
            </form>
            @include('components.validationErrorMessage')
        </main>
    </body>
</html>
