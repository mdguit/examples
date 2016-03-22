<?php
include ("internship_db.php");
?>
<html>
<head>
<title>Evaluation</title> 
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
  <div id="apDiv2" align="center"><a href="main.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left"></a>
<ul id="menu">
<li><a href="main.php" >Main page</a></li>

   <li><a href="contract.php">Contract</a></li>

   <li><a href="list_companies.php">Companies</a></li>
   
   <li><a href="evaluation.php" class="selected">Evaluation</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div style="color:red;" align ="center">Please, try again, something was wrong.</div>
<div id="apDiv3" align = "center">
<h2>Make a self-evaluation of your practical training!</h2>
    <form action="st_evaluation.php" method="post" class="evaluation">
<table>
<tr>
<td>
<p >

   
     <label>Self Evaluation:</label>
     <select name="self_evaluation">
     <option value=""></option>
     <option value="0">0</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option>
</select>
    
    
    <input type="submit" name="submit" class="submit" value="Continue">

</p>
</td>
</tr>
</table>
</form>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>

</body>

</html>