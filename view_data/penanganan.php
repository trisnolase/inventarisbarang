<?php
	include"db_link.php";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tblpenanganan");
		echo"<table border='0' cellpadding='4px' cellspacing='0px' width='100%'>
			<tr bgcolor=#6ac5fe>
				<td>ID Gangguan</td>
				<td>Tanggal Penanganan</td>
				<td>Teknisi</td>
				<td>Penyelesian</td>
				<td>Hasil</td>
				<td>Rekomendasi</td>";
				//<td>Aksi</td>
	echo"		</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_penanganan']) ? $r['id_penanganan'] : '';
			$xidg = isset($r['id_gangguan']) ? $r['id_gangguan'] : '';
			$xtgl = isset($r['tgl_penanganan']) ? $r['tgl_penanganan'] : '';
			$xtek = isset($r['teknisi']) ? $r['teknisi'] : '';
			$xpeny = isset($r['penyelesaian']) ? $r['penyelesaian'] : '';
			$xhasil = isset($r['hasil']) ? $r['hasil'] : '';
			$xrekom = isset($r['rekomendasi']) ? $r['rekomendasi'] : '';
		
		echo"<tr bgcolor=$bg>
				<td><center>$xidg</center></td>
				<td>$xtgl</td>
				<td>$xtek</td>
				<td>$xpeny</td>
				<td>$xhasil</td>
				<td>$xrekom</td>";
				/*<td>
					<a href='control_data/proses_db_penanganan.php?modul=penanganan&act=hapus&xxid=$xidk'>Hapus</a>
					<a href='index.php?xlink=control_data/edit_penanganan.php&mod=edit&id=$xidk'>Edit</a>*/
	echo"		</tr>";
		}
		echo"</table>";
?>