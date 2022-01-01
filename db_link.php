<?php
	/*$dblink = new mysqli("localhost","root","","dbinventarisperalatan");
	if ($dblink -> connect_error) {
	  echo "Failed to connect to MySQL: " . $dblink -> connect_error;
	  exit();
	}*/
	
	$dblink = mysqli_connect("localhost","root","","dbinventarisperalatan");
 
    if (mysqli_connect_errno()){
        echo "Koneksi database gagal : " . mysqli_connect_error();
    }
?>