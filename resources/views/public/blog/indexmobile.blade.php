<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Bergerak dibidang food and beverage, merupakan jasa konsultasi bisnis di bidang kuliner untuk cafe dan menu makanan/minuman hotel serta pelatihan pengembangan sdm untuk meningkatkan efisiensi perusahaan oleh tim yang berpengalaman lebih dari 10 tahun dibidangnya pada perusahaan besar dan hotel setara bintang 4 keatas.">
    <meta name="keywords" content="jasa konsultan, konsultan bisnis kuliner, konsultan cafe, bisnis cafe, konsultan bisnis kuliner, konsultan sdm, manajemen bisnis, pelatihan dan pengembangan sdm, certified consultan, training sdm" >
    <title>Chef Gourmet Consultant - Blog</title>
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
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Blog <span class="sr-only">(current)</span></a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search">
                <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <header class="container d-flex">
        <div class="row">
            <div id="carouselExampleIndicators" class="col-md-9 h-200 carousel slide p-2" data-ride="carousel">
                <ol class="carousel-indicators">
                    @php $i = 0; @endphp
                    @foreach($featured as $sld)
                        @if($i == 0)
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="active"></li>
                        @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}"></li>
                        @endif
                    @php $i++; @endphp
                    @endforeach
                </ol>
                <div class="carousel-inner" style="border-radius:0.25rem;">
                @php $i = 0; @endphp
                @foreach($featured as $sld)
                    @if($i == 0)
                        <div class="carousel-item active">
                    @else
                        <div class="carousel-item">
                    @endif
                        <div class="w-100 h-200">
                            <img class="d-block w-100" src="@if( !filter_var($sld->image, FILTER_VALIDATE_URL)){{ Voyager::image( $sld->image ) }}@endif" alt="First slide">
                        </div>
                        <div class="carousel-caption d-none d-md-block" style="background:rgba(0,0,0,0.8)">
                          <h5>{{$sld->title}}</h5>
                        </div>
                    </div>
                @php $i++; @endphp
                @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </header>
    <div class="container mt-3">
        <div class="row">
            <section class="col-md-9">
                @foreach($posts as $post)
                    <article class="articles mb-2">
                        <a href="/post/{{$post->slug}}" class="row text-decoration-none">
                            <div class="col-4">
                                <img class="ml-2 my-2" src="@if( !filter_var($post->image, FILTER_VALIDATE_URL)){{ Voyager::image( $post->image ) }}@endif" style="width:calc(100%" class="mb-1">
                            </div>
                            <div class="col-8 py-2 pl-0 pr-3">
                                <h2 class="font-weight-bold fsize-14 mb-0">{{$post->title}}</h2>
                                <small class="font-italic font-weight-light text-muted">Posted by: 
                                @foreach($users as $user)
                                    @if($post->author_id == $user->id)
                                        {{$user->name}}
                                    @else
                                        Admin
                                    @endif
                                @endforeach
                                </small>
                            </div>
                        </a>
                    </article>
                @endforeach
                <div class="d-flex justify-content-center">{{$posts->links()}}</div>
            </section>
            <aside class="col-md-3">
                
            </aside>
        </div>
    </div>
    @include('public.footer.footermobile')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>