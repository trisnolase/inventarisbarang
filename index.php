<?php
	//error_reporting(0);
	include"db_link.php";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inventarisasi Peralatan Jaringan Berbasis Website</title>
		<link rel="stylesheet" type="text/css" href="view_data/style/style.css"/>
		<link rel="stylesheet" type="text/css" href="view_data/style/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="view_data/style/css/select2.min.css">
		<script type="text/javascript" src="view_data/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/select2.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/jquery.js"></script>
		<script type="text/javascript" src="view_data/style/js/bootstrap.js"></script>
	</head>
<body class="bgbody">
<center>
	<table border="0px" cellspacing="0px" cellpadding="10px" width="1100px" class="bordershadow">
		<tr>
			<td class="head_page"><a href="home">Sistem Informasi Peralatan Jaringan</a></td>
		</tr>
		<tr>
			<td align="center" valign="top" bgcolor="#f5f5f5">
					<a class='btn btn-info btn-sm' href='alat-1'>Data Peralatan</a>
					<a class='btn btn-primary btn-sm' href='kategori'>Data Kategori</a>
					<a class='btn btn-info btn-sm' href='lokasi'>Data Lokasi</a>
					<a class='btn btn-primary btn-sm' href='gangguan'>Data Gangguan</a>
					<a class='btn btn-info btn-sm' href='penanganan'>Data Penanganan</a>
					<a class='btn btn-primary btn-sm' href='lapor'>Lapor Gangguan</a>
					<a class='btn btn-info btn-sm' href='mutasi'>Mutasi Alat</a>
			</td>
		</tr>
		<tr>
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
			<td class="bottom_page">Copyright 2021</td>
		</tr>
	</table>
</center>
</body>
</html>