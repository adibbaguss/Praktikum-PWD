<?php
    require_once "../koneksi.php";
    if(isset($_GET['search'])){
        $keyword=$_GET['search'];
        $sql = "SELECT * FROM order_food INNER JOIN detail_order ON order_food.order_id = detail_order.order_id 
        WHERE order_food.order_id LIKE '%".$keyword."%' OR order_food.id_pegawai LIKE '%".$keyword."%' OR detail_order.food_id LIKE '%".$keyword."%'";
      }else{
        $sql = "SELECT * FROM order_food INNER JOIN detail_order ON order_food.order_id = detail_order.order_id";
      }

    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        $no = mysqli_num_rows($query);
        for ($i=0; $i <$no ; $i++) { 
            $row = mysqli_fetch_assoc($query);
            $data[] = $row;
        }
    }
    header('content-type: application/json');
    echo json_encode($data);
    mysqli_close($conn);
?>