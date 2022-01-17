<?php
	// error_reporting(0);
	include"db_link.php";

	$sql = mysqli_query($dblink,"SELECT
	Count(masyarakat.id_ktp) AS jlh_ibu, masyarakat.nama, masyarakat.id_ktp,layanan.3 as min_l_3
	FROM
		masyarakat
	Inner Join layanan ON masyarakat.id_ktp = layanan.`1` AND masyarakat.id_ktp = layanan.`2` AND masyarakat.id_ktp = layanan.`3`
	group by masyarakat.id_ktp;");
		$i=0;
		$ti=0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$lay = isset($r['jlh_ibu']) ? $r['jlh_ibu'] : '';
			$namas = isset($r['nama']) ? $r['nama'] : '';
			$ktps = isset($r['id_ktp']) ? $r['id_ktp'] : '';
			$minl3 = isset($r['min_l_3']) ? $r['min_l_3'] : '';

			if($lay >=1){
				$i++;
				// $total_ibu = mysqli_num_rows($lay);
				echo"- $namas - $ktps<br>";
			}elseif($lay >=2){
				$ti++;
				echo"Syarat Layanan Tidak Terpenuhi<br>";
			}
		}
		echo"<br>Total ibu dengan pelayanan terpenuhi = $i";
		// echo"<br>Total ibu dengan pelayanan tidak terpenuhi = $ti";
?>