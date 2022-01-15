<?php 
require('../fpdf/fpdf.php'); 	// memanggil library FPDF 

$pdf = new FPDF('P','mm','A4'); // intance object dan memberikan pengaturan halaman PDF 
$pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',16);
    // // mencetak string 
     $pdf->Cell(190,7,'DATA AKUN PADA DATABASE',0,1,'C');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(7,6,'No',1,0);
    $pdf->Cell(30,6,'ID Pegawai',1,0);
    $pdf->Cell(40,6,'Nama Pegawai',1,0);
    $pdf->Cell(25,6,'Jabatan',1,0);
    $pdf->Cell(20,6,'Password',1,1);
    $pdf->SetFont('Arial','',10);
    $no=1;

    include '../../../koneksi/koneksi.php';
    $data = mysqli_query($conn, "select * from account");
    while ($row = mysqli_fetch_array($data)){
        $pdf->Cell(7,6,$no,1,0);
        $pdf->Cell(30,6,$row['id_pegawai'],1,0);
        $pdf->Cell(40,6,$row['nama_pegawai'],1,0);
        $pdf->Cell(25,6,$row['level'],1,0);
        $pdf->Cell(20,6,'********',1,1);
        $no++;
    }
    $pdf->Output();
?> 
