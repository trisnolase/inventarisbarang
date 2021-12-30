<?php
	echo"<a class='btn btn-success btn-sm' href='tambahlokasi'>Tambah Data lokasi</a><p>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
		echo"<div class='table-responsive'><table class='table table-hover'>
			<tr bgcolor=#6ac5fe>
				<td align='center'>ID lokasi</td>
				<td align='center'>Nama lokasi</td>
				<td align='center'>Aksi</td>
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
				<td align='center'>
					<a class='btn btn-danger btn-sm' href='hapuslok-$xidk'>Hapus</a>
					<a class='btn btn-primary btn-sm' href='editlok-$xidk'>Edit</a>
			</tr>";
		}
		echo"</table>";
?>