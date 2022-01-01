<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Inventarisasi Peralatan Jaringan Berbasis Website</title>
		<link rel="stylesheet" type="text/css" href="view_data/style/style.css"/>
		<link rel="stylesheet" type="text/css" href="view_data/style/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="view_data/style/css/select2.min.css">
		<script type="text/javascript" src="view_data/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/select2.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/jquery.js"></script>
		<script type="text/javascript" src="view_data/style/js/bootstrap.js"></script>
	</head>
<body class="bgbody"><center>
<?php
	include"db_link.php";
	
	echo"<form name='formInputDataMutasi' method='POST' action=''>
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
							$query = "SELECT * from tblalat";
							$result = $dblink->query($query);
								while($data = $result->fetch_array(MYSQLI_ASSOC)){
									$xna="".$data['nama_peralatan']."";
									$xida="".$data['id_alat']."";
									$xidlok="".$data['id_lokasi']."";
									echo "<option value=$xida>$xida $xna $xidlok</option>";
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
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'/>
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