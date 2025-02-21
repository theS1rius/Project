<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 購物車</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
        <article>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <!-- 左邊標題 -->
                        <div class="my-3">
                            <h3 class="fw-bold ">購物車</h3>
                        </div>
                        <!-- 送貨地址 -->
                        <div id="arrow" class="w-100 text-left mb-5">
                            <button class="btn-transparent shadow-lg rounded-pill border border-red-60 w-100">

                                <div class="d-flex ">
                                    <i class="bi bi-geo-alt px-2 my-2"></i>
                                    <p class="fw-bold mb-1 my-2">送貨地址</p>

                                </div>
                                <div class="text-left ps-4 pb-2">
                                    <span>登入/註冊以新增地址(或)查看已保存地址.</span>
                                </div>
                            </button>

                        </div>
                        <!-- 下方 -->
                        <div class=" d-flex flex-column">
                            <div
                                class="d-flex flex-column  rounded-pill bg-plum-light mb-5  shadow-lg  border border-red-60">
                                <div class="d-flex px-2 g-x-2 align-items-center ">
                                    <i class="bi bi-airplane px-2 my-2"></i>
                                    <p class="fw-bold mb-0">海外LS官方網站</p>
                                </div>
                                <button class="bg-transparent border-0 d-inline-flex ps-4 pb-2 ">
                                    <span>登入/註冊以新增地址(或)查看已保存地址.</span>
                                </button>
                            </div>
                            <!-- 商品區 -->
                            <div class=" d-flex flex-column  g-x-2">
                                <div class="card mb-3 ms-2 w-100">
                                    <div class="row g-0">
                                        <div class="col-md-4">
                                            <img src="images/Popular items1.jpg" class="img-fluid rounded-start"
                                                alt="...">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="card-body fm">
                                                <h5 class="card-title">簡約復古燈芯絲長袖上衣</h5>
                                                <div class="d-flex row">
                                                    <div class="col">
                                                        <td colspan="align-middle">
                                                            <p class="small">【尺寸】</p>
                                                            <select
                                                                class="form-select text-center border-0 border-bottom bg-transparent"
                                                                aria-label="select-list">
                                                                <!-- <option selected>請選擇</option> -->
                                                                <option value="1" selected>M</option>
                                                                <option value="2">L</option>

                                                            </select>
                                                        </td>
                                                    </div>
                                                    <div class="col">
                                                        <td colspan="align-middle">
                                                            <p class="small">【數量】</p>
                                                            <select
                                                                class="form-select text-center border-0 border-bottom bg-transparent"
                                                                aria-label="select-list">
                                                                <!-- <option selected>請選擇</option> -->
                                                                <option value="1" selected>1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>

                                                            </select>
                                                        </td>
                                                    </div>
                                                </div>
                                                <div class="p-10">
                                                    <p class="card-text fw-bold text-base text-right">$800</p>
                                                </div>
                                            </div>
                                            <div
                                                class="col-span-full flex flex-col tablet:col-span-2 tablet:self-end desktop:col-span-3">
                                                <i class="bi bi-arrow-90deg-left ps-4"></i>30天鑑賞期
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <!-- 橫向標題 -->
                        <div class="my-3 ">
                            <h3 class="fw-bold">LS官方網站 優惠</h3>
                        </div>
                        <div>
                            <button class="btn btn-transparent border bg-light w-100 shadow p-3" type="button"
                                data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                aria-controls="offcanvasRight">優惠卷</button>

                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 class="offcanvas-title" id="offcanvasRightLabel">我的優惠卷</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    尚無優惠卷
                                </div>
                            </div>
                        </div>
                        <div class="my-3 position-sticky top-120">
                            <h5 class="mt-2 ">訂單</h5>
                            <div class="card rounded-lg p-2 shadow ">

                                <div class="card-body cdbd">
                                    <h5 class="card-title fw-bold  border-bottom pb-2">小計摘要</h5>
                                    <ul class="list-unstyled lh-lg">
                                        <li class=" border-bottom pb-2">送貨<div>來自海外</div>
                                        </li>
                                        <div class="d-flex justify-content-between">
                                            <span class="totle-money">總額</span>
                                            <span>800</span>
                                        </div>
                                    </ul>
                                    <a href="#" class="btn btn-dark w-100">結帳</a>
                                </div>
                            </div>
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
