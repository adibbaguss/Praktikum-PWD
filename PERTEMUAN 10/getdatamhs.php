<?php
    require_once "koneksi.php";
    if(isset($_GET['nim'])){
        $keyword = $_GET['nim']; 
        $sql = "SELECT * FROM mahasiswa WHERE nim = '$keyword'";
    }else{
        $sql = "SELECT * FROM mahasiswa";
    }
    
    $query = mysqli_query($con,$sql);
    while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($con);
    
?>