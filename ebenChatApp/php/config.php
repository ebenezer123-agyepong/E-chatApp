<?php
    $conn = mysqli_connect("localhost", "root", "", "eChat");
    if(!$conn){
        echo "Database connected" .mysqli_connect_error();
    }
?>
