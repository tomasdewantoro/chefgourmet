<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chef Gourmet Consultant - Konsultasi Bisnis Kuliner</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header class="vh-100 position-relative overflow-hidden container-fluid">
        <div class="logo zindex-fixed"><img src="{{ asset('/images/logo.png') }}" alt=""></div>
        <div class="zindex-2 d-flex position-relative text-color col-md-6 ml-5 align-items-center header-text">
            <div>
                <h1 class="primary-font display-2">Food and Beverage <br/>Consultant</h1>
                <h2 class="font-italic">Dengan pengalaman lebih dari 10 tahun di lingkup restoran dan cafe dari bintang tiga sampai lima bertaraf internasional.</h2>
                <span class="btn-round bg-highlight text-dark font-weight-bold d-inline-block mt-3">Lihat Paket</span>
            </div>
        </div>
        <div class="home-header vh-100 w-100"></div>
    </header>
    <div class="pizza"></div>
    <section class="container section-space">
        <div class="row">
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
    <div class="foods overflow-hidden"><div></div></div>
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
                <img src="{{ asset('/images/prague.png') }}" width="100%" alt="">
                <div class="image-text">Prague Coffee & Eatery, Madiun</div>
            </div>
            <div>
                <img src="{{ asset('/images/kontjo-lawas.png') }}" width="100%" alt="">
                <div class="image-text">Kontjo Lawas, Mojokerto</div>
            </div>
            <div>
                <img src="{{ asset('/images/item-kopi.png') }}" width="100%" alt="">
                <div class="image-text">Item Kopi, Ponorogo</div>
            </div>
            <div>
                <img src="{{ asset('/images/kabinet-coffee.png') }}" width="100%" alt="">
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
            <div class="offset-md-1 col-md-6 mb-5">
                <p>Dengan pengalaman selama 7 tahun sebagai seorang Chef di Cruiseline membuatnya memahami seluk beluk dunia F&B mulai dari production, service dan management.</p>
                <p>Berbagai event dalam lingkup instansi pemerintahan hingga kenegaraan pernah ia handle dengan baik. Kemampuannya di bidang kuliner ini juga ia tuangkan dalam Chef Gourmet F&B Consultant untuk membantu setiap pelaku bisnis kuliner dapat menjalankan bisnisnya secara excellence.</p>
                <p>Adapun beberapa pendidikan yang pernah ia tempuh dalam dunia F&B diantaranya:</p>
                <ul>
                    <li>2005-2009 AKPAR NHI Bandung : Food Production Management</li>
                    <li>2005 : Basic Training Pastry from Bogasari</li>
                    <li>2011 : Food Hygiene from from Focus Maritime Training Centre (ISO 2200)</li>
                    <li>2011 : Basic Safety Training from Focus Maritime Training Centre</li>
                </ul>
            </div>


            <div class="offset-md-1 col-md-6 mt-5">
                <p>Menjalani karir sebagai seorang professional trainer dan coach sejak tahun 2010. Kecintaannya terhadap dunia perilaku manusia (human behavior) mengantarkannya pada pembelajaran seperti Neuro-Linguistic Programming, Psychology Positive, Design Human Engineering, Hypnotherapy dan teknologi pikiran (mind technology) terkini. Selain kesibukannya sebagai seorang trainer dan coach, ia juga pernah menjadi Head HRD di salah satu perusahaan start up.</p>
                <p>Hingga saat ini telah tercatat lebih dari 5 Kementerian RI, lebih dari 60 perusahaan dalam skala nasional hingga multi nasional, BUMN dan organisasi-organisasi besar di Indonesia pernah ia bantu dalam proses pengembangan SDM yang lebih baik.</p>
                <p>Beberapa pelatihan dengan sertifikasi yang pernah diikutinya baik dalam skala nasional maupun internasional diantaranya:</p>
                <ul>
                    <li>Certified NLP Practitioner from NFNLP, Florida-USA</li>
                    <li>Certified NNLP Practitioner from Neo NLP Society</li>
                    <li>Certified NNLP Master Practitioner from Neo NLP Society</li>
                    <li>Certified NNLP Trainer from Neo NLP Society</li>
                    <li>Certified NNLP Master Trainer from Neo NLP Society</li>
                    <li>Certified NLP CoachTM from NLP Coach Association</li>
                    <li>Certified NLP Coach Trainer from NLP Coach Association</li>
                    <li>Certified Neuro Powerfull Communication Skill from HRNLP Indonesia</li>
                    <li>Certified Neuro Powerfull Performance Improvement from HRNLP Indonesia</li>
                    <li>Certified Competence as Communicator from HRNLP Indonesia</li>
                    <li>Certified Hypnotist from The Indonesian Board of Hypnotherapy</li>
                    <li>Certified Hypnotherapist from The Indonesian Board of Hypnotherapy</li>
                    <li>Certified Instructor from The Indonesian Board of Hypnotherapy</li>
                    <li>Certified Hypnosis in History from American Hypnosis Association</li>
                    <li>Qualified Hypnotist from American Alliance of Hypnotist</li>
                </ul>
            </div>
            <div class="offset-md-1 col-md-3 text-center mt-5">
                <img class="mb-3" src="{{ asset('/images/idrus.png') }}" width="100%" alt="">
                <h3 class="primary-font">Idrus Putra</h3>
                <p class="font-italic font-weight-light">Human Development Specialist | G-Trainer | NLP Life Coach | HR Consultant</p>
            </div>
        </div>
    </section>

    <div class="kayumanis overflow-hidden"><div></div></div>
    <div class="merica"></div>

    <section class="container section-space">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center primary-font display-3 mb-5">Paket Consultant</h2>
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
                <h2 class="primary-font paket-const text-dark">Paket 02. People Development</h2>
            </div>
            <div class="col-md-6 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 03. Brand Activation</h2>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>Training & Coaching untuk SDM</li>
                    <li>Leader as Coach</li>
                    <li>Uplifting Service Excellence</li>
                    <li>Engagement & Team Work Building</li>
                </ul>
            </div>

            <div class="col-md-6">
                <ul>
                    <li>Digital marketing strategy</li>
                    <li>Foto & video product</li>
                    <li>Content social media</li>
                    <li>Optimasi media sosial beserta iklan selama 3 bulan awal</li>
                    <li>Brand identity dan logo</li>
                </ul>
            </div>

            <div class="offset-md-2 col-md-8 mt-5 mb-2 text-center">
                <h2 class="primary-font paket-const text-dark">Paket 04. Customize</h2>
            </div>
            <div class="col-md-8 offset-md-2 text-center">
                <p>Paket yang dapat disesuaikan dengan kebutuhan dan keadaan bisnis Anda ini juga merupakan program unggulan kami. Dan kami bantu Anda dalam menentukan desain program yang sesuai</p>
            </div>

            <div class="col-md-12 text-center section-space">
                <h6>CONTACT US NOW :</h6>
                <p>JL. ASEM JAYA VII NO.3 SURABAYA, JAWA TIMUR</p>
                <p>0812 7689 1513</p>
            </div>

            <img src="{{ asset('/images/map.png') }}" width="100%" alt="">
            <footer class="container">
                <span class="text-center font-italic font-weight-light">Gourmet Chef © 2019.All right reserved. Developed by <a target="_blank" href="https://codein.id" class="text-color font-weight-bold">Codein.ID</a></span>
            </footer>
        </div>
    </section>


    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>