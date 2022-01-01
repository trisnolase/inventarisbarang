<?php
	$xkid = $_GET['id'];
	$sql = mysqli_query($dblink,"SELECT * from tblkategori where id_kategori='$xkid'");
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
			$xidk = isset($r['id_kategori']) ? $r['id_kategori'] : '';
			$xnk = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
		}
	$asql = mysqli_query($dblink,"SELECT * from tblbkat where id_kat='$xkid'");
		while ($ar=mysqli_fetch_array($asql,MYSQLI_ASSOC)){
			$xxidk = isset($ar['id_kat']) ? $ar['id_kat'] : '';
			$xxa = isset($ar['a']) ? $ar['a'] : '';
			$xxb = isset($ar['b']) ? $ar['b'] : '';
			$xxc = isset($ar['c']) ? $ar['c'] : '';
			$xxd = isset($ar['d']) ? $ar['d'] : '';
			$xxe = isset($ar['e']) ? $ar['e'] : '';
			$xxf = isset($ar['f']) ? $ar['f'] : '';
			$xxg = isset($ar['g']) ? $ar['g'] : '';
			$xxh = isset($ar['h']) ? $ar['h'] : '';
		}
	echo"$xxa $xxb $xxc $xxd $xxe $xxf $xxg $xxh";
	
	if($xxa==1){
		$a='checked';
	}else{
		$a=' ';
	}
	if($xxb==1){
		$b='checked';
	}else{
		$b=' ';
	}
	if($xxc==1){
		$c='checked';
	}else{
		$c=' ';
	}
	if($xxd==1){
		$d='checked';
	}else{
		$d=' ';
	}
	if($xxe==1){
		$e='checked';
	}else{
		$e=' ';
	}
	if($xxf==1){
		$f='checked';
	}else{
		$f=' ';
	}
	if($xxg==1){
		$g='checked';
	}else{
		$g=' ';
	}
	if($xxh==1){
		$h='checked';
	}else{
		$h=' ';
	}
	
	echo"<form name='formEditKategori' method='POST' action='control_data/proses_db_kategori.php?modul=kategori&act=edit'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Edit Data Kategori</td>
				</tr>
				<tr>
					<td width='15%'>Id Kategori</td>
					<td width='10px' align='center'>:</td>
					<td><input class='form-control' value='$xidk' type='teks' name='xid' readonly/></td>
				</tr>
				<tr>
					<td>Kategori</td>
					<td align='center'>:</td>
					<td><input class='form-control' value='$xnk' type='teks' name='xkat' /></td>
				</tr>
				<tr>
					<td>Detail Tambahan</td>
					<td align='center'>:</td>
					<td>
						<input type='checkbox' name='xjp' value='1' $a> Jumlah Port
						<input type='checkbox' name='xnw' value='1' $b> Nama WIFI
						<input type='checkbox' name='xpw' value='1' $c> Password WIFI
						<input type='checkbox' name='xfa' value='1' $d> Frekuensi Alat
						<input type='checkbox' name='xlf' value='1' $e> Lebar Frekuensi
						<input type='checkbox' name='xkr' value='1' $f> Kapasitas RAM
						<input type='checkbox' name='xkh' value='1' $g> Kapasitas Hardisk
						<input type='checkbox' name='xpr' value='1' $h> Processor
					</td>
				</tr>
				<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>