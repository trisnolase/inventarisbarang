<?php
	$xidkat=$_POST['xkat'];
	$gsql = mysqli_query($dblink,"SELECT * from tblkategori as a,tblbkat as b where a.id_kategori=b.id_kat and  b.id_kat='$xidkat'");
	while ($gr=mysqli_fetch_array($gsql,MYSQLI_ASSOC)){
		$xidbk = isset($gr['id_cek']) ? $gr['id_cek'] : '';
		$xa = isset($gr['a']) ? $gr['a'] : '';
		$xb = isset($gr['b']) ? $gr['b'] : '';
		$xc = isset($gr['c']) ? $gr['c'] : '';
		$xd = isset($gr['d']) ? $gr['d'] : '';
		$xe = isset($gr['e']) ? $gr['e'] : '';
		$xf = isset($gr['f']) ? $gr['f'] : '';
		$xg = isset($gr['g']) ? $gr['g'] : '';
		$xh = isset($gr['h']) ? $gr['h'] : '';
	}
	echo"<form name='formInputDataAlat' method='POST' enctype='multipart/form-data' action='control_data/proses_db_alat.php?modul=alat&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Tambah Data Peralatan</td>
				</tr>";
		echo"	<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xkat' required>" ;
							$sql = mysqli_query($dblink,"SELECT * from tblkategori where id_kategori='$xidkat'");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
								$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}
		echo"			</select>
					</td>
				</tr>
				<tr>
					<td width='15%'>Id Alat</td>
					<td width='10px' align='center'>:</td>
					<td><input class='form-control' type='teks' name='xid' required/></td>
				</tr>";
		echo"	<tr>
					<td>Lokasi</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' id='xlok' name='xlok' required>" ;
							echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
								$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td>Nama Peralatan</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xnama' required/></td>
				</tr>
				<tr>
					<td>Tahun Beli</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='date' name='xtgl' required/></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td align='center'>:</td>
					<td><textarea class='form-control' name='xdesc' rows='5' cols='93' required></textarea></td>
				</tr>";
		//Jumlah Port
		if($xa==1){
			echo"<tr>
					<td>Jumlah Port</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xjp' required/></td>
				</tr>";		
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xjp'/>";
		}
		//Nama WIFI
		if($xb==1){
			echo"<tr>
					<td>Nama Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xnwifi' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xnwifi'/>";
		}
		//Pass Wifi
		if($xc==1){
			echo"<tr>
					<td>Password Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xpwifi' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xpwifi'/>";
		}
		//Frekuensi
		if($xd==1){
			echo"<tr>
					<td>Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xfrek' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xfrek'/>";
		}
		//Lebar Frekuensi
		if($xe==1){
			echo"<tr>
					<td>Lebar Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xlfrek' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xlfrek'/>";
		}
		//RAM
		if($xf==1){
			echo"<tr>
					<td>Kapasitas RAM</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xram' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xram'/>";
		}
		//Disk
		if($xg==1){
			echo"<tr>
					<td>Hardisk</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xdisk' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xdisk'/>";
		}
		//Processor
		if($xh==1){
			echo"<tr>
					<td>Processor</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xpro' required/></td>
				</tr>";
		}else{
			echo"<input value='-' class='form-control' type='hidden' name='xpro'/>";
		}
		echo"	<tr>
					<td>Gambar</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='file' name='xgambar'></td>
				</tr>";
		echo"	<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>