<?php
require_once "../../koneksi.php";
$query = mysqli_query($conn, "SELECT max(food_id) as kodeTerbesar FROM food_item");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];

$urutan = (int) substr($kodeBarang, 5, 3);

$urutan++;
$huruf = "Food-";
$kodeBarang = $huruf . sprintf("%03s", $urutan);
?>