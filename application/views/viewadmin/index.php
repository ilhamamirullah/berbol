<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Modern an Admin Panel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/lines.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url(); ?>assets/admin/css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/admin/js/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->
<!-- Nav CSS -->
<link href="<?php echo base_url(); ?>assets/admin/css/custom.css" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/js/d3.v3.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/rickshaw.js"></script>
</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url(); ?>admin/adminberbol/index">Admin</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url(); ?>admin/adminberbol/index"><i class="fa fa-dashboard fa-fw nav_icon"></i>Home</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>admin/adminberbol/konten"><i class="fa fa-indent fa-fw nav_icon"></i>konten</a>
                        </li>
						<li>
                            <a href="<?php echo base_url(); ?>admin/adminberbol/comments"><i class="fa fa-envelope fa-fw nav_icon"></i>Comments</a>
                        </li>
						<li>
                            <a href="<?php echo base_url(); ?>admin/adminberbol/logout"><i class="fa fa-laptop fa-fw nav_icon"></i>Logout</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

		<div id="page-wrapper">
		<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12 ">
		<center><h1 class="page-header">Selamat Datang <?php echo $this->session->userdata('username');?></h1>
      <a href="<?php echo base_url(); ?>" target="blank" type="button" class="btn btn-success btn-lg">Go to Site</a>
		</div>
		</div>
	    </div>
		</div>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
