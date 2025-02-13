<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href=".../images/favicon.ico">

        <title>官網 | 會員中心</title>
    </head>
    <body>
        <main>
            <h1>{{ $user->name }}的會員中心</h1>
            <form action="{{ route('Logout') }}" method="post">
                @csrf
                <div>
                    <button type="submit">登出</button>
                </div>
            </form>
        </main>
    </body>
</html>
