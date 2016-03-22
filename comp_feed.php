<?php
session_start();
include ("internship_db.php");

$company_id = $_POST['company_id'];

$result = mysql_query("SELECT * FROM feedback WHERE company_id = $company_id");

while($myrow = mysql_fetch_array($result)){
    $output1 = "
    <div align= 'left' class = 'contract'>
    <h1>
    PRACTICAL TRAINING FEEDBACK
    </h1>
<table>
<tr>
<td>
<p>
<label><span>Student Name:</span><br \>
".$myrow['student_name']."
</label>
</p>
</td>
<td>
<p>
<label><span>The training period:</span><br \>
". $myrow['period']."
</label>
</p>
</td>
<td>
<p>
<label><span>Employer:</span><br \>
". $myrow['employer']."</label>
</p>
</td>
</tr>
</table>
<h1>
</h1>
<table>
<tr>
<td>
<p>
<label><span>Professional Skills:</span>
". $myrow['pro_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['pro_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Technical Skills:</span>
". $myrow['tech_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['tech_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Planning Skills:</span>
". $myrow['plan_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['plan_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Assessment Skills:</span>
". $myrow['asses_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['asses_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Communication Skills:</span>
". $myrow['comm_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['comm_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>International Skills:</span>
". $myrow['inter_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['inter_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Social Skills:</span>
". $myrow['soc_skills']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['soc_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Ability to co-operate:</span>
". $myrow['ability_to_coop']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['ability_explan']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Initiative:</span>
". $myrow['initiative']."</label>
</p>
</td>
<td>
<p>
<label><span>Explanation/Specific Information:</span>
". $myrow['initiative_explan']."</label>
</p>
</td>
</tr>
</table>

<table>
<tr>
<td>
<p>
<label><span>Other info:</span>
". $myrow['other_info']."</label>
</p>
</td>
</tr>
</table>
<h1></h1>
<table>
<tr>
<td>
<p>
<label><span>Date:</span>
". $myrow['date']."</label>
</p>
</td>
<td>
<p>
<label><span>Place:</span>
". $myrow['place']."</label>
</p>
</td>
</tr>
</table>
</div>";
}
?>
<html>
<head>
<title>Feedback from company</title> 
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
  <div id="apDiv2" align="center"><a href="main_staff.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left"></a>
<ul id="menu">
<li><a href="main_staff.php" >Main page</a></li>

   <li><a href="sf_eval.php">Evaluation</a></li>
   <li><a href="student_con.php">List of contracts</a></li>
   <li><a href="watch_feedback.php"  class="selected">Feedback from companies</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align = "center">
<h2>Search the filled contract of the students.</h2>

<form action="student_con.php" method ="post">
<input type="text"  name="search" placeholder="Search 'em all"/>
<input type="submit" value=">>"/>
</form>

<?php 
print("$output1");

?>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>

</body>

</html>