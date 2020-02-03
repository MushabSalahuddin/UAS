<!DOCTYPE html>

<html lang="en">

<head>
  <title>Jasa Joki Mobile Legends</title>
  <script type="text/javascript" src="{{asset('chartjs/Chart.js')}}"></script>
  @include('Template.head')
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  {{-- @include('Template.sidebar-left') --}}


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
      
              <div class="collapse navbar-collapse" id="ftco-nav">
                <h4>
                  <font face='Stiletto'>
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active"><a href="{{url('/')}}" class="nav-link">Home</a></li>
                      <li class="nav-item"><a href="{{url('/list')}}" class="nav-link">List Harga</a></li>
                      <li class="nav-item"><a href="{{url('/syarat')}}" class="nav-link">Syarat dan Ketentuan</a></li>
                      <li class="nav-item"><a href="{{url('/pembayaran')}}" class="nav-link">Pembayaran</a></li>
                      <li class="nav-item"><a href="{{url('/kontak')}}" class="nav-link">Kontak</a></li>
                    </ul>
                  </font>
                </h4>
              </div>
            </div>
          </nav>
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/"><font face='sao'> Home </font></a></li>  
                    <li class="breadcrumb-item"><font face='sao'> Kontak </font></li>
                </ol>
              </div><!-- /.col -->
            </div>
          </div>  
    </div>
    <div class="col-md">
        <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Kontak Kami</h2>
            <div class="block-23 mb-3">
              <ul>
                  <div class="strong">
                    <li>Instagram : <a href="https://www.instagram.com/mushabbbb_/"><span class="icon icon-instagram"></span><span class="text"> mushabbbb_</span></a></li>
                    <li>Whatsapp :<a href="#"><span class="icon icon-whatsapp"></span><span class="text"> 0857-5199-44XX </span></a></li>
                    <li>Email :<a href="#"><span class="icon icon-gmail"></span><span class="text"> mushabsalahuddin@gmail.com </span></a></li>
                  </div>
              </ul>
            </div>
        </div>
    </div>
  </div> 
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        
      <!-- ISI HALAMAN -->
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')

</body>
</html>