<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	if($modul=='lokasi' AND $act=='input'){
		mysqli_query($dblink,"insert into tbllokasi values('$_POST[xid]',
									'$_POST[xkat]')");

		header("Location:../lokasi");
	}elseif($modul=='lokasi' AND $act=='edit'){
		$xpid=$_POST['xid'];
		$xkat=$_POST['xkat'];
		
		mysqli_query($dblink,"update tbllokasi set nama_lokasi='$xkat' where id_lokasi='$xpid'");
		
		header("Location:../lokasi");
	}elseif($modul=='lokasi' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		mysqli_query($dblink,"delete from tbllokasi where id_lokasi='$xkid'");
		
		header("Location:lokasi");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>