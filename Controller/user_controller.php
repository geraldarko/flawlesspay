<?php 
//include controller
require "../Classes/user_class.php";


//ADD NEW USER
function add_user_ctr($name,$email,$gender,$pass,$contact){
    $add = new user();
    return $add->add_user($name,$email,$gender,$pass,$contact);
}


//DELETE NEW USER 
function delete_user_ctr($id){
    $del = new user();
    return $del->delete_user($id);
}



//EDIT USER INFORMATION
function update_user_ctr($id,$name,$email,$contact){
    $update = new user();
    return $update->update_user($id,$name,$email,$contact);
}


//SELECT USER BY ID
function sel_user_ctr($id){
    $sel = new user();
    return $sel->sel_user($id);
}

//SELECT USER BY EMAIL
function sel_usermail_ctr($email){
    $sel = new user();
    return $sel->sel_usermail($email);
}


?>