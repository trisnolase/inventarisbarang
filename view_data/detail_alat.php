<?php
	$xkode=$_GET['id'];
	$sql = mysqli_query($dblink,"SELECT * from tblalat,tblkategori,tbllokasi
		WHERE
			tblalat.id_kategori =  tblkategori.id_kategori AND
			tblalat.id_lokasi =  tbllokasi.id_lokasi AND
			tblalat.id_alat='$xkode'");
		$i =0;
		while ($r=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
			$xnama = isset($r['nama_peralatan']) ? $r['nama_peralatan'] : '';
			$xlokasi = isset($r['nama_lokasi']) ? $r['nama_lokasi'] : '';
			$xid = isset($r['id_alat']) ? $r['id_alat'] : '';
			$xkategori = isset($r['nama_kategori']) ? $r['nama_kategori'] : '';
			$xtahun = isset($r['tahun_beli']) ? $r['tahun_beli'] : '';
			$xdesc = isset($r['desc_alat']) ? $r['desc_alat'] : '';
			$xjlhport = isset($r['jlh_port']) ? $r['jlh_port'] : '';
			$xnamawifi = isset($r['nama_wifi']) ? $r['nama_wifi'] : '';
			$xpasswifi = isset($r['pass_wifi']) ? $r['pass_wifi'] : '';
			$xfrek = isset($r['frek_alat']) ? $r['frek_alat'] : '';
			$xram = isset($r['k_ram']) ? $r['k_ram'] : '';
			$xdisk = isset($r['k_hardisk']) ? $r['k_hardisk'] : '';
			$xprocessor = isset($r['t_processor']) ? $r['t_processor'] : '';
			$xstatus = isset($r['status_alat']) ? $r['status_alat'] : '';
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor=#6ac5fe>
				<td align='center' colspan='4'>Detail Data Peralatan</td>
			<tr>
			<tr>
				<td align=''>Id Alat</td>
				<td align=''>$xid</td>
				<td align=''>Nama WIFI</td>
				<td align=''>$xnamawifi</td>
			<tr>
			</tr>
				<td align=''>Nama Alat</td>
				<td>$xnama</td>
				<td align=''>Password WIFI</td>
				<td align=''>$xpasswifi</td>
			<tr>
			</tr>
				<td align=''>Lokasi</td>
				<td>$xlokasi</td>
				<td align=''>Frekuensi</td>
				<td align=''>$xfrek</td>
			<tr>
			</tr>
				<td align=''>Kategori</td>
				<td>$xkategori</td>
				<td align=''>Kapasitas RAM</td>
				<td align=''>$xram</td>
			<tr>
			</tr>
				<td align=''>Tahun Pembelian</td>
				<td>$xtahun</td>
				<td align=''>Kapasitas Hardisk</td>
				<td align=''>$xdisk</td>
			<tr>
			</tr>
				<td align=''>Deskripsi</td>
				<td align=''>$xdesc</td>
				<td align=''>Kapasitas Processor</td>
				<td align=''>$xprocessor</td>
			<tr>
			</tr>
				<td align=''>Jumlah Port</td>
				<td align=''>$xjlhport</td>
				<td align=''>Status</td>
				<td align=''>$xstatus</td>
			</tr>
				<td colspan='4' align='right'>";
				if($xstatus=='Normal'){
					echo"<a href='alat' class='btn btn-primary btn-sm'>Kembali</a>";
				}elseif($xstatus=='Rusak Sementara'){
					echo"<a href='index.php?xlink=view_data/data_alat_rusak.php&act=1' class='btn btn-primary btn-sm'>Kembali</a>";
				}else{
					echo"<a href='index.php?xlink=view_data/data_alat_rusak.php&act=0' class='btn btn-primary btn-sm'>Kembali</a>";
				}
			echo"</td>
			</tr>";
		}
		echo"</table>";
		
	$sqll = mysqli_query($dblink,"SELECT * from tblhistorilokasi,tblalat,tbllokasi WHERE tblhistorilokasi.id_alat=tblalat.id_alat AND tbllokasi.id_lokasi=tblalat.id_lokasi AND tblhistorilokasi.id_lokasi_b<>'' AND tblalat.id_alat='$xkode' order by tblhistorilokasi.id_histori DESC");
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor='#b7ffbf'>
				<td colspan='3' align='center'>Histori Mutasi Peralatan</td>
			</tr>
			<tr bgcolor=#6ac5fe>
				<td align='center'>Lokasi Awal</td>
				<td align='center'>Lokasi Mutasi</td>
				<td align='center'>Tanggal Mutasi</td>
			</tr>";
		$i=0;
		while ($rr=mysqli_fetch_array($sqll,MYSQLI_ASSOC)){
  		$i++;
			if(($i % 2)==0)
				$bg="#b5e2ff";
			else
				$bg= "#fff";
			$xidal = isset($rr['id_alat']) ? $rr['id_alat'] : '';
			$xnal = isset($rr['nama_peralatan']) ? $rr['nama_peralatan'] : '';
			$xidla = isset($rr['id_lokasi_a']) ? $rr['id_lokasi_a'] : '';
			$xidlb = isset($rr['id_lokasi_b']) ? $rr['id_lokasi_b'] : '';
			$xla = isset($rr['nama_lokasi']) ? $rr['nama_lokasi'] : '';
			$xtglm = isset($rr['tgl']) ? $rr['tgl'] : '';
			
			$xsql=mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi='$xidla'");
			while ($xr=mysqli_fetch_array($xsql,MYSQLI_ASSOC)){
				$xnmla = isset($xr['nama_lokasi']) ? $xr['nama_lokasi'] : '';
			}
			
			$dsql=mysqli_query($dblink,"SELECT * from tbllokasi where id_lokasi='$xidlb'");
			while ($dr=mysqli_fetch_array($dsql,MYSQLI_ASSOC)){
				$xnmlb = isset($dr['nama_lokasi']) ? $dr['nama_lokasi'] : '';
			}
			
			if($i<>0){
				echo"<tr bgcolor=$bg>
					<td>$xnmla</td>
					<td>$xnmlb</td>
					<td align='center'>$xtglm</td>
				</tr>";
			}elseif($i==0){
				echo"<tr>
					<td colspan='3' align='center'>Peralatan Belum Pernah Dimutasi</td>
				</tr>";
			}
		}
		echo"</table>";

	$wsql = mysqli_query($dblink,"SELECT * from tblpenanganan,tblalat,tblgangguan
		where tblpenanganan.id_gangguan = tblgangguan.id_gangguan and tblgangguan.id_alat = tblalat.id_alat AND tblalat.id_alat='$xkode'
		order by tblpenanganan.id_penanganan desc");
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor='#fde3e6'>
				<td colspan='6' align='center'>Histori Gangguan Alat dan Penanganan Gangguan</td>
			</tr>
			<tr bgcolor=#6ac5fe>
				<td align='center'>Gangguan Alat</td>
				<td align='center'>Tanggal Penanganan</td>
				<td align='center'>Teknisi</td>
				<td align='center'>Penyelesian</td>
				<td align='center'>Hasil</td>
				<td align='center'>Rekomendasi</td>";
		echo"</tr>";
		$i =0;
		while ($wr=mysqli_fetch_array($wsql,MYSQLI_ASSOC)){
  		$i++ ;
			if(($i % 2)==0)
				$bg="#b5e2ff" ;  
			else
				$bg= "#fff";
				
			$xwidk = isset($wr['id_penanganan']) ? $wr['id_penanganan'] : '';
			$xwdes = isset($wr['deskripsi_gangguan']) ? $wr['deskripsi_gangguan'] : '';
			$xwidg = isset($wr['id_gangguan']) ? $wr['id_gangguan'] : '';
			$xwtgl = isset($wr['tgl_penanganan']) ? $wr['tgl_penanganan'] : '';
			$xwtek = isset($wr['teknisi']) ? $wr['teknisi'] : '';
			$xwpeny = isset($wr['penyelesaian']) ? $wr['penyelesaian'] : '';
			$xwhasil = isset($wr['hasil']) ? $wr['hasil'] : '';
			$xwrekom = isset($wr['rekomendasi']) ? $wr['rekomendasi'] : '';
			$xwida = isset($wr['id_alat']) ? $wr['id_alat'] : '';
			$xwnma = isset($wr['nama_peralatan']) ? $wr['nama_peralatan'] : '';
			
			if(isset($xwidk)){
				echo"<tr bgcolor=$bg>
					<td>$xwdes</td>
					<td>$xwtgl</td>
					<td>$xwtek</td>
					<td>$xwpeny</td>
					<td>$xwhasil</td>
					<td>$xwrekom</td>";
				echo"</tr>";
			}else{
				echo"<tr>
					<td colspan='6' align='center'>Belum Ada Laporan Gangguan Alat</td>
				</tr>";
			}
		}
		echo"</table>";
?>