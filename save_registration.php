<?php
session_start();
include ("internship_db.php");

if (isset($_POST['users_type'])){
    $users_type = $_POST['users_type'];
    $users_type = stripslashes($users_type);
    $users_type = htmlspecialchars($users_type);
    $users_type = trim($users_type);
    if($users_type == ''){
        unset($users_type);
    }
}

if(empty ($users_type)){
     exit (header('location:registration_again.php'));
     }
else{
        if($users_type == 'student'){
    header('location:st_registration.php');
    }
    else if($users_type == 'staff'){
        header('location:s_registration.php');
    }
    else if($users_type == 'company'){
          header('location:c_registration.php');
    }
    }

    
    
    
?>