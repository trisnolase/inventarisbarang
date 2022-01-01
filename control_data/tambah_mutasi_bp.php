<?php
	include"db_link.php";
	
	echo"<script language='javascript'>
		function buatCookie(name,value,expiredays){
			var exdate=new Date();
			exdate.setDate(exdate.getDate()+expiredays);
			document.cookie = name+ '=' +escape(value)+
			((expiredays==null) ? '' : ';expires='+exdate.toGMTString());
		}
		function pilihAlat(combobox){
			var isi = combobox.options[combobox.selectedIndex].value;
			buatCookie('xcalat',isi,1);
			document.combobox.submit()
		}
	</script>";
	
	$mxcalat = $_COOKIE['xcalat'];
	
	echo"<form name='formInputDataMutasi' method='POST' action='control_data/proses_db_mutasi.php?modul=mutasi&act=input'>
			<table border='0' cellspacing='0' cellpadding='8px' width='100%' class='form_table'>
				<tr class='table_head'>
					<td colspan='3' align='center'>Data Mutasi Peralatan</td>
				</tr>";
		echo"	<tr>
					<td width='25%'>Nama Peralatan</td>
					<td width='20px' align='center'>:</td>
					<td>
						<select class='form-control' name='xnama' id='xnama' onchange='javascript:pilihAlat(this)' style='width:750px' required>" ;
							echo"<option value='xcalat' selected></option>";
							$query = "SELECT * from tblalat where status_alat='Normal'";
							$result = $dblink->query($query);
								while($data = $result->fetch_array(MYSQLI_ASSOC)){
									$xna="".$data['nama_peralatan']."";
									$xida="".$data['id_alat']."";
									$xidlok="".$data['id_lokasi']."";
									if($mxcalat == $xida){
										$select = "selected";
									}else{
										$select = "";
									}
									echo "<option value='$xida' $select>$xida $xna</option>";
								}
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td>Lokasi Baru</td>
					<td align='center'>:</td>
					<td>
						<select class='form-control' name='xlb' id='xlb' style='width:750px' required>" ;
							echo"<option value=''></option>";
							$query = "SELECT * from tblalat where id_alat='$mxcalat'";
							$result = $dblink->query($query);
								while($data = $result->fetch_array(MYSQLI_ASSOC)){
									$xidal="".$data['id_alat']."";
									$xidlok="".$data['id_lokasi']."";
								}
							$xquery = "SELECT * from tbllokasi where id_lokasi<>'$xidlok' GROUP BY id_lokasi";
								$xresult = $dblink->query($xquery);
									while($xdata = $xresult->fetch_array(MYSQLI_ASSOC)){
										$xnalok="".$xdata['nama_lokasi']."";
										$xxidlok="".$xdata['id_lokasi']."";
										echo "<option value='$xxidlok'>$xnalok $gid</option>";
									}
							/*echo"<option value=''></option>";
							$sql = mysqli_query($dblink,"SELECT * from tbllokasi");
							while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
								$xidk = isset($r['id_lokasi']) ? $r['id_lokasi'] : '';
								$xnk = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
								  echo "<option value=$xidk>$xnk</option> ";
							}*/
		echo"			</select>
					</td>
				</tr>";
		echo"	<tr>
					<td colspan='3' align='center'>
						<input class='btn btn-success btn-sm' type='submit' name='ckirim' value='Simpan' />
						<input class='btn btn-warning btn-sm' type='reset' name='creset' value='Batal'  onClick=history.go(-1); />
					</td>
				</tr>
			</table>
		</form>";
?>