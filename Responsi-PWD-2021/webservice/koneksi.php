<?php  
    $conn = mysqli_connect("localhost","root","","db_restaurant");

    if(!$conn){
        echo "Error:".mysqli_connect_error();
            exit();
    }
?>