<?php
	$sql = mysqli_query($dblink,"SELECT * from tblgangguan as a,tblalat as b where a.id_alat=b.id_alat order by a.id_gangguan desc");
		echo"<div class='table-responsive'><table class='table table-hover'>
			<tr bgcolor=#6ac5fe>
				<td align='center'>ID Gangguan</td>
				<td align='center'>ID Alat</td>
				<td align='center'>Nama Alat</td>
				<td align='center'>Tanggal Lapor</td>
				<td align='center'>Ciri - Ciri Gangguan</td>
				<td align='center'>Deskripsi Gangguan Alat</td>
				<td align='center'>Status Proses</td>
				<td align='center'>Aksi</td>";
	echo"		</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_gangguan']) ? $r['id_gangguan'] : '';
			$xnma = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
			$xida = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xtgl = isset($r['tgl_gangguan']) ? $r['tgl_gangguan'] : '';
			$xciri = isset($r['ciri']) ? $r['ciri'] : '';
			$xdg = isset($r['deskripsi_gangguan']) ? $r['deskripsi_gangguan'] : '';
			$xsts = isset($r['status']) ? $r['status'] : '';
			if($xsts=="B"){
				$xstatus="Belum Diproses";
			}else{
				$xstatus="Sudah Diproses";
			}
		echo"<tr bgcolor=$bg>
				<td><center>$xidk</center></td>
				<td>$xida</td>
				<td>$xnma</td>
				<td>$xtgl</td>
				<td>$xciri</td>
				<td>$xdg</td>
				<td>$xstatus</td>";
		echo"	<td>";
					if($xsts<>'S'){
						echo"<a href='statusalat-$xidk' class='btn btn-danger btn-sm'>Ubah Status</a>";
					}else{
						echo"-";
					}
		echo"	</tr>";
				
		}
		echo"</table>";
?>