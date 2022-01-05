<?php
	include"../db_link.php";
	$act=$_GET['act'];
	$modul=$_GET['modul'];
	$tanggal=date("ymd");
	$jam=date("H:i:s");
	$stat="Normal";
	if($modul=='alat' AND $act=='input'){
		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
		$shuffle  = substr(str_shuffle($karakter), 0, 5);
		$lokasi_file	=$_FILES['xgambar']['tmp_name'];
		$nama_file		=$_FILES['xgambar']['name'];
		$xnewname = $shuffle.$nama_file;
		move_uploaded_file($lokasi_file,"../view_data/prod_img/$xnewname");
		
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
									'$stat',
									'$xnewname')");
									
		//mysqli_query($dblink,"insert into tblhistorilokasi(id_alat,id_lokasi_a) values('$_POST[xid]','$_POST[xlok]')");
									
		header("Location:../alat-1");
	}elseif($modul=='alat' AND $act=='edit'){
		$karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
		$shuffle  = substr(str_shuffle($karakter), 0, 5);
		$lokasi_file	=$_FILES['xgambar']['tmp_name'];
		$nama_file		=$_FILES['xgambar']['name'];
		$xnewname = $shuffle.$nama_file;
		move_uploaded_file($lokasi_file,"../view_data/prod_img/$xnewname");
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
		$xdimg=$_POST['xdgambar'];
		$xxcek=$_POST['xcek'];
		$xstscek=$_POST['xstatcek'];
		
		$target="../view_data/prod_img/$xxcek";
			
		if($nama_file==''){
			mysqli_query($dblink,"update tblalat set id_kategori='$xkat', id_lokasi='$xlok', nama_peralatan='$xnama' , tahun_beli='$xtgl', desc_alat='$xdesc', jlh_port='$xjp', nama_wifi='$xnwifi', pass_wifi='$xpwifi', frek_alat='$xfrek', l_frek_alat='$xlfrek', k_ram='$xram', k_hardisk='$xdisk', t_processor='$xpro' where id_alat='$xpid'");
		}else{
			mysqli_query($dblink,"update tblalat set id_kategori='$xkat', id_lokasi='$xlok', nama_peralatan='$xnama' , tahun_beli='$xtgl', desc_alat='$xdesc', jlh_port='$xjp', nama_wifi='$xnwifi', pass_wifi='$xpwifi', frek_alat='$xfrek', l_frek_alat='$xlfrek', k_ram='$xram', k_hardisk='$xdisk', t_processor='$xpro', p_img='$xnewname' where id_alat='$xpid'");
			
			if(file_exists($target)){
				unlink($target);
			}
		}
		
		if($xstscek=='Normal'){
			header("Location:../alat-1");
		}elseif($xstscek=='Rusak Sementara'){
			header("Location:../alat-2");	
		}else{
			header("Location:../alat-3");
		}
		
	}elseif($modul=='alat' AND $act=='hapus'){
		$xkid = $_GET['xxid'];
		$xxcek = $_GET['g'];
		
		$target="../view_data/prod_img/$xxcek";
		if(file_exists($target)){
			unlink($target);
		}
		
		mysqli_query($dblink,"delete from tblalat where id_alat='$xkid'");
		
		header("Location:alat-1");
	}else{
		echo"<center>Tidak Ada Modul</center>";
	}
?>