<!DOCTYPE html>
<html>
<head>
<title>BerBol</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="../assets/css/font.css">
<link rel="stylesheet" type="text/css" href="../assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="../assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="../assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="../assets/css/style.css">

<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

  <header id="header">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>images/logo-berbol.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>


  <!--tampilan navigasi2-->
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="<?php echo base_url(); ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Beranda</span></a></li>
          <li><a href="<?php echo base_url(); ?>berbol/tentang">Tentang</a></li>
          <li><a href="<?php echo base_url(); ?>berbol/kontak">Kontak</a></li>
        </ul>
      </div>
    </nav>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="contact_area">
            <h2>Kontak Kami</h2>
            <p>Jika terdapat komentar, saran, maupun kritik untuk kami silahkan isi pesan dibawah :)</p>
            <?php echo validation_errors() ?>
            <?php echo form_open_multipart('berbol/insert'); ?>
            <form class="contact_form" required>
              <input class="form-control" name="userName" type="text" placeholder="Nama*">
              <input class="form-control" name="userEmail" type="email" placeholder="Email*">
              <textarea class="form-control" name="userPesan" cols="30" rows="10" placeholder="Message*"></textarea>
              <input type="submit" value="Kirim Pesan">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Berita Populer</span></h2>
            <?php
            $batas=6;
            $i=0;
            foreach($record->result_array() as $list){
              $i++;
              if($i==$batas){
                break;}
                else {
              ?>
            <li>
              <div class="media"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="media-left">
                <img alt="" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"> </a>
                <div class="media-body"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="catg_title"> <?php echo $list['judul'];?></a> </div>
              </div>
            </li>
            <?php }}?>
          </div>
        </aside>
      </div>
    </div>
  </section>


  <footer id="footer">
    <div class="footer_top">
      <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="footer_widget wow fadeInDown">
            <h2>Kontak</h2>
            <p>Untuk menghubungi kami dapat langsug datang ke Universitas Gunadarma, kami jurusan Teknik Informatika angkatan 2013. atau bisa menghubugi nomor telepon atau media sosial kami. Terima kasih.</p>
            <address>
            Jalan Akses UI, Kelapa dua. Depok-Jawa barat, Indonesia. Telp: 085716887907
            </address>
            <ul class="sociallink_nav">
              <li><a href="https://web.facebook.com/ilham.amirullah"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_bottom">
      <p class="copyright">Copyright &copy; 2017 <a href="<?php echo base_url(); ?>">Berbol</a></p>
      <!--<p class="developer">Developed By Wpfreeware</p>-->
    </div>
  </footer>
</div>
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/wow.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/slick.min.js"></script>
<script src="../assets/js/jquery.li-scroller.1.0.js"></script>
<script src="../assets/js/jquery.newsTicker.min.js"></script>
<script src="../assets/js/jquery.fancybox.pack.js"></script>
<script src="../assets/js/custom.js"></script>
</body>
</html>
