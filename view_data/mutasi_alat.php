<?php
	echo"<a class='btn btn-success btn-sm' href='tambahmutasi'>Mutasi Peralatan</a></p>";
	$sql = mysqli_query($dblink,"SELECT * from tblhistorilokasi,tblalat,tbllokasi WHERE tblhistorilokasi.id_alat=tblalat.id_alat AND tbllokasi.id_lokasi=tblalat.id_lokasi AND tblhistorilokasi.id_lokasi_b<>'' order by tblhistorilokasi.id_alat desc, tblhistorilokasi.id_histori DESC");
		echo"<div class='table-responsive'><table class='table table-hover'>
			<tr bgcolor=#6ac5fe>
				<td align='center'>ID Alat</td>
				<td align='center'>Nama Alat</td>
				<td align='center'>Lokasi Awal</td>
				<td align='center'>Lokasi Mutasi</td>
				<td align='center'>Tanggal Mutasi</td>
			</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff";
			else
				$bg= "#fff";
			$xidal = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xnal = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
			$xidla = isset($r['id_lokasi_a']) ? $r['id_lokasi_a'] : '';
			$xidlb = isset($r['id_lokasi_b']) ? $r['id_lokasi_b'] : '';
			$xla = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
			$xtglm = isset($r['tgl']) ? $r['tgl'] : '';
			
			$xsql=mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi='$xidla'");
			while ($xr=mysqli_fetch_array($xsql,MYSQLI_ASSOC)){
				$xnmla = isset($xr['nama_lokasi']) ? $xr['nama_lokasi'] : '';
			}
			
			$dsql=mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi='$xidlb'");
			while ($dr=mysqli_fetch_array($dsql,MYSQLI_ASSOC)){
				$xnmlb = isset($dr['nama_lokasi']) ? $dr['nama_lokasi'] : '';
			}
			
		echo"<tr bgcolor=$bg>
				<td>$xidal</td>
				<td>$xnal</td>
				<td>$xnmla</td>
				<td>$xnmlb</td>
				<td>$xtglm</td>
			</tr>";
		}
		echo"</table>";
?>