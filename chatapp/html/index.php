<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="../fontawesome-6.1/css/all.min.css">
    <link rel="shortcut icon" href="../images/e-logo.png">
    <link rel="stylesheet" href="../css/indexStyle.css">
    <script src="https://kit.fontawesome.com/630a6a2775.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <section class="form singup">
            <header>E-Chat App</header>
            <p class="header_info">Create an account</p>
            <form action="">
                <div class="error_text">This is an error message </div>
                <div class="client_details">
                    <div class="inputBox">
                        <input type="text" name="fName" required="required" >
                        <span>First Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="lName" required="required">
                        <span>Last Name</span>
                    </div>
                    <div class="inputBox">
                        <input type="text" name="Email" id="Email_address" required="required" >
                        <span>Email Address</span>
                    </div>
                    <div class="inputBox">
                        <input type="password"  required="required" id="password" >
                        <i class="far fa-eye" id="togglePassword" style="margin-left: -30px; cursor: pointer;"></i>
                        <span>Password</span>
                    </div>
                    <div class="field">
                        <label>Select image</label>
                        <input type="file">
                    </div>
                    <p class="terms_condition">By clicking on sign-up you agree to our <a href="#">Terms|Privacy</a> </p>
                    <div class="inputBox">
                        <input type="submit" id="signUp" value="Sign Up">
                    </div>
                </div>
            </form>
            <div class="login_link">Already have an account? <a href="./login.php">Login now</a> </div>
        </section>
    </div>

    <script src="../Javascripts/pass-togel.js"></script>
    <script src="../Javascripts/signup.js"></script>
</body>
</html>