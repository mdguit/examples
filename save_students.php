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
            
        if (isset($_POST['first_name'])) {
        $first_name=$_POST['first_name']; 
        $first_name = stripslashes($first_name);
        $first_name = htmlspecialchars($first_name);
        $first_name = trim($first_name);
        if ($first_name =='') {
            unset($first_name);
            }
            }
            
            if (isset($_POST['last_name'])) {
        $last_name=$_POST['last_name']; 
        $last_name = stripslashes($last_name);
        $last_name = htmlspecialchars($last_name);
        $last_name = trim($last_name);
        if ($last_name =='') {
            unset($last_name);
            }
            }
            
  
            
             
 if (empty($login) or empty($password) or empty($first_name) or empty($last_name)) 
    {
    exit (header('location:st_registration_again.php'));
    }
    
    
  
   
    
    if (!empty($row['users_id'])) {
   exit (header('location:mistake_1.php'));
    }

    $result2 = mysql_query ("INSERT INTO students (login,password, first_name, last_name) VALUES('$login','$password', '$first_name','$last_name')");
    $result = mysql_query("SELECT users_id FROM students WHERE login='$login'",$db);
    $row = mysql_fetch_array($result);
    
    if ($result2=='TRUE')
    { 
    $_SESSION['users_id']=$row['users_id'];
    $_SESSION['login']=$row['login'];
    header('location:main.php');
    }
 else {
    exit (header('location:mistake_1.php'));
    }

?>