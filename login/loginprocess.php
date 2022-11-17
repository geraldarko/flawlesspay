<?php
include "../Controller/users_controller.php";
include("../Settings/core.php");

 //collecting form data
 if(ISSET($_POST['loginsubmit'])){
    $get_email= $_POST['useremail'];
    $get_passwd=$_POST['loginpassword'];
    
    // echo $get_email;
    // echo "<br>";
    // echo $get_passwd;
    //selectOneEmail_ctr($get_email);
    $emailq=selectOneEmail_ctr($get_email);
    $passq=selectOnePass_ctr($get_email);

    //validate email
    if(empty($emailq)){
        echo "Username or password is wrong.";
    }

     // VAlidate password
     else if(password_verify($get_passwd,$passq['user_password'])){
        if($emailq['user_role'] == 3){
              
            //echo "password right 3";
            //role 3 is normal user
            // Password is correct
                        
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["uid"] = $emailq['users_id'];
            $_SESSION["role"] = $emailq['user_role'];  
            header("location: ../index.php");   
        }
        elseif($emailq['user_role'] == 2){
            //echo "password right 2";
            //role 2 is admin

            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["uid"] = $emailq['users_id'];
            $_SESSION["role"] = $emailq['user_role'];  
            $_SESSION["hid"] = $emailq['hostel_id'];
            header("location: ../admin/index.php");  
        }
        else{
            
            //echo "password right 1";
            //role 1 is root
            //Password is correct              
            // Store data in session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["uid"] = $emailq['users_id'];
            $_SESSION["role"] = $emailq['user_role'];  
            header("location: ../root/index.php");  
         }
    }

    else{
        echo "username or Password is wrong.";  
    }

    // else{
    //     echo "correct.";
    //     //var_dump($emailq);
    // } 
    
 }

?>

