<?php
	error_reporting(0);
	include"db_link.php";
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inventarisasi Peralatan Jaringan Berbasis Website</title>
		<link rel="stylesheet" type="text/css" href="view_data/style/style.css"/>
	</head>
<body><center>
	<table class="bordershadow" border="0px" cellspacing="0px" cellpadding="10px" width="1200px">
		<tr bgcolor="#b5e2ff">
			<td colspan="2"><center>SISTEM INFORMASI PERALATAN JARINGAN</center></td>
		</tr>
		<tr>
			<td width="13%" valign="top" class="menu">
				<a href='home'>Home</a>
				<a href='alat'>Data Peralatan</a>
				<a href='kategori'>Data Kategori Alat</a>
				<a href='lokasi'>Data Lokasi Alat</a>
				<a href='gangguan'>Data Kondisi Alat</a>
				<a href='penanganan'>Data Penanganan</a>
				<a href='lapor'>Lapor Gangguan</a>
				<a href='index.php?xlink=view_data/mutasi_alat.php'>Mutasi Alat</a>
				
				<?php //include"view_data/menu_per_kategori.php";?>
				
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