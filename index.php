<?php
	error_reporting(0);
	include"db_link.php";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inventarisasi Peralatan Jaringan Berbasis Website</title>
		<link rel="stylesheet" type="text/css" href="view_data/style/style.css"/>
		<link rel="stylesheet" type="text/css" href="view_data/style/css/bootstrap.css">
		<script type="text/javascript" src="view_data/style/js/jquery.js"></script>
		<script type="text/javascript" src="view_data/style/js/bootstrap.js"></script>
	</head>
<body class="container"><center>
	<table class="table table-bordered" border="0px" cellspacing="0px" cellpadding="10px" width="1200px">
		<tr bgcolor="#b5e2ff">
			<td colspan="2"><center>SISTEM INFORMASI PERALATAN JARINGAN</center></td>
		</tr>
		<tr>
			<td width="200px" valign="top">
				<div class='gap-1 col-12 btn-group-vertical' role='group'>
				<a class='btn btn-primary' href='home'>Home</a>
				<a class='btn btn-info' href='alat'>Data Peralatan</a>
				<a class='btn btn-primary' href='kategori'>Data Kategori Alat</a>
				<a class='btn btn-info' href='lokasi'>Data Lokasi Alat</a>
				<a class='btn btn-primary' href='gangguan'>Data Kondisi Alat</a>
				<a class='btn btn-info' href='penanganan'>Data Penanganan</a>
				<a class='btn btn-primary' href='lapor'>Lapor Gangguan</a>
				<a class='btn btn-info' href='mutasi'>Mutasi Alat</a>
				
				<?php //include"view_data/menu_per_kategori.php";?>
				</div>
			</td>
			<td valign="top" class="content">
				<?php
					$slink=$_REQUEST['xlink'];
					if(isset($slink)){
						include"$slink";
					}else{
						include"view_data/home.php";
					}
				?>
			</td>
		</tr>
		<tr bgcolor="#b5e2ff">
			<td colspan="2"><center>Copyright 2021</center></td>
		</tr>
	</table>
</center></body>
</html>