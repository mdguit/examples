<?php
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
    exit (header('location:s_registration_again.php'));
    }
    
    include ("internship_db.php");
    
    if (!empty($myrow['staff_id'])) {
    exit ("This login name is already taken. Enter another.");
    }

    $result2 = mysql_query ("INSERT INTO staff (login,password, first_name, last_name) VALUES('$login','$password', '$first_name', '$last_name')");
    $result = mysql_query("SELECT staff_id FROM staff WHERE login='$login'",$db);
    $row = mysql_fetch_array($result);
    if ($result2=='TRUE')
    {
    $_SESSION['login']=$row['login']; 
    $_SESSION['staff_id']=$row['staff_id'];
    header('location:main_staff.php');
    }
 else {
    exit (header('location:mistake_1.php'));
    }


?>