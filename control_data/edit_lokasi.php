<?php
	include"db_link.php";
	$xkid = $_GET['id'];
	$sql = mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi='$xkid'");
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
			$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
		}
	echo"<form name='formEditlokasi' method='POST' action='control_data/proses_db_lokasi.php?modul=lokasi&act=edit'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'>Form Edit Data lokasi</td>
				</tr>
				<tr>
					<td width='15%'>Id lokasi</td>
					<td width='10px' align='center'>:</td>
					<td><input value='$xidk' type='teks' name='xid' size='100%' readonly/></td>
				</tr>
				<tr>
					<td>lokasi</td>
					<td align='center'>:</td>
					<td><input value='$xnk' type='teks' name ='xkat' size='100%' /></td>
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