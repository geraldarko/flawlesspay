<script src="../js/redirect/alertRedirect.js"></script>

<?php
include "../Controller/infrastructure_controller.php";
include("../Settings/core.php");
    
//collecting form data
if(ISSET($_POST['roominfo'])){
    $get_roomname=$_POST['roomName'];
    $get_roomtype=$_POST['roomType'];
    $get_roomgender=$_POST['roomGender'];
    $get_roomCap=$_POST['roomCap'];
    $get_hostelID= $_SESSION['hid'];

    // echo $get_roomname;
    // echo "<br>";
    // echo $get_roomtype;
    // echo "<br>";
    // echo $get_roomCap;
    // echo "<br>";
    // echo "LAST:";
    // echo $get_hostelID;

    //addRoom_ctr($get_hostelID,$get_roomname,$get_roomtype,$get_roomCap);

    if(addRoom_ctr($get_hostelID,$get_roomname,$get_roomtype,$get_roomgender,$get_roomCap) != NULL){
        echo '<script>alertRedirect_admin("Record Added","rooms.php")</script>';
    }
    else{
        print("Room Not Added.");
    }

}
?>
