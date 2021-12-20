<?php
	echo"<a href='index.php?xlink=control_data/tambah_lokasi.php'>Tambah Data lokasi</a><br><br>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
		echo"<table border='1' cellpadding='2px' cellspacing='0px' width='98%'>
			<tr>
				<td>ID lokasi</td>
				<td>Nama lokasi</td>
				<td>Aksi</td>
			</tr>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
			$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
		
		echo"<tr>
				<td>$xidk</td>
				<td>$xnk</td>
				<td>
					<a href='control_data/proses_db_lokasi.php?modul=lokasi&act=hapus&xxid=$xidk'>Hapus</a>
					<a href='index.php?xlink=control_data/edit_lokasi.php&mod=edit&id=$xidk'>Edit</a>
			</tr>";
		}
		echo"</table>";
?>