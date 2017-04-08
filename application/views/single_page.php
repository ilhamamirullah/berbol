<!DOCTYPE html>
<html>
<head>
<title>BerBol</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
<!--[if lt IE 9]>
<script src="../assets/js/html5shiv.min.js"></script>
<script src="../assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>"><i class="fa fa-angle-up"></i></a>
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

  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="<?php echo base_url(); ?>"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Beranda</span></a></li>
          <li><a href="<?php echo base_url(); ?>berbol/kontak">Kontak</a></li>
          <li><a href="<?php echo base_url(); ?>berbol/tentang">Tentang</a></li>
        </ul>
      </div>
    </nav>
  </section>

  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="single_page">
            <ol class="breadcrumb">
              <li><a href="<?php echo base_url(); ?>">Beranda</a></li>
              <li><a href="<?php echo base_url(); ?>">Berita Bola</a></li>
              <li class="active">Liga Champions</li>
            </ol>

            <?php foreach ($record as $list) { ?>
            <input type="hidden" name="id" placeholder="id" value="<?php echo $list->id;?>">
            <h1><?php echo $list->judul; ?></h1>
            <div class="post_commentbox"> <a href="#"><i class="fa fa-user"></i>Berbol</a>
              <span><i class="fa fa-calendar"></i><?php date("h:i:s a"); ?></span> <a href="#"><i class="fa fa-tags"></i>Sepak Bola</a> </div>
            <div class="single_page_content"> <img class="img-center" src="<?php echo base_url();?>assets/images/<?php echo $list->urlphoto;?>" alt="">
              <p><?php echo $list->isi; ?></p>
              </div>
            <?php } ?>

            <div class="social_link">
              <ul class="sociallink_nav">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="related_post">
              <h2>Related Post <i class="fa fa-thumbs-o-up"></i></h2>
              <?php
              $batas=4;
              $i=0;
              foreach($record2->result_array() as $list){
                $i++;
                if($i==$batas){
                  break;}
                  else { ?>
              <ul class="spost_nav wow fadeInDown animated">
                <li>
                  <div class="media"> <a class="media-left" href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>">
                    <img src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>" alt=""> </a>
                    <div class="media-body"> <a class="catg_title" href="<?php echo base_url(); ?>berbol/singlepage/<?php echo $list['id'];?>"><?php echo $list['judul'];?></a> </div>
                  </div>
                </li>
              </ul>
              <?php }}?>
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
              <li role="presentation" class="active"><a href="#category" aria-controls="home" role="tab" data-toggle="tab">Category</a></li>
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
            <h2><span>Category Archive</span></h2>
            <select class="catgArchive">
              <option>Liga Inggris</option>
              <option>Liga Spanyol</option>
              <option>Liga Italia</option>
              <option>Liga Jerman</option>
              <option>Liga Champions</option>
            </select>
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
<script src="<?php echo base_url(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.li-scroller.1.0.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.newsTicker.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
</body>
</html>
