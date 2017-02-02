<?php
//informasi file
	$lokasifile = $_FILES['upfile']['tmp_name'];
	$namafile = $_FILES['upfile']['name'];
	$sizefile = $_FILES['upfile']['size'];

//tujuan
	$tujuan = "foldertujuan/$namafile";

//perintah upload 
	if (move_uploaded_file($lokasifile, $tujuan)) {
		echo "<br><h3 style='background-color:red;'>Berhasil</h3>";
	}else{
		echo "Gagal";
	}

?>


Hasil yang anda upload tadi :	 <br>
<img src="data/<?php echo $nama ?>" width="100" height="100" alt="">
