<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>TAKSI</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->

    <style {csp-style-nonce}>
        #des_about{
            font-size: 20pt;
        }

        hr.g1{
            border: 5px solid rgb(126, 106, 163);
            border-radius: 15px;
            margin-left: 150px;
            margin-right: 150px;
        }
    </style>
</head>
<body id="page-top">
    <nav class="navbar navbar-expand-md navbar-light bg-primary py-3" id="mainNav">
        <div class="container">
            <a class="text-white navbar-brand js-scroll-trigger" href="<?=base_url('/');?>"><i>TAKSI</i></a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li><a class="btn btn-primary" href="<?=base_url('/pengiriman');?>"><i>Kirim Barang</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('/cek');?>"><i>Cek Resi</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('#tentang');?>"><i>Tentang</i>
                    <li><a class="btn btn-primary" href="<?=base_url('#kontak');?>"><i>Kontak</i></a></li>
                    <li><a class="btn btn-primary" href="<?=base_url('/login');?>"><i>Login</i></a></li>
                </ul>
            </div>
        </div>
    </nav> 
    
    <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end">
                    <h1 class="text-uppercase text-white font-weight-bold"><i>TAKSI</i></h1>
                    <hr class="g1">
                </div>
                <div class="col-lg-10 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-10"><i>Dengan TAKSI Semua Terkendali</i></p>
                </div>
                
            </div>
        </div>
    </header>
    <section class="page-section bg-primary" id="about">
        <div id="tentang" class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0"></h2>
                    <img src="<?= base_url('/image/send-fast-box-delivery-4-512.png')?>" style="margin: 50px;" class="rounded float-start" alt="" width="150px" height="150px">
                    <img src="<?= base_url('/image/Group 75.png')?>" class="rounded float-start" alt="" width="70px" height="70px">
                    <img src="<?= base_url('/image/send2.png')?>" class="rounded float-start" style="margin: 50px;" alt="" width="150px" height="150px">
                    <p id="des_about" class="text-white-50 mb-100"><i>Taksi merupakan aplikasi pengantar barang tanpa kontak fisik. Aplikasi web untuk pengiriman barang sendiri bukan merupakan sebuah hal yang baru di Indonesia.</i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="mt-5">
                        <img src="<?= base_url('/image/Group 76.png')?>" style="margin: 50px;" class="rounded float-start" alt="" width="180px" height="180px">
                        <h4 class="h4 mb-1">Jika ingin mengirim barang silahkan klik tombol tersebut</h4>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 text-center">
                    <div class="mt-5">
                        <img src="<?= base_url('/image/Group 77.png')?>" style="margin: 50px;" class="rounded float-start" alt="" width="180px" height="180px">
                        <h4 class="h4 mb-1">Jika ingin terima barang silahkan klik tombol tersebut</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="bg-primary py-15">
        <div class="mt-5 pt-5 pb-5 footer">
            <div class="container">
                <div class="row">
                <div class="col-lg-5 col-xs-12 about-company">
                    <h2><i>TAKSI</i></h2>
                </div>
                <div class="col-lg-3 col-xs-12 links">
                    <h4 class="mt-lg-0 mt-sm-3">Terkait</h4>
                    <ul class="m-0 p-0">
                        - <a>Pusat Bantuan</a>
                        <br>
                        - <a>Layanan Pengantaran Untuk Bisnis</a>
                        <br>
                        - <a>Tanggung jawab dan Keselamatan</a>
                        <br>
                        - <a>Dampak Positif</a>
                        <br>
                        - <a>Paket Hemat</a>
                        <br>
                        - <a>Kode Etik</a>
                    </ul>
                </div>
                <div id="kontak" class="col-lg-4 col-xs-12 location">
                    <h4 class="mt-lg-0 mt-sm-4">More Info</h4>
                    <p></p>
                    <p class="mb-0"><i class="fa fa-phone mr-3"></i>(211) 712-192</p>
                    <p><i class="fa fa-envelope-o mr-3"></i>customer@taksi.com</p>
                </div>
                </div>
            </div>
            </div>
    </footer>
    
</body>
</html>
<!-- <script>
    (function($) {
  "use strict"; // Start of use strict

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 72)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 75
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-scrolled");
    } else {
      $("#mainNav").removeClass("navbar-scrolled");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Magnific popup calls
  $('#portfolio').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    mainClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0, 1]
    },
    image: {
      tError: '<a href="%url%">The image #%curr%</a> could not be loaded.'
    }
  });

})(jQuery); // End of use strict

var dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'))
var dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
  return new bootstrap.Dropdown(dropdownToggleEl)
})
</script> -->
<script src="js/scripts.js"></script>
<script src="https://kit.fontawesome.com/c89fc36b61.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>