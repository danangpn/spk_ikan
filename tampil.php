<?php
    include "koneksi.php";
	$sql = "SELECT * FROM 	dataku, 
							identitas, 
							luas, 
							kolam, 
							bawal, 
							gurami, 
							karper, 
							lele, 
							nila, 
							patin 
			WHERE	dataku.id_identitas=identitas.id_identitas 	AND 
					dataku.id_luas=luas.id_luas 				AND 
					dataku.id_kolam=kolam.id_kolam 				AND 
					dataku.id_bawal = bawal.id_bawal 			AND 
					dataku.id_gurami = gurami.id_gurami 		AND 
					dataku.id_karper = karper.id_karper 		AND 
					dataku.id_lele = lele.id_lele 				AND 
					dataku.id_nila = nila.id_nila 				AND 
					dataku.id_patin = patin.id_patin
					";
	$hasil = mysql_query($sql);
	$no=0;
	if(mysql_num_rows($hasil) > 0)
	{
		while($data = mysql_fetch_array($hasil))
		{$no=$no+1;
			echo"<tr>";
				echo"<td align=\"center\">$no.</td>";
				echo"<td>$data[nama]</td>";
				echo"<td>$data[alamat]</td>";
				echo"<td align=\"center\"><a href=\"index.php?id=$data[id_data]&aksi=2\">$data[luas]</a></td>";
			echo"</tr>";
		}
	}else{
		echo"<tr>";
				echo"Data belum terisi";
		echo"</tr>";
	}
?>