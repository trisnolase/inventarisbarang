<?php
	echo"<form name='formInputDatalokasi' method='POST' action='control_data/proses_db_lokasi.php?modul=lokasi&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%'>
				<tr>
					<td colspan='3' align='center'><b>Form Data lokasi</b></td>
				</tr>
				<tr>
					<td width='15%'>Id lokasi</td>
					<td width='10px' align='center'>:</td>
					<td><input type='teks' name='xid' size='100%' /></td>
				</tr>
				<tr>
					<td>Nama lokasi</td>
					<td align='center'>:</td>
					<td><input type='teks' name ='xkat' size='100%' /></td>
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