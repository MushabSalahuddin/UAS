<!DOCTYPE html>

<html lang="en">

<head>
  <title>Jasa Joki Mobile Legends</title>
  <script type="text/javascript" src="{{asset('chartjs/Chart.js')}}"></script>
  @include('Template.head')
</head>
<style type="text/css">

  .lapis {
  width: 100%;
  height:7%;
  background-color:rgba(0, 0, 0, 0.8);
  position:absolute;
  z-index:9999;
  top:0px;
 }
 
  .lapis > h1 {
  margin-left:10px;
  color : white;
 }
 </style>

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
                    <li class="breadcrumb-item"><font face='sao'> Pembayaran </font></li>
                </ol>
              </div><!-- /.col -->
            </div>
          </div>  
    </div>
    <div class="content">
      <div class="wrapper">
        <img src="{{asset('img/zilong.jpeg')}}" width="100%" height="100%">
        <div class="lapis">
          <h1>
            PEMBAYARAN UNTUK JASA JOKI
          </h1>
        </div>
      </div>
    </div>
    <br>
    <div class="content">
      <strong>
        <img src="{{asset('img/bri.png')}}" width="20%" height="20%">
          <p> No Rek : 11229876543 A/N MUSH'AB SALAHUDDIN
        <br><br>
        <img src="{{asset('img/bni.png')}}" width="20%" height="20%">
          <p> No Rek : 11229773-87 A/N MUSH'AB SALAHUDDIN 
      </strong>
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