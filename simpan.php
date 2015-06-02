<?php 
//include "koneksi.php";
$user = 'root';
$pass = '';
$dbh = new PDO ('mysql:host=localhost;dbname=spk', $user,$pass);

               
// Memberi variabel pada data yg didapat dari form
$nama = strtoupper ($_REQUEST["nama"]);
$nomor = $_REQUEST["nomor"];
$alamat = strtoupper ($_REQUEST["alamat"]);
$luas = $_REQUEST["luas"];
$kapur = $_REQUEST["kapur"];
$pupuk = $_REQUEST["pupuk"];
$pakan = $_REQUEST["pakan"];
$lele = $_REQUEST["lele"];
$konLele = $_REQUEST["konLele"];
$nila = $_REQUEST["nila"];
$konNila = $_REQUEST["konNila"];
$gurami = $_REQUEST["gurami"];
$konGurami = $_REQUEST["konGurami"];
$karper = $_REQUEST["karper"];
$konKarper = $_REQUEST["konKarper"];
$patin = $_REQUEST["patin"];
$konPatin = $_REQUEST["konPatin"];
$bawal = $_REQUEST["bawal"];
$konBawal = $_REQUEST["konBawal"];

// kondisi jika salah satu form ada yang tidak diisi
if ($nama == "" || $nomor == "" || $alamat == "" || $luas == "" || $kapur == "" || $pupuk == "" || $pakan == "" || $lele == "" || $konLele == "" || $nila == "" || $konNila == "" || $gurami == "" || $konGurami == "" || $karper == "" || $konKarper == "" || $patin == "" || $konPatin == "" || $bawal == "" || $konBawal == "") {
?>
<!--<font color="#FF0000"> Data belum lengkap</font>-->
<?php	
}


