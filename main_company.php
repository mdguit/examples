<?php
session_start();
include ('internship_db.php');
$company_id = $_SESSION['company_id'];
$query = mysql_query("SELECT company_name FROM company WHERE company_id = $company_id");

while($row = mysql_fetch_array($query)){
    $c_name = $row['company_name'];
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
   
  <div id="apDiv2" align="center"><a href="main_company.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left">
<ul id="menu">
<li><a href="main_company.php" class="selected">Main page</a></li>
<li><a href="comp_evaluation.php">Make an evaluation</a></li>
<li><a href="feedback.php">Feedback</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align ="center">
<form action="convert_feedback1.php" method="post" class="evaluation">
<label>
Hello. You logged in as representative of the company "<?php echo $c_name; ?>". Here you can download empty form of practical training feedback.
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