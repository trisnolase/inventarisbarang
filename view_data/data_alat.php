<?php
	echo"<table border='0' cellpadding='0' width='100%'>
		<tr>
			<td>
				<a href='tambahalat' class='btn btn-success btn-sm'>Tambah Data Peralatan</a>
			</td>
			<td align='right'>
				<a href='alat-1' class='btn btn-primary btn-sm'>Normal</a>
				<a href='alat-2' class='btn btn-warning btn-sm'>Rusak Sementara</a>
				<a href='alat-3' class='btn btn-danger btn-sm'>Rusak Permanen</a>
			</td>
		</tr></table><p>";
	$xrsts=$_GET['act'];
	if($xrsts=="1"){
		$xxrsts="Normal";
	}elseif($xrsts=="2"){
		$xxrsts="Rusak Sementara";
	}else{
		$xxrsts="Rusak Permanen";
	}
	$sql = mysqli_query($dblink,"SELECT * from tblalat,tblkategori,tbllokasi
		WHERE
			tblalat.id_kategori =  tblkategori.id_kategori AND
			tblalat.id_lokasi =  tbllokasi.id_lokasi AND
			tblalat.status_alat = '$xxrsts'");
		echo"<div class='table-responsive'><table class='table table-bordered table-hover'>
		<thead>
			<tr style='background-color:#bebebe;'>
				<th>Id Alat</th>
				<th>Nama Alat</th>
				<th>Lokasi</th>
				<th>Kategori</th>
				<th>Tahun Pembelian</th>
				<th>Deskripsi</th>
				<th>Status</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>";
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xnama = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
			$xlokasi = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
			$xid = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xkategori = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
			$xtahun = isset($r['tahun_beli']) ? $r['tahun_beli'] : '';
			$xdesc = isset($r['desc_alat']) ? $r['desc_alat'] : '';
			$xjlhport = isset($r['jlh_port']) ? $r['jlh_port'] : '';
			$xnamawifi = isset($r['nama_wifi']) ? $r['nama_wifi'] : '';
			$xpasswifi = isset($r['pass_wifi']) ? $r['pass_wifi'] : '';
			$xfrek = isset($r['frek_alat']) ? $r['frek_alat'] : '';
			$xram = isset($r['k_ram']) ? $r['k_ram'] : '';
			$xdisk = isset($r['k_hardisk']) ? $r['k_hardisk'] : '';
			$xprocessor = isset($r['t_processor']) ? $r['t_processor'] : '';
			$xstatus = isset($r['status_alat']) ? $r['status_alat'] : '';
			$xhimg = isset($r['p_img']) ? $r['p_img'] : '';
			$xnone='none';
			
			
		echo"<tr>
				<td align='center'>$xid</td>
				<td><a style='text-decoration:none;' href='detail-$xid'>$xnama</a></td>
				<td>$xlokasi</td>
				<td>$xkategori</td>
				<td>$xtahun</td>
				<td>$xdesc</td>
				<td align='center'>$xstatus</td>
				<td align='center'>";
					if($xhimg==''){
						echo"<a href='hapusalat-$xid&g=$xnone' class='btn btn-danger btn-sm'>Hapus</a> ";
					}else{
						echo"<a href='hapusalat-$xid&g=$xhimg' class='btn btn-danger btn-sm'>Hapus</a> ";
					}
					echo"<a href='editalat-$xid' class='btn btn-primary btn-sm'>Edit</a>";
		echo"</tr>";
		}
		echo"</tbody></table>";
?>