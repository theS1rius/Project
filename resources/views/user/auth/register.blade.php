<!DOCTYPE html>
<html lang="zh-Hant">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @include('layouts.head')

        <title>官網 | 註冊會員</title>
    </head>
    <body>
        @include('layouts.header')
        <main>
            <article style="background-image: url('{{ asset('images/背景77.jpeg') }}');">
                <div class="container">
                    <div class="row col-lg-5 mx-auto py-5 ">
                        <h3 class="text-center my-3">會員註冊</h3>
                        <form class="row g-3 mb-2  " action="{{ route('RegisterProcess') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="inputEmail4" name="name" placeholder="請輸入姓名" value="{{ old('name') }}" required>
                                @error('name')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">帳號</label>
                                <input type="text" class="form-control" id="inputPassword4" name="account" placeholder="請輸入帳號" value="{{ old('account') }}" required>
                                @error('account')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                                @error('account_used')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">密碼</label>
                                <input type="password" class="form-control" id="inputAddress" name="password" placeholder="請輸入密碼" value="{{ old('password') }}" required>
                                @error('password')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="inputAddress2" class="form-label">確認密碼</label>
                                <input type="password" class="form-control" id="inputAddress2" name="password_confirmation" placeholder="請確認密碼" value="{{ old('password_confirmation') }}" required>
                                @error('password_confirmation')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="inputCity" class="form-label">電子郵件</label>
                                <input type="email" class="form-control" id="inputCity" name="email" placeholder="請輸入電子郵件" value="{{ old('email') }}"  required>
                                @error('email')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                                @error('email_used')
                                    <div class="alert alert-danger py-1 my-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">使用者類型</label>
                                <select id="inputState" class="form-select">
                                    <option value="G" selected>一般用戶</option>
                                    <option value='A'>管理員</option>
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
        @include('layouts.loginform')
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>
