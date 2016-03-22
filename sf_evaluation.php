<?php
session_start();
include ('internship_db.php');

if (isset($_POST['staff_evaluation'])) {
        $staff_evaluation=$_POST['staff_evaluation'];
        $staff_evaluation = stripslashes($staff_evaluation);
        $staff_evaluation = htmlspecialchars($staff_evaluation);
        $staff_evaluation = trim($staff_evaluation); 
        
        if ($staff_evaluation =='') {
            unset($staff_evaluation);
            }
            }
          $users_id = $_POST['users_id']; 
          
            if (empty($staff_evaluation)) 
    {
     exit (header('location:sf_eval_again.php'));
    //exit ($result2);
    }
    
    
    $result2 =mysql_query("UPDATE evaluation SET staff_evaluation ='$staff_evaluation' WHERE users_id = '$users_id'");
  
    if ($result2=='TRUE')
    {
    header('location:sf_eval.php');
    }
 else {
    exit (header('location:mistake_sf.php'));
       
        }
 
?>