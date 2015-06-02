<?php
include "koneksi.php";
$id 	= $_REQUEST['id'];
$sql_ambil=mysql_query("SELECT * FROM dataku, identitas, luas, kolam, bawal, gurami, karper, lele, nila, patin WHERE 
					dataku.id_data=$id 							AND
					dataku.id_identitas=identitas.id_identitas 	AND 
					dataku.id_luas=luas.id_luas 				AND 
					dataku.id_kolam=kolam.id_kolam 				AND 
					dataku.id_bawal = bawal.id_bawal 			AND 
					dataku.id_gurami = gurami.id_gurami 		AND 
					dataku.id_karper = karper.id_karper 		AND 
					dataku.id_lele = lele.id_lele 				AND 
					dataku.id_nila = nila.id_nila 				AND 
					dataku.id_patin = patin.id_patin");
$datain=mysql_fetch_array($sql_ambil);
$nama 	= $datain['nama'];
$nomor 	= $datain['nomor_id'];
$alamat	= $datain['alamat'];
$luas 	= $datain['luas'];
$kapur	= $datain['kapur'];
$pupuk 	= $datain['pupuk'];
$pakan 	= $datain['pakan'];
$lele 		= $datain['lele'];
$konLele 	= $datain['konLele'];
$nila 		= $datain['nila'];
$konNila 	= $datain['konNila'];
$gurami		= $datain['gurami'];
$konGurami	= $datain['konGurami'];
$karper		= $datain['karper'];
$konKarper	= $datain['konKarper'];
$patin 		= $datain['patin'];
$konPatin 	= $datain['konPatin'];
$bawal 		= $datain['bawal'];
$konBawal 	= $datain['konBawal'];
?>