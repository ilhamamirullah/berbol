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
<style>
			.tabel {
				font-size: 20px;
			}
		</style>
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

    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });

    $(document).ready(function() {
        $('#dataTables-example-2').dataTable();
    });
    </script>

	<link  href="<?php echo base_url(); ?>assets/admin/css/metisMenu.min.css" rel="stylesheet">

		<script language="javascript">
        function checkMe() {
            if (confirm("Apakah anda yakin ingin menghapus ?")) {
                alert("Data Berhasil Dihapus");
                return true;
            } else {
                alert("Data Gagal Dihapus");
                return false;
            }
        }
    	</script>
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
                <a class="navbar-brand" href="index.html">Admin</a>
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

		<div class="tabel">
			<form method="post" action="<?php echo base_url();?>admin/adminberbol/tambah_konten">
        		<div class="col-md-3" style="margin-top:50px">
            	<input type="submit" class="btn btn-primary" value="Tambah konten"/>
        		</div>
    		</form>

    			<div class="col-md-6" style="margin-top:50px">
			<?php
				if($record->num_rows() == 0){
					echo "<center><strong>Tidak Ada Data Tersedia</strong></center>";
				} else {
			?>
				</div>


	<div class="col-md-12 table-responsive" style="margin-top:50px">
	<table border="1" class="table table-striped table-bordered table-hover" id="dataTables-example">
      <thead><tr>
        <th width="1%">No</th>
		<th width="15%">Judul Berita</th>
		<th width="15%">Kategori</th>
		<th width="15%">Isi Berita</th>
		<th width="20%">Gambar</th>
		<th width="5%">Action</th>
      </tr></thead>


	  <?php $no=1; foreach($record->result_array() as $list){?>
        <tr>
            <td><?php echo $no;?></td>
	        	<td><?php echo $list['judul'];?></td>
						<td><?php echo $list['kategori'];?></td>
						<td><?php echo $list['isi'];?></td>
						<td><img class="img-responsive" src="<?php echo base_url();?>assets/images/<?php echo $list['urlphoto'];?>"></td>
	        	<td><a href="<?php echo base_url();?>admin/adminberbol/edit_data/<?php echo $list['id'];?>" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-wrench"></span></a>
						<a href="<?php echo base_url();?>admin/adminberbol/do_hapus_data/<?php echo $list['id'];?>" onClick="return checkMe()" class="btn btn-sm btn-default"><span class="glyphicon glyphicon-trash"></span></a>
            </td>
 						<?php $no++ ; } }?>
  			</tr>
	</table>
	</div>
	</div>
		</div>
		</div>
		</div>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
