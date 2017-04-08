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
<!-- TINYMCE SETTINGS -->
<script src="<?php echo base_url(); ?>tinymce/js/tinymce/tinymce.dev.js"></script>
    <script src="<?php echo base_url(); ?>tinymce/js/tinymce/plugins/table/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>tinymce/js/tinymce/plugins/paste/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>tinymce/js/tinymce/plugins/spellchecker/plugin.dev.js"></script>
    <script src="<?php echo base_url(); ?>tinymce/js/tinymce/tinymce.min.js"></script>
<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
<!-- Graph JavaScript -->
<script src="<?php echo base_url(); ?>assets/admin/js/d3.v3.js"></script>
<script src="<?php echo base_url(); ?>assets/admin/js/rickshaw.js"></script>
<script>
	tinymce.init({
		selector: "textarea",
		theme: "modern",
		plugins: [
			"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
			"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
			"save table contextmenu directionality emoticons template paste textcolor importcss colorpicker textpattern"
		],
		external_plugins: {
			//"moxiemanager": "/moxiemanager-php/plugin.js"
		},
		content_css: "css/development.css",
		add_unload_trigger: false,

		toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons table",

		image_advtab: true,

		style_formats: [
			{title: 'Bold text', format: 'h1'},
			{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
			{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
			{title: 'Example 1', inline: 'span', classes: 'example1'},
			{title: 'Example 2', inline: 'span', classes: 'example2'},
			{title: 'Table styles'},
			{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
		],

		template_replace_values : {
			username : "Jack Black"
		},

		template_preview_replace_values : {
			username : "Preview user name"
		},

		link_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		image_class_list: [
			{title: 'Example 1', value: 'example1'},
			{title: 'Example 2', value: 'example2'}
		],

		templates: [
			{title: 'Some title 1', description: 'Some desc 1', content: '<strong class="red">My content: {$username}</strong>'},
			{title: 'Some title 2', description: 'Some desc 2', url: 'development.html'}
		],

		setup: function(ed) {
			/*ed.on(
				'Init PreInit PostRender PreProcess PostProcess BeforeExecCommand ExecCommand Activate Deactivate ' +
				'NodeChange SetAttrib Load Save BeforeSetContent SetContent BeforeGetContent GetContent Remove Show Hide' +
				'Change Undo Redo AddUndo BeforeAddUndo', function(e) {
				console.log(e.type, e);
			});*/
		},

		spellchecker_callback: function(method, data, success) {
			if (method == "spellcheck") {
				var words = data.match(this.getWordCharPattern());
				var suggestions = {};

				for (var i = 0; i < words.length; i++) {
					suggestions[words[i]] = ["First", "second"];
				}

				success({words: suggestions, dictionary: true});
			}

			if (method == "addToDictionary") {
				success();
			}
		}
	});
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

		<div class="page-header ">
		<h4>Tambah konten</h4>
		</div>
	<?php echo validation_errors() ?>
	<?php echo form_open_multipart('admin/adminberbol/insert'); ?>
	<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Judul konten</th>
			<td><input type="text" name="judulberita" placeholder="Masukan Judul Berita" class="form-control" required></td>
		</tr>
    <tr>
			<th>Kategori</th>
			<td><select name="kategoriberita" class="form-control">
            <option value="champion">champions</option>
            <option value="inggris">inggris</option>
            <option value="spanyol">spanyol</option>
            <option value="italia">italia</option>
            <option value="lainnya">lainnya</option>
          </select> </td>
		</tr>
		<tr>
			<th>Gambar</th>
			<td>
				<input class="form-control" type="file"   name="fileupload">
			</td>
		</tr>
		<tr>
			<th>Isi Konten</th>
			<td>
				<textarea class=" ckeditor" placeholder="Masukan Isi Berita" name="isiberita" required> </textarea>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" value="Tambah" class="col-md-offset-10 btn btn-default">
			</td>
		</tr>
	</table>
	<?php echo form_close(); ?>
</div>

	    </div>
		</div>

    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/admin/js/bootstrap.min.js"></script>
</body>
</html>
