<?php
	include"db_link.php";
	echo"<form name='formInputDataMutasi' method='POST' action='control_data/proses_db_mutasi.php?modul=mutasi&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'>Form Data Mutasi Peralatan</td>
				</tr>";
		echo"	<tr>
					<td>Nama Peralatan</td>
					<td align='center'>:</td>
					<td>
						<select name='xnama' required>" ;
							echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tblalat");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_alat']) ? $r['id_alat'] : '';
								$xnk = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td>Lokasi Baru</td>
					<td align='center'>:</td>
					<td>
						<select name='xlb' required>" ;
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
					<td colspan='3' align='center'>
						<input type='submit' name='ckirim' value='Proses Mutasi' />
						<input type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</li></td>
				</tr>
			</table>
		</form>";
?>