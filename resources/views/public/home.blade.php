<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Bergerak dibidang food and beverage, merupakan jasa konsultasi bisnis di bidang kuliner untuk cafe dan menu makanan/minuman hotel serta pelatihan pengembangan sdm untuk meningkatkan efisiensi perusahaan oleh tim yang berpengalaman lebih dari 10 tahun dibidangnya pada perusahaan besar dan hotel setara bintang 4 keatas.">
    <meta name="keywords" content="jasa konsultan, konsultan bisnis kuliner, konsultan cafe, bisnis cafe, konsultan bisnis kuliner, konsultan sdm, manajemen bisnis, pelatihan dan pengembangan sdm, certified consultan, training sdm" >
    <title>Chef Gourmet Consultant - Konsultasi Bisnis Kuliner</title>
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
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="logo navbar-brand"><img class="mx-0 my-0" src="{{ asset('/images/logo.png') }}" alt=""></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 pr-3 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{URL('/post')}}">Blog</a>
            </li>
            </ul>
        </div>
    </nav>
    <header class="vh-100 position-relative overflow-hidden container-fluid">
        <div class="zindex-2 d-flex position-relative text-color col-md-6 ml-5 align-items-center header-text">
            <div>
                <h1 class="primary-font display-2">Food and Beverage <br/>Consultant</h1>
                <h2 class="font-italic">Dengan pengalaman lebih dari 10 tahun di lingkup restoran dan cafe dari bintang tiga sampai lima bertaraf internasional.</h2>
                <a href="#paket" class="btn-round bg-highlight text-dark font-weight-bold d-inline-block mt-3">Lihat Paket</a>
            </div>
        </div>
        <div class="home-header vh-100 w-100"></div>
    </header>
    <div id="pizza" class="pizza"></div>
    <section id="experience" class="container section-space">
        <div class="row zindex-2">
            <div class="offset-md-1 col-md-11 section-space">
                <h2 class="primary-font display-4 mb-5">Experience</h2>
            </div>
            <div class="offset-md-1 col-md-6">
                <ul class="experiences">
                    <li>AIDA Cruiseline</li>
                    <li>Sheraton Hotel & Tower Jakarta</li>
                    <li>Ocean Tanker Singapore</li>
                    <li>Pangansari Utama (Freeport Project)</li>
                    <li>Cabinet Coffee Surabaya</li>
                    <li>Imbistube Jakarta</li>
                </ul>
            </div>
            <div class="col-md-5">
                <div class="experience-b position-absolute shadow"></div>
                <div class="experience-a position-absolute shadow"></div>
            </div>
        </div>
    </section>
    <div id="foods" class="foods overflow-hidden"><div></div></div>
    <section class="container section-space">
        <div class="row">
            <div class="offset-md-1 col-md-11 section-space">
                <h2 class="primary-font display-4 mb-5">Our Clients</h2>
            </div>
        </div>
        <div class="gallery" id="gallery">
            <div>
                <img src="{{ asset('/images/canoe-cofe.jpg') }}" width="100%" alt="">
                <div class="image-text">Canoe Coffee, Surabaya</div>
            </div>
            <div>
                <img src="{{ asset('/images/prague.jpg') }}" width="100%" alt="">
                <div class="image-text">Prague Coffee & Eatery, Madiun</div>
            </div>
            <div>
                <img src="{{ asset('/images/kontjo-lawas.jpg') }}" width="100%" alt="">
                <div class="image-text">Kontjo Lawas, Mojokerto</div>
            </div>
            <div>
                <img src="{{ asset('/images/item-kopi.jpg') }}" width="100%" alt="">
                <div class="image-text">Item Kopi, Ponorogo</div>
            </div>
            <div>
                <img src="{{ asset('/images/kabinet-coffee.jpg') }}" width="100%" alt="">
                <div class="image-text">Kabinet Coffee, Surabaya</div>
            </div>
        </div>
    </section>
    <div class="fruitdrink"></div>
    <section class="container section-space">
        <div class="row">
            <div class="offset-md-1 col-md-11 section-space">
                <h2 class="primary-font display-4 mb-5">Our Team</h2>
            </div>
            <div class="offset-md-1 col-md-3 text-center">
                <img class="mb-3" src="{{ asset('/images/teguh.png') }}" width="100%" alt="">
                <h3 class="primary-font">Teguh B. Utomo</h3>
                <p class="font-italic font-weight-light">Professional Chef | F&B Consultant</p>
            </div>
            <div class="offset-md-1 col-md-6 mb-5 overflow-auto height-325">
                <p>Dengan pengalaman selama 7 tahun sebagai seorang Chef di Cruiseline membuatnya memahami seluk beluk dunia F&B mulai dari production, service dan management.</p>
                <p>Berbagai event dalam lingkup instansi pemerintahan hingga kenegaraan pernah ia handle dengan baik. Kemampuannya di bidang kuliner ini juga ia tuangkan dalam Chef Gourmet F&B Consultant untuk membantu setiap pelaku bisnis kuliner dapat menjalankan bisnisnya secara excellence.</p>
                <p>Adapun beberapa pendidikan yang pernah ia tempuh dalam dunia F&B diantaranya:</p>
                <ul>
                    <li>2005-2009 Berlian Tourism Institute Bogor : Food Production Management</li>
                    <li>2005 : Basic Training Pastry from Bogasari</li>
                    <li>2011 : Food Hygiene from from Focus Maritime Training Centre (ISO 2200)</li>
                    <li>2011 : Basic Safety Training from Focus Maritime Training Centre</li>
                </ul>
            </div>
        </div>
    </section>

    <div class="kayumanis overflow-hidden"><div></div></div>
    <div class="merica"></div>

    <section class="container section-space">
        <div class="row">
            <div class="col-md-12">
                <h2 id="paket" class="text-center primary-font display-3 mb-5">Paket Consultant</h2>
            </div>
            <div class="col-md-12 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 01. Start Up!</h2>
            </div>
            <div class="col-md-8 offset-md-2">
                <ul>
                    <li>Menentukan konsep menu makanan dan minuman</li>
                    <li>Membuat HPP receipe baku dan penentuan harga jual</li>
                    <li>Recruitment karyawan produksi</li>
                    <li>Penentuan Equipment dan Utensil Kitchen</li>
                    <li>Memberikan informasi data supplier</li>
                    <li>Tes produk makanan dan minuman (material dibebankan pada customer)</li>
                    <li>Pembuatan 30 food receipes & 25 beverages receipes</li>
                    <li>Training penyimpanan bahan baku dan plating</li>
                    <li>Pendampingan selama 2 bulan sampai Grand Opening</li>
                    <li>Recruitment frontliner</li>
                    <li>Training frontliner (Standart SOP bintang 5) yang meliputi Grooming, Up Selling, Product Knowledge, Standart Service, etc</li>
                    <li>Pendampingan bisnis dan konsultasi selama 2 bulan setelah Grand Opening</li>
                    <li>Manager in charge 2 bulan</li>
                    <li>Jasa design interior (jika menggunakan jasa kontraktor)</li>
                </ul>
            </div>
            <div class="offset-md-2 col-md-4">
                <ul>
                    <li>Digital marketing strategy</li>
                    <li>Foto & video product</li>
                    <li>Content social media</li>
                    <li>Optimasi media sosial beserta iklan selama 3 bulan awal</li>
                    <li>Brand identity dan logo</li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul>
                    <li>Training & Coaching untuk SDM</li>
                    <li>Leader as Coach</li>
                    <li>Uplifting Service Excellence</li>
                    <li>Engagement & Team Work Building</li>
                </ul>
            </div>

            <div class="col-md-6 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 02</h2>
            </div>
            <div class="col-md-6 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 03</h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Menentukan konsep menu makanan dan minuman</li>
                    <li>Membuat HPP receipe baku dan penentuan harga jual</li>
                    <li>Recruitment karyawan produksi</li>
                    <li>Penentuan Equipment dan Utensil Kitchen</li>
                    <li>Memberikan informasi data supplier</li>
                    <li>Tes produk makanan dan minuman (material dibebankan pada customer)</li>
                    <li>Pembuatan 30 food receipes & 25 beverages receipes</li>
                    <li>Training penyimpanan bahan baku dan plating</li>
                    <li>Pendampingan selama 2 bulan sampai Grand Opening</li>
                </ul>
            </div>

            <div class="col-md-6">
                <ul>
                    <li>Mendapat semua paket 02</li>
                    <li>Recruitment frontliner</li>
                    <li>Training frontliner (Standart SOP bintang 5) yang meliputi Grooming, Up Selling, Product Knowledge, Standart Service, etc</li>
                    <li>Pendampingan bisnis dan konsultasi selama 2 bulan setelah Grand Opening</li>
                    <li>Manager in charge 2 bulan</li>
                    <li>Jasa design interior (re layout area siting-sport area baru dan kichen)</li>
                </ul>
            </div>

            <div class="col-md-6 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 04</h2>
            </div>
            <div class="col-md-6 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 05. Customize</h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Desain Website</li>
                    <li>Foto & Video Product</li>
                    <li>Content Social Media</li>
                    <li>Optimasi Social Media dan Iklan di Social Media selama 3 bulan awal</li>
                    <li>Brand Identity dan Logo</li>
                    <li>Desain buku menu</li>
                </ul>
            </div>

            <div class="col-md-6">
                <div class="col-md-8 offset-md-2 text-center">
                    <p>Paket yang dapat disesuaikan dengan kebutuhan dan keadaan bisnis Anda ini juga merupakan program unggulan kami. Dan kami bantu Anda dalam menentukan desain program yang sesuai</p>
                </div>
            </div>

            <div class="col-md-12 text-center section-space">
            </div>
        </div>
    </section>

    @include('public.footer.footer')

    <script src="{{ mix('js/app.js') }}"></script>
    <script>
    fbq('track', 'ViewContent');
    </script>      
</body>
</html>