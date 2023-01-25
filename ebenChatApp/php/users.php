<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users");
    $output = "";

    if(mysqli_num_rows($sql) == 1){
        $output = "No users are available to chat with";
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<a href="">
            <div class="content">
                <img src="../php/db-images/ ' . $row['img'] .' " alt="">
                <div class="details">
                    <span>'. $row['fname'] ." ". $row['lname'].'</span>
                    <p>This is text message</p>
                </div>
            </div>
            <div class="status-dot">
                <i class="fas fa-circle"></i>
            </div>
        </a>';
        }
    }
    echo $output;

?>