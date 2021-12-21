<?php
	include"db_link.php";
	$xkid = $_GET['id'];
	$sql = mysqli_query($dblink,"SELECT * from tblkategori where id_kategori='$xkid'");
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
		}
	echo"<form name='formEditKategori' method='POST' action='control_data/proses_db_gangguan.php?modul=gangguan&act=edit'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'>Form Edit Data Kategori</td>
				</tr>
				<tr>
					<td width='15%'>Id Kategori</td>
					<td width='10px' align='center'>:</td>
					<td><input value='$xidk' type='teks' name='xid' size='100%' readonly/></td>
				</tr>
				<tr>
					<td>Kategori</td>
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