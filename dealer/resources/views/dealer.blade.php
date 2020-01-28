<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Sistem Informasi Otomotif Motor</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Default Description">
<meta name="keywords" content="fashion, store, E-commerce">
<meta name="robots" content="*">
<link rel="icon" href="#" type="image/x-icon">
<link rel="shortcut icon" href="#" type="image/x-icon">

<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/font-awesome.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/bootstrap-select.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/revslider.css')}}" >
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/owl.theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/jquery.bxslider.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/jquery.mobile-menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/style.css')}}" media="all">
<link rel="stylesheet" type="text/css" href="{{url('user/stylesheet/responsive.css')}}" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">
</head>
<body>
<div id="page">
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index.html" title="Car HTML" class="logo">
              <div><img src="{{url('user/images/logo.png')}}" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  
                
                </div>
                <!--mini-cart-->
                <div class="collapse navbar-collapse">
                </div>
                <!--links--> 
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner"> 
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="/home"><span>Home</span></a></li>
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="/produk"><span>Product‎</span></a> </li>
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="/dealer"><span>Dealer</span></a> </li>
                    </ul>
                    <!--nav--> 
                  </div>
                </nav>
              </div>
            </div>
            
            <!--row--> 
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--container-->
  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
        <div class="page-title">
          <h2>Dealer</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="main-container col1-layout wow bounceInUp animated">     
              
         <div class="main">                     
          <div class="cart wow bounceInUp animated">
    
            <div class="table-responsive shopping-cart-tbl  container">
    <form action="#" method="post">
        <select data-width="100%" tabindex="-98" onchange="citydealer(this.value)">
                    <option value='all' selected>Pilih Provinsi</option>
                    <option value="ACEH">ACEH</option>
                    <option value="BALI">BALI</option>
                    <option value="BANTEN">BANTEN</option>
                    <option value="BENGKULU">BENGKULU</option>
                    <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                    <option value="DKI JAKARTA">DKI JAKARTA</option>
                    <option value="GORONTALO">GORONTALO</option>
                    <option value="JAMBI">JAMBI</option>
                    <option value="JAWA BARAT">JAWA BARAT</option>
                    <option value="JAWA TENGAH">JAWA TENGAH</option>
                    <option value="JAWA TIMUR">JAWA TIMUR</option>
                    <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                    <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                    <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                    <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                    <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                    <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                    <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                    <option value="LAMPUNG">LAMPUNG</option>
                    <option value="MALUKU">MALUKU</option>
                    <option value="MALUKU UTARA">MALUKU UTARA</option>
                    <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                    <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                    <option value="PAPUA">PAPUA</option>
                    <option value="PAPUA BARAT">PAPUA BARAT</option>
                    <option value="RIAU">RIAU</option>
                    <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                     <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                    <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                    <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                    <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                    <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                    <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                    <option value="SUMATERA UTARA">SUMATERA UTARA</option>
          </select>
          <select data-width="100%" tabindex="-98">
                    <option>Pilih Kota</option>
                    <option>Make 1</option>
                    <option>Make 2</option>
                    <option>Make 3</option>
          </select>     
    <input name="keywords" placeholder="Cari Nama Dealer" class="input-text required-entry validate-email" type="text" value="">
     <button type="submit" class="button" name="Search"><span class="glyphicon glyphicon-search"> <span class="sr-only">Search</span> </span></button>
    </form>
        <fieldset>
            <table id="shopping-cart-table" class="data-table cart-table table-striped">
                <thead>
                    <tr class="first last">
                        <th>No</th>
                        <th><span class="nobr">Nama Dealer</span></th>
                        <th>Alamat</th>
                        <th class="a-center"><span class="nobr">Provinsi</span></th>
                        <th class="a-center">Kab/Kota</th>
                        <th class="a-center">Telp</th>
                    </tr>
                  </thead>
                <tbody>    
                  <td>1</td>
                  <td>2 NAGA</td>
                  <td>Jl. Brigjend H Hasan Baseri 2</td>
                  <td>Kalimantan Selatan</td>
                  <td>Kota Banjarmasin</td>
                  <td> 0511 - 3305772; 3305773</td>
                  </tr>
                   <tr>
                  <td>2</td>
                  <td>54 MOTOR</td>
                  <td>Jl. Raya Sempu No. 389 RT 02 / 02</td>
                  <td>Jawa Tengah</td>
                  <td>Kab. Batang</td>
                  <td>0285-4468838</td>
                  </tr>
                  <tr>
                  <td>3</td>
                  <td>54 MOTOR</td>
                  <td>Jl. Urip Sumoharjo No. 39 RT 02 / 01</td>
                  <td>Jawa Tengah</td>
                  <td>Kab. Batang</td>
                  <td>0285-391239</td>
                  </tr>
                  <tr>
                  <td>4</td>
                  <td>54 MOTOR</td>
                  <td>Jl. Dr. Wahidin 31</td>
                  <td>Jawa Tengah</td>
                  <td>Jawa Tengah</td>
                  <td>0285-423823, 428888</td>
                  </tr>
                  <tr>
                  <td>5</td>
                  <td>54 Motor, CV</td>
                  <td>Jl.Kh. Mas Mansyur 90</td>
                  <td>JAWA TENGAH</td>
                  <td>Kota Pekalongan</td>
                  <td>0285428888</td>
                  </tr>
                  <tr>
                  <td>6</td>
                  <td>63 Motor</td>
                  <td>Jl. Wr Supratman No. 18</td>
                  <td>BALI</td>
                  <td>BULELENG</td>
                  <td>036224068</td>
                  </tr>
                  <tr>
                  <td>7</td>
                  <td>99 Jaya Motor</td>
                  <td>Jl. Raya Jompong 75</td>
                  <td>Jawa Timur</td>
                  <td>Kab. Lamongan</td>
                  <td>0322 - 661475</td>
                  </tr>
                  <tr>
                  <td>8</td>
                  <td>A Chau Motor</td>
                  <td>Jl. Raya Tumbang Titi</td>
                  <td>Kalimantan Barat</td>
                  <td>Kab. Ketapang</td>
                  <td>081345991015</td>
                  </tr>
                   <tr>
                  <td>9</td>
                  <td>A.A MOTOR</td>
                  <td>Jl. Pahlawan Wirotho Agung</td>
                  <td>JAMBI</td>
                  <td>Kab. Tebo</td>
                  <td>081274008383</td>
                  </tr>
                  <tr>
                  <td>10</td>
                  <td>AAN MOTOR</td>
                  <td>Jl. Dahlia 39</td>
                  <td>Riau</td>
                  <td>Kota Pekan Baru</td>
                  <td>08127645324</td>
                  </tr>
                </tbody>
            </table>
            
        </fieldset>
