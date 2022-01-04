<?php
/*---------------------------------- Detail alat*/
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
			$xgambar = isset($r['p_img']) ? $r['p_img'] : '';
			$xxcek=$_POST['xcek'];
		
			$target="view_data/prod_img/$xgambar";
			
			if(file_exists($target)){
				$xtampil=$xgambar;
			}elseif($xgambar==''){
				$xtampil='iempty.jpg';
			}else{
				$xtampil='iempty.jpg';
			}
			
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor=#6ac5fe>
				<td align='center' colspan='5'>. : : Detail Data Peralatan : : .</td>
			</tr>
			<tr>
				<td valign='top' rowspan='7' width='250px'>
					<img src='view_data/prod_img/$xtampil' width='100%'>
				</td>
				<td align=''>Id Alat</td>
				<td align=''>$xid</td>
				<td align=''>Nama WIFI</td>
				<td align=''>$xnamawifi</td>
			</tr>
			<tr>
				<td align=''>Nama Alat</td>
				<td>$xnama</td>
				<td align=''>Password WIFI</td>
				<td align=''>$xpasswifi</td>
			</tr>
			<tr>
				<td align=''>Lokasi</td>
				<td>$xlokasi</td>
				<td align=''>Frekuensi</td>
				<td align=''>$xfrek</td>
			</tr>
			<tr>
				<td align=''>Kategori</td>
				<td>$xkategori</td>
				<td align=''>Kapasitas RAM</td>
				<td align=''>$xram</td>
			</tr>
			<tr>
				<td align=''>Tahun Pembelian</td>
				<td>$xtahun</td>
				<td align=''>Kapasitas Hardisk</td>
				<td align=''>$xdisk</td>
			</tr>
			<tr>
				<td align=''>Deskripsi</td>
				<td align=''>$xdesc</td>
				<td align=''>Kapasitas Processor</td>
				<td align=''>$xprocessor</td>
			</tr>
			<tr>
				<td align=''>Jumlah Port</td>
				<td align=''>$xjlhport</td>
				<td align=''>Status</td>
				<td align=''>$xstatus</td>
			<tr>
				<td colspan='2' align='left'>
					<a href='printdata-$xkode' target='_BLANK' class='btn btn-success btn-sm'>Print / Download</a>
				</td>
				<td colspan='3' align='right'>";
					if($xstatus=='Normal'){
						echo"<a href='alat-1' class='btn btn-primary btn-sm'>Kembali</a>";
					}elseif($xstatus=='Rusak Sementara'){
						echo"<a href='alat-2' class='btn btn-primary btn-sm'>Kembali</a>";
					}else{
						echo"<a href='alat-3' class='btn btn-primary btn-sm'>Kembali</a>";
					}
			echo"</td>
			</tr>";
		}
		echo"</table>";

/*---------------------------------- Detail mutasi alat*/

	$sqll = mysqli_query($dblink,"SELECT * from tblhistorilokasi,tblalat,tbllokasi WHERE tblhistorilokasi.id_alat=tblalat.id_alat AND tbllokasi.id_lokasi=tblalat.id_lokasi AND tblalat.id_alat='$xkode' order by tblhistorilokasi.id_histori DESC");
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor='#b7ffbf'>
				<td colspan='3' align='center'>. : : Histori Mutasi Peralatan : : .</td>
			</tr>
			<tr bgcolor=#e9fce9>
				<td align='center'>Lokasi Awal</td>
				<td align='center'>Lokasi Mutasi</td>
				<td align='center'>Tanggal Mutasi</td>
			</tr>";
		$i=0;
		while ($rr=mysqli_fetch_array($sqll,MYSQLI_ASSOC)){
  		$i++;
			if(($i % 2)==0)
				$bg="#e9fce9";
			else
				$bg= "#ffffff";
				
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
			}
		}
			if($i==0){
				echo"<tr>
					<td colspan='3' align='center'>Peralatan belum pernah dimutasi</td>
				</tr>";
			}
		echo"</table>";

