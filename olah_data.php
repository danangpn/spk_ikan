<?php
$aksi=$_REQUEST['aksi'];
if ($aksi==2){
	include "ambil_data.php";
	}
	else{

$nama 	= $_REQUEST['nama'];
$nomor 	= $_REQUEST['nomor'];
$alamat	= $_REQUEST['alamat'];
$luas 	= $_REQUEST['luas'];
$kapur	= $_REQUEST['kapur'];
$pupuk 	= $_REQUEST['pupuk'];
$pakan 	= $_REQUEST['pakan'];
$lele 		= $_REQUEST['lele'];
$konLele 	= $_REQUEST['konLele'];
$nila 		= $_REQUEST['nila'];
$konNila 	= $_REQUEST['konNila'];
$gurami		= $_REQUEST['gurami'];
$konGurami	= $_REQUEST['konGurami'];
$karper		= $_REQUEST['karper'];
$konKarper	= $_REQUEST['konKarper'];
$patin 		= $_REQUEST['patin'];
$konPatin 	= $_REQUEST['konPatin'];
$bawal 		= $_REQUEST['bawal'];
$konBawal 	= $_REQUEST['konBawal'];
$aksi	=	$_REQUEST['aksi'];
	}
$kgKapur	= $luas*0.1; //setiap meter persegi 0.1kg kapur untuk membunuh bibit penyakit
$kgPupuk	= $luas*0.2; //setiap meter persegi 0.2kg pupuk untuk memancing plankton
$hKapur		= $kapur*$kgKapur;
$hPupuk		= $pupuk*$kgPupuk;
$obat		= $luas*500;

//olah data Lele
$jmlLele	= $luas*100;
$kgPLele	= 0.35*$jmlLele*1.2;
$hPLele		= $kgPLele*$pakan;
$hBLele		= $jmlLele*$lele;
$morLele	= round($jmlLele*10/100,0);
$kgJLele	= ($jmlLele-$morLele)*0.35;
$hJLele		= $kgJLele*$konLele;

$biayaLele	= round($hKapur+$hPupuk+$hBLele+$obat+$hPLele,0);
$untungLele	= round($hJLele-$biayaLele,0);

//olah data Nila
$jmlNila	= $luas*13;
$kgPNila	= 0.35*$jmlNila*1.2;
$hPNila		= $kgPNila*$pakan;
$hBNila		= $jmlNila*$nila;
$morNila	= round($jmlNila*10/100,0);
$kgJNila	= ($jmlNila-$morNila)*0.35;
$hJNila		= $kgJNila*$konNila;

$biayaNila	= round($hKapur+$hPupuk+$hBNila+$obat+$hPNila,0);
$untungNila	= round($hJNila-$biayaNila,0);

//olah data Gurami
$jmlGurami	= $luas*9;
$kgPGurami	= 0.35*$jmlGurami*1.2;
$hPGurami	= $kgPGurami*$pakan;
$hBGurami	= $jmlGurami*$gurami;
$morGurami	= round($jmlGurami*10/100,0);
$kgJGurami	= ($jmlGurami-$morGurami)*0.35;
$hJGurami	= $kgJGurami*$konGurami;

$biayaGurami	= round($hKapur+$hPupuk+$hBGurami+$obat+$hPGurami,0);
$untungGurami	= round($hJGurami-$biayaGurami,0);

//olah data Karper
$jmlKarper	= $luas*11;
$kgPKarper	= 0.35*$jmlKarper*1.2;
$hPKarper	= $kgPKarper*$pakan;
$hBKarper	= $jmlKarper*$karper;
$morKarper	= round($jmlKarper*10/100,0);
$kgJKarper	= ($jmlKarper-$morKarper)*0.35;
$hJKarper	= $kgJKarper*$konKarper;

$biayaKarper	= round($hKapur+$hPupuk+$hBKarper+$obat+$hPKarper,0);
$untungKarper	= round($hJKarper-$biayaKarper,0);

