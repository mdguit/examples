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
             
if (empty($login) or empty($password)) 
    {
    exit (header('location:Index.php'));
    }
    
$result = mysql_query("SELECT * FROM students WHERE login='$login'");
$result1 =  mysql_query("SELECT * FROM staff WHERE login='$login'");
$result2 =  mysql_query("SELECT * FROM company WHERE login='$login'");
    $myrow = mysql_fetch_array($result);
    $myrow1 = mysql_fetch_array($result1);
    $myrow2 = mysql_fetch_array($result2);
    if (empty($myrow['password']) && empty($myrow1['password']) && empty($myrow2['password']))
    {
    exit (header('location:mistake_1.php'));
    }
    else {
    
    if ($myrow['password']==$password) {
        
    $_SESSION['login']=$myrow['login']; 
    $_SESSION['users_id']=$myrow['users_id'];
    header('location:main.php');
    
    }
    else if ($myrow1['password']==$password) {
        
    $_SESSION['login']=$myrow1['login']; 
    $_SESSION['staff_id']=$myrow1['staff_id'];
    header('location:main_staff.php');
    }
    
    else if ($myrow2['password']==$password) {
        
    $_SESSION['login']=$myrow2['login'];
    $login = $_SESSION['login'];
 
    $_SESSION['company_id']=$myrow2['company_id'];
    header('location:main_company.php');
    }
    else {
        header('location:mistake_1.php');
    }
    }

    
?>