/*---------------------------------- Detail penanganan gangguan alat*/

	$wsql = mysqli_query($dblink,"SELECT * from tblpenanganan,tblalat,tblgangguan
		where tblpenanganan.id_gangguan = tblgangguan.id_gangguan and tblgangguan.id_alat = tblalat.id_alat AND tblalat.id_alat='$xkode'
		order by tblpenanganan.id_penanganan desc");
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor='#ffcccb'>
				<td colspan='7' align='center'>. : : Histori Gangguan Alat dan Penanganan Gangguan : : .</td>
			</tr>
			<tr bgcolor=#f2e4fd>
				<td align='center'>Gangguan Alat</td>
				<td align='center'>Tanggal Lapor</td>
				<td align='center'>Tanggal Penanganan</td>
				<td align='center'>Teknisi</td>
				<td align='center'>Penyelesian</td>
				<td align='center'>Hasil</td>
				<td align='center'>Rekomendasi</td>";
		echo"</tr>";
		$xi=0;
		while ($wr=mysqli_fetch_array($wsql,MYSQLI_ASSOC)){
  		$xi++ ;
			if(($xi % 2)==0)
				$bg="#f2e4fd" ;  
			else
				$bg= "#ffffff";
				
			$xwidk = isset($wr['id_penanganan']) ? $wr['id_penanganan'] : '';
			$xwdes = isset($wr['deskripsi_gangguan']) ? $wr['deskripsi_gangguan'] : '';
			$xwidg = isset($wr['id_gangguan']) ? $wr['id_gangguan'] : '';
			$xtglg = isset($wr['tgl_gangguan']) ? $wr['tgl_gangguan'] : '';
			$xwtgl = isset($wr['tgl_penanganan']) ? $wr['tgl_penanganan'] : '';
			$xwtek = isset($wr['teknisi']) ? $wr['teknisi'] : '';
			$xwpeny = isset($wr['penyelesaian']) ? $wr['penyelesaian'] : '';
			$xwhasil = isset($wr['hasil']) ? $wr['hasil'] : '';
			$xwrekom = isset($wr['rekomendasi']) ? $wr['rekomendasi'] : '';
			$xwida = isset($wr['id_alat']) ? $wr['id_alat'] : '';
			$xwnma = isset($wr['nama_peralatan']) ? $wr['nama_peralatan'] : '';
			
			if($xi<>0){
				echo"<tr bgcolor=$bg>
					<td>$xwdes</td>
					<td>$xtglg</td>
					<td>$xwtgl</td>
					<td>$xwtek</td>
					<td>$xwpeny</td>
					<td>$xwhasil</td>
					<td>$xwrekom</td>";
				echo"</tr>";
			}
		}
			if($xi==0){
				echo"<tr>
					<td colspan='7' align='center'>Belum ada laporan gangguan alat atau gangguan belum diproses</td>
				</tr>";
			}
		echo"</table>";

/*---------------------------------- Detail gangguan alat belum diproses*/

		$csql = mysqli_query($dblink,"SELECT * from tblgangguan as a,tblalat as b where a.id_alat=b.id_alat and a.id_alat='$xkode' and a.status='B' order by a.id_gangguan desc");
		echo"<div class='table-responsive'><table class='table table-hover table-bordered'>
			<tr bgcolor='#fffbc8'>
				<td colspan='4' align='center'>. : : Data Gangguan Alat Terlapor : : .</td>
			</tr>
			<tr bgcolor=#fffee9>
				<td align='center'>Tanggal Lapor</td>
				<td align='center'>Ciri - Ciri Gangguan</td>
				<td align='center'>Deskripsi Gangguan Alat</td>
				<td align='center'>Status Proses</td>
			</tr>";
		$ci =0;
		while ($cr=mysqli_fetch_array($csql,MYSQLI_ASSOC)){
  		$ci++ ;
			if(($ci % 2)==0)
				$bg="#fffee9" ;  
			else
				$bg= "#ffffff";
			$xidk = isset($cr['id_gangguan']) ? $cr['id_gangguan'] : '';
			$xnma = isset($cr['nama_peralatan']) ? $cr['nama_peralatan'] : '';
			$xida = isset($cr['id_alat']) ? $cr['id_alat'] : '';
			$xtgl = isset($cr['tgl_gangguan']) ? $cr['tgl_gangguan'] : '';
			$xciri = isset($cr['ciri']) ? $cr['ciri'] : '';
			$xdg = isset($cr['deskripsi_gangguan']) ? $cr['deskripsi_gangguan'] : '';
			$xsts = isset($cr['status']) ? $cr['status'] : '';
			if($xsts=="B"){
				$xstatus="Belum Diproses";
			}else{
				$xstatus="Sudah Diproses";
			}
		
			if($ci<>0){
			echo"<tr bgcolor=$bg>
				<td>$xtgl</td>
				<td>$xciri</td>
				<td>$xdg</td>
				<td align='center'>$xstatus</td>";
			}
		}
			if($ci==0){
				echo"<tr>
					<td colspan='6' align='center'>Belum ada laporan gangguan alat</td>
				</tr>";
			}
		echo"</table>";
?>