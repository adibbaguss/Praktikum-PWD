<?php
require_once "../../koneksi.php";
if(isset($_GET['food_id'])){
  $food_id = $_GET['food_id'];
  $sql=mysqli_query($conn,"SELECT * FROM food_item WHERE food_id = '$food_id'");
  while ($row = mysqli_fetch_assoc($sql)) {
    $data[] = $row;
    }
   
}else{
   $data = "kosong";
}
header('content-type: application/json');
echo json_encode($data);
mysqli_close($conn);
?>


