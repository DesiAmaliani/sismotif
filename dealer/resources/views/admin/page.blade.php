{{-- <html lang="en">
  <head>

    <title>Sistem informasi otomatif motor (SIMOTIF)</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="css/modules/animations-extended.min.css">
    <link rel="stylesheet" type="text/css" href="css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="css/tagify.css">
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    </head>

<body class="fixed-sn grey-skin">
    <main>
        <div class="container">
          <!--Card-->
                      <div class="card card-cascade wider reverse my-4 pb-5">

                          <!--Card image-->
                          <div class="view view-cascade overlay wow fadeIn">

                              <a href="#!">
                                  <div class="mask rgba-white-slight"></div>
                              </a>
                          </div>
                          <!--/Card image-->

                          <!--Card content-->
                          <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                              <!--Title-->
                              <h4>Selamat Datang Di </h4>                          </div>
                          <!--/.Card content-->

                      </div>
                      <!--/.Card-->
        	<section class="mt-lg-5">
                <div class="row mt-5 pt-5">
                    <div class="col text-center">
                        <div class="row">


                          </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

   <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
  <script type="text/javascript" src="js/sweetalert-dev.js"></script>
  <script type="text/javascript" src="js/jquery.PrintArea.js"></script>
	<script>
        // SideNav Initialization
        $(".button-collapse").sideNav();

        var container = document.querySelector('.custom-scrollbar');
        Ps.initialize(container, {
            wheelSpeed: 2,
            wheelPropagation: true,
            minScrollbarLength: 20
        });

        // Data Picker Initialization
        $('.datepicker').pickadate();

        // Material Select Initialization
        $(document).ready(function () {
            $('.mdb-select').material_select();
        });

        // Tooltips Initialization
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
</body>
</html> --}}
<!doctype html>
<html lang="en">
  <head>

    <title>Sistem informasi otomatif motor (SIMOTIF)</title>
    <link rel="icon" href="AAA.jpeg">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/mdb.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/datatables.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/modules/animations-extended.min.css">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/print.css" media="print">
    <link rel="stylesheet" type="text/css" href="{{url('')}}/admin/css/tagify.css">
    <script type="text/javascript" src="{{url('')}}/admin/js/jquery-3.3.1.min.js"></script>
    </head>

<body class="fixed-sn grey-skin">
	<!--Main Navigation-->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-3 fixed">
            <ul class="custom-scrollbar">
            <li>
				<a class="thumbnail">
        <img class="center">
					<img class="img-fluid" class="img-fluid z-depth-4" src="AAA.jpeg" width="134px">
				</a>
            </li>
            <br><br>
            <li>
                <ul class="collapsible collapsible-accordion">

                <p align ="center" <b>  </b></p>
                	<li><a href="{{ url('/produk') }}" class="collapsible-header waves-effect"><i class="fa fa-cubes"></i> Product</a></li>
                    <li><a href="{{ url('/notifikasi') }}" class="collapsible-header waves-effect arrow-r"><i class="fa fa-cubes"></i> Notifikasi</a>
                                <li><a href="{{ url('/rr') }}" class="collapsible-header waves-effect arrow-r"><i class="fa fa-cubes"></i> Review dan Rating </a>
                        {{-- <div class="collapsible-body">
                            <ul>
                                <li><a href="#" class="waves-effect">#</a></li>
                                <li><a href="#" class="waves-effect">#</a></li>
                            </ul>
                        </div> --}}
                    {{-- </li>
                    <li><a href="#" class="collapsible-header waves-effect"></i> #</a></li>
                    <li><a href="#" class="collapsible-header waves-effect"><i class="fa fa-file"></i> #</a></li> --}}
                </ul>

            </li>
            <!--/. Side navigation links -->
            </ul>
            <div class="sidenav-bg mask-strong"></div>
        </div>
        <!--/. Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">
            <!-- SideNav slide-out button -->
            <div class="float-left">
                <a href="#" data-activates="slide-out" class="button-collapse black-text"><i class="fa fa-bars"></i></a>
            </div>
            <div class="breadcrumb-dn mr-auto">
                <p>Sistem Informasi Otomatif Motor (SIMOTIF) </p>
            </div>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
          <a class="nav-link waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <h4>Admin</h4>
          </a>
        </li>
                <li class="nav-item">
                    <a class="btn btn-outline-info btn-rounded btn-sm waves-effect waves-light" href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i> Keluar</a>
                </li>
            </ul>
            <!--/Navbar links-->
        </nav>
        <!-- /.Navbar -->

    </header>
    <!--Main Navigation-->
    <body class="fixed-sn grey-skin">
        <main>
            <div class="container">
              <!--Card-->
                          <div class="card card-cascade wider reverse my-4 pb-5">

                              <!--Card image-->
                              <div class="view view-cascade overlay wow fadeIn">

                                  <a href="#!">
                                      <div class="mask rgba-white-slight"></div>
                                  </a>
                              </div>
                              <!--/Card image-->

                              <!--Card content-->
                              <div class="card-body card-body-cascade text-center wow fadeIn" data-wow-delay="0.2s">
                                  <!--Title-->
                                  <h4>Selamat Datang Di Aplikasi Sistem Informasi Otomatif Motor (SIMOTIF) </h4>
                                <img src="{{url('user/images/8.png')}}" width="200px"></img>
                              <img src="{{url('user/images/4.png')}}" width="200px"></img>
                            <img src="{{url('user/images/s1.jpg')}}" width="200px"></img>
                          <img src="{{url('user/images/s6.jpg')}}" width="200px"></img>
                                         </div>
                              <!--/.Card content-->

                          </div>
                          <!--/.Card-->
            	<section class="mt-lg-5">
                    <div class="row mt-5 pt-5">
                        <div class="col text-center">
                            <div class="row">


                              </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>

       <script type="text/javascript" src="{{url('')}}/admin/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin/js/mdb.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin/js/popper.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin/js/sweetalert.min.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin/js/sweetalert-dev.js"></script>
      <script type="text/javascript" src="{{url('')}}/admin/js/jquery.PrintArea.js"></script>
    	<script>
            // SideNav Initialization
            $(".button-collapse").sideNav();

            var container = document.querySelector('.custom-scrollbar');
            Ps.initialize(container, {
                wheelSpeed: 2,
                wheelPropagation: true,
                minScrollbarLength: 20
            });

            // Data Picker Initialization
            $('.datepicker').pickadate();

            // Material Select Initialization
            $(document).ready(function () {
                $('.mdb-select').material_select();
            });

            // Tooltips Initialization
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        </script>
    </body>
    </html>