//olah data Patin
$jmlPatin	= $luas*10;
$kgPPatin	= 0.35*$jmlPatin*1.2;
$hPPatin	= $kgPPatin*$pakan;
$hBPatin	= $jmlPatin*$patin;
$morPatin	= round($jmlPatin*10/100,0);
$kgJPatin	= ($jmlPatin-$morPatin)*0.35;
$hJPatin	= $kgJPatin*$konPatin;

$biayaPatin	= round($hKapur+$hPupuk+$hBPatin+$obat+$hPPatin,0);
$untungPatin= round($hJPatin-$biayaPatin,0);

//olah data Bawal
$jmlBawal	= $luas*12;
$kgPBawal	= 0.35*$jmlBawal*1.2;
$hPBawal	= $kgPBawal*$pakan;
$hBBawal	= $jmlBawal*$bawal;
$morBawal	= round($jmlBawal*10/100,0);
$kgJBawal	= ($jmlBawal-$morBawal)*0.35;
$hJBawal	= $kgJBawal*$konBawal;

$biayaBawal	= round($hKapur+$hPupuk+$hBBawal+$obat+$hPBawal,0);
$untungBawal= round($hJBawal-$biayaBawal,0);

//mencari keuntungan terbesar
$profit=0;
if($untungLele>=$profit){
	$profit=$untungLele;
	$siProfit="Lele";
	}
if($untungNila>=$profit){
	$profit=$untungNila;
	$siProfit="Nila";
	}
if($untungGurami>=$profit){
	$profit=$untungGurami;
	$siProfit="Gurami";
	}
if($untungKarper>=$profit){
	$profit=$untungKarper;
	$siProfit="Karper";
	}
if($untungPatin>=$profit){
	$profit=$untungPatin;
	$siProfit="Patin";
	}
if($untungBawal>=$profit){
	$profit=$untungBawal;
	$siProfit="Bawal";
	}

//mencari keuntungan terkecil
$profitMin=999999999999999999999;
if($untungLele<=$profitMin){
	$profitMin=$untungLele;
	$siProfitMin="Lele";
	}
if($untungNila<=$profitMin){
	$profitMin=$untungNila;
	$siProfitMin="Nila";
	}
if($untungGurami<=$profitMin){
	$profitMin=$untungGurami;
	$siProfitMin="Gurami";
	}
if($untungKarper<=$profitMin){
	$profitMin=$untungKarper;
	$siProfitMin="Karper";
	}
if($untungPatin<=$profitMin){
	$profitMin=$untungPatin;
	$siProfitMin="Patin";
	}
if($untungBawal<=$profitMin){
	$profitMin=$untungBawal;
	$siProfitMin="Bawal";
	}

//mencari pengeluaran biaya terbesar
$keluar=0;
if($biayaLele>=$keluar){
	$keluar=$biayaLele;
	$siBiaya="Lele";
	}
if($biayaNila>=$keluar){
	$keluar=$biayaNila;
	$siBiaya="Nila";
	}
if($biayaGurami>=$keluar){
	$keluar=$biayaGurami;
	$siBiaya="Gurami";
	}
if($biayaKarper>=$keluar){
	$keluar=$biayaKarper;
	$siBiaya="Karper";
	}
if($biayaPatin>=$keluar){
	$keluar=$biayaPatin;
	$siBiaya="Patin";
	}
if($biayaBawal>=$keluar){
	$keluar=$biayaBawal;
	$siBiaya="Bawal";
	}

//mencari kebiayaan terkecil
$keluarMin=999999999999999999999;
if($biayaLele<=$keluarMin){
	$keluarMin=$biayaLele;
	$siBiayaMin="Lele";
	}
if($biayaNila<=$keluarMin){
	$keluarMin=$biayaNila;
	$siBiayaMin="Nila";
	}
if($biayaGurami<=$keluarMin){
	$keluarMin=$biayaGurami;
	$siBiayaMin="Gurami";
	}
if($biayaKarper<=$keluarMin){
	$keluarMin=$biayaKarper;
	$siBiayaMin="Karper";
	}
if($biayaPatin<=$keluarMin){
	$keluarMin=$biayaPatin;
	$siBiayaMin="Patin";
	}
if($biayaBawal<=$keluarMin){
	$keluarMin=$biayaBawal;
	$siBiayaMin="Bawal";
	}
?>
