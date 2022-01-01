<?php
	include"db_link.php";
    $gid = $_POST['id'];
    $option = $_POST['op'];
    if($option == 1){
		echo"<option value=''></option>";
		$query = "SELECT * from tblalat where id_alat='$gid'";
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
					echo "<option value='$xxidlok'>$xnalok</option>";
				}
    }else{

    }
?>