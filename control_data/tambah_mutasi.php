<?php
	include"db_link.php";
	echo"<form name='formInputDataMutasi' method='POST' action='control_data/proses_db_mutasi.php?modul=mutasi&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Data Mutasi Peralatan</td>
				</tr>";
		echo"	<tr>
					<td>Nama Peralatan</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xnama' required>" ;
							echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tblalat where status_alat='Normal'");
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
						<select class='form-control' name='xlb' required>" ;
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
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>