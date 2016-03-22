<?php
session_start();
include ("internship_db.php");

if (isset($_POST['self_evaluation'])) {
        $self_evaluation=$_POST['self_evaluation'];
        $self_evaluation = stripslashes($self_evaluation);
        $self_evaluation = htmlspecialchars($self_evaluation);
        $self_evaluation = trim($self_evaluation); 
        
        if ($self_evaluation =='') {
            unset($self_evaluation);
            }
            }
           
             $users_id = $_SESSION['users_id']; 
 
 if (empty($self_evaluation)) 
    {
     exit (header('location:evaluation_again.php'));
    //exit ($result2);
    }
    
  
   
    $result2 =mysql_query("UPDATE evaluation SET self_evaluation ='$self_evaluation' WHERE users_id = '$users_id'");
   
    if ($result2=='TRUE')
    {
    header('location:main.php');
    }
 else {
    exit (header('location:mistake_sf.php'));
    }
?>