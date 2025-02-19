<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 首頁</title>
    </head>
    <body>
        @include('layouts.header') 
        <!-- 圖 -->
        <article>
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <!-- banner1 -->
                <div class="carousel-item active">
                    <img src="images/banner1.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>第一</h5>
                        <p>展示圖</p>
                    </div>
                </div>
                <!-- banner2 -->
                <div class="carousel-item">
                    <img src="images/banner2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>第二</h5>
                        <p>展示圖</p>
                    </div>
                </div>
                <!-- banner3 -->
                <div class="carousel-item">
                    <img src="images/banner3.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>第三</h5>
                        <p>展示圖</p>
                    </div>
                </div>
                <!-- banner4 -->
                <div class="carousel-item">
                    <img src="images/banner4.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>第四</h5>
                        <p>展示圖</p>
                    </div>
                </div>
            </div>
            <!-- banner圖的箭頭 -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">上一個</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">下一個</span>
            </button>
        </div>
    </article>
    <main>
        <!-- 現在優惠內容 -->
        <article id="sale" class="py-5">
            <!-- 區塊標題 -->
            <div class="mt-3">
                <div class="d-flex">
                    <p class="ms-5">
                        🥐
                        <strong>現在優惠福利</strong>
                    </p>
                    <i class="bi bi-arrow-right ms-2"></i>
                </div>
            </div>
            <!-- 折價卷圖 -->
            <div>
                <div class="d-flex flex-column  justify-content-center align-items-center">
                    <img src="images/折價卷1.png" alt="折價券圖示" id="discount-coupon-1" class="img-fluid">
                    <img src="images/折價卷2.png" alt="免運券圖示" id="discount-coupon-2" class="img-fluid">
                </div>
            </div>
        </article>
        <!-- 熱門商品 -->
        <article id="hot-product" class="py-5 bg-plum-Brown">
            <!-- 區塊標題 -->
            <div class="text-center text-plum mb-6 mt-3">
                <h2>熱門商品</h2>
            </div>
            <!-- 熱門圖 -->
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
                    <!-- 熱門圖1 -->
                    <div class="col ">
                        <div class="card h-100 ">
                            <div class="position-relative overflow-hidden">
                                <a href="Product introduction.html" title="前往商品相關資訊">
                                    <img src="images/Popular items1.jpg" class="card-img-top" alt="商品圖">
                                    <span
                                        class="position-absolute top-0 end-0 px-3 py-2 mt-1 me-3  bg-red rounded-pill">HOT
                                    </span>

                                </a>
                            </div>
                            <!-- 商品文字區  -->
                            <div class="card-body text-center">
                                <h5 class="card-title">簡約復古燈芯絲長袖上衣</h5>
                                <span class="card-text fs-3 me-2 text-red">800</span>
                                <span class="text-decoration-line-through text-grey">1000</span>
                            </div>
                        </div>
                    </div>
                    <!-- 熱門圖2 沒有同樣的高 hot沒擺對位置 -->
                    <div class="col ">
                        <div class="card h-100">
                            <div class="position-relative">
                                <a href="#" title="前往商品相關資訊">
                                    <img src="images/Popular items2.jpg" class="card-img-top" alt="商品圖2">
                                    <span
                                        class="position-absolute top-0 end-0 px-3 py-2 mt-1 me-3  bg-red rounded-pill">HOT
                                    </span>

                                </a>
                            </div>
                            <!-- 商品文字區  -->
                            <div class="card-body text-center">
                                <h5 class="card-title">經典高領保織毛衣</h5>
                                <span class="card-text fs-3 me-2 text-red">1040</span>
                                <span class="text-decoration-line-through text-grey">1300</span>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card h-100">
                            <div class="position-relative overflow-hidden">
                                <a href="#" title="前往商品相關資訊">
                                    <img src="images/Popular items3.jpg" class="card-img-top" alt="商品圖">
                                    <span
                                        class="position-absolute top-0 end-0 px-3 py-2 mt-1 me-3  bg-red rounded-pill">HOT
                                    </span>

                                </a>
                            </div>
                            <!-- 商品文字區  -->
                            <div class="card-body text-center">
                                <h5 class="card-title">溫暖羊羔絨開襟外套</h5>
                                <span class="card-text fs-3 me-2 text-red">1440</span>
                                <span class="text-decoration-line-through text-grey">1800</span>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card h-100 ">
                            <div class="position-relative overflow-hidden">
                                <a href="#" title="前往商品相關資訊">
                                    <img src="images/Popular items4.jpg" class="card-img-top" alt="商品圖">
                                    <span
                                        class="position-absolute top-0 end-0 px-3 py-2 mt-1 me-3  bg-red rounded-pill">HOT
                                    </span>

                                </a>
                            </div>
                            <!-- 商品文字區  -->
                            <div class="card-body text-center">
                                <h5 class="card-title">透氣白色長袖T</h5>
                                <span class="card-text fs-3 me-2 text-red">640</span>
                                <span class="text-decoration-line-through text-grey">800</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </article>
        <!-- 最新商品 -->
        <article id="new-products py-5">
            <!-- 區塊標題 -->
            <div class="container my-5">
                <div class="text-center text-plum mb-6 mt-4">
                    <h2>最新商品</h2>
                </div>
                <!-- 輪播圖 -->
                <div class="owl-carousel owl-theme mt-3">
                    <div class="item">
                        <img src="images/new.products1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/new.products2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/new.products3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/new.products4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="images/new.products6.jpg" id="new-products5" alt="">
                    </div>


                </div>
            </div>

        </article>
        <!-- 中間圖片間隔  -->
        <article id="news-letter" class="py-5 bg-img   " style="background-image: url(images/background1.jpg);">
            <div class="container p-5">
                <div class="row">
                    <div class="d-flex justify-content-center align-items-center">
                        <span class="text-dark fw-bold text-center fs-2">Choose what you like</span>
                    </div>
                </div>
            </div>

        </article>

        <!-- 商品列表 -->
        <article id="products-list" class="py-5">
            <div class="container my-5">
                <!-- 區塊標題 -->
                <div class="text-center text-dark mb-6 mt-3">
                    <h2>商品列表</h2>
                </div>
                <div class="row row-cols-1 row-cols-md-4 g-4">
                    <!-- 商品1 -->
                    @foreach ($merchandises as $merchandise)
                    <div class="col">
                        <div class="card h-100">
                            <a href="/merchandise/{{ $merchandise->id }}/item" title="前往商品詳細資訊">
                            <div class="overflow-hidden">
                                <img src=" {{ $merchandise->photo }}" class="card-img-top img-box object-fit-cover" alt=" {{ $merchandise->name }}">
                            </div>
                            <div class="card-body text-center">
                                <h5 class="card-title"> {{ $merchandise->name }}</h5>
                                <span class="card-text fs-3 me-2 text-red">{{ number_format($merchandise->price * 0.8, 0) }}</span>
                                <span class="text-decoration-line-through text-grey">{{ $merchandise->price }}</span>
                            </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </article>

    </main>
        @include('layouts.loginform')
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>