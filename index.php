<html>
<head>
<title>SPK_ikan</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles.css" type="text/css" rel="stylesheet" />
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css">
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- ImageReady Slices (SPK_ikan.psd) -->
<?php
include"olah_data.php";
include"koneksi.php";
?>
<table id="Table_01" width="1000" height="724" border="0" cellpadding="0" cellspacing="0">
	<tr>
	  <td colspan="2" class="header">
			<img src="images/header.jpg" width="1000" height="123" alt=""></td>
	</tr>
	<tr>
	  <td width="478" height="215" class="input">
			<!--<img src="images/input.jpg" width="567" height="311" alt="">-->
             <?php include "input.php"; ?>
             <?php include "simpan.php"; ?>
            </td>
            
          
	  <td width="522" rowspan="2" class="data">
      
<table width="100%" border="0" align="center"  id="Table_2">
      <tr align="center"><td bgcolor="DDDDDD"><font size="+1">
      Data Pengguna</font>
      </td></tr></table>
      
      <table width="100%" border="1" align="center"  id="Table_2">
      <tr align="center">
         <td width="4%">No.</td>
         <td width="*">Nama</td>
         <td width="*">Alamat</td>
         <td width="15%">Luas</td>
      </tr>
      <?php 
	  
	  include "tampil.php";
	   ?>     
      </table>
            </td>
	</tr>
	<tr>
		<td class="analisa">
<table width="100%" border="0" id="Table_3">
<tr align="center">
  <td bgcolor="#DDDDDD"><font size="+1">Analisa</font></td></tr>
          </table>
        <div id="TabbedPanels1" class="TabbedPanels">
		  <ul class="TabbedPanelsTabGroup">
		    <li class="TabbedPanelsTab" tabindex="0">Biaya</li>
		    <li class="TabbedPanelsTab" tabindex="0">Untung</li>
		    <li class="TabbedPanelsTab" tabindex="0">Lele</li>
		    <li class="TabbedPanelsTab" tabindex="0">Nila</li>
            <li class="TabbedPanelsTab" tabindex="0">Gurami</li>
            <li class="TabbedPanelsTab" tabindex="0">Karper</li>
            <li class="TabbedPanelsTab" tabindex="0">Patin</li>
            <li class="TabbedPanelsTab" tabindex="0">Bawal</li>
	      </ul>
		  <div class="TabbedPanelsContentGroup">
            <div class="TabbedPanelsContent"><?php include"biaya.php";?></div>
   		    <div class="TabbedPanelsContent"><?php include"untung.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_lele.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_nila.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_gurami.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_karper.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_patin.php";?></div>
		    <div class="TabbedPanelsContent"><?php include"a_bawal.php";?></div>
	      </div>
		  </div>	
          	  <!--<img src="images/analisa.jpg" width="567" height="318" alt="">-->
            </td>
	</tr>
	<tr>
	  <td colspan="2" class="footer">
			<img src="images/footer.jpg" width="1000" height="48" alt=""></td>
	</tr>
</table>
<!-- End ImageReady Slices -->
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>