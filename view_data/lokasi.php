<?php
	echo"<a class='btn btn-success btn-sm' href='tambahlokasi'>Tambah Data lokasi</a><p>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
		echo"<div class='table-responsive'><table class='table table-bordered table-hover'>
		<thead>
			<tr style='background-color:#bebebe;'>
				<th>ID Lokasi</td>
				<th>Nama Lokasi</td>
				<th>Jumlah Peralatan</td>
				<th>Aksi</td>
			</tr>
		</thead>
		<tbody>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
			$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';

			$fsql = mysqli_query($dblink,"SELECT
					Count(tblalat.id_alat) AS jlh_alt
					FROM
					tbllokasi
					Left Join tblalat ON tbllokasi.id_lokasi = tblalat.id_lokasi
					WHERE
					tbllokasi.id_lokasi = '$xidk'
					GROUP BY
					tbllokasi.id_lokasi
					");
				while ($rj=mysqli_fetch_array($fsql,MYSQLI_ASSOC)){
					$xjlh = isset($rj['jlh_alt']) ? $rj['jlh_alt'] : '';
				}
		
		echo"<tr>
				<td>$xidk</td>
				<td>$xnk</td>
				<td>$xjlh</td>
				<td align='center'>
					<a class='btn btn-danger btn-sm' href='hapuslok-$xidk'>Hapus</a>
					<a class='btn btn-primary btn-sm' href='editlok-$xidk'>Edit</a>
				</td>
			</tr>";
		}
		echo"</tbody></table>";
?>