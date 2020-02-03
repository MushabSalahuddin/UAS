<!DOCTYPE html>

<html lang="en">

<head>
  <title>Jasa Joki Mobile Legends</title>
  @include('Template.head')
</head>
<style type="text/css">
  .wrapper {
  width: 100%;
  height: auto;
  overflow: hidden;
  position:relative;
}

 .wrapper > img {
 width: 100%;
 z-index:-1;
}

 .lapis {
 width: 100%;
 height:48%;
 background-color:rgba(0, 0, 0, 0.6);
 position:absolute;
 z-index:9999;
 bottom:5px;
}

 .lapis > h3 {
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
        </div>
        <div class="content">
          <font face='sao'>
            <h1 align='center'> SELAMAT DATANG DI WEBSITE KAMI </h1>
            <h1 align='center'> MELAYANI JASA JOKI MOBILE LEGENDS BANG BANG </h1>
            <div class="wrapper">
              <img src="{{asset('img/home.jpg')}}" width="100%" height="100%">
              <div class="lapis">
                <h3>
                  <font face='MV Boli'>
                    Hello Gamers Mobile Legends Bang Bang~
                    <p>Kami dari Jasa Joki Mobile Legends Bang Bang menawarkan kepada kleans kleans semua yang mainnya noob, sering feed,
                    ga ada skill dan cupu yang sering kehilangan bintang saat bermain Push Rank Mobile Legends. 
                    <p>Kami punya Solusi bagi kleans yang ingin memperbaiki win rate hero atau yang ingin di push ranknya secara Cepat , Akun Aman, Modal Irit dan tentunya Terpercaya.
                    <p>Jika kleans ingin melihat testimoninya, kalian bisa lihat di feed instagram kami -> <a href="https://www.instagram.com/mushabbbb_/"> Liat Testimoni </a> 
                    <p>Bagi kleans yang berminat pada jasa joki kami, silahkan hubungi kontak kami -> <a href="{{url('/kontak')}}"> Liat Kontak </a>
                    <p>Yang main NOOB, GA ADA SKILL, dan FEEDER mari MERAPAT :))
                </h3>
              </div>
            </div>
          </font>
      </div>
      <div class="content">
            <h1 align='center'>
              <br> <u>
              LIST HARGA PAKET JASA JOKI
            </h1> </u>
      </div>
      <div class="content">
         <strong> <font face='MV Boli'>
           <center>
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
        <div class="col-md">
              <h2 align='center'><u>Syarat & Ketentuan Bagi Pelanggan Joki</u> :</h2>
                <h4>
                <ul>
                    <p>  1. Umur diatas 5 Tahun
                    <p>  2. Main game di handphone sendiri bukan handphone orang tua
                    <p>  3. Dilarang login saat mang joki sedang memakai akun anda 
                    <p>  4. Akun minimum level 8
                    <p>  5. Login via FB, VK, atau Moonton Email. Direkomendasikan VK
                    <p>  6. Pembayaran Di Awal atau sebelum Proses
                  </h4>
          </div>
          <div class="content">
            <h2 align='center'><u>PEMBAYARAN UNTUK JASA JOKI</u> :</h2>
            <ul>
              <img src="{{asset('img/bri.png')}}" width="20%" height="20%">
                <p><h4> No Rek : 11229876543 A/N MUSH'AB SALAHUDDIN
              <br><br>
              <img src="{{asset('img/bni.png')}}" width="20%" height="20%">
                <p> No Rek : 11229773-87 A/N MUSH'AB SALAHUDDIN </h4>
        </div> 
        <div class="col-md">
          <h2 align='center'><u> Kontak Kami </u> :</h2>
            <h4>
            <ul>
                <p>  Instagram : <a href="https://www.instagram.com/mushabbbb_/"><span class="icon icon-instagram"></span><span class="text"> mushabbbb_</span></a>
                <p>  Whatsapp :<a href="#"><span class="icon icon-whatsapp"></span><span class="text"> 0857-5199-44XX </span></a>
                <p>  Email :<a href="#"><span class="icon icon-gmail"></span><span class="text"> mushabsalahuddin@gmail.com </span></a> 
              </h4>
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