<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 編輯商品</title>
    </head>
    <body>
        <main>
            <article class="my-5" id="product-edit">
            <div class="container custom-container">
                <video autoplay muted loop class="bg-video">
                    <source src="{{ asset('images/背景動態圖.mp4')}}" type="video/mp4">
                    <span class="d-none">您的瀏覽器不支援 HTML5 影片標籤。</span>
                </video>
                <div class="bg-plum-light border shadow rounded overflow-hidden">
                    <div class="row rowedit">
                        <div class="col-6 overflow-hidden PIT ">
                            <img src="/{{ $merchandise->photo }}" alt="商品替換圖片" onerror="this.onerror=null;this.src='{{ asset('images/edit.jpg')}}';">
                        </div>
                        <div class="col-sm-6 d-flex  flex-column justify-content-center px-3">
                            <div class="p-3">
                                <form action="{{ route('MerchandiseItemEditProcess', ['merchandise_id' => $merchandise->id]) }}" method="post">
                                    {{ csrf_field() }}
                                    <!-- 建立 -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label py-2">狀態</label>
                                        <select class="form-select form-select-lg mb-3"
                                            aria-label="Large select example" id="formse">
                                            <option value="C" @if(old('status', $merchandise->status)=='C') selected @endif>
                                                未上架
                                            </option>
                                            <option value="S" @if(old('status', $merchandise->status)=='S') selected @endif>
                                                販售中
                                            </option>
                                        </select>
                                    </div>
                                    <!-- 中文名稱 -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">中文名稱</label>
                                        <input type="text" class="form-control" id="chinese-name" value="{{ old('name', $merchandise->name) }}">
                                    </div>
                                    <!-- 商品介紹 -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">商品介紹</label>
                                        <input type="text" class="form-control" id="product-name" value="{{ old('name', $merchandise->introduction) }}">
                                    </div>
                                    <!-- 上傳檔案 -->
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">上傳圖片</label>
                                        <input class="form-control" type="file" id="formFile" value="{{ old('photo', $merchandise->photo) }}">
                                    </div>
                                    <!-- 商品價格 -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">商品價格</label>
                                        <input type="number" class="form-control" id="product-name" value="{{ old('price', $merchandise->price) }}">
                                    </div>
                                    <!-- 庫存 -->
                                    <div class="mb-3">
                                        <label for="exampleInputPassword1" class="form-label">庫存</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1" value="{{ old('remain_count', $merchandise->remain_count) }}">
                                    </div>
                                    <div class="py-2 d-flex justify-content-end align-items-center">
                                        <button type="submit" class="btn btn-dark "><span class="text-light">更新</span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </article>
        </main>
        @include('layouts.script')
    </body>
</html>
