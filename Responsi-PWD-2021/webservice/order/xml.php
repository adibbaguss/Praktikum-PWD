<?php
    include "../koneksi.php";
    header('Content-Type:text/xml');
    $query= "SELECT * FROM order";
    $hasil = mysqli_query($conn,$query);
    $jumlahField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>";
    echo "<data>";
    while($data = mysqli_fetch_array($hasil))
    {
        echo "<order>";
        echo "<order_ID>",$data['order_ID'],"</order_ID>";
        echo "<tanggal>",$data['tanggal'],"</tanggal>";
        echo "<consumer_ID>",$data['consumer_ID'],"</consumer_ID>";
        echo "<nomor_meja>",$data['nomor_meja'],"</nomor_meja>";
        echo "</order>";
    }
    echo "</data>";
?>