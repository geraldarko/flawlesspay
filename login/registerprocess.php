<?php
include ("../Controller/users_controller.php");


    //collecting form data
    if(ISSET($_POST['registersubmit'])){
        $get_name= $_POST['username'];
        $get_useremail= $_POST['useremail'];
        $get_password= password_hash($_POST['registerpassword'],PASSWORD_BCRYPT);
        $get_contact= $_POST['user_pnum'];
        $get_dob= $_POST['userdob'];
        $get_gender= $_POST['gender'];
        $get_img= $_POST['userImg'];
        $hostelID=0;

        // $imgtmp_name= $_FILES['userImg']['tmp_name'];
        // $imgfile_name= $_FILES['userImg']['name'];
        // $folder= "../images/".$imgfile_name;
       
        // echo $get_name;
        // echo "<br>";
        // echo $get_useremail;
        // echo "<br>";
        // echo $get_password;
        // echo "<br>";
        // echo $get_contact;
        // echo "<br>";
        // echo $get_dob;
        // echo "<br>";
        // echo $imgfile_name;
        // echo "<br>";
        // echo $imgtmp_name;
        // echo "<br>";
        // echo $folder;
        // echo "<br>";
        // echo $hostelID;

        // if(move_uploaded_file($imgtmp_name, $folder)){
        //     echo "image moved";
        // }
        // else{
        //     echo "image not moved";
        //     //var_dump(move_uploaded_file($imgtmp_name, $folder));
        // }



    //    var_dump(addUser_ctr($get_name,$get_useremail,$get_password,$get_contact,$get_dob,$get_img,$hostelID)); 

        if(addUser_ctr($get_name,$get_gender,$get_useremail,$get_password,$get_contact,$get_dob,$get_img,$hostelID)){
              echo "Information added.";  
              header("Location: login.php");
              exit();
        }
        else{
            echo "nah";
        }
       
        // print_r($this);

        // header("Location: login.php");
        // exit();
    }

  
    
?>

<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action= "register.php" method="POST">
        <input type="submit" name="register" value="Sign Up">
        </form>

    </body>