<?php
	echo"<a class='btn btn-success btn-sm' href='tambahkategori'>Tambah Data Kategori</a><p>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tblkategori");
		echo"<div class='table-responsive'><table class='table table-bordered table-hover'>
		<thead>
			<tr style='background-color:#bebebe;'>
				<td align='center'>ID Kategori</td>
				<td align='center'>Nama Kategori</td>
				<td align='center'>Jumlah Alat</td>
				<td align='center'>Aksi</td>
			</tr>
		</thead></tbody>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
			
			$fsql = mysqli_query($dblink,"SELECT
					Count(tblalat.id_alat) AS jlh_alt
					FROM
					tblkategori
					Left Join tblalat ON tblkategori.id_kategori = tblalat.id_kategori
					WHERE
					tblkategori.id_kategori = '$xidk'
					GROUP BY
					tblalat.id_kategori
					");
				while ($rj=mysqli_fetch_array($fsql,MYSQLI_ASSOC)){
					$xjlh = isset($rj['jlh_alt']) ? $rj['jlh_alt'] : '';
				}


		echo"<tr>
				<td>$xidk</td>
				<td>$xnk</td>
				<td>$xjlh</td>
				<td align='center'>
					<a class='btn btn-danger btn-sm' href='hapuskat-$xidk'>Hapus</a>
					<a class='btn btn-primary btn-sm' href='editkat-$xidk'>Edit</a>
				</td>
			</tr>";
		}
		echo"</tbody></table>";
?>