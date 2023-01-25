<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="E-Chart">
    <meta name="keywords" content="chart site, e-chart, messages, make new friends, chart online">
    <meta name="author" content="Ebenezer Agyepong" >
    <link rel="shortcut icon" href="../images/e-logo.png">
    <link rel="stylesheet" href="../css/usersStyle.css">
    <link rel="stylesheet" href="../fontawesome-6.1/css/all.min.css">
    <title>E-Chart</title>
    <script src="https://kit.fontawesome.com/630a6a2775.js" crossorigin="anonymous"></script>
</head>
<?php
    session_start();
    if(!isset($_SESSION['unique_id'])) {
        header("location: ../login.php");
    }
?>
    <body>
        <div class="wrapper">
            <section class="chat-area">
                    <header>
                    <?php
                        include_once "../php/config.php";
                        $user_id =mysqli_real_escape_string($conn, $_GET['user_id']);
                        $sql = mysqli_query($conn, "SELECT * FROM userlist WHERE unique_id = {$user_id}");
                            if(mysqli_num_rows($sql) > 0){
                            $row = mysqli_fetch_assoc($sql);
                        }
                    ?> 

                        <a href="../html/users.php" class="back-icon"><i class=" fas fa-arrow-left" ></i></a>
                        <img src="/php/profiles/ <?php echo $row['img'] ?>" alt="">
                            <div class="details">
                                <span><?php echo $row['fname'] ." ". $row['lname']?></span>
                                <p><?php echo $row['status'] ?> </p>
                            </div>
                    </header>
                    <div class="chat-box">
                        
                    </div>
                    <form action="#" class="typing-area" autocomplete="off">
                        <input type=""text name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden >
                        <input type=""text name="incoming_id" value="<?php echo $user_id; ?>" hidden>
                        <input type="text" name="message" class="input-filed" placeholder="Type a message">
                        <button><i class="fab fa-telegram-plane"></i></button>
                    </form>
            </section>
        </div>  
        <script src="../Javascripts/chat.js"></script>
    </body>
</html>