<?php
session_start();
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
<div id="apDiv3" style="color:green;" align="center">
<p align ="center">
You successfully filled the contract. Please, print the contract and collect all needed signatures. Also you can download empty form.
</p>

<form action="convert.php" method="post" class="lists">
<p>
    <input type="submit" name="Filled" class="submit" value="Filled form">
</p>
</form>
<form action="convert1.php" method="post" class="lists">
<p>
    <input type="submit" name="Empty" class="submit" value="Empty form">
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