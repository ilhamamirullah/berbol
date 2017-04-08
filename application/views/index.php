<!DOCTYPE html>
<html>
<head>
<title>BerBol</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<div class="container">

  <!--tampilan header & navigasi1-->
  <header id="header">
    <div class="row">


      <!--Logo-->
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="header_bottom">
          <div class="logo_area"><a href="<?php echo base_url(); ?>" class="logo"><img src="images/logo-berbol.png" alt=""></a></div>
        </div>
      </div>
    </div>
  </header>

  <!--tampilan navigasi2-->
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
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

  <!--tampilan slider section-->
  <section id="sliderSection">
    <div class="row">
    <!--tampilan gambar corousel sliide-->
    <div class="col-lg-8 col-md-8 col-sm-8">
      <div class="slick_slider">

        <div class="single_iteam"><img src="images/slider_img7.jpg" alt="">
          <div class="slider_article">
            <h2>BerBol.com</h2>
            <p>Berita bola Eksklusif</p>
          </div>
        </div>
        <div class="single_iteam">  <img src="images/slider_img6.jpg" alt=""><
          <div class="slider_article">
            <h2>BerBol.com</h2>
            <p>Berita bola Eksklusif</p>
          </div>
        </div>
        <div class="single_iteam">  <img src="images/slider_img5.jpg" alt=""><
          <div class="slider_article">
            <h2>BerBol.com</h2>
            <p>Berita bola Eksklusif</p>
          </div>
        </div>
        <div class="single_iteam">  <img src="images/slider1.jpg" alt=""><
          <div class="slider_article">
            <h2>BerBol.com</h2>
            <p>Berita bola Eksklusif</p>
          </div>
        </div>
      </div>
    </div>

      <!--tampilan latest post-->
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="latest_post">
          <h2><span>Terbaru</span></h2>
          <div class="latest_post_container">
            <div id="prev-button"><i class="fa fa-chevron-up"></i></div>
            <ul class="latest_postnav">
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
                <div class="media"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"> </a>
                  <div class="media-body"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="catg_title"> <?php echo $list['judul'];?></a> </div>
                </div>
              </li>
              <?php }}?>
            </ul>
            <div id="next-button"><i class="fa  fa-chevron-down"></i></div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_post_content">
            <h2><span>Liga Champions</span></h2>
            <div class="single_post_content_left">
              <ul class="business_catgnav  wow fadeInDown">
                <li>
                  <figure class="bsbig_fig"> <a href="pages/<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="featured_img"> <img alt="" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"> <span class="overlay"></span> </a>
                    <figcaption> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>"><?php echo $list['judul'];?></a> </figcaption>
                  </figure>
                </li>
              </ul>
            </div>
            <div class="single_post_content_right">
              <ul class="spost_nav">
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
                  <div class="media wow fadeInDown"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"> </a>
                    <div class="media-body"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="catg_title"><?php echo $list['judul'];?></a> </div>
                  </div>
                </li>
                <?php }} ?>
              </ul>
            </div>
          </div>
          <div class="fashion_technology_area">

              <div class="single_post_content">
                <h2><span>Berita Sepak Bola</span></h2>
                  <?php foreach($record->result_array() as $list){ ?>
                    <div class="media wow fadeInDown">
                       <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="media-left">
                         <p style="margin-right:20px; margin-left:20px;"> <?php echo $list['tanggal'];?> </p> </a>
                      <div class="media-body"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="catg_title"><?php echo $list['judul'];?></a> </div>
                    </div>
                  <?php } ?>

              </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">

          <div class="single_sidebar">
            <h2><span>Berita Populer</span></h2>
            <ul class="spost_nav">
            <?php
            $batas=6;
            $i=0;
            foreach($populer->result_array() as $list){
              $i++;
              if($i==$batas){
                break;}
                else {
              ?>
            <li>
              <div class="media"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="media-left"> <img alt="" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"> </a>
                <div class="media-body"> <a href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>" class="catg_title"> <?php echo $list['judul'];?></a> </div>
              </div>
            </li>
            <?php }}?>
            </ul>
          </div>


          <div class="single_sidebar">
            <ul class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Kategori</a></li>
              <li role="presentation"><a href="#video" aria-controls="profile" role="tab" data-toggle="tab">Video</a></li>
            </ul>
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="category">
                <ul>
                  <li class="cat-item"><a href="#">Liga Inggris</a></li>
                  <li class="cat-item"><a href="#">Liga Spanyol</a></li>
                  <li class="cat-item"><a href="#">Liga Italia</a></li>
                  <li class="cat-item"><a href="#">Liga Jerman</a></li>
                  <li class="cat-item"><a href="#">Liga Champions</a></li>
                  <li class="cat-item"><a href="#">Lainnya..</a></li>
                </ul>
              </div>
              <div role="tabpanel" class="tab-pane" id="video">
                <div class="vide_area">
                  <iframe width="100%" height="250" src="https://www.youtube.com/embed/MidqGHW-ABM/feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>

          <div class="single_sidebar wow fadeInDown">
            <h2><span>Links</span></h2>
            <ul>
              <li><a href="http://www.gunadarma.ac.id/" target="_blank">Gunadarma</a></li>
              <li><a href="http://ti-dasar.lab.gunadarma.ac.id/" target="_blank">Labti</a></li>
              <li><a href="http://www.bola.net/" target="_blank">Referensi</a></li>
              <li><a href="<?php echo base_url(); ?>admin/adminberbol" target="_blank">Login Admin</a></li>
            </ul>
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
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/jquery.li-scroller.1.0.js"></script>
<script src="assets/js/jquery.newsTicker.min.js"></script>
<script src="assets/js/jquery.fancybox.pack.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>
