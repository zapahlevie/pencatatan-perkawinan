<?php
	include('koneksi.php');
	$kwn = $_POST["kwn"];
	$kwn = $_POST["kwn"];
    $hari = $_POST["hari"];
    $tgl = $_POST["tgl"];
    
    $nama_s = $_POST["nama_s"];
    $namakecil_s = $_POST["namakecil_s"];
    $tmplahir_s = $_POST["tmplahir_s"];
    $tgllahir_s = $_POST["tgllahir_s"];
    $agama_s = $_POST["agama_s"];
    $pekerjaan_s = $_POST["pekerjaan_s"];
    $almskg_s = $_POST["almskg_s"];
    $almdulu_s = $_POST["almdulu_s"];
    $pernahkawin_s = $_POST["pernahkawin_s"];
    $bekaspsg_s = $_POST["bekaspsg_s"];
    $anakdisah_s = $_POST["anakdisah_s"];
    $nama_as = $_POST["nama_as"];
    $namakecil_as = $_POST["namakecil_as"];
    $tmplahir_as = $_POST["tmplahir_as"];
    $tgllahir_as = $_POST["tgllahir_as"];
    $agama_as = $_POST["agama_as"];
    $pekerjaan_as = $_POST["pekerjaan_as"];
    $almskg_as = $_POST["almskg_as"];
    $nama_is = $_POST["nama_is"];
    $namakecil_is = $_POST["namakecil_is"];
    $tmplahir_is = $_POST["tmplahir_is"];
    $tgllahir_is = $_POST["tgllahir_is"];
    $agama_is = $_POST["agama_is"];
    $pekerjaan_is = $_POST["pekerjaan_is"];
    $almskg_is = $_POST["almskg_is"];
    
    $nama_i = $_POST["nama_i"];
    $namakecil_i = $_POST["namakecil_i"];
    $tmplahir_i = $_POST["tmplahir_i"];
    $tgllahir_i = $_POST["tgllahir_i"];
    $agama_i = $_POST["agama_i"];
    $pekerjaan_i = $_POST["pekerjaan_i"];
    $almskg_i = $_POST["almskg_i"];
    $almdulu_i = $_POST["almdulu_i"];
    $pernahkawin_i = $_POST["pernahkawin_i"];
    $bekaspsg_i = $_POST["bekaspsg_i"];
    $anakdisah_i = $_POST["anakdisah_i"];
    $nama_ai = $_POST["nama_ai"];
    $namakecil_ai = $_POST["namakecil_ai"];
    $tmplahir_ai = $_POST["tmplahir_ai"];
    $tgllahir_ai = $_POST["tgllahir_ai"];
    $agama_ai = $_POST["agama_ai"];
    $pekerjaan_ai = $_POST["pekerjaan_ai"];
    $almskg_ai = $_POST["almskg_ai"];
    $nama_ii = $_POST["nama_ii"];
    $namakecil_ii = $_POST["namakecil_ii"];
    $tmplahir_ii = $_POST["tmplahir_ii"];
    $tgllahir_ii = $_POST["tgllahir_ii"];
    $agama_ii = $_POST["agama_ii"];
    $pekerjaan_ii = $_POST["pekerjaan_ii"];
    $almskg_ii = $_POST["almskg_ii"];
    
    $nama_s1 = $_POST["nama_s1"];
    $namakecil_s1 = $_POST["namakecil_s1"];
    $tmplahir_s1 = $_POST["tmplahir_s1"];
    $tgllahir_s1 = $_POST["tgllahir_s1"];
    $agama_s1 = $_POST["agama_s1"];
    $pekerjaan_s1 = $_POST["pekerjaan_s1"];
    $almskg_s1 = $_POST["almskg_s1"];
    $nama_s2 = $_POST["nama_s2"];
    $namakecil_s2 = $_POST["namakecil_s2"];
    $tmplahir_s2 = $_POST["tmplahir_s2"];
    $tgllahir_s2 = $_POST["tgllahir_s2"];
    $agama_s2 = $_POST["agama_s2"];
    $pekerjaan_s2 = $_POST["pekerjaan_s2"];
    $almskg_s2 = $_POST["almskg_s2"];
    
	$input = mysql_query("INSERT INTO data_suami VALUES(NULL, '$kwn', '$hari', '$tgl', '$nama_s', '$namakecil_s', '$tmplahir_s', '$tgllahir_s', '$agama_s', '$pekerjaan_s', '$almskg_s', '$almdulu_s', '$pernahkawin_s', '$bekaspsg_s', '$anakdisah_s', '$nama_as', '$namakecil_as', '$tmplahir_as', '$tgllahir_as', '$agama_as', '$pekerjaan_as', '$almskg_as', '$nama_is', '$namakecil_is', '$tmplahir_is', '$tgllahir_is', '$agama_is', '$pekerjaan_is', '$almskg_is', '$nama_i', '$namakecil_i', '$tmplahir_i', '$tgllahir_i', '$agama_i', '$pekerjaan_i', '$almskg_i', '$almdulu_i', '$pernahkawin_i', '$bekaspsg_i', '$anakdisah_i', '$nama_ai', '$namakecil_ai', '$tmplahir_ai', '$tgllahir_ai', '$agama_ai', '$pekerjaan_ai', '$almskg_ai', '$nama_ii', '$namakecil_ii', '$tmplahir_ii', '$tgllahir_ii', '$agama_ii', '$pekerjaan_ii', '$almskg_ii', '$nama_s1', '$namakecil_s1', '$tmplahir_s1', '$tgllahir_s1', '$agama_s1', '$pekerjaan_s1', '$almskg_s1', '$nama_s2', '$namakecil_s2', '$tmplahir_s2', '$tgllahir_s2', '$agama_s2', '$pekerjaan_s2', '$almskg_s2')") or die(mysql_error());
	
	if($input){
//        echo '<script>window.history.back()</script>';
	}else{
		echo 'Gagal menambahkan data! ';
		echo '<a href="index.php">Kembali</a>';
	}
?>