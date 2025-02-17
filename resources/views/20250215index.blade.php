<!DOCTYPE html>
<html lang="zh-Hant-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LS衣服官網</title>
</head>
<!-- logo -->
<link rel="icon" href="#">
<!-- css -->
<link rel="stylesheet" href="bootstrap-5.3.3/css/bootstrap.min.css">
<link rel="stylesheet" href="fonts/icons-1.11.3/font/bootstrap-icons.css">
<!-- 頁面動態 -->
<link rel="stylesheet" href="js/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
<link rel="stylesheet" href="js/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
<!-- 自己的 -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/media.css">

<body>
    <header class="position-sticky top-0 z-3">
        <!-- nav導覽列 -->
        <nav class="navbar navbar-expand-lg bg-plum-Brown position-sticky top-0 ">
            <div class="container">
                <!-- 賣場logo -->
                <h1 class="me-0 d-block">
                    <div class="container-fluid">
                        <a class="navbar-brand col-9 me-0" href="homepage.html" title="回首頁">
                            <img class="logo-img d-md-inline-block d-none" src="images/logo.png" alt="LS衣服官網">
                            <span class=" text-light">LS官方網站</span>
                        </a>
                    </div>
                </h1>
                <!-- 導覽列  -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item ">
                            <a class="nav-link active" href="homepage.html#sale" title="前往 現在優惠">現在優惠</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="homepage.html#hot-product" title="前往 熱門商品">熱門商品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="homepage.html#new-products" title="前往 最新商品">最新商品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="homepage.html#products-list" title="前往 商品列表">商品列表</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact" title="前往 聯絡資訊">聯絡資訊</a>
                        </li>
                    </ul>
                </div>
                <!-- 登入/註冊、購物車、搜尋欄 -->
                <div class="d-flex align-items-center justify-content-end">
                    <!-- 登入/註冊 -->
                    <div class="user-sign_in me-4">
                        <a href="#" title="點擊登入" data-bs-toggle="modal" data-bs-target="#user-sign_in">
                            <i class="bi bi-person text-plum"></i>
                            <span class="text-plum">登入/註冊</span>
                        </a>
                    </div>
                    <!-- 購物車 -->
                    <div class="cart-btn">
                        <a href="cert-list.html" title="前往 我的購物車" class="position-relative">
                            <span class="text-plum p-1">購物車</span>
                        </a>
                    </div>
                    <!-- 搜尋欄 -->
                    <div class="search-button">
                        <!-- 搜尋按鈕 -->
                        <div class="search-container ">
                            <form class="d-flex" role="search">
                                <input type="text" placeholder="請輸入商品名稱" class="border-0 bg-transparent" title="請輸入商品名稱" id="for-search">
                                <button class="btn" type="button">
                                    <i class="bi bi-search border-none "></i>
                                    <span class="d-none">搜尋按鈕</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>





            </div>
        </nav>


    </header>

    <!-- 主要內容 -->
    <!-- 註冊頁面 -->
    <main>
        <article style="background-image: url(images/背景77.jpeg);">
            <div class="container">
               
                <div class="row col-lg-5 mx-auto py-5 ">
                    <h3 class="text-center my-3">會員註冊</h3>
                    <form class="row g-3 mb-2  ">
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">暱稱</label>
                            <input type="email" class="form-control" id="inputEmail4 " placeholder="請輸入暱稱">
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">帳號</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="請輸入帳號">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">密碼</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="請輸入密碼">
                        </div>
                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">確認密碼</label>
                            <input type="text" class="form-control" id="inputAddress2"
                                placeholder="請確認密碼">
                        </div>
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">電子郵件</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="請輸入電子郵件">
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">使用者類型</label>
                            <select id="inputState" class="form-select">
                                <option selected>一般用戶者</option>
                                <option>管理員</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-dark w-100">加入會員</button>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </main>


    <!-- 連結那邊還需要修改 -->
    <footer class="text-plum bg-plum-Brown py-2" id="contact">
        <div class="container ">

            <!-- 分隔線 -->
            <div class="border-line">
            </div>
            <!-- 大標題 -->
            <div class="row " id="row-footer">
                <div class="col-5">
                    <div class="mb-4">
                        <a href="homepage.html" title="前往 LS官方網站">
                            <h3 class="fw-bold text-plum">LS官方網站</h3>
                        </a>
                    </div>
                    <h6 class="mb-0 lh-lg ">
                        專為時尚愛好者打造的購物平台，專注於服飾品牌。<br>
                        我們的品牌理念是「自信穿搭，展現個性」，鼓勵每個人透過服裝展現獨一無二風格。<br>
                        無論是經典百搭款，還是引領潮流的設計單品，LS官方網站都是您提升穿搭品味的優惠選擇。</h6>

                </div>
                <div class="col  ">
                    <h3 class="fw-bold mb-4">連結</h3>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0  lh-lg ">
                        <li class="nav-item ">
                            <a class="nav-link active" href="#sale" title="前往 現在優惠">現在優惠</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#hot-product" title="前往 熱門商品">熱門商品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#new-products" title="前往 最新商品">最新商品</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#" title="前往 商品列表">商品列表</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#contact" title="前往 聯絡資訊">聯絡資訊</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h3 class="fw-bold mb-4">聯絡</h3>
                    <ul class="list-unstyled lh-lg">
                        <li>MON.~FRI. 11:30~18:00</li>
                        <li>SAT. SUN. HOLIDAY OFF</li>
                        <li>
                            <a href="https://maps.app.goo.gl/3NbTXjbcEhdwfuZGA" target="_blank"
                                title="前往 google map[另開新視窗]">
                                <span class="text-plum">地址：807高雄市三民區建工路415號</span>
                            </a>
                        </li>
                        <li>統一編號：123456789</li>
                        <li>
                            <a href=" mailto:serive@hehe.com.tw" title="聯絡信箱">
                                <span class="text-plum">LSabcdefg@gmail.com</span>
                            </a>
                        </li>


                    </ul>
                </div>

            </div>
        </div>
    </footer>



    <!-- 登入表單 -->
    <div class="modal fade" id="user-sign_in" tabindex="-1" aria-labelledby="user-sign_inLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header ">
                    <h1 class="modal-title fs-5 " id="user-sign_inLabel">會員登入</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="validationServer01" class="form-label fs-6 "><span class="fs-10">account</span>
                        </label>
                        <input type="text" class="form-control  fs-6 bg-light " id="validationServer01" value="請輸入帳號"
                            required>
                    </div>
                    <div class="mb-2">
                        <label for="validationServer02" class="form-label fs-6"><span
                                class="fs-10">password</span></label>
                        <div>
                            <input type="text" class="form-control fs-6 bg-light" id="validationServer02" value="請輸入密碼"
                                required>
                        </div>
                    </div>
                    <!-- 同意 -->
                    <div class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input is-invalid btn-dark" type="checkbox" value=""
                                id="invalidCheck3" aria-describedby="invalidCheck3Feedback" required>
                            <label class="form-check-label text-dark" for="invalidCheck3">
                                記住我
                            </label>
                        </div>
                    </div>
                    <!-- 登入 -->
                    <div class="col-12 text-center mb-2">
                        <button class="btn btn-primary w-100" type="submit">登入</button>
                    </div>
                    <!-- 註冊 -->
                    <div class="col-12 text-center mb-2">
                        <a href="sign-up.html" target="_blank" title="前往註冊[另開新視窗]" data-bs-toggle="modal"
                            data-bs-target="#sign-up">
                            <button class="btn btn-dark w-100" type="submit">註冊</button>
                        </a>
                    </div>
                    </form>
                    <div class="text-center fs-6 mb-1 p-2 text-pink">
                        <span class="small">使用其他帳號登入</span>
                    </div>
                    <!-- 社群登入 -->
                    <div class="d-flex justify-content-center align-items-between">
                        <div class="ms-3 fs-2">
                            <a href="#" target="_blank" title="前往google[另開新視窗]">
                                <span class="d-none">前往google註冊</span>
                                <i class="bi bi-google "></i>
                            </a>
                        </div>
                        <div class="ms-3 fs-2">
                            <a href="">
                                <i class="bi bi-facebook test-info"></i>
                            </a>
                        </div>
                        <div class="ms-3 fs-2">
                            <a href="">
                                <i class="bi bi-apple"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <!-- <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
    </div>






    <!-- js -->
    <script src="bootstrap-5.3.3/js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.7.1.js"></script>
    <!-- 輪播圖 -->
    <script src="js/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })

    </script>


</body>

</html>