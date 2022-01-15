<?php
    include "../koneksi.php";

    header('Content-Type:text/xml');
    $query= "SELECT * FROM account";
    $hasil = mysqli_query($conn,$query);
    $jumlahField = mysqli_num_fields($hasil);

    echo "<?xml version='1.0'?>";
    echo "<data>";
    while($data = mysqli_fetch_array($hasil))
    {
        echo "<account>";
        echo "<ID_pegawai>",$data['ID_pegawai'],"</ID_pegawai>";
        echo "<password>",$data['password'],"</password>";
        echo "<nama_pegawai>",$data['nama_pegawai'],"</nama_pegawai>";
        echo "<level>",$data['level'],"</level>";
        echo "</account>";
    }
    echo "</data>";
?>