</div>
  <!-- For version 1,2,3,4,6 -->
  
  <footer> 
    <!-- BEGIN INFORMATIVE FOOTER -->
    <div class="footer-inner">
      <div class="our-features-box wow bounceInUp animated animated">
        <div class="container">
        </div>
      </div>


    <!--footer-inner-->
    
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-4">
            <div class="social">
            </div>
          </div>
          <div class="col-xs-12 col-sm-4">
          </div>
        </div>
        <div class="col-sm-12 col-xs-12 coppyright"><a target="_blank">@ 2020 Copyright: Sistem Informasi Otomotif Motor</a></div>
      </div>
    </div>
    <!-- BEGIN SIMPLE FOOTER --> 
  </footer>
  <!-- End For version 1,2,3,4,6 --> 
  	
</div>
<!--page--> 
<!-- Mobile Menu-->

    <!--newsletter--> 
    
  </div>
  <!--newsletter-sign-box--> 
</div>
<div id="fade" ></div>

<!-- JavaScript --> 
<script type="text/javascript" src="{{url('user/js/jquery.min.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/bootstrap.min.js')}}"></script> 
<script src="{{url('user/js/bootstrap-slider.min.js')}}"></script> 
<script src="{{url('user/js/bootstrap-select.min.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/parallax.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/revslider.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/common.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/jquery.bxslider.min.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/owl.carousel.min.js')}}"></script> 
<script type="text/javascript" src="{{url('user/js/jquery.mobile-menu.min.js')}}"></script> 
<script src="{{url('user/js/countdown.js')}}"></script> 
<script>
        jQuery(document).ready(function(){
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 5000,
                startwidth: 1170,
	            startheight:650,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',
                
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
            
                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,
            
                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
        </script> 
<script>
      var dthen1 = new Date("12/25/17 11:59:00 PM");
      start = "08/04/15 03:02:11 AM";
      start_date = Date.parse(start);
      var dnow1 = new Date(start_date);
      if (CountStepper > 0)
      ddiff = new Date((dnow1) - (dthen1));
      else
      ddiff = new Date((dthen1) - (dnow1));
      gsecs1 = Math.floor(ddiff.valueOf() / 1000);
      
      var iid1 = "countbox_1";
      CountBack_slider(gsecs1, "countbox_1", 1);
    </script>
    <script>
 function citydealer(province){
  $.ajax({
     url:'https://www.astra-honda.com/dealer/city'+'/'+province,
     success: function(data){

         $("#citydealer").html(data);
     }
  });
 }
</script>
</body>

</html>