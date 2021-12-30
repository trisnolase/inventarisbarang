<?php
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
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Edit Data Peralatan</td>
				</tr>
				<tr>
					<td width='15%'>Id Alat</td>
					<td width='10px' align='center'>:</td>
					<td><input class='form-control' value='$xid' type='teks' name='xid' readonly/></td>
				</tr>";
		echo"	<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xkat'>" ;
							echo"<option value=$xidkat>$xkategori</option>";
							$sql = mysqli_query($dblink,"SELECT * from tblkategori where id_kategori<>'$xidkat'");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
								$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td>Lokasi</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xlok'>" ;
							echo"<option value='$xidlok'>$xlokasi</option>";
							$sql = mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi<>'$xidlok'");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
								$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}
		echo"			</select>
					</td>
				</tr>";
	echo"		<tr>
					<td>Nama Peralatan</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xnama' type='teks' name='xnama' /></td>
				</tr>
				<tr>
					<td>Tahun Beli</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xtahun' type='date' name='xtgl' /></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td align='center'>:</td>
					<td><textarea class='form-control' name='xdesc' rows='5' cols='93'>$xdesc</textarea></td>
				</tr>
				<tr>
					<td>Jumlah Port</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xjlhport' type='teks' name='xjp' /></td>
				</tr>
				<tr>
					<td>Nama Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xnamawifi' type='teks' name='xnwifi' /></td>
				</tr>
				<tr>
					<td>Password Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xpasswifi' type='teks' name='xpwifi' /></td>
				</tr>
				<tr>
					<td>Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xfrek' type='teks' name='xfrek' /></td>
				</tr>
				<tr>
					<td>Lebar Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xlfrek' type='teks' name='xlfrek' /></td>
				</tr>
				<tr>
					<td>RAM</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xram' type='teks' name='xram' /></td>
				</tr>
				<tr>
					<td>Hardisk</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xdisk' type='teks' name='xdisk' /></td>
				</tr>
				<tr>
					<td>Processor</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xprocessor' type='teks' name='xpro' /></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>