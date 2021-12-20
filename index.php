<?php
	error_reporting(0);
?>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inventarisasi Barang Berbasis Website</title>
	</head>
<body><center>
	<table border="1px" cellspacing="0px" cellpadding="10px" width="1200px">
		<tr>
			<td colspan="2"><center>Sistem Informasi Inventarisasi Barang</center></td>
		</tr>
		<tr>
			<td width="13%" valign="top">
				<a href='index.php?xlink=view_data/home.php'>Home</a>
				<br> <a href='index.php?xlink=view_data/data_alat.php'>Data Peralatan</a>
				<br> <a href='index.php?xlink=view_data/kategori.php'>Data Kategori Alat</a>
				<br> <a href='index.php?xlink=view_data/gangguan.php'>Data Gangguan</a>
				<br> <a href='index.php?xlink=view_data/penanganan.php'>Data Penanganan</a>
				<br> <a href='index.php?xlink=view_data/lokasi.php'>Data Lokasi Alat</a>
			</td>
			<td valign="top">
				<?php
					$slink=$_REQUEST['xlink'];
					//$slink=$_GET['xlink'];
					if(isset($slink)){
						include"$slink";
					}else{
						include"view_data/home.php";
					}
				?>
			</td>
		</tr>
		<tr>
			<td colspan="2"><center>Copyright 2021</center></td>
		</tr>
	</table>
	
	
</center></body>
</html>