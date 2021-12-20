<?php
	include"db_link.php";
	$xkid = $_GET['id'];
	$sql = mysqli_query($dblink,"SELECT
			tblalat.nama_peralatan,
			tblalat.id_alat,
			tblalat.id_lokasi,
			tblalat.id_kategori,
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
			tblalat
			Inner Join tbllokasi ON tblalat.id_lokasi = tbllokasi.id_lokasi AND tblalat.id_lokasi = tbllokasi.id_lokasi
			Inner Join tblkategori ON tblalat.id_kategori = tblkategori.id_kategori
		WHERE
			tblalat.id_kategori =  tblkategori.id_kategori AND
			tblalat.id_lokasi =  tbllokasi.id_lokasi AND tblalat.id_alat='$xkid'");
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xnama = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
			$xlokasi = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
			$xid = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xidlok = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
			$xidkat = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xkategori = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
			$xtahun = isset($r['tahun_beli']) ? $r['tahun_beli'] : '';
			$xdesc = isset($r['desc_alat']) ? $r['desc_alat'] : '';
			$xjlhport = isset($r['jlh_port']) ? $r['jlh_port'] : '';
			$xnamawifi = isset($r['nama_wifi']) ? $r['nama_wifi'] : '';
			$xpasswifi = isset($r['pass_wifi']) ? $r['pass_wifi'] : '';
			$xfrek = isset($r['frek_alat']) ? $r['frek_alat'] : '';
			$xlfrek = isset($r['l_frek_alat']) ? $r['l_frek_alat'] : '';
			$xram = isset($r['k_ram']) ? $r['k_ram'] : '';
			$xdisk = isset($r['k_hardisk']) ? $r['k_hardisk'] : '';
			$xprocessor = isset($r['t_processor']) ? $r['t_processor'] : '';
			$xstatus = isset($r['status_alat']) ? $r['status_alat'] : '';
		}
	echo"<form name='formEditAlat' method='POST' action='control_data/proses_db_alat.php?modul=alat&act=edit'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'><b>Form Edit Data Peralatan</b></td>
				</tr>
				<tr>
					<td width='15%'>Id Alat</td>
					<td width='10px' align='center'>:</td>
					<td><input value='$xid' type='teks' name='xid' size='100%' readonly/></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td><input value='$xidkat' type='teks' name ='xkat' size='100%' /></td>
				</tr>
				<tr>
					<td>Lokasi</td>
					<td align='center'>:</td>
					<td><input value='$xidlok' type='teks' name ='xlok' size='100%' /></td>
				</tr>
				<tr>
					<td>Nama Peralatan</td>
					<td align='center'>:</td>
					<td><input value='$xnama' type='teks' name ='xnama' size='100%' /></td>
				</tr>
				<tr>
					<td>Tahun Beli</td>
					<td align='center'>:</td>
					<td><input value='$xtahun' type='date' name ='xtgl' size='100%' /></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td align='center'>:</td>
					<td><textarea name='xdesc' rows='5' cols='93'>$xdesc</textarea></td>
				</tr>
				<tr>
					<td>Jumlah Port</td>
					<td align='center'>:</td>
					<td><input value='$xjlhport' type='teks' name ='xjp' size='100%' /></td>
				</tr>
				<tr>
					<td>Nama Wifi</td>
					<td align='center'>:</td>
					<td><input value='$xnamawifi' type='teks' name ='xnwifi' size='100%' /></td>
				</tr>
				<tr>
					<td>Password Wifi</td>
					<td align='center'>:</td>
					<td><input value='$xpasswifi' type='teks' name ='xpwifi' size='100%' /></td>
				</tr>
				<tr>
					<td>Frekuensi</td>
					<td align='center'>:</td>
					<td><input value='$xfrek' type='teks' name ='xfrek' size='100%' /></td>
				</tr>
				<tr>
					<td>Lebar Frekuensi</td>
					<td align='center'>:</td>
					<td><input value='$xlfrek' type='teks' name ='xlfrek' size='100%' /></td>
				</tr>
				<tr>
					<td>RAM</td>
					<td align='center'>:</td>
					<td><input value='$xram' type='teks' name ='xram' size='100%' /></td>
				</tr>
				<tr>
					<td>Hardisk</td>
					<td align='center'>:</td>
					<td><input value='$xdisk' type='teks' name ='xdisk' size='100%' /></td>
				</tr>
				<tr>
					<td>Processor</td>
					<td align='center'>:</td>
					<td><input value='$xprocessor' type='teks' name ='xpro' size='100%' /></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input type='submit' name='ckirim' value='Simpan' />
						<input type='reset' name='creset' value='Batal' onClick=history.go(-1); />
					</li></td>
				</tr>
			</table>
		</form>";
?>