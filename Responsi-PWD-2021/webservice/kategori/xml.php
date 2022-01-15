<?php
    include "../koneksi.php";
    header('Content-Type:text/xml');
    $query= "SELECT * FROM kategori";
    $hasil = mysqli_query($conn,$query);
    $jumlahField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>";
    echo "<data>";
    while($data = mysqli_fetch_array($hasil))
    {
        echo "<kategori>";
        echo "<id_kategori>",$data['id_kategori'],"</id_kategori>";
        echo "<nama>",$data['kategori'],"</nama>";
       
        echo "</kategori>";
    }
    echo "</data>";
?>