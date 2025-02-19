<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 管理商品</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
            <article id="cart-list-page" class="py-7">
            <div class="container">
                <!-- 區塊標題 -->
                <div class="text-center section-title mb-5 mt-3">
                    <h2>商品管理</h2>
                </div>
                <!-- 內容 -->
                <div class="col-xl-10 mx-auto">
                    <form action="#" method="post" id="cart-list-form">
                        <table class="table table-hover text-center">
                            <thead class="text-center">
                                <tr class="bg-plum-light">
                                    <th scope="col" class="col-7">商品名稱</th>
                                    <th scope="col" class="col-1">狀態</th>
                                    <th scope="col" class="col-1">庫存</th>
                                    <th scope="col" class="col-1">售價</th>
                                    <th scope="col" class="col-1">編輯</th>
                                    <th scope="col" class="col-1">刪除</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($merchandises as $merchandise)
                                <tr>
                                    <!-- 品名 -->
                                    <td class="align-middle">
                                        <a class="d-flex align-items-center" href="#" title="前往商品詳細說明頁">
                                            <!-- 商品圖 -->
                                            <div class="col-xl-1  col-md-3 me-5">
                                                <img src="/{{ $merchandise->photo = $merchandise->photo ?? '/assets/images/default-merchandise.png'}}" alt="商品圖"/>
                                            </div>
                                            <!-- 商品名稱 -->
                                            <h3 class="fs-6 text-dark text-start lh-base">{{ $merchandise->name }}</h3>
                                        </a>
                                    </td>
                                    <!-- 狀態 -->
                                    <td class="align-middle">
                                        <form action="{{ route('MerchandiseItemEditPage', ['merchandise_id' => $merchandise->id]) }}" method="post">
                                            <button class="btn" type="button" title="狀態">
                                                @if($merchandise->status == 'C')
                                                <span>未上架</span>
                                                @elseif($merchandise->status == 'S')
                                                <span>販售中</span>
                                                @endif
                                            </button>
                                        </form>
                                    </td>
                                    <!-- 庫存 -->
                                    <td class="align-middle">
                                        <span>{{ $merchandise->remain_count }}</span>
                                    </td>
                                    <!-- 售價 -->
                                    <td class="align-middle">
                                        <span>${{ $merchandise->price }}</span>
                                    </td>
                                    <!-- 編輯 -->
                                    <td class="align-middle">
                                        <a href="{{ route('MerchandiseItemEditPage', ['merchandise_id' => $merchandise->id]) }}" title="點擊 進入編輯畫面[另開新視窗]" target="_blank" class="text-dark">
                                            <i class="bi bi-pen"></i>
                                        </a>
                                    </td>
                                    <!-- 刪除 -->
                                    <td class="align-middle">
                                        <form action="/merchandise/{{$merchandise->id}}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn" type="button" title="刪除商品">
                                                <i class="bi bi-trash"></i>
                                                <span class="d-none">刪除</span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach



                            </tbody>
                        </table>
                    </form>
                    <div class="d-flex justify-content-end align-items-center">
                        <form action="{{ route('MerchandiseCreateProcess')}}" method="get" class="my-3">
                            <button class="btn border btn-dark " type="submit" >
                                <h5 class="text-light createproduct">新增商品</h5>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </article>
        </main>
        @include('layouts.loginform')
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>
