<?php
	echo"<a class='btn btn-success btn-sm' href='tambahkategori'>Tambah Data Kategori</a><p>";
	include"db_link.php";
	$sql = mysqli_query($dblink,"SELECT * from tblkategori");
		echo"<div class='table-responsive'><table class='table table-hover'>
			<tr bgcolor=#6ac5fe>
				<td align='center'>ID Kategori</td>
				<td align='center'>Nama Kategori</td>
				<td align='center'>Aksi</td>
			</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
		
		echo"<tr bgcolor=$bg>
				<td>$xidk</td>
				<td>$xnk</td>
				<td align='center'>
					<a class='btn btn-danger btn-sm' href='hapuskat-$xidk'>Hapus</a>
					<a class='btn btn-primary btn-sm' href='editkat-$xidk'>Edit</a>
				</td>
			</tr>";
		}
		echo"</table>";
?>