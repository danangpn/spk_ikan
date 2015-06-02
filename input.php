<?php
include "koneksi.php";
$id=$_REQUEST['id'];
$id_kolam=$_REQUEST['id_kolam'];
$aksi=$_REQUEST['aksi'];
if ($aksi==2){
include "ambil_data.php";

}
else if(empty($aksi)){


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
if (empty($aksi)){
?>


<form name="identitas" method="POST" action="index.php">

                <table width="100%" border="0" id="Table_2">
                <tr align="center"><td bgcolor="#DDDDDD"><font size="+1">Input Data</font></td></tr></table>

                <table width="100%" border="0" bgcolor="#EEEEEE" id="Table_2">
               
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td> <input type="text" name="nama" size="25" value="<?php echo"$nama";?>"/> </td>
                </tr>
                <tr>
                  <td width="58%">Nomor Identitas</td>
                  <td width="2%">:</td>
                  <td width="40%"> <input type="text" name="nomor" size="25" value="<?php echo"$nomor";?>"/> </td>
                </tr>
                <tr>
                  <td>Alamat (Kabupaten/Kota)</td>
                  <td>:</td>
                  <td> <input type="text" name="alamat" size="25" value="<?php echo"$alamat";?>"/> </td>
                </tr>
                <tr>
                  <td>Luas Kolam</td>
                  <td>:</td>
                  <td> <input type="text" name="luas" size="20" value="<?php echo"$luas";?>"/> m<sup>2</sup></td>
                </tr>
                <tr>
                  <td>Harga Kapur (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="kapur" size="20" value="<?php echo"$kapur";?>"/> </td>
                </tr>
                <tr>
                  <td>Harga Pupuk Kandang (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="pupuk" size="20" value="<?php echo"$pupuk";?>"/> </td>
                </tr>
                <tr>
                  <td>Harga Pakan Ikan (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="pakan" size="20" value="<?php echo"$pakan";?>"/> </td>
                </tr>
                <tr><td colspan="3"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Lele (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="lele" size="20" value="<?php echo"$lele";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Lele (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konLele" size="20" value="<?php echo"$konLele";?>"/></td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>

                
                <tr>
                  <td>Harga Benih Nila (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="nila" size="20" value="<?php echo"$nila";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Nila (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konNila" size="20" value="<?php echo"$konNila";?>"/></td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Gurami (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="gurami" size="20" value="<?php echo"$gurami";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Gurami (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konGurami" size="20" value="<?php echo"$konGurami";?>"/></td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Karper (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="karper" size="20" value="<?php echo"$karper";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Karper (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konKarper" size="20" value="<?php echo"$konKarper";?>"/></td>
                </tr>                
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Patin (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="patin" size="20" value="<?php echo"$patin";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Patin (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konPatin" size="20" value="<?php echo"$konPatin";?>"/></td>
                </tr>                
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Bawal (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="bawal" size="20" value="<?php echo"$bawal";?>"/></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Bawal (per kg)</td>
                  <td>:</td>
                  <td>Rp.<input type="text" name="konBawal" size="20" value="<?php echo"$konBawal";?>"/></td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                 <tr>
                   <td colspan="3" align="right"> 
                 
                   
                   <?php
				   if(empty($luas)){
					   echo"<input type=\"submit\" value=\"PROSES\"  /> ";
				  }
				   else{
echo"<a href=\"index.php\" style=\"text-decoration:none\"><input type=\"button\" value=\"RESET\"/> </a>";
					   }		   
				   ?>

                   </td>
                </tr>
                </table>
                
                </form>
                <?php }

//jika ambil dari database//////////////////////////////////////////////////////////////////////////////////

				else{
				?>
				
<form name="identitas" method="POST" action="index.php">

                <table width="100%" border="0" id="Table_2">
                <tr align="center"><td bgcolor="#DDDDDD"><font size="+1">Input Data</font></td></tr></table>

                <table width="100%" border="0" bgcolor="#EEEEEE" id="Table_2">
               
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td> <?php echo"$nama";?> </td>
                </tr>
                <tr>
                  <td width="58%">Nomor Identitas</td>
                  <td width="2%">:</td>
                  <td width="40%"> <?php echo"$nomor";?> </td>
                </tr>
                <tr>
                  <td>Alamat (Kabupaten/Kota)</td>
                  <td>:</td>
                  <td> <?php echo"$alamat";?> </td>
                </tr>
                <tr>
                  <td>Luas Kolam</td>
                  <td>:</td>
                  <td> <?php echo"$luas";?> m<sup>2</sup></td>
                </tr>
                <tr>
                  <td>Harga Kapur (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$kapur";?> </td>
                </tr>
                <tr>
                  <td>Harga Pupuk Kandang (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$pupuk";?> </td>
                </tr>
                <tr>
                  <td>Harga Pakan Ikan (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$pakan";?> </td>
                </tr>
                <tr><td colspan="3"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Lele (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$lele";?></td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Lele (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konLele";?> </td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>

                
                <tr>
                  <td>Harga Benih Nila (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$nila";?> </td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Nila (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konNila";?> </td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Gurami (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$gurami";?> </td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Gurami (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konGurami";?> </td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Karper (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$karper";?> </td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Karper (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konKarper";?> </td>
                </tr>                
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Patin (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$patin";?> </td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Patin (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konPatin";?> </td>
                </tr>                
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                <tr>
                  <td>Harga Benih Bawal (per ekor)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$bawal";?> </td>
                </tr>
                <tr>
                  <td>Harga Konsumsi Bawal (per kg)</td>
                  <td>:</td>
                  <td>Rp.<?php echo"$konBawal";?> </td>
                </tr>
                                <tr><td></td><td colspan="2"><hr color="#DDDDDD"></td></tr>
                 <tr>
                   <td colspan="3" align="right"> 
                 
                   
                   <?php
				   if(empty($luas)){
					   echo"<input type=\"submit\" value=\"PROSES\"  /> ";
				  }
				   else{
echo"<a href=\"index.php\" style=\"text-decoration:none\"><input type=\"button\" value=\"RESET\"/> </a>";
					   }		   
				   ?>

                   </td>
                </tr>
                </table>
                
                </form>
                
                <?php }
				?>