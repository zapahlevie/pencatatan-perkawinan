<?php
$judul = "FORMULIR PERKAWINAN";
include("koneksi.php");
require('fpdf/fpdf.php');
$pdf=new FPDF();
$pdf->AddPage();
$result=mysql_query('select * from data_suami');
while($dicoba_tampil = mysql_fetch_array($result)) {
    $pdf->SetFont('Arial','B',16);
   
$pdf->Cell(0,5, $judul, '0', 1, 'C');
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(0,5, 'Dinas Kependudukan Dan Pencatatan Sipil Kota Surabaya', '0', 1, 'C');
    $pdf->Cell(0,5, 'Telp: 021-123456, Fax: 975667, Email: kuasurabaya@dispendukcapil.go.id', '0', 1, 'C');
    $pdf->Cell(0,2, "", '0', 1, 'C');
    $pdf->Cell(0,1, "", '1', 0, 'C');
    $pdf->Cell(0,1, "", '1', 0, 'C');
    $pdf->Cell(0,1, "", '1', 0, 'C');
    $pdf->Cell(0,2, "", '0', 1, 'C');
$pdf->Ln();
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(40 , 5, 'Kewarganegaraan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['kwn'] , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'Hari, Tanggal', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['hari'].', '.$dicoba_tampil['tgl'] , 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
    $pdf->Ln();
    $pdf->Cell(100 , 5, 'Mempelai Pria' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Mempelai Wanita' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    $pdf->Cell(40 , 5, 'Nama Keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['nama_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['nama_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Nama Kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['namakecil_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['namakecil_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Tempat, Tgl Lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['tmplahir_s'].', '.$dicoba_tampil['tgllahir_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['tmplahir_i'].', '.$dicoba_tampil['tgllahir_s'] , 0 , 1 , 'L' , false);
        
    $pdf->Cell(40 , 5, 'Agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['agama_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['agama_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['pekerjaan_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['pekerjaan_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Alamat Sekarang', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['almskg_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['almskg_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Alamat Dahulu', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['almdulu_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['almdulu_i'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Sudah/Belum', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['pernahkawin_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['pernahkawin_i'] , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'Pernah Kawin', 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Nama Istri/Suami', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['bekaspsg_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['bekaspsg_i'] , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'Sebelumnya', 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Anak-anak yang', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['anakdisah_s'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['anakdisah_i'] , 0 , 1 , 'L' , false);
    $pdf->Cell(40 , 5, 'Disahkan', 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
    
    $pdf->Cell(100 , 5, 'Bapak' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Bapak' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
    $pdf->Cell(40 , 5, 'Nama Keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['nama_as'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['nama_ai'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Nama Kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['namakecil_as'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['namakecil_ai'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'Tempat, Tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['tmplahir_as'].', '.$dicoba_tampil['tgllahir_as'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['tmplahir_ai'].', '.$dicoba_tampil['tgllahir_as'] , 0 , 1 , 'L' , false);

    $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['agama_as'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['agama_ai'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['pekerjaan_as'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['pekerjaan_ai'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['almskg_as'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['almskg_ai'] , 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
    $pdf->Ln();
    $pdf->Cell(100 , 5, 'Ibu' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Ibu' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
    $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['nama_is'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['nama_ii'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['namakecil_is'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['namakecil_ii'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat, tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['tmplahir_is'].', '.$dicoba_tampil['tgllahir_is'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['tmplahir_ii'].', '.$dicoba_tampil['tgllahir_ii'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['agama_is'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['agama_ii'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['pekerjaan_is'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['pekerjaan_ii'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['almskg_is'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['almskg_ii'], 0 , 1 , 'L' , false);
    
    $pdf->SetFont('Arial','B',11);
    $pdf->Ln();
    $pdf->Cell(100 , 5, 'Saksi Satu' , 0 , 0 , 'C' , false);
    $pdf->Cell(0 , 5, 'Saksi Dua' , 0 , 1 , 'C' , false);
    $pdf->SetFont('Arial','',11);
    $pdf->Ln();
    
    $pdf->Cell(40 , 5, 'nama keluarga', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['nama_s1'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['nama_s2'] , 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'nama kecil', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['namakecil_s1'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['namakecil_s2'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'tempat, tgl lahir', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['tmplahir_s1'].', '.$dicoba_tampil['tgllahir_s1'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['tmplahir_s2'].', '.$dicoba_tampil['tgllahir_s2'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'agama', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['agama_s1'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['agama_s2'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'pekerjaan', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['pekerjaan_s1'], 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['pekerjaan_s2'], 0 , 1 , 'L' , false);
    
    $pdf->Cell(40 , 5, 'alamat', 0 , 0 , 'L' , false);
    $pdf->Cell(2 , 5, ':', 0 , 0 , 'L' , false);
    $pdf->Cell(80 , 5,$dicoba_tampil['almskg_s1'] , 0 , 0 , 'L' , false);
    $pdf->Cell(0 , 5, $dicoba_tampil['almskg_s2'] , 0 , 1 , 'L' , false);
    
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
    $pdf->Ln();
}
$pdf->Output();
?>