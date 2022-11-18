<?php
//check if user is logged in already
//start session
session_start();
//check if user is logged in already
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: ../View/index.php");
    exit;
}

require("../Controller/user_controller.php");

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //check if email exists 
    $e_check = sel_usermail_ctr($email);
    if(empty($e_check)){
        echo "<SCRIPT>alert('Invalid Email or Password');
        window.location.replace('login.php');
        </SCRIPT>";
    }
    //confiem password
    if(password_verify($password,$e_check['user_password']) == true){
        session_start();
        //set session variables
        $_SESSION["loggedin"] = true;//logged in status
        $_SESSION["id"] = $e_check['customer_id']; //id
        $_SESSION["name"] = $e_check['customer_name'];//name
        $_SESSION["role"] = $e_check['user_role'];//role

        if($_SESSION["role"] == 3){
            header("Location: ../index.php");
        }
        elseif($_SESSION["role"] == 2){
            header("Location: ../Admin");
        }
        else{
            header("Location: ../Admin");
        }

    }
    else{
        echo "<SCRIPT> alert('Invalid Email or Password');
        window.location.replace('login.php');</SCRIPT>";
    }

    
}
?>