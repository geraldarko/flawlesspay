<?php
//connect to the user account class
include("../classes/users_class.php");

//sanitize data




//--INSERT--//
function addUser_ctr($user_Name,$user_gender,$user_Email,$user_Password,$user_Contact,$user_Dob,$user_Image){
    $addItem= new users_class();

    return $addItem->addUser_cls($user_Name,$user_gender,$user_Email,$user_Password,$user_Contact,$user_Dob,$user_Image);
    //return $addItem;
    
}


// //--SELECT ONE email--//
// function selectOneUser_ctr($customerinfo,$email){
//     $selectOneItem= new user_class();

//    $selectOneItem->selectOne_cls($customerinfo,$email);

//    return $selectOneItem;
    
// }

//--SELECT A Product--//
function selectAUser_ctr($userID){
    $selectAUser= new users_class();

    return $selectAUser->selectAUser_cls($userID);
    
}

//--SELECT ONE Email--//
function selectOneEmail_ctr($email){
    $selectOneEmail= new users_class();

   $record = $selectOneEmail->selectOneEmail_cls($email);

   return $record;
   //print_r($selectOneEmail);
    
}

//--SELECT ONE Password--//
function selectOnePass_ctr($email){
    $selectOnePass= new users_class();

   $passrecord = $selectOnePass->selectOnePass_cls($email);

   return $passrecord;
   //print_r($passrecord);
    
}

//--SELECT All--//
function selectAllUsers_ctr(){
    $selectAItem= new users_class();

    return $selectAItem->selectAllUsers_cls();
    
}
//--UPDATE--//

//--DELETE--//

?>