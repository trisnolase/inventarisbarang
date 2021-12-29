<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	$xrp="Rusak Permanen";
	$xnr="Normal";
	$xstat="S";
	if($modul=='penanganan' AND $act=='input'){
		mysqli_query($dblink,"insert into tblpenanganan(id_gangguan,tgl_penanganan,teknisi,penyelesaian,hasil,rekomendasi) values('$_POST[xidga]',
									'$tanggal',
									'$_POST[xtek]',
									'$_POST[xpeny]',
									'$_POST[xhasil]',
									'$_POST[xrekom]')");
		$xid=$_POST['xnalat'];
		$xxid=$_POST['xida'];
		$xgid=$_POST['xidga'];
		mysqli_query($dblink,"update tblalat set status_alat='$_POST[xhasil]' where id_alat='$xxid'");
		mysqli_query($dblink,"update tblgangguan set status='$xstat' where id_gangguan='$xgid'");
		
		header("Location:../penanganan");
	}elseif($modul=='penanganan' AND $act=='edit'){
		$xpid=$_POST['xid'];
		$xkat=$_POST['xkat'];
		
		mysqli_query($dblink,"update tblpenanganan set nama_penanganan='$xkat' where id_penanganan='$xpid'");
		
		header("Location:../penanganan");
	}elseif($modul=='penanganan' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		mysqli_query($dblink,"delete from tblpenanganan where id_penanganan='$xkid'");
		
		header("Location:penanganan");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>