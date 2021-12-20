<?php
	echo"<a href='index.php?xlink=control_data/tambah_kategori.php'>Tambah Data Kategori</a><br><br>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tblkategori");
		echo"<table border='1' cellpadding='2px' cellspacing='0px' width='98%'>
			<tr>
				<td>ID Kategori</td>
				<td>Nama Kategori</td>
				<td>Aksi</td>
			</tr>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
		
		echo"<tr>
				<td>$xidk</td>
				<td>$xnk</td>
				<td>
					<a href='control_data/proses_db_kategori.php?modul=kategori&act=hapus&xxid=$xidk'>Hapus</a>
					<a href='index.php?xlink=control_data/edit_kategori.php&mod=edit&id=$xidk'>Edit</a>
			</tr>";
		}
		echo"</table>";
?>