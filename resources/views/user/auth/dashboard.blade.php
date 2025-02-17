<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- logo -->
        <link rel="icon" href="{{ asset('images/favicon.ico') }}">
        <!-- css -->
        <link rel="stylesheet" href="{{ asset('bootstrap-5.3.3/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('fonts/icons-1.11.3/font/bootstrap-icons.css')}}">
        <!-- 頁面動態 -->
        <link rel="stylesheet" href="{{ asset('js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css')}}">
        <!-- 自己的 -->
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('css/media.css')}}">

        <title>官網 | 會員中心</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
            <h1>已登入會員</h1>
        </main>
        @include('layouts.footer')
    </body>
</html>
