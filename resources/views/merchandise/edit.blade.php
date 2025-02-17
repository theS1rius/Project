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

        <title>官網 | 編輯商品</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
            <form action="/merchandise/{{ $merchandise->id }}/edit" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="type">狀態</label>
                    <select class="form-control"
                        name="status"
                        id="status">
                        <option value="C"
                            @if(old('status', $merchandise->status)=='C') selected @endif
                            >
                            建立中
                        </option>
                        <option value="S"
                            @if(old('status', $merchandise->status)=='S') selected @endif
                            >
                            銷售中
                        </option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">中文名稱</label>
                    <input type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        value="{{ old('name', $merchandise->name) }}">
                </div>
                <div class="form-group">
                    <label for="introduction">商品介紹</label>
                    <input type="text"
                        class="form-control"
                        id="introduction"
                        name="introduction"
                        value="{{ old('introduction', $merchandise->introduction) }}">
                </div>
                <div class="form-group">
                    <label for="photo">商品圖片</label>
                    <input type="file"
                        class="form-control"
                        id="photo"
                        name="photo">
                    <img src="{{ $merchandise->photo or '/assets/images/default-merchandise.png' }}" />
                </div>
            
                <div class="form-group">
                    <label for="price">商品價格</label>
                    <input type="text"
                        class="form-control"
                        id="price"
                        name="price"
                        value="{{ old('price', $merchandise->price) }}">
                </div>
                <div class="form-group">
                    <label for="remain_count">剩餘庫存</label>
                    <input type="text"
                        class="form-control"
                        id="remain_count"
                        name="remain_count"
                        value="{{ old('remain_count', $merchandise->remain_count) }}">
                </div>
                <button type="submit" class="btn btn-default">更新</button>
            </form>
        </main>
        @include('layouts.footer')
    </body>
</html>
