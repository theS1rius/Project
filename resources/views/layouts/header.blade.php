<header class="position-sticky top-0 z-3">
    <!-- nav導覽列 -->
    <nav class="navbar navbar-expand-lg bg-plum-Brown position-sticky top-0 ">
        <div class="container">
            <!-- 賣場logo -->
            <h1 class="me-0 d-block">
                <div class="container-fluid">
                    <a class="navbar-brand col-9 me-0" href="{{ route('indexPage') }}" title="回首頁">
                        <img class="logo-img d-md-inline-block d-none" src="{{ asset('images/logo.png') }}" alt="LS衣服官網">
                        <span class=" text-light">LS官方網站</span>
                    </a>
                </div>
            </h1>
            <!-- 導覽列  -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
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
                        <a class="nav-link active" href="#products-list" title="前往 商品列表">商品列表</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#contact" title="前往 聯絡資訊">聯絡資訊</a>
                    </li>
                </ul>
            </div>
            <!-- 登入/註冊、購物車、搜尋欄 -->
            <div class="d-flex align-items-center justify-content-end">
                <!-- 登入/註冊 -->
                @if (Auth::check())
                    <div class="user-sign_in me-4">
                        <span style="color: aliceblue">@php echo Auth::user()->name . " 您好！"; @endphp</span>
                        <a href="{{ route('Logout') }}" title="登出">
                            <i class="bi bi-person text-plum"></i>
                            <span class="text-plum">登出</span>
                        </a>
                    </div>
                @else
                <div class="user-sign_in me-4">
                    <a href="#user-sign_in" title="點擊登入" data-bs-toggle="modal">
                        <i class="bi bi-person text-plum"></i>
                        <span class="text-plum">登入/註冊</span>
                    </a>
                </div>
                @endif
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

