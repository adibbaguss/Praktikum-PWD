<?php
    require_once "../koneksi.php";
    if(isset($_GET['search'])){
        $keyword=$_GET['search'];
        $sql = "SELECT * FROM account WHERE id_pegawai LIKE '%".$keyword."%' OR nama_pegawai LIKE '%".$keyword."%' OR level LIKE '%".$keyword."%'";
      }else{
        $sql = "SELECT * FROM account";
      }
    $query = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($conn);
?>