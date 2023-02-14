<?php 
$nameError = $emailError = $phoneError = "";
$name = $email = $phone = "";

if(isset($_GET['personName'])){
    if(empty($_GET['personName']))
        $nameError = "your name is required" ;
    else
        $name = $_GET['personName'];

    if(empty($_GET['phone']))
        $phoneError ="your phone is required";
    else
        $phone = $_GET['phone'];

    if(empty($_GET['email']))
        $emailError = "your email is required";
    else
        $email = $_GET['email'];

}   

    
#echo "Your name :" . " " .$_GET['personName'] . "<br>";
#echo "Your number :" . " " .$_GET['phone'] . "<br>";
#echo "Your email :" . " " .$_GET['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form php</title>
</head>
<style>
    .error{color: red;}
</style>
<body>
   <form action="form.php" method="get">
        <input type="text" placeholder="Enter your name " name="personName">
        <small class="error"><?php echo $nameError ?></small>
        <br><br>

        <input type="number" placeholder="Enter your phone no" name="phone">
        <small  class="error"><?php echo $phoneError ?></small>
        <br><br>

        <input type="email" name="email" placeholder="Enter your email" >
        <small  class="error"><?php echo $emailError ?></small>
        <br><br>
        <input type="submit" value="submit" style="background-color:blue; color : aliceblue; border: none; font-weight:700">
   </form>
</body>
</html>