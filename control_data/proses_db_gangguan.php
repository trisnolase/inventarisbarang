<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	$xrs="Rusak Sementara";
	$xstat="B";
	if($modul=='gangguan' AND $act=='input'){
		mysqli_query($dblink,"insert into tblgangguan(id_alat,tgl_gangguan,ciri,deskripsi_gangguan,status) values('$_POST[xnalat]',
									'$tanggal',
									'$_POST[xcga]',
									'$_POST[xdga]',
									'$xstat')");
		$xid=$_POST['xnalat'];
		mysqli_query($dblink,"update tblalat set status_alat='$xrs' where id_alat='$xid'");
		
		header("Location:../lokasi");
	}elseif($modul=='gangguan' AND $act=='edit'){
		$xpid=$_POST['xid'];
		$xkat=$_POST['xkat'];
		
		mysqli_query($dblink,"update tblgangguan set nama_gangguan='$xkat' where id_gangguan='$xpid'");
		
		header("Location:../lokasi");
	}elseif($modul=='gangguan' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		mysqli_query($dblink,"delete from tblgangguan where id_gangguan='$xkid'");
		
		header("Location:lokasi");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>