<?php
    include "../koneksi.php";

    header('Content-Type:text/xml');
    $query= "SELECT * FROM food_item";
    $hasil = mysqli_query($conn,$query);
    $jumlahField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>";
    echo "<data>";
    while($data = mysqli_fetch_array($hasil))
    {
        echo "<food_item>";
        echo "<food_id>",$data['food_id'],"</food_id>";
        echo "<nama>",$data['nama'],"</nama>";
        echo "<jumlah>",$data['jumlah'],"</jumlah>";
        echo "<harga>",$data['harga'],"</harga>";
        echo "<id_kategori>",$data['id_kategori'],"</id_kategori>";
        echo "<foto>",$data['foto'],"</foto>";
        echo "</food_item>";
    }
    echo "</data>";
?>