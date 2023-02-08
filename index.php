<?php
require 'fungsi.php';
$t = date('M-Y');
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="shortcut icon" href="assets/img/favicon.png" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/styles.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

        <title>SSCI2</title>
        <style>
            #homeImg{
                position: absolute;
                width: 100%;
                height: 100vh;
                background: url(assets/img/home1.jpg);
                background-size: 160%;
                background-position: center;
                background-attachment: fixed;
            }
            @media screen and (max-width: 767px) {
                #homeImg{
                    position: absolute;
                    width: 100%;
                    height: 100vh;
                    background: url(assets/img/home2x.jpg);
                    background-size: 100%;
                    background-attachment: fixed;
                }
            }
        </style>
    </head>
    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">SSCIntersolusi</a>
                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Beranda</a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#about" class="nav__link">Promo</a>
                        </li> -->
                        <li class="nav__item">
                            <a href="#program" class="nav__link">Program</a>
                        </li>
                        <!-- <li class="nav__item">
                            <a href="#place" class="nav__link">Tentor</a>
                        </li> -->

                        <li class="nav__item">
                            <a href="login/index.php" class="nav__link">Login</a>
                        </li>
                    </ul>

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home wow zoomIn" id="home">
               <!--  <img src="assets/img/home1.jpg" alt="" class="home__img"> -->
               <div id="homeImg"></div>
                <div class="home__container container grid">
                    <div class="home__data">
                <img src="assets/img/ssci2.png" width="150px">
                        <h2 class="home__data-subtitle">SSCI adalah bimbingan belajar yang mengusung pola</h2>
                        <h1 class="home__data-title"><b>The Basic Concept </b></h1>
                        <h2 class="home__data-subtitle">Siswa diharap benar benar siap untuk model soal apapun</h2>
                        <a href="explorasi/index.html" class="button">Explorasi</a>
 "" 
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    <div class="home__info">
                        <div>
                            <span class="home__info-title"> 3 Tawaran Menarik</span>
                            <a href="promo/index.html" class="button button--flex button--link home__info-button">
                                Lagi <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>

                        <div class="home__info-overlay">
                            <img src="assets/img/home2.jpg" alt="" class="home__info-img">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id=" ">
                <div class="about__container container grid">
                    <div class="about__data">
                        <h2 class="section__title about__title">Informasi lebih lanjut <br> Tentang SSCI</h2>
                        <p class="about__description">Anda dapat menemukan pilihan yang menyenangkan ditempat terbaik, harga dengan diskon khusus. Anda memilih dan menentukan pilihan, kami akan memandu sepanjang pembelajaran.
                        </p>
                        <!-- <a href="#" class="button">Pesan tempat</a> -->
                        <a href="card/index.html"><span>Testimoni</span></a>
                    </div>

                    <div class="about__img">
                        <div class="about__img-overlay">
                            <img src="assets/img/about1.jpg" alt="" class="about__img-one">
                        </div>

                        <div class="about__img-overlay">
                            <img src="assets/img/about2.jpg" alt="" class="about__img-two">
                        </div>
                    </div>
                </div>
            </section>
            
            
            <!--==================== EXPERIENCE ====================-->
            <section class="experience section">
                <h2 class="section__title">Dengan Pengalaman Kami <br> Kami Akan Membantu Anda</h2>

                <div class="experience__container container grid">
                    <div class="experience__content grid">
                        <div class="experience__data">
                            <h2 class="experience__number">25</h2>
                            <span class="experience__description">Tahun <br> Pengalaman</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">40000+</h2>
                            <span class="experience__description">Siswa <br> Bersama Kami</span>
                        </div>

                        <div class="experience__data">
                            <h2 class="experience__number">10+</h2>
                            <span class="experience__description">Universitas <br> Ternama Indonesia</span>
                        </div>
                    </div>

                    <div class="experience__img grid">
                        <div class="experience__overlay">
                            <img src="assets/img/ssci.jpg" alt="" class="experience__img-one">
                        </div>
                        
                        <div class="experience__overlay">
                            <img src="assets/img/about1.jpg" alt="" class="experience__img-two">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VIDEO ====================-->
            <section class="video section" id="">
                <h2 class="section__title">Video SSCIntersolusi</h2>

                <div class="video__container container">
                    <p class="video__description">Cari tahu lebih lanjut dengan video kami yang paling asik dan
                        tempat yang menyenangkan untuk anda dan teman-teman.
                    </p>

                    <div class="video__content">
                        <video id="video-file">
                            <source src="assets/video/video.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
                </div>
            </section>

            <!--==================== PLACES ====================-->
            <section class="place section" id="program">
                <h2 class="section__title">Pilih Level Mu</h2>

                <div class="place__container container grid">
                    <!--==================== PLACES CARD 1 ====================-->
                    <div class="place__card">
                        <img src="assets/img/sd.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                               <!--  <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span> -->
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">SD</h3>
                                <span class="place__subtitle">6 Pilihan</span>
                                <span class="place__price">Mulai 3000k</span>
                            </div>
                        </div>
                        <a href="pendaftaran/sd.php">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        </a>
                    </div>

                    <!--==================== PLACES CARD 2 ====================-->
                    <div class="place__card">
                        <img src="assets/img/smp.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <!-- <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">5,0</span> -->
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">SMP</h3>
                                <span class="place__subtitle">6 Pilihan</span>
                                <span class="place__price">Mulai 3500k</span>
                            </div>
                        </div>
                        <a href="pendaftaran/smp.php">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        </a>
                    </div>

                    <!--==================== PLACES CARD 3 ====================-->
                    <div class="place__card">
                        <img src="assets/img/sma.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <!-- <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,9</span> -->
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">SMA</h3>
                                <span class="place__subtitle">8 Pilihan</span>
                                <span class="place__price">Mulai 1500K</span>
                            </div>
                        </div>
                        <a href="pendaftaran/sma.php">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        </a>
                    </div>

                    <!--==================== PLACES CARD 4 ====================-->
                    <div class="place__card">
                        <img src="assets/img/alumni.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                                <!-- <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span> -->
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Alumni</h3>
                                <span class="place__subtitle">Kesepakatan</span>
                                <span class="place__price">Mulai 500k</span>
                            </div>
                        </div>
                        <a href="pendaftaran/alumni.php">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        </a>
                    </div>

                    <!--==================== PLACES CARD 5 ====================-->
                    <div class="place__card">
                        <img src="assets/img/privat.jpg" alt="" class="place__img">
                        
                        <div class="place__content">
                            <span class="place__rating">
                               <!--  <i class="ri-star-line place__rating-icon"></i>
                                <span class="place__rating-number">4,8</span> -->
                            </span>

                            <div class="place__data">
                                <h3 class="place__title">Privat</h3>
                                <span class="place__subtitle">Kesepakatan</span>
                                <span class="place__price">Mulai 500k</span>
                            </div>
                        </div>
                        <a href="pendaftaran/privat.php">
                        <button class="button button--flex place__button">
                            <i class="ri-arrow-right-line"></i>
                        </button>
                        </a>
                    </div>
                </div>
            </section>


