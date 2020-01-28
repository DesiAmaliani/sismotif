<html lang="en">
  <head>

    <title>.......</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
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
        {{-- <img class="" class="img-fluid z-depth-4" src="AAA.jpeg" width="134px"> --}}

      </a>
          </li>
          <br><br>
          <li>
              <ul class="collapsible collapsible-accordion">

              <p align ="center"> <b> ................. </b></p>
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
                  <li><a href="#" class="collapsible-header wdaves-effect"><i class="fa fa-file"></i> #</a></li> --}}
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
              <p>........</p>
          </div>
          <ul class="nav navbar-nav nav-flex-icons ml-auto">
              <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <h4>admin</h4>
          <span class="badge red"></span> <i class="fas fa-bell"></i>
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          </a>

        </div>
      </li>
              <li class="nav-item">
                  <a class="btn btn-outline-info btn-rounded btn-sm waves-effect waves-light" href="{{ url('/logout') }}"><i class="fa fa-sign-out-alt"></i> Keluar</a>
              </li>

          </ul>
          <!--/Navbar links-->
      </nav>
      <!-- /.Navbar -->

  </header>
  <br>
  <body class="fixed-sn grey-skin">
       <main>
        <div class="container">
        <div class="card">
          <div class="card-body">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <a href="{{ url('/product') }}" class="btn btn-info">Tabel Produk</a>
                  @if(\Session::has('alert'))
                    <div class="alert alert-danger">
                        <div>{{Session::get('alert')}}</div>
                    </div>
                @endif
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                @endif
                </div>

            <form action="" class="range-field" method="post" enctype="multipart/form-data">
              @csrf
              <div class="md-form">
                <input type="text" id="nama" name="nama_produk" class="form-control" required>
                <label for="nama">Nama Produk</label>
              </div>
              <div class="md-form">
                <input type="text" id="jenis" name="jenis_produk" class="form-control" required>
                <label for="jenis">Jenis Produk</label>
              </div>
              <div class="md-form">
                <input type="text" id="spek" name="spek" class="form-control" required>
                <label for="spek">Spesifikasi Produk</label>
              </div>
              <label>Foto</label>
              <div class="md-form">
                <input type="file" name="foto1" class="form-control" onchange="tampilkanPreview(this,'liat1')" required>
                <input type="file" name="foto2" class="form-control" onchange="tampilkanPreview(this,'liat2')" required>
                <input type="file" name="foto3" class="form-control" onchange="tampilkanPreview(this,'liat3')" required>
              </div>
                <img id="liat1" width="300px"><br>
                <img id="liat2" width="300px"><br>
                <img id="liat3" width="300px"><br>
                <button class="btn btn-outline-success btn-rounded waves-effect" type="submit">Input</button>
              </form>
            </div>
            </div>
          </div>

        </div>
				  </div>
				</div>
        </div>
    </main>


    <script type="text/javascript" src="{{url('')}}/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/mdb.min.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/popper.min.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/sweetalert.min.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/sweetalert-dev.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/jquery.PrintArea.js"></script>
    <script type="text/javascript" src="{{url('')}}/admin/js/addons/datatables.min.js"></script>
             <script type="text/javascript">
             $(document).ready(function() {
               setTimeout(function() {
               // Material Design example
               $('#example').DataTable();
               $('#example_wrapper').find('label').each(function () {
               $(this).parent().append($(this).children());
               });
               $('#example_wrapper .dataTables_filter').find('input').each(function () {
               // $('input').attr("placeholder", "Search");
               // $('input').removeClass('form-control-sm');
               });
               $('#example_wrapper .dataTables_length').addClass('d-flex flex-row');
               $('#example_wrapper .dataTables_filter').addClass('md-form');
               $('#example_wrapper select').removeClass(
               'custom-select custom-select-sm form-control form-control-sm');
               $('#example_wrapper select').addClass('mdb-select');
               $('#example_wrapper .mdb-select').materialSelect();
               $('#example_wrapper .dataTables_filter').find('label').remove();
             }, 100);
             } );
           </script>

	<script>
		// $('[name=tags]').tagify();
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
    <script type="text/javascript">
function tampilkanPreview(userfile,idpreview)
{ //membuat objek gambar
  var gb = userfile.files;
  //loop untuk merender gambar
  for (var i = 0; i < gb.length; i++)
  { //bikin variabel
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    { //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      { //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>

	<script type="text/javascript">
    	(function() {
		  'use strict';
		  window.addEventListener('load', function() {
		    // Fetch all the forms we want to apply custom Bootstrap validation styles to
		    var forms = document.getElementsByClassName('needs-validation');
		    // Loop over them and prevent submission
		    var validation = Array.prototype.filter.call(forms, function(form) {
		      form.addEventListener('submit', function(event) {
		        if (form.checkValidity() === false) {
		          event.preventDefault();
		          event.stopPropagation();
		        }
		        form.classList.add('was-validated');
		      }, false);
		    });
		  }, false);
		})();
    </script>
</body>
</html>
