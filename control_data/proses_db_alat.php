<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	if($modul=='alat' AND $act=='input'){
		mysqli_query($dblink,"insert into tblalat values('$_POST[xid]',
									'$_POST[xkat]',
									'$_POST[xlok]',
									'$_POST[xnama]',
									'$_POST[xtgl]',
									'$_POST[xdesc]',
									'$_POST[xjp]',
									'$_POST[xnwifi]',
									'$_POST[xpwifi]',
									'$_POST[xfrek]',
									'$_POST[xlfrek]',
									'$_POST[xram]',
									'$_POST[xdisk]',
									'$_POST[xpro]',
									'$stat')");

		header("Location:../index.php?xlink=view_data/data_alat.php");
	}elseif($modul=='alat' AND $act=='edit'){
		$xpid=$_POST['xid'];
		$xkat=$_POST['xkat'];
		$xlok=$_POST['xlok'];
		$xnama=$_POST['xnama'];
		$xtgl=$_POST['xtgl'];
		$xdesc=$_POST['xdesc'];
		$xjp=$_POST['xjp'];
		$xnwifi=$_POST['xnwifi'];
		$xpwifi=$_POST['xpwifi'];
		$xfrek=$_POST['xfrek'];
		$xlfrek=$_POST['xlfrek'];
		$xram=$_POST['xram'];
		$xdisk=$_POST['xdisk'];
		$xpro=$_POST['xpro'];
		
		mysqli_query($dblink,"update tblalat set id_kategori='$xkat', id_lokasi='$xlok', nama_peralatan='$xnama' , tahun_beli='$xtgl', desc_alat='$xdesc', jlh_port='$xjp', nama_wifi='$xnwifi', pass_wifi='$xpwifi', frek_alat='$xfrek', l_frek_alat='$xlfrek', k_ram='$xram', k_hardisk='$xdisk', t_processor='$xpro' where id_alat='$xpid'");
		
		header("Location:../index.php?xlink=view_data/data_alat.php");
	}elseif($modul=='alat' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		mysqli_query($dblink,"delete from tblalat where id_alat='$xkid'");
		
		header("Location:../index.php?xlink=view_data/data_alat.php");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>