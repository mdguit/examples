<?php
session_start(); 
include ("internship_db.php");
if (isset($_POST['login'])) { 
        $login = $_POST['login']; 
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        $login = trim($login);
        if ($login == '') {
            unset($login);
            } 
            } 
            
    if (isset($_POST['password'])) {
        $password=$_POST['password']; 
        $password = stripslashes($password);
        $password = htmlspecialchars($password);
        $password = trim($password);
        $password = hash("md5",$password); 
        if ($password =='') {
            unset($password);
            }
            }
            
        if (isset($_POST['company_name'])) {
        $company_name=$_POST['company_name']; 
        $company_name = stripslashes($company_name);
        $company_name = htmlspecialchars($company_name);
        $company_name = trim($company_name);
        if ($company_name =='') {
            unset($company_name);
            }
            }
            
            
  
            
 if (empty($login) or empty($password) or empty($company_name)) 
    {
    exit (header('location:c_registration_again.php'));
    }
    
   
    
  
    if (!empty($row['company_id'])) {
     exit (header('location:mistake_1.php'));
    }
    $result1 = mysql_query("SELECT login.company, login.students FROM company, students WHERE login.company = login.students",$db);
    
    if($result1 == 'FALSE'){
         exit (header('location:mistake_1.php'));
    }
 

    $result2 = mysql_query ("INSERT INTO company (login,password, company_name) VALUES('$login','$password', '$company_name')");
    $result= mysql_query("SELECT company_id FROM students WHERE login='$login",$db);
    $row = mysql_fetch_array($result);
    if ($result2=='TRUE')
    {
    $_SESSION['company_id']=$row['company_id'];
    $_SESSION['login']=$row['login']; 
    
    header('location:main_company.php');
    }
 else {
    exit (header('location:mistake_1.php'));
    }

?>