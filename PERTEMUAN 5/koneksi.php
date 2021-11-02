<?php  
    $host="localhost";
    $username="root";
    $password="";
    $databsasename="akademik";
    $con=@mysqli_connect($host,$username,$password,$databsasename);

    if(!$con){
        echo "Error:".mysqli_connect_error();
            exit();
    }
?>