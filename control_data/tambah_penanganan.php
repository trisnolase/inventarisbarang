<?php
	include"db_link.php";
	$xkid = $_GET['id'];
	$sql = mysqli_query($dblink,"SELECT * from tblgangguan where id_gangguan='$xkid'");
	while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
		$xidk = isset($r['id_gangguan']) ? $r['id_gangguan'] : '';
		$xidalat = isset($r['id_alat']) ? $r['id_alat'] : '';
		$xdes = isset($r['deskripsi_gangguan']) ? $r['deskripsi_gangguan'] : '';
	}
	echo"<form name='formInputDataPenanganan' method='POST' action='control_data/proses_db_penanganan.php?modul=penanganan&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Input Laporan Data Penanganan</td>
				</tr>";
	echo"		<tr>
					<td width='15%'>ID Gangguan Alat</td>
					<td align='center'>:</td>
					<td>
						<input class='form-control' type='teks' name ='xidga' size='100%' value='$xidk' readonly/>
						<input type='hidden' name ='xida' size='100%' value='$xidalat' readonly/>
					</td>
				</tr>
				<tr>
					<td width='15%'>Deskripsi Gangguan</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='text' name ='xdesg' size='100%' value='$xdes' readonly/></td>
				</tr>
				<tr>
					<td width='15%'>Tanggal Penanganan</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='date' name ='xtgl' size='100%' /></td>
				</tr>
				<tr>
					<td width='15%'>Teknisi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name ='xtek' size='100%' /></td>
				</tr>
				<tr>
					<td width='15%'>Penyelesaian</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name ='xpeny' size='100%' /></td>
				</tr>
				<tr>
					<td width='15%'>Hasil</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xhasil'>
							<option value='Normal'>Berhasil Diperbaiki</option>
							<option value='Rusak Pemanen'>Tidak Berhasil Diperbaiki</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Rekomendasi</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name ='xrekom' size='100%' /></td>
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