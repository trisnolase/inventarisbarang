<?php
	error_reporting(0);
	include"db_link.php";
?>
<!-- <html>
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
<body style='background-color: #ebecf0;'>
	<table class='table'>
		<tr>
			<td colspan='2' valign='middle' align='center' style='background-color:#9dd9f3; height:70px; color:#000'>Sistem Informasi Peralatan Jaringan</td>
		</tr>
		<tr>
			<td width='200px'><div>
					<a class='nav-link' href='alat-1'>Data Peralatan</a>
					<a class='nav-link' href='kategori'>Data Kategori</a>
					<a class='nav-link' href='lokasi'>Data Lokasi</a>
					<a class='nav-link' href='gangguan'>Data Gangguan</a>
					<a class='nav-link' href='penanganan'>Data Penanganan</a>
					<a class='nav-link' href='lapor'>Lapor Gangguan</a>
					<a class='nav-link' href='mutasi'>Mutasi Alat</a>
			</div></td>
			
			<td><div>
				<?php
					$slink=$_REQUEST['xlink'];
					if(isset($slink)){
						include"$slink";
					}else{
						include"view_data/home.php";
					}
				?>
			</div></td>
		</tr>
	</table>
</body>
</html> -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Inventarisasi Peralatan Jaringan Berbasis Website</title>
		<link rel="stylesheet" type="text/css" href="view_data/style/style.css"/>
		<link rel="stylesheet" type="text/css" href="view_data/style/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="view_data/style/css/select2.min.css">
		<script type="text/javascript" src="view_data/style/js/jquery.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/select2.min.js"></script>
		<script type="text/javascript" src="view_data/style/js/jquery.js"></script>
		<script type="text/javascript" src="view_data/style/js/bootstrap.js"></script>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Menu</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="alat-1">Data Peralatan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="kategori">Data Kategori</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="lokasi">Data Lokasi</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="gangguan">Data Gangguan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="penanganan">Data Penanganan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="lapor">Lapor Gangguan</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="mutasi">Mutasi Alat</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">...</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item"><a class="nav-link" href="#!">Link</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Action</a>
                                        <a class="dropdown-item" href="#!">Another action</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Something else here</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid"><br>
					<?php
						$slink=$_REQUEST['xlink'];
						if(isset($slink)){
							include"$slink";
						}else{
							include"view_data/home.php";
						}
					?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>