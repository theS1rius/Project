<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="/images/favicon.ico">

        <title>官網 | 登入會員</title>
    </head>
    <body>
        <main>
            <h1>請登入會員</h1>
            <form action="{{ route('LoginProcess') }}" method="post">
                <div>
                    <input type="text" name="account" placeholder="請輸入帳號" required>
                    <br>
                    <input type="password" name="password" placeholder="請輸入密碼" required>
                    <br>
                    <button type="submit">登入</button>
                </div>
            </form>
            <form action="{{ route('ShowRegisterForm') }}" method="get">
                <div>
                    <button type="submit">註冊</button>
                </div>
            </form>
        </main>
    </body>
</html>
