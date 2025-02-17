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
        {{-- <main>
            <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach($Merchandises as $Merchandise)
                <div class="col">
                    <div class="card h-100">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Name:{{$Merchandise->name}}</h5>
                            <p class="card-text">Price:{{$Merchandise->price}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            {{ $Merchandises->links("vendor.pagination.bootstrap-5") }}
        </main> --}}
        <main>
        </main>
        @include('layouts.loginform')
        @include('layouts.footer')
        @include('layouts.script')
    </body>
</html>