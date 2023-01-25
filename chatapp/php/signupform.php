<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password) ){
        //let check if user email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//if email is valid
            //let check if user email already exist in the database or not
            $sql = mysqli_query($conn, "SELECT Email FROM userlist WHERE  email = '{$email}'");
            if(mysqli_num_rows($sql) > 0 ){//if email already exist
                echo "$email - This email already exist!!!";
            }else{
                //let check user upload file or not
                if(isset($_FILES ['image'])){//if file is uploaded
                    $img_name =  $_FILES['image']['name']; //getting user uploaded image name  
                    $img_type = $_FILES['image']['type'];
                    $tmp_name =  $_FILES['image'] ['tmp_name']; //this temporary name is used to save/move files in our folder

                    //let explode image and get the last extension like JPG PNG
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);// here we get the extension of a user uploaded img file

                    $extensions = ['png', 'jpeg', 'jpg']; //these are some valid img extensions and we have store them in an array
                    if(in_array($img_ext, $extensions) === true){//if user upload img ext is matched with any array extension
                        $time = time();//this will return us current time
                                        //this time i needed because when you uploading user img in our folder we rename we rename user file with our current time
                                        //so all the image file will have a unique name
                        //let move the user upload img to our particular file
                        $new_img_name = $time.$img_name;

                       if(move_uploaded_file($tmp_name, "profiles/".$new_img_name)){//if user upload img move to our folder successful
                        $status = "Active now"; //once users sign in then their status will be active now
                        $random_id = rand(time(), 10000000);//creating random id for user

                        //let insert all user data inside table
                        $sql2 = mysqli_query($conn, "INSERT INTO userlist (unique_id, fname, lname, email, password, img, status)
                                            VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");
                        if($sql2){//if these data are inserted
                            $sql3 = mysqli_query($conn, "SELECT * FROM userlist WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id']; // using this session we used  user unique_id in other php file
                                echo "success";
                            }
                        }else{
                            echo "Something went wrong!";
                        }
                       }
                       
                    }else{
                        echo "Please select an image file - jpeg, jpg, png!";
                    }

                }else{
                    echo "please select an image file!";
                }
            }

        }else{
            echo "$email - This is not a valid email!";
        }
    }else{
        echo "All input field are required!";
    }
    
?>