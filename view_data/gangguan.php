<?php
	//echo"<div class='menutambah'><a href='lapor'>Lapor Kerusakan Alat</a></div>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tblgangguan");
		echo"<table border='0' cellpadding='4px' cellspacing='0px' width='100%'>
			<tr bgcolor=#6ac5fe>
				<td>ID Gangguan</td>
				<td>ID Alat</td>
				<td>Tanggal Lapor</td>
				<td>Ciri - Ciri Gangguan</td>
				<td>Deskripsi Gangguan Alat</td>
				<td>Status Proses</td>
				<td>Aksi</td>";
	echo"		</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_gangguan']) ? $r['id_gangguan'] : '';
			$xida = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xtgl = isset($r['tgl_gangguan']) ? $r['tgl_gangguan'] : '';
			$xciri = isset($r['ciri']) ? $r['ciri'] : '';
			$xdg = isset($r['deskripsi_gangguan']) ? $r['deskripsi_gangguan'] : '';
			$xsts = isset($r['status']) ? $r['status'] : '';
		
		echo"<tr bgcolor=$bg>
				<td><center>$xidk</center></td>
				<td>$xida</td>
				<td>$xtgl</td>
				<td>$xciri</td>
				<td>$xdg</td>
				<td>$xsts</td>";
		echo"	<td>";
					if($xsts<>'S'){
						echo"<a href='statusalat-$xidk'>Ubah Status</a>";
					}else{
						echo"-";
					}
		echo"	</tr>";
				
		}
		echo"</table>";
?>