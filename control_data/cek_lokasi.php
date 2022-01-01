<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="stylesheet" type="text/css" href="view_data/style/css/select2.min.css">
		<script type="text/javascript" src="view_data/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/select2.min.js"></script>
	</head>
<body>
Cek Lokasi
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
<html>