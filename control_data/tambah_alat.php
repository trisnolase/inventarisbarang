<?php
	echo"<form name='formInputDataAlat' method='POST' enctype='multipart/form-data' action='control_data/proses_db_alat.php?modul=alat&act=input'>
			<table border='0' cellspacing='0' cellpadding='0px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Tambah Data Peralatan</td>
				</tr>
				<tr>
					<td width='15%'>Id Alat</td>
					<td width='10px' align='center'>:</td>
					<td><input class='form-control' type='teks' name='xid' required/></td>
				</tr>";
		echo"	<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xkat' required>" ;
							echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tblkategori");
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
	echo"			<tr>
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
				</tr>
				<tr>
					<td>Jumlah Port</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xjp' required/></td>
				</tr>
				<tr>
					<td>Nama Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xnwifi' required/></td>
				</tr>
				<tr>
					<td>Password Wifi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xpwifi' required/></td>
				</tr>
				<tr>
					<td>Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xfrek' required/></td>
				</tr>
				<tr>
					<td>Lebar Frekuensi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xlfrek' required/></td>
				</tr>
				<tr>
					<td>RAM</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xram' required/></td>
				</tr>
				<tr>
					<td>Hardisk</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xdisk' required/></td>
				</tr>
				<tr>
					<td>Processor</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xpro' required/></td>
				</tr>
				<tr>
					<td>Gambar</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='file' name='xgambar'></td>
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