<?php
require_once "../../koneksi.php";
$query = mysqli_query($conn, "SELECT max(food_id) as kodeTerbesar FROM food_item");

while ($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}
header('content-type: application/json');
echo json_encode($data);
mysqli_close($conn);

?>