<?php
	$dblink = new mysqli("localhost","root","","dbinventarisperalatan");
	if ($dblink -> connect_error) {
	  echo "Failed to connect to MySQL: " . $dblink -> connect_error;
	  exit();
	}
?>