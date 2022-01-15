<?php 

function rp($angka){
    $rupiah="Rp ".number_format($angka,0,',','.').",00";
    return $rupiah;
}

require('../fpdf/fpdf.php'); 	// memanggil library FPDF 

$pdf = new FPDF('P','mm','A4'); // intance object dan memberikan pengaturan halaman PDF 
$pdf->AddPage();
    // setting jenis font yang akan digunakan
    $pdf->SetFont('Arial','B',16);
    // // mencetak string 
     $pdf->Cell(190,7,'DATA TRANSAKSI',0,1,'C');

    $pdf->Cell(10,7,'',0,1);
    $pdf->SetFont('Arial','B',10);
    $pdf->Cell(20,6,'ORDER ID',1,0);
    $pdf->Cell(20,6,'TANGGAL',1,0);
    $pdf->Cell(25,6,'ID PEGAWAI',1,0);
    $pdf->Cell(30,6,'ID MAKANAN',1,0);
    $pdf->Cell(20,6,'JUMLAH',1,0);
    $pdf->Cell(40,6,'TOTAL HARGA',1,1);
    $pdf->SetFont('Arial','',10);
    
    include '../../koneksi.php';
    $data = mysqli_query($conn, "SELECT * FROM order_food INNER JOIN detail_order ON order_food.order_id = detail_order.order_id");
    while ($row = mysqli_fetch_array($data)){
        $pdf->Cell(20,6,$row['order_id'],1,0);
        $pdf->Cell(20,6,$row['tanggal'],1,0);
        $pdf->Cell(25,6,$row['id_pegawai'],1,0);
        $pdf->Cell(30,6,$row['food_id'],1,0);
        $pdf->Cell(20,6,$row['jumlah_pesan'],1,0); 
        $pdf->Cell(40,6,rp($row['total_harga']),1,1); 
       
    }
    $pdf->Output();
?> 


