<?php
	$sql = mysqli_query($dblink,"SELECT * from tblgangguan as a,tblalat as b where a.id_alat=b.id_alat order by a.id_gangguan desc");
		echo"<div class='table-responsive'><table class='table table-bordered table-hover'>
		<thead>
			<tr style='background-color:#bebebe;'>
				<th>ID Gangguan</th>
				<th>ID Alat</th>
				<th>Nama Alat</th>
				<th>Tanggal Lapor</th>
				<th>Ciri - Ciri Gangguan</th>
				<th>Deskripsi Gangguan Alat</th>
				<th>Status Proses</th>
				<th>Aksi</th>";
		echo"</tr></thead><tbody>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
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
		echo"<tr>
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
		echo"	</td></tr>";
				
		}
		echo"</tbody></table>";
?>