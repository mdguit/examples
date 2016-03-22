<?php
session_start();
include ("internship_db.php");

if (isset($_POST['company_evaluation'])) {
        $company_evaluation=$_POST['company_evaluation'];
        $company_evaluation = stripslashes($company_evaluation);
        $company_evaluation = htmlspecialchars($company_evaluation);
        $company_evaluation = trim($company_evaluation); 
        
        if ($company_evaluation =='') {
            unset($company_evaluation);
            }
            }
           
           
 
 if (empty($company_evaluation)) 
    {
     exit (header('location:comp_evaluation_again.php'));
    
    }
    
  
    $login = $_SESSION['login'];
 
    //$result2 =mysql_query("INSERT INTO evaluation(company_evaluation) VALUES ('$company_evaluation') WHERE login = '$login'");
    $result2=mysql_query("UPDATE evaluation SET company_evaluation ='$company_evaluation' WHERE login = '$login'");
    if ($result2=='TRUE')
    {
    header('location:main_company.php');
  
    }
 else {
     exit (header('location:mistake_co.php')); 
     
    }

?>