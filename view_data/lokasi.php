<?php
	echo"<div class='menutambah'><a href='tambahlokasi'>Tambah Data lokasi</a></div>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
		echo"<table border='0' cellpadding='4px' cellspacing='0px' width='100%'>
			<tr bgcolor=#6ac5fe>
				<td>ID lokasi</td>
				<td>Nama lokasi</td>
				<td>Aksi</td>
			</tr>";$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
			$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
		
		echo"<tr bgcolor=$bg>
				<td>$xidk</td>
				<td>$xnk</td>
				<td>
					<a href='control_data/proses_db_lokasi.php?modul=lokasi&act=hapus&xxid=$xidk'>Hapus</a>
					<a href='index.php?xlink=control_data/edit_lokasi.php&mod=edit&id=$xidk'>Edit</a>
			</tr>";
		}
		echo"</table>";
?>