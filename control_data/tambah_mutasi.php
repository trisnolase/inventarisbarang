<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
	
	</head>
<body><center>
<?php
	include"db_link.php";
	
	echo"<form name='formInputDataMutasi' method='POST' action='control_data/proses_db_mutasi.php?modul=mutasi&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Data Mutasi Peralatan</td>
				</tr>";
		echo"	<tr>
					<td width='25%'>Nama Peralatan</td>
					<td width='20px' align='center'>:</td>
					<td>
						<select class='select2' name='xnama' id='xnama' style='width:750px' required>" ;
							echo"<option value=''></option>";
							$query = "SELECT * from tblalat,tbllokasi where tblalat.id_lokasi=tbllokasi.id_lokasi AND status_alat='Normal'";
							$result = $dblink->query($query);
								while($data = $result->fetch_array(MYSQLI_ASSOC)){
									$xna="".$data['nama_peralatan']."";
									$xida="".$data['id_alat']."";
									$xidlok="".$data['id_lokasi']."";
									$xnamlok="".$data['nama_lokasi']."";
									echo "<option value=$xida>$xida | $xna | $xnamlok</option>";
								}
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td>Lokasi Baru</td>
					<td align='center'>:</td>
					<td>
						<select class='select2' name='xlb' id='xlb' style='width:750px' required>" ;
							
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal' onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>
<script>
	$(document).ready(function() {
		$('.select2').select2()
	});
	$("#xnama").change(function() {
		var postForm = {
			'id': document.getElementById("xnama").value,
			'op': 1
		};
		$.ajax({
			type: "post",
			url: "pilihan_mutasi.php",
			data: postForm,
			success: function(data) {
				$("#xlb").html(data);
			}
		});
	});
</script>

</body>
</html>