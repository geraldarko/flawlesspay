<?php
//connect to database class
require_once("../Settings/db_class.php");

/**
*General class to handle all users functions 
*/
/**
 *@author Paa Kwesi Addae
 *
 */

class users_class extends db_connection{
	//USERS

    //-INSERT USERS--//
    public function addUser_cls($username,$user_gender,$useremail,$userpassword,$usercontact,$userdob,$userimage){
        //write query
        $userrole='3';
        $hostel_id='0';
        $insertsql = "INSERT INTO users(users_name,user_gender,user_email,user_password,user_contact,user_dob,user_role,user_image,hostel_id) VALUES ('$username','$user_gender','$useremail','$userpassword','$usercontact','$userdob','$userrole','$userimage','$hostel_id')";
        
        //execute 	
        //print $insertsql;
        $this -> db_query($insertsql);
        return ($this);
    }

    //--SELECT All users--//
    public function selectAllUsers_cls(){
        //write query
        
        $selallsql = "SELECT * FROM users";

        //execute 	
        return $this -> db_fetch_all($selallsql);
    }

    //--SELECT A User--//
    public function selectAUser_cls($userid){
        //write query
        
        $selsql = "SELECT * FROM users WHERE users_id= '$userid'";

        //execute 	
        return $this -> db_fetch_one($selsql);
    }

    //-update User--//
    public function updateUser_cls($editedname,$editedemail,$editedcontact,$editeddob,$editedimage,$editedhostelid,$UserID){
        //write query
        
        $updatesql = "UPDATE users SET users_name='$editedname',user_email='$editedemail', user_contact='$editedcontact',user_dob='$editeddob',user_image='$editedimage',hostel_id='$editedhostelid'  WHERE users_id= '$UserID' ";
        
        //execute 	
        //print $insertsql;
        return $this -> db_query($updatesql);
    }

    //--SELECT one email--//
	public function selectOneEmail_cls($email){
		//write query
		
		$selectonesql="SELECT * FROM users WHERE user_email='$email'";

		//execute 	
        //print $selectonesql;
		return $this -> db_fetch_one($selectonesql);
		
		//print_r($this -> db_fetch_one($selectonesql));
	}

    //--SELECT one passwd--//
	public function selectOnePass_cls($email){
		//write query
		
		$selectonesql="SELECT user_password FROM users WHERE user_email='$email' ";

		//execute 	
		return $this -> db_fetch_one($selectonesql);
	}
}
?>
