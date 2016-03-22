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
 <table>
<tr>
<td>
     <form action="login.php" method="post" class="login">
    

 <p>
    <label>Login:<br></label>
    <input name="login" type="text" size="20" maxlength="100">
 </p>
    <p>

    <label>Password:<br></label>
    <input name="password" type="password" size="20" maxlength="100">
    </p>
<table>
<tr>
<td>
    <p>
    <input type="submit" name="submit" class ="submit" value="Ok">
    </p>
</td>
    <label><span><a href="registration.php">Want to join us?</a></span></label>
    
    </tr>
  </table>
    <p>
    
    </form>
    </p>
    </tr>
    </table>
    <br />
   
   

  <div id="apDiv2" align="center"><a href="Index.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left">
<ul id="menu">
<li><a href="Index.php" class="selected">Main page</a></li>

   <li><a href="contract_1.php">Contract</a></li>

   <li><a href="companies_1.php">Companies</a></li>
   
   <li><a href="evaluation_1.php">Evaluation</a></li>
</ul>
  </div>
 
</div>
<div id="apDiv3" style="color:red;">
<p align ="center">
You logged in as a guest, please log in or sign up to get access.
</p>
</div>

<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>
</body>

</html>