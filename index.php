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
		<link rel="stylesheet" type="text/css" href="view_data/style/css/select2.min.css">
		<script type="text/javascript" src="view_data/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/select2.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/jquery.js"></script>
		<script type="text/javascript" src="view_data/style/js/bootstrap.js"></script>
	</head>
<body style='background-color: #ebecf0;'>
	<table class='table'>
		<tr>
			<td colspan='2' valign='middle' align='center' style='background-color:#9dd9f3; height:70px; color:#000'>Sistem Informasi Peralatan Jaringan</td>
		</tr>
		<tr>
			<td width='200px'><div>
					<a class='nav-link' href='alat-1'>Data Peralatan</a>
					<a class='nav-link' href='kategori'>Data Kategori</a>
					<a class='nav-link' href='lokasi'>Data Lokasi</a>
					<a class='nav-link' href='gangguan'>Data Gangguan</a>
					<a class='nav-link' href='penanganan'>Data Penanganan</a>
					<a class='nav-link' href='lapor'>Lapor Gangguan</a>
					<a class='nav-link' href='mutasi'>Mutasi Alat</a>
			</div></td>
			
			<td><div>
				<?php
					$slink=$_REQUEST['xlink'];
					if(isset($slink)){
						include"$slink";
					}else{
						include"view_data/home.php";
					}
				?>
			</div></td>
		</tr>
	</table>
</body>
</html>