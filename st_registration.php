<?php
session_start();
?>
<html>
<head>
<title>Students Registration</title> 
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
<div id="apDiv3" align ="center">
<p align ="center">

   
    <form action="save_students.php" class="registration" method="post">
 <h1>Students Registration
 <span>Please fill all the texts in the fields.</span>
 </h1>
 

    <label>
    <span>Login:</span>
    <input name="login" placeholder="Your Student Number" type="text" size="20" maxlength="100">
    </label>
  

    <label>
    <span>Password:</span>
    <input name="password" placeholder="Your Password" type="password" size="20" maxlength="100">
    </label>
    

    <label>
    <span>First Name:</span>
    <input name="first_name" placeholder="Your First Name" type="text" size="20" maxlength="30">
    </label>
    
   
    <label>
    <span>Last Name:</span>
    <input name="last_name" placeholder="Your Last Name" type="text" size="20" maxlength="30">
    </label>
    
    
    <input type="submit" class="submit" name="submit" value="Registration">
</p>
<p>&nbsp;</p>
<p><a href="Index.php">Back to main page.</a></p>
    </form>
    </div>
</p>
</div>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>
</body>

</html>

   

    