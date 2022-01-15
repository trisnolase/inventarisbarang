<?php
	$sql = mysqli_query($dblink,"SELECT * from tblpenanganan,tblalat,tblgangguan
		where tblpenanganan.id_gangguan = tblgangguan.id_gangguan and tblgangguan.id_alat = tblalat.id_alat
		order by tblalat.id_alat desc,tblpenanganan.id_penanganan desc");
		echo"<div class='table-responsive'><table class='table table-bordered table-hover'>
		<thead>
			<tr style='background-color:#bebebe;'>
				<th>ID Gangguan</th>
				<th>ID Alat</th>
				<th>Nama Alat</th>
				<th>Tanggal Penanganan</th>
				<th>Teknisi</th>
				<th>Penyelesian</th>
				<th>Hasil</th>
				<th>Rekomendasi</th>";
		echo"</tr></thead><tbody>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_penanganan']) ? $r['id_penanganan'] : '';
			$xidg = isset($r['id_gangguan']) ? $r['id_gangguan'] : '';
			$xtgl = isset($r['tgl_penanganan']) ? $r['tgl_penanganan'] : '';
			$xtek = isset($r['teknisi']) ? $r['teknisi'] : '';
			$xpeny = isset($r['penyelesaian']) ? $r['penyelesaian'] : '';
			$xhasil = isset($r['hasil']) ? $r['hasil'] : '';
			$xrekom = isset($r['rekomendasi']) ? $r['rekomendasi'] : '';
			$xida = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xnma = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
		
		echo"<tr bgcolor=$bg>
				<td>$xidg</td>
				<td>$xida</td>
				<td>$xnma</td>
				<td>$xtgl</td>
				<td>$xtek</td>
				<td>$xpeny</td>
				<td>$xhasil</td>
				<td>$xrekom</td>";
	echo"		</tr>";
		}
		echo"</tbody></table>";
?>