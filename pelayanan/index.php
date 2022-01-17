<?php
	// error_reporting(0);
	include"db_link.php";

	$sqlm = mysqli_query($dblink,"SELECT * from masyarakat");
	$t=0;
	$td=0;
	while ($rm=mysqli_fetch_array($sqlm,MYSQLI_ASSOC)){
		$ktpsm = isset($rm['id_ktp']) ? $rm['id_ktp'] : '';
			echo"$ktpsm<br>";
	
		$sql = mysqli_query($dblink,"SELECT
			masyarakat.id_ktp, masyarakat.nama, count(layanan.ly1) as min_l_1
		FROM
				masyarakat
			Inner Join layanan ON masyarakat.id_ktp = layanan.ly1 and masyarakat.id_ktp = layanan.id_ktp
		where masyarakat.id_ktp='$ktpsm'
		group by masyarakat.id_ktp");
			while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
				$lay = isset($r['jlh_ibu']) ? $r['jlh_ibu'] : '';
				$namas = isset($r['nama']) ? $r['nama'] : '';
				$ktps = isset($r['id_ktp']) ? $r['id_ktp'] : '';
				$minl1 = isset($r['min_l_1']) ? $r['min_l_1'] : '';
					echo"- $namas - L1 = $minl1<br>";
			} echo"<br>";
		
		$sql2 = mysqli_query($dblink,"SELECT
			masyarakat.id_ktp, masyarakat.nama, count(layanan.ly2) as min_l_2
		FROM
				masyarakat
			left Join layanan ON masyarakat.id_ktp = layanan.ly2 and masyarakat.id_ktp = layanan.id_ktp
		where masyarakat.id_ktp='$ktpsm'
		group by masyarakat.id_ktp");
			while ($r2=mysqli_fetch_array($sql2,MYSQLI_ASSOC)){
				$lay2 = isset($r2['jlh_ibu']) ? $r2['jlh_ibu'] : '';
				$namas2 = isset($r2['nama']) ? $r2['nama'] : '';
				$ktps2 = isset($r2['id_ktp']) ? $r2['id_ktp'] : '';
				$minl2 = isset($r2['min_l_2']) ? $r2['min_l_2'] : '';
					echo"- $namas2 - L2 = $minl2<br>";
			} echo"<br>";

		$sql3 = mysqli_query($dblink,"SELECT
			masyarakat.id_ktp, masyarakat.nama, count(layanan.ly3) as min_l_3
		FROM
				masyarakat
			left Join layanan ON masyarakat.id_ktp = layanan.ly3 and masyarakat.id_ktp = layanan.id_ktp
		where masyarakat.id_ktp='$ktpsm'
		group by masyarakat.id_ktp");
			while ($r3=mysqli_fetch_array($sql3,MYSQLI_ASSOC)){
				$lay3 = isset($r3['jlh_ibu']) ? $r3['jlh_ibu'] : '';
				$namas3 = isset($r3['nama']) ? $r3['nama'] : '';
				$ktps3 = isset($r3['id_ktp']) ? $r3['id_ktp'] : '';
				$minl3 = isset($r3['min_l_3']) ? $r3['min_l_3'] : '';
					echo"- $namas3 - L3 = $minl3<br>";
			} echo"<br>";


			if($minl1 >="1" and $minl2 >="1" and $minl3 >="2"){
				$t++;
				// echo"$t";
				Echo"Syarat Pelayanan Terpenuhi<br><br>";
			}else{
				$td++;
				// echo"$td";
				// Echo"Syarat Pelayanan Tidak Terpenuhi<br><br>";
			}
	}
	
	echo"<h2>$t orang memenuhi syarat pelayanan</h2>";
	echo"<h2>$td orang tidak memenuhi syarat pelayanan</h2>";
?>