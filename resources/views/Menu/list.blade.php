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
 height:15%;
 background-color:rgba(0, 0, 0, 0.8);
 position:absolute;
 z-index:9999;
 bottom:5px;
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
                    <li class="breadcrumb-item"><font face='sao'> List Harga </font></li>
                </ol>
              </div><!-- /.col -->
            </div>
          </div>  
    </div>
    <div class="content">
      <div class="wrapper">
        <img src="{{asset('img/sun.jpg')}}" width="100%" height="100%">
        <div class="lapis">
          <h1>
            <br>
            LIST HARGA PAKET JASA JOKI
          </h1>
        </div>
      </div>
    </div>
    <div class="content">
       <strong> <font face='MV Boli'>
        <img src="{{asset('img/warrior.png')}}" width="20%" height="20%"> <u>WARRIOR</u>
          <p><u> Dari Warrior ke Elite </u>
          <p> Rp 2.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
        <br>
        <img src="{{asset('img/elite.jfif')}}" width="20%" height="20%"> <u>ELITE</u>
          <p><u> Dari Elite ke Master </u>
          <p> Rp 3.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
        <br>
        <img src="{{asset('img/master.png')}}" width="20%" height="20%"> <u>MASTER</u>
          <p><u> Dari Master ke Grandmaster </u>
          <p> Rp 4.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
        <br>
        <img src="{{asset('img/grandmaster.png')}}" width="20%" height="20%"> <u>GRAND MASTER</u>
          <p><u> Dari Grand Master ke Epic </u>
          <p> Rp 5.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
        <br>
        <img src="{{asset('img/epic.png')}}" width="20%" height="20%"> <u>EPIC</u>
          <p><u> Dari Epic ke Legend </u>
          <p> Rp 6.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
        <br>
        <img src="{{asset('img/legend.png')}}" width="20%" height="20%"> <u>LEGEND</u>
          <p><u> Dari Legend ke Mythic </u>
          <p> Rp 8.000,- per Star/Bintang
          <p> ( dibutuhkan 4 star untuk naik 1 grade total 3 grade Total 12 bintang )
       </strong> </font>
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