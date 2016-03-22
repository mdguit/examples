<?php
session_start();
?>
<html>
<head>
<title>Feedback</title>
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
<li><a href="main_company.php">Main page</a></li>

   <li><a href="comp_evaluation.php">Make an evaluation</a></li>

   <li><a href="feedback.php" class="selected">Feedback</a></li>
   
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3">


<form action="save_feedback.php" class="basic-grey" method="post">
<h1>Practical training feedback
<span>* - mandatory fields</span>
</h1>
<table>
<tr>
<td>

<label><span>Student Name*:</span>
<input name="student_name" type="text" size="20" maxlength="100"></label>

</td>
<td>

<label><span>The training period*:</span>
<input name="period" type="text" size="20" maxlength="100"></label>

</td>
<td>

<label><span>Employer*:</span><br />
<input name="employer" type="text" size="40" maxlength="100"></label>

</td>
</tr>
</table>
<h1></h1>
<h1>
Feedback for the students
</h1>
<table>
<tr>
<td>
<p>
<label><span>Professional Skills*:</span><br />
<select name="pro_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="pro_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Technical Skills*:</span><br />
<select name="tech_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="tech_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Planning Skills*:</span><br />
<select name="plan_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="plan_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Assessment Skills*:</span><br />
<select name="asses_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="asses_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Communication Skills*:</span>
<select name="comm_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="comm_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>International Skills*:</span>
<select name="inter_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="inter_explan" cols="80" maxlength="300"></textarea></label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Social Skills*:</span><br />
<select name="soc_skills">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="soc_explan" cols="80" maxlength="300"></textarea></label>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Ability to co-operate*:</span>
<select name="ability_to_coop">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="ability_explan" cols="80" maxlength="300"></textarea></label>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Initiative*:</span><br />
<select name="initiative">
  <option value=""></option>
  <option value="0">0</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
</select></label>
</p>
</td>
<td>
<label><span>Explanation/Specific Information*:</span>
<textarea style="width:300px; height:32px;"  name="initiative_explan" cols="80" maxlength="300"></textarea></label>
</td>
</tr>
<tr>
<td>
<label><span>Other info:</span>
<textarea style="width:480px; height:32px;"  name="other_info" cols="80" maxlength="480"></textarea></label>
</td>
</tr>
<tr>
<td>
<label><span>Date*:</span>
<textarea style="width:300px; height:32px;"  name="date" cols="80" maxlength="300"></textarea></label>
</td>
<td>
<label><span>Place*:</span>
<textarea style="width:300px; height:32px;"  name="place" cols="80" maxlength="300"></textarea></label>
</td>
</tr>
</table>
<p>
    <input type="submit" name="submit" class="submit" value="Submit">
</p>
</form>

<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
<br />
</div>
</body>
</html>