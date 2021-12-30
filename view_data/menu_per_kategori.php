<?php
	$sql = mysqli_query($dblink,"SELECT * from tblkategori");
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnmk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
		echo"<a href='view_data/data_per_kategori.php&xxid=$xidk'>$xnmk</a>";
		}
?>