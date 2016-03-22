<?php
session_start();
include ('internship_db.php');
$users_id = $_SESSION['users_id'];
$query = mysql_query("SELECT first_name, last_name FROM students WHERE users_id = $users_id");



while($row = mysql_fetch_array($query)){
    $f_name = $row['first_name'];
    $l_name = $row['last_name'];
}
?>
<html>
<head>
<title>Main page</title> 
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="apDiv1">
  <p>&nbsp;</p>
  <h1 align="center"><span class="inscription"><strong class="inscription">IT'S TIME TO GROW UP AND GET A JOB!</strong><br>
    Well... Almost job.<br>
    <br>
    Practice training page. </span></h1>
   <p style="font-size: large;">
   <a href="Index.php">Log out</a></p>
   </p>
   
  <div id="apDiv2" align="center"><a href="main.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left">
<ul id="menu">
<li><a href="main.php" class="selected">Main page</a></li>

   <li><a href="contract.php">Contract</a></li>

   <li><a href="list_companies.php">Companies</a></li>
   
   <li><a href="evaluation.php">Evaluation</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align="center">
<p align ="center">
<form action="convert1.php" method="post" class="evaluation">
<label>
Hello <?php echo ''.$f_name.' '.$l_name.''; ?>. You logged in as a student. Here you can download empty form of practical training contract.
</label>
</p>

<p>
    <input type="submit" name="Empty"  class="submit" value="Empty form">
</p>
</form>
</div>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>
</body>

</html>