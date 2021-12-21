<?php
	include"db_link.php";
	echo"<form name='formInputDataGangguan' method='POST' action='control_data/proses_db_gangguan.php?modul=gangguan&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'>Form Input Laporan Gangguan Alat</td>
				</tr>";
		echo"	<tr>
					<td>Nama Alat</td>
					<td align='center'>:</td>
					<td>
						<select name='xnalat'>" ;
							echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tblalat where status_alat='Normal'");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_alat']) ? $r['id_alat'] : '';
								$xnm = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
								  echo "<option value=$xidk>$xnm</option> ";
							}
		echo"			</select>
					</td>
				</tr>";
	echo"		<tr>
					<td width='15%'>Ciri - Ciri Gangguan Alat</td>
					<td align='center'>:</td>
					<td><textarea name='xcga' rows='5' cols='93'></textarea></td>
				</tr>
				<tr>
					<td>Deskripsi Gangguan Alat</td>
					<td align='center'>:</td>
					<td><textarea name='xdga' rows='5' cols='93'></textarea></td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input type='submit' name='ckirim' value='Lapor' />
						<input type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</li></td>
				</tr>
			</table>
		</form>";
?>