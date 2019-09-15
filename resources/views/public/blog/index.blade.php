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
    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '630192937503542');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=630192937503542&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    
  
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
            <div id="carouselExampleIndicators" class="col-md-9 h-428 carousel slide p-2" data-ride="carousel">
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
                        <div class="w-100 h-428">
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
            <img class="p-2" style="border-radius:5px" src="https://dummyimage.com/265x430/1f2022/ffffff" alt="">
            <!--
            <div class="list-group col-md-3 p-2 h-428 overflow-auto bg-maindark">
            @foreach($featured as $feat)
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start bg-text hl-bg-text">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$feat->title}}</h5>
                        <small>{{$feat->category_id}}</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                    <small>Posted by: 
                    @foreach($users as $user)
                        @if($feat->author_id == $user->id)
                            {{$user->name}}
                        @else
                            Admin
                        @endif
                    @endforeach
                    </small>
                </a>
            @endforeach
            </div>
        -->
        </div>
    </header>
    <div class="container mt-3 mb-5">
        <div class="row">
            <section class="col-md-9">
                @foreach($posts as $post)
                    <article class="articles mb-4">
                        <a href="/post/{{$post->slug}}" class="row text-decoration-none">
                            <div class="col-4">
                                <img src="@if( !filter_var($post->image, FILTER_VALIDATE_URL)){{ Voyager::image( $post->image ) }}@endif" style="width:100%" class="mb-1">
                            </div>
                            <div class="col-8 p-3">
                                <h2 class="font-weight-bold">{{$post->title}}</h2>
                                <small class="font-italic font-weight-light text-muted">Posted by: 
                                @foreach($users as $user)
                                    @if($feat->author_id == $user->id)
                                        {{$user->name}}
                                    @else
                                        Admin
                                    @endif
                                @endforeach
                                </small>
                                <p class="pr-3">{{str_limit($post->excerpt, 100)}}</p>
                            </div>
                        </a>
                    </article>
                @endforeach
                {{$posts->links()}}
            </section>
            <aside class="col-md-3">
                
            </aside>
        </div>
    </div>
    @include('public.footer.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>