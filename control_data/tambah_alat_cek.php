<?php
	echo"<form name='formCekKategori' method='POST' enctype='multipart/form-data' action='index.php?xlink=control_data/tambah_alat_kt.php'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Tambah Data Peralatan</td>
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
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Lanjut' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
			</table>
		</form>";
?>