// kondisi selain if di atas
else {	
//==============================IDENTITAS================================
$cekIdentitas=mysql_fetch_array(mysql_query("SELECT * FROM identitas WHERE (nama='$nama' AND alamat='$alamat') OR (nomor_id='$nomor' AND alamat='$alamat')"));
if($cekIdentitas){
	$id_identitas = "$cekIdentitas[id_identitas]";
	}
else{	
$inIdentitas=mysql_query("INSERT INTO identitas SET id_identitas='', nama='$nama', nomor_id='$nomor', alamat='$alamat'");
$identitas=mysql_fetch_array(mysql_query("SELECT * FROM identitas WHERE nomor_id='$nomor' AND alamat='$alamat'"));
$id_identitas="$identitas[id_identitas]";
}
//=================================== LUAS ===========================
$cekLuas=mysql_fetch_array(mysql_query("SELECT * FROM luas WHERE luas='$luas'"));
if($cekLuas){
	$id_luas="$cekLuas[id_luas]";
	}
else{
$inLuas = mysql_query("INSERT INTO luas SET id_luas='', luas='$luas'");	
$luas=mysql_fetch_array(mysql_query("SELECT * FROM luas WHERE luas='$luas'"));
$id_luas="$luas[id_luas]";
	}
//=================================== KOLAM ===========================
$cekKolam=mysql_fetch_array(mysql_query("SELECT * FROM kolam WHERE kapur='$kapur' AND pupuk='$pupuk' AND pakan='$pakan'"));
if($cekKolam){
	$id_kolam="$cekKolam[id_kolam]";
	}
else{
$inKolam = mysql_query("INSERT INTO kolam SET id_kolam='', kapur='$kapur', pupuk='$pupuk', pakan='$pakan'");	
$kolam=mysql_fetch_array(mysql_query("SELECT * FROM kolam WHERE kapur='$kapur' AND pupuk='$pupuk' AND pakan='$pakan'"));
$id_kolam="$kolam[id_kolam]";
	}
//=================================== BAWAL ===========================
$cekBawal=mysql_fetch_array(mysql_query("SELECT * FROM bawal WHERE bawal='$bawal' AND konBawal='$konBawal'"));
if($cekBawal){
	$id_bawal="$cekBawal[id_bawal]";
	}
else{
$inBawal = mysql_query("INSERT INTO bawal SET id_bawal='', bawal='$bawal', konBawal='$konBawal'");	
$bawal=mysql_fetch_array(mysql_query("SELECT * FROM bawal WHERE bawal='$bawal' AND konBawal='$konBawal'"));
$id_bawal="$bawal[id_bawal]";
	}
//=================================== GURAMI ===========================
$cekGurami=mysql_fetch_array(mysql_query("SELECT * FROM gurami WHERE gurami='$gurami' AND konGurami='$konGurami'"));
if($cekGurami){
	$id_gurami="$cekGurami[id_gurami]";
	}
else{
$inGurami = mysql_query("INSERT INTO gurami SET id_gurami='', gurami='$gurami', konGurami='$konGurami'");	
$gurami=mysql_fetch_array(mysql_query("SELECT * FROM gurami WHERE gurami='$gurami' AND konGurami='$konGurami'"));
$id_gurami="$gurami[id_gurami]";
	}
//=================================== KARPER ===========================
$cekKarper=mysql_fetch_array(mysql_query("SELECT * FROM karper WHERE karper='$karper' AND konKarper='$konKarper'"));
if($cekKarper){
	$id_karper="$cekKarper[id_karper]";
	}
else{
$inKarper = mysql_query("INSERT INTO karper SET id_karper='', karper='$karper', konKarper='$konKarper'");	
$karper=mysql_fetch_array(mysql_query("SELECT * FROM karper WHERE karper='$karper' AND konKarper='$konKarper'"));
$id_karper="$karper[id_karper]";
	}
//=================================== LELE ===========================
$cekLele=mysql_fetch_array(mysql_query("SELECT * FROM lele WHERE lele='$lele' AND konLele='$konLele'"));
if($cekLele){
	$id_lele="$cekLele[id_lele]";
	}
else{
$inLele = mysql_query("INSERT INTO lele SET id_lele='', lele='$lele', konLele='$konLele'");	
$lele=mysql_fetch_array(mysql_query("SELECT * FROM lele WHERE lele='$lele' AND konLele='$konLele'"));
$id_lele="$lele[id_lele]";
	}
//=================================== NILA ===========================
$cekNila=mysql_fetch_array(mysql_query("SELECT * FROM nila WHERE nila='$nila' AND konNila='$konNila'"));
if($cekNila){
	$id_nila="$cekNila[id_nila]";
	}
else{
$inLele = mysql_query("INSERT INTO nila SET id_nila='', nila='$nila', konNila='$konNila'");	
$nila=mysql_fetch_array(mysql_query("SELECT * FROM nila WHERE nila='$nila' AND konNila='$konNila'"));
$id_nila="$nila[id_nila]";
	}
//=================================== PATIN ===========================
$cekPatin=mysql_fetch_array(mysql_query("SELECT * FROM patin WHERE patin='$patin' AND konPatin='$konPatin'"));
if($cekPatin){
	$id_patin="$cekPatin[id_patin]";
	}
else{
$inLele = mysql_query("INSERT INTO patin SET id_patin='', patin='$patin', konPatin='$konPatin'");	
$patin=mysql_fetch_array(mysql_query("SELECT * FROM patin WHERE patin='$patin' AND konPatin='$konPatin'"));
$id_patin="$patin[id_patin]";
	}
//=================================== DATA ===========================
$cekDataku=mysql_fetch_array(mysql_query("SELECT * FROM dataku WHERE 	id_identitas	= '$id_identitas'	AND 
																id_luas			= '$id_luas' 		AND
																id_kolam		= '$id_kolam' 		AND
																id_bawal		= '$id_bawal' 		AND
																id_gurami		= '$id_gurami' 		AND
																id_karper		= '$id_karper' 		AND
																id_lele			= '$id_lele'		AND
																id_nila			= '$id_nila'		AND
																id_patin		= '$id_patin'		"));
if($cekDataku){	
$tgl=$cekDataku['tanggal'];
$jam=substr($tgl,11,8);
$hr=substr($tgl,8,2);
$bl=substr($tgl,5,2);
$th=substr($tgl,0,4);

if($bl=='01'){$bulan='Januari';}	if($bl=='02'){$bulan='Februari';}	if($bl=='03'){$bulan='Maret';}		if($bl=='04'){$bulan='April';}
if($bl=='05'){$bulan='Mei';}		if($bl=='06'){$bulan='Juni';}		if($bl=='07'){$bulan='Juli';}		if($bl=='08'){$bulan='Agustus';}
if($bl=='09'){$bulan='September';}	if($bl=='10'){$bulan='Oktober';}	if($bl=='11'){$bulan='November';}	if($bl=='12'){$bulan='Desember';}
?>
<font color="#FF9933">Data telah tersimpan: <b><?php echo"$hr $bulan $th [$jam]";?></b></font>
<?php	
    //echo "Data telah tersimpan: $hr $bulan $th [$jam]";
	}

else{
$inDataku = mysql_query("INSERT INTO dataku SET id_data		= '',
											id_identitas	= '$id_identitas',
											id_luas			= '$id_luas',
											id_kolam		= '$id_kolam',
											id_bawal		= '$id_bawal',
											id_gurami		= '$id_gurami',
											id_karper		= '$id_karper',
											id_lele			= '$id_lele',
											id_nila			= '$id_nila',
											id_patin		= '$id_patin',
											tanggal			= NOW()
											");	

//=================================== **** ===========================
//echo "Data Tersimpan";
?>
<font color="#33FF00"> Data tersimpan</font>
<?php
//echo "<script language=\"JavaScript\">alert('Data Tersimpan');</script>";//*/
	} // Tulisan yang ditampilkan jika sukses

}
?>


