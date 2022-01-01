<?php
	echo"<form name='formInputDataKategori' method='POST' action='control_data/proses_db_kategori.php?modul=kategori&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Form Data Kategori</td>
				</tr>
				<tr>
					<td width='15%'>Id kategori</td>
					<td width='10px' align='center'>:</td>
					<td><input class='form-control' type='teks' name='xid' required/></td>
				</tr>
				<tr>
					<td>Nama Kategori</td>
					<td align='center'>:</td>
					<td><input class='form-control' type='teks' name='xkat' required/></td>
				</tr>
				<tr>
					<td>Detail Tambahan</td>
					<td align='center'>:</td>
					<td>
						<input type='checkbox' name='xjp' value='1'> Jumlah Port
						<input type='checkbox' name='xnw' value='1'> Nama WIFI
						<input type='checkbox' name='xpw' value='1'> Password WIFI
						<input type='checkbox' name='xfa' value='1'> Frekuensi Alat
						<input type='checkbox' name='xlf' value='1'> Lebar Frekuensi
						<input type='checkbox' name='xkr' value='1'> Kapasitas RAM
						<input type='checkbox' name='xkh' value='1'> Kapasitas Hardisk
						<input type='checkbox' name='xpr' value='1'> Processor
					</td>
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