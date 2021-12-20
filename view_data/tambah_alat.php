<?php
	include"db_link.php";
	echo"<form name='formInputDataAlat' method='POST' action='control_data/proses_db_alat.php?modul=alat&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'><b>Form Data Peralatan</b></td>
				</tr>
				<tr>
					<td width='15%'>Id Alat</td>
					<td width='10px' align='center'>:</td>
					<td><input type='teks' name='xid' size='100%' /></td>
				</tr>";
				/*<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xkat' size='100%' /></td>
				</tr>";*/
		echo"	<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td>
						<select name='xkat'>" ;
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
				/*<tr>
					<td>Lokasi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xlok' size='100%' /></td>
				</tr>*/
		echo"	<tr>
					<td>Lokasi</td>
					<td align='center'>:</td>
					<td>
						<select name='xlok'>" ;
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
					<td><input type='teks' name ='xnama' size='100%' /></td>
				</tr>
				<tr>
					<td>Tahun Beli</td>
					<td align='center'>:</td>
					<td><input type='date' name ='xtgl' size='100%' /></td>
				</tr>
				<tr>
					<td>Deskripsi</td>
					<td align='center'>:</td>
					<td><textarea name='xdesc' rows='5' cols='93'></textarea></td>
				</tr>
				<tr>
					<td>Jumlah Port</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xjp' size='100%' /></td>
				</tr>
				<tr>
					<td>Nama Wifi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xnwifi' size='100%' /></td>
				</tr>
				<tr>
					<td>Password Wifi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xpwifi' size='100%' /></td>
				</tr>
				<tr>
					<td>Frekuensi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xfrek' size='100%' /></td>
				</tr>
				<tr>
					<td>Lebar Frekuensi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xlfrek' size='100%' /></td>
				</tr>
				<tr>
					<td>RAM</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xram' size='100%' /></td>
				</tr>
				<tr>
					<td>Hardisk</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xdisk' size='100%' /></td>
				</tr>
				<tr>
					<td>Processor</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xpro' size='100%' /></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input type='submit' name='ckirim' value='Simpan' />
						<input type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</li></td>
				</tr>
			</table>
		</form>";
?>