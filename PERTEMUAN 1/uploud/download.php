<?php
    $myDir = "C:/xampp/htdocs/PRAKTIKUM PWD/PERTEMUAN 1/uploud";
    $dir = opendir($myDir);
    echo "Isi folder (klik link untuk download : <br>";
    while($tmp = readdir($dir)){
    echo "<a href='$tmp' target='_blank'>$tmp</a><br>";
    }
    closedir($dir);
?>
