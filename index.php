<?php
	error_reporting(0);
	include"db_link.php";
?>
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
        <link href="menu_assets/css/styles.css" rel="stylesheet" />
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
            <div style='display:block; position:fixsed;'  id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">...</button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <div style="display:block; position: absolute; right: 0; padding-right:30px;">Sistem Informasi Inventaris Peralatan Jaringan</div>
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
        <script src="menu_assets/js/scripts.js"></script>
    </body>
</html>