<!--==================== DISCOVER ====================-->
           <!--  <section class="discover section" id="discover">
                <h2 class="section__title">Temukan dan Pilih <br> Tentor Tentor Terbaik</h2>
                
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper"> -->
                        <!--==================== DISCOVER 1 ====================-->
                        <!-- <div class="discover__card swiper-slide">
                            <img src="assets/img/satu.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Bali</h2>
                                <span class="discover__description">24 tours available</span>
                            </div>
                        </div> -->

                        <!--==================== DISCOVER 2 ====================-->
                        <!-- <div class="discover__card swiper-slide">
                            <img src="assets/img/dua.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Hawaii</h2>
                                <span class="discover__description">15 tours available</span>
                            </div>
                        </div> -->

                        <!--==================== DISCOVER 3 ====================-->
                       <!--  <div class="discover__card swiper-slide">
                            <img src="assets/img/tiga.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Hvar</h2>
                                <span class="discover__description">18 tours available</span>
                            </div>
                        </div> -->

                        <!--==================== DISCOVER 4 ====================-->
                        <!-- <div class="discover__card swiper-slide">
                            <img src="assets/img/empat.jpg" alt="" class="discover__img">
                            <div class="discover__data">
                                <h2 class="discover__title">Whitehaven</h2>
                                <span class="discover__description">32 tours available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!--==================== SUBSCRIBE ====================-->
            <section class="subscribe section">
                <div class="subscribe__bg">
                    <div class="subscribe__container container">
                        <h2 class="section__title subscribe__title">Daftar segera <br></h2>
                        <p class="subscribe__description">dan Dapatkan Special Diskon Hingga 30%.
                        </p>
    
                        <form action="" class="subscribe__form">
                            <input type="text" placeholder="Enter email" class="subscribe__input">
    
                            
<a href="mailto:feriantotri@gmail.com" title="kirim email ke Admin">
                            <button class="button">
                                 
                                    kirim
                            </button>
                            </a>
                        </form>
                    </div>
                </div>
            </section>
            
            <!--==================== SPONSORS ====================-->
            <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/ugm.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/itb.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/ui.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/ipb.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/its.png" alt="" class="sponsor__img">
                    </div>
                </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">SSCIntersolusi</h3>
                        <p class="footer__description">Pilih Kelas Anda <br> dapatkan nilai lebihmu <br> Kami Tawarkan Keberhasilanmu.
                        </p>
                        <div>
                            <a href="https://www.facebook.com/" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Kami</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Inilah Kami</a>
                            </li>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Kelebihan Kami</a>
                            </li>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Testimoni</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                       <!--  <h3 class="footer__subtitle">Company</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="" class="footer__link">Team</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Plan y Pricing</a>
                            </li>
                            <li class="footer__item">
                                <a href="" class="footer__link">Become a member</a>
                            </li>
                        </ul> -->
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Dukungan</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Pertanyaan</a>
                            </li>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Pusat Dukungan</a>
                            </li>
                            <li class="footer__item">
                                <a href="assets/anime.html" class="footer__link">Hubungi kami</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    
                    <div class="footer__terms">
                     <p class="footer__copy">&#169; 2022 SSCIntersolusi. All rigths reserved.</p>   
                    </div>
                </div>
            </div>
        </footer>

         <!--========== SCROLL UP ==========-->
        <a href="#" class="scrollup" id="scroll-up">
            <i class="ri-arrow-up-line scrollup__icon"></i>
        </a>

        <!--=============== SCROLL REVEAL===============-->
        <script src="assets/js/scrollreveal.min.js"></script>
        
        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/main.js"></script>

        
<script src="wow.min.js"></script>
  <script>
  new WOW().init();
  </script>
    </body>
</html>