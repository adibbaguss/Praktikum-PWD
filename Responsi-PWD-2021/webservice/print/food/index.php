<?php 
require('../fpdf/fpdf.php'); 	// memanggil library FPDF 

$pdf = new FPDF('P','mm','A4'); // intance object dan memberikan pengaturan halaman PDF 
$pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',16);
    // // mencetak string 
     $pdf->Cell(190,7,'DATA PRODUK MAKANAN DAN MINUMAN',0,1,'C');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'FOOD ID',1,0);
    $pdf->Cell(50,6,'NAMA',1,0);
    $pdf->Cell(25,6,'JUMLAH',1,0);
    $pdf->Cell(20,6,'HARGA',1,0);
    $pdf->Cell(25,6,'ID KATEGORI',1,1);
    $pdf->SetFont('Arial','',10);
    
    include '../../koneksi.php';
    $data = mysqli_query($conn, "select * from food_item");
    while ($row = mysqli_fetch_array($data)){
        // $gambar = $row['foto'];
        // $x=$pdf->GetX();
        // $y=$pdf->GetY();
        $pdf->Cell(20,6,$row['food_id'],1,0);
        $pdf->Cell(50,6,$row['nama'],1,0);
        $pdf->Cell(25,6,$row['jumlah'],1,0);
        $pdf->Cell(20,6,$row['harga'],1,0);
        $pdf->Cell(25,6,$row['id_kategori'],1,1); 
       
    }
    $pdf->Output();
?> 
