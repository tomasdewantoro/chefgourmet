<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Bergerak dibidang food and beverage, merupakan jasa konsultasi bisnis di bidang kuliner untuk cafe dan menu makanan/minuman hotel serta pelatihan pengembangan sdm untuk meningkatkan efisiensi perusahaan oleh tim yang berpengalaman lebih dari 10 tahun dibidangnya pada perusahaan besar dan hotel setara bintang 4 keatas.">
    <meta name="keywords" content="jasa konsultan, konsultan bisnis kuliner, konsultan cafe, bisnis cafe, konsultan bisnis kuliner, konsultan sdm, manajemen bisnis, pelatihan dan pengembangan sdm, certified consultan, training sdm" >
    <title>Chef Gourmet Consultant - {{$post->title}}</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <nav class="container navbar navbar-expand-lg navbar-dark sticky-top bg-maindark">
        <div class="logo navbar-brand"><img class="mx-0 my-0" src="{{ asset('/images/logo.png') }}" alt=""></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{URL('/post')}}">Blog <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <section class="col-md-9 p-5 bg-text mb-5">
                <img src="@if( !filter_var($post->image, FILTER_VALIDATE_URL)){{ Voyager::image( $post->image ) }}@endif" style="width:100%" class="mb-1">
                <h1 class="py-4">{{$post->title}}</h1>
                <p>{!!$post->body!!}</p>
            </section>
            <aside class="col-md-3">
                <div class="latest">
                    <h3 class="p-2 bg-text font-weight-bold">Artikel Terbaru</h3>
                    @foreach($latest as $post)
                    <article class="mb-4 bg-text">
                        <a href="/post/{{$post->slug}}">
                            <div>
                                <img src="@if( !filter_var($post->image, FILTER_VALIDATE_URL)){{ Voyager::image( $post->image ) }}@endif" style="width:100%" class="mb-1">
                            </div>
                            <div class="p-3 d-block">
                                <h5>{{$post->title}}</h5>
                            </div>
                        </a>
                    </article>
                @endforeach
                </div>
            </aside>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>