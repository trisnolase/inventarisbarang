<?php
	$sql = mysqli_query($dblink,"SELECT * from tblpenanganan,tblalat,tblgangguan
		where tblpenanganan.id_gangguan = tblgangguan.id_gangguan and tblgangguan.id_alat = tblalat.id_alat
		order by tblpenanganan.id_penanganan desc");
		echo"<div class='table-responsive'><table class='table table-hover'>
			<tr bgcolor=#6ac5fe>
				<td align='center'>ID Gangguan</td>
				<td align='center'>ID Alat</td>
				<td align='center'>Nama Alat</td>
				<td align='center'>Tanggal Penanganan</td>
				<td align='center'>Teknisi</td>
				<td align='center'>Penyelesian</td>
				<td align='center'>Hasil</td>
				<td align='center'>Rekomendasi</td>";
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
			$xida = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xnma = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
		
		echo"<tr bgcolor=$bg>
				<td align='center'>$xidg</td>
				<td>$xida</td>
				<td>$xnma</td>
				<td>$xtgl</td>
				<td>$xtek</td>
				<td>$xpeny</td>
				<td>$xhasil</td>
				<td>$xrekom</td>";
	echo"		</tr>";
		}
		echo"</table>";
?>