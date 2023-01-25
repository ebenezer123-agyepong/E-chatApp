<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM userlist");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output = "No users are available to chat with";
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;

?>