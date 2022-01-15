<?php
    require_once "../koneksi.php";
      if(isset($_GET['search'])){
                $keyword=$_GET['search'];
                $get_sql = mysqli_query($conn,"SELECT * FROM food_item INNER JOIN kategori ON food_item.id_kategori = kategori.id_kategori 
                WHERE food_item.nama LIKE '%".$keyword."%' OR kategori.kategori LIKE '%".$keyword."%' ORDER BY food_item.id_kategori ASC");
              }else{
                $get_sql = mysqli_query($conn,"SELECT * FROM food_item ORDER BY id_kategori ASC");
              }
    while ($row = mysqli_fetch_assoc($get_sql)) {
    $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($conn);
?>