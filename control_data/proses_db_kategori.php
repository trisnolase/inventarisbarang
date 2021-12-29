<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	if($modul=='kategori' AND $act=='input'){
		mysqli_query($dblink,"insert into tblkategori values('$_POST[xid]',
									'$_POST[xkat]')");

		header("Location:../kategori");
	}elseif($modul=='kategori' AND $act=='edit'){
		$xpid=$_POST['xid'];
		$xkat=$_POST['xkat'];
		
		mysqli_query($dblink,"update tblkategori set nama_kategori='$xkat' where id_kategori='$xpid'");
		
		header("Location:../kategori");
	}elseif($modul=='kategori' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		mysqli_query($dblink,"delete from tblkategori where id_kategori='$xkid'");
		
		header("Location:kategori");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>