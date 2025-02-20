<div class="modal fade" id="user-sign_in" tabindex="-1" aria-labelledby="user-sign_inLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header ">
                <h1 class="modal-title fs-5 " id="user-sign_inLabel">會員登入</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
                <!-- 登入 -->
                <div class="modal-body">
                <form action=" {{ route('LoginProcess') }}" method="POST" title="前往登入/註冊頁面">
                    {{ csrf_field() }}
                    <div class="mb-2">
                        <label for="validationServer01" class="form-label fs-6 "><span class="fs-10">帳號</span>
                        </label>
                        <input type="text" name="account" class="form-control  fs-6 bg-light " id="validationServer01" placeholder="請輸入帳號" required>
                    </div>
                    <div class="mb-2">
                        <label for="validationServer02" class="form-label fs-6"><span class="fs-10">密碼</span></label>
                        <div>
                        <input type="password" name="password" class="form-control fs-6 bg-light" id="validationServer02" placeholder="請輸入密碼" required>
                        </div>
                    </div>
                    <!-- 同意 -->
                    <div class="mb-2">
                        <div class="form-check">
                            <input class="form-check-input is-invalid " type="checkbox" id="invalidCheck3" aria-describedby="invalidCheck3Feedback" >
                            <label class="form-check-label text-dark" for="invalidCheck3">
                                記住我
                            </label>
                        </div>
                    </div>
                    @if($errors->any())
                        <div class="alert alert-danger">
                            {{$errors->first()}}
                        </div>
                    @endif
                    <!-- 登入 -->
                    <div class="col-12 text-center mb-2">
                        <button class="btn btn-primary w-100" type="submit">登入</button>
                    </div>
                </form>
                <div class="col-12 text-center mb-2">
                    <form action=" {{ route('ShowRegisterForm') }}" method="GET" target="_blank" title="前往註冊[另開新視窗]" data-bs-toggle="modal" data-bs-target="#sign-up">
                        <button class="btn btn-dark w-100" type="submit">註冊</button>
                    </form>
                </div>
                </div>
            <div class="text-center fs-6 mb-1 p-2 text-pink">
                <span class="small">使用其他帳號登入</span>
            </div>
            <!-- 社群登入 -->
            <div class="d-flex justify-content-center align-items-between">
                <div class="ms-3 fs-2">
                    <a href=" {{route('redirectToProvider')}}" target="_blank" title="前往google[另開新視窗]">
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