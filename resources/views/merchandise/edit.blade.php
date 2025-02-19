<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 編輯商品</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
            <form action="{{ route('MerchandiseItemEditProcess', ['merchandise_id' => $merchandise->id]) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="type">狀態</label>
                    <select class="form-control" name="status" id="status">
                        <option value="C" @if(old('status', $merchandise->status)=='C') selected @endif>
                            未上架
                        </option>
                        <option value="S" @if(old('status', $merchandise->status)=='S') selected @endif>
                            販售中
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
                    <img src="/{{ $merchandise->photo }}" />
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
        @include('layouts.loginform')
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>
