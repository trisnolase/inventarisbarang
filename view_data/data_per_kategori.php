<?php
	include"db_link.php";
	
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	
	if($modul=='gangguan' AND $act=='input'){
	
	$sql = mysqli_query($dblink,"SELECT
			tblalat.nama_peralatan,
			tblalat.id_alat,
			tblalat.tahun_beli,
			tblalat.desc_alat,
			tblalat.jlh_port,
			tblalat.nama_wifi,
			tblalat.pass_wifi,
			tblalat.frek_alat,
			tblalat.l_frek_alat,
			tblalat.k_ram,
			tblalat.k_hardisk,
			tblalat.t_processor,
			tblalat.status_alat,
			tblkategori.nama_kategori,
			tbllokasi.nama_lokasi
		FROM
			tblalat,tbllokasi,tblkategori
		WHERE
			tblalat.id_kategori =  tblkategori.id_kategori AND
			tblalat.id_lokasi =  tbllokasi.id_lokasi AND 
			tblalat.status_alat = 'Normal' AND
			tblalat.id_kategori=");
		echo"<table border='0' cellpadding='4px' cellspacing='0px' width='100%'>
			<tr bgcolor=#6ac5fe>
				<td>Nama Alat</td>
				<td>Lokasi</td>
				<td>Kategori</td>
				<td>Tahun Pembelian</td>
				<td>Deskripsi Alat</td>
				<td>Jumlah Port</td>
				<td>Nama Wifi</td>
				<td>Pass Wifi</td>
				<td>Frekuensi</td>
				<td>Kapasitas Ram</td>
				<td>Kapasitas Hardisk</td>
				<td>Processor</td>
				<td>Status</td>
				<td>Aksi</td>
			</tr>";
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
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
		echo"<tr bgcolor=$bg>
				<td>$xnama</td>
				<td>$xlokasi</td>
				<td>$xkategori</td>
				<td>$xtahun</td>
				<td>$xdesc</td>
				<td>$xjlhport</td>
				<td>$xnamawifi</td>
				<td>$xpasswifi</td>
				<td>$xfrek</td>
				<td>$xram</td>
				<td>$xdisk</td>
				<td>$xprocessor</td>
				<td>$xstatus</td>
				<td>
					<a href='control_data/proses_db_alat.php?modul=alat&act=hapus&xxid=$xid'>Hapus</a>
					<a href='index.php?xlink=control_data/edit_alat.php&mod=edit&id=$xid'>Edit</a>
			</tr>";
		}
		echo"</table>";
?>