<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 商品</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
        <article>
            <div class="container">
                <!-- 麵包 -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item ">
                            <a href=" {{route('indexPage')}}" class="text-plum">
                                <span class="small">首頁</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item ">
                            <a href="#" class="text-plum">
                                <span class="small">各類商品</span>
                            </a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <span class="small">{{ $name }}</span>
                        </li>
                    </ol>
                </nav>
                <div class="row">
                    <div class="col">
                        <img src="/{{ $photo }}" alt="商品圖片">
                    </div>
                    <div class="col">
                        <h2>{{ $name }}</h2>
                        <hr>
                        <div class="lh-lg ">
                            <p class="text-red">!!滿$3000即可宅配免運!!</p>
                            <span class="fs-3 text-red">${{ number_format($price * 0.8, 0) }}</span>
                            <span class="text-grey text-decoration-line-through">${{ $price }}</span>
                            <h5 class="small">【尺寸】</h5>
                            <p>M：肩寬62／胸圍63／袖長55／衣長69</p>
                            <p>L：肩寬68／胸圍69／袖長58／衣長75</p>
                        <div>
                            <h5 class="small">【商品描述】</h5>
                            <p>{{$introduction}}</p>
                        </div>
                            <h5 class="small">【數量】</h5>
                            <div class="d-flex align-items-center col-6">
                                <button class="btn plus-btn order-3 text-center  rounded-cirle btn-plum " type="button">
                                    <i class="bi bi-plus-lg "></i>
                                </button>
                                <select class="form-select order-2 text-center border-0 border-bottom "
                                    aria-label="Default select example">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <button class="btn dash-btn order-1 text-center border-0 border-bottom btn-plum "
                                    type="button">
                                    <i class="bi bi-dash-lg "></i>

                                </button>
                                <span class="small text-grey ms-3 text-nowrap ms-auto">庫存剩餘{{ $remain_count }}件</span>
                            </div>


                            <h5 class="small pt-3">【供應商】</h5>
                            <p>LS韓國運貨</p>
                        </div>
                        <hr>
                        <div>
                            <p>LS 韓國新品上架不間斷，同步掌握韓國穿搭時尚</p>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        📦 免運費服務說明
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled lh-lg">
                                            <li class="small">✅ 單筆訂單滿 $3000（折扣後計算）</li>
                                            <li class="small">✅ 享 宅配免運（限台灣本島）</li>
                                            <li class="small">✅ 系統自動折抵，無需額外輸入優惠碼</li>
                                            <li class="small">快來選購你喜愛的商品，享受 免費宅配到家！ 🛒✨</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 立即購買、加入購物車 -->
                            <div class="mt-3 col-4 btt d-flex ">
                                <a href="MY-shopping1.html">
                                    <button class="btn bg-plum-Brown me-1  " type="button" href:="MY-shopping1.html">
                                        <span class="text-light">加入購物車</span>
                                    </button>
                                </a>
                                <form action="/buy" method="POST">
                                    {{ csrf_field() }}
                                    <button class="btn bg-plum-Brown ms-1 " type="submit"> ">
                                        <span class=" text-light">立即購買</span>
                                    </button>
                                </form>
                            </div>
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
