<?php
session_start();
include ("internship_db.php");

$users_id = $_POST['users_id'];

$result = mysql_query("SELECT * FROM contract WHERE users_id = $users_id");

while($myrow = mysql_fetch_array($result)){
    $output1 = "
    <div align= 'left' class = 'contract'>
    <h1>
    Student
    </h1>
<table>
<tr>
<td>
<p>
<label><span>Name:</span>
". $myrow['name']."
</label>
</p>
</td>
<td>
<p>
<label><span>Student Code:</span>
". $myrow['student_code']."</label>
</p>
</td>
<td>
<p>
<label><span>Group Code:</span>
". $myrow['group_code']."</label>
</p>
</td>
</tr>
<tr>
<td>

<p>
<label><span>Field of study:</span>
". $myrow['field_of_study']."</label>
</p>

</td>
<td>
<p>
<label><span>Programme:</span>
". $myrow['programme']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Phone number:</span>
". $myrow['phone_number']."</label>
</p>
</td>
<td>
<p>
<label><span>Email address:</span>
". $myrow['email_address']."</label>
</p>
</td>
</tr>
</table>
<h1></h1>
<h1>
Place of the practical training
</h1>
<table>
<tr>
<td>
<p>
<label><span>Place of the practical training:</span><br />
". $myrow['place_of_training']."</label>
</p>
</td>
<td>
<p>
<label><span>Phone:</span><br />
". $myrow['phone']."</label>
</p>
</td>
<td>
<p>
<label><span>Business ID:</span><br />
". $myrow['business_id']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Address:</span><br />
". $myrow['address']."</label>
</p>
</td>
<td>
<p>
<label><span>Postal code and post office:</span><br />
". $myrow['post_code_and_office']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Contact person:</span><br />
". $myrow['contact_person']."</label>
</p>
</td>
<td>
<p>
<label><span>Contact person's phone number and email address:</span><br />
". $myrow['con_num_email']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Instructor(if not the contact person):</span><br />
". $myrow['instructor']."</label>
</p>
</td>
<td>
<p>
<label><span>Instructors phone number and email address*:</span><br />
". $myrow['ins_num_email']."</label>
</p>
</td>
</tr>
</table>
<h1>
</h1>
<h1>
Lapland University of Apllied Sciences
</h1>
<table>
<tr>
<td>
<p>
<label><span>Contact person:</span><br />
". $myrow['contact_person_luas']."</label>
</p>
</td>
<td>
<p>
<label><span>Contact person's phone number and email address:</span><br />
". $myrow['con_num_email_luas']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Instructor(if not the contact person):</span><br />
". $myrow['instructor_luas']."</label>
</p>
</td>
<td>
<p>
<label><span>Instructors phone number and email address*:</span><br />
". $myrow['ins_num_email_luas']."</label>
</p>
</td>
</tr>
</table>
<h1></h1>
<h1>
Information about the practical training
</h1>
<table>
<tr>
<td>
<p>
<label><span>Type of training:</span>
". $myrow['type']."</label>
</p>
</td>
<td>
<p>
<label><span>Scope of training(cr):</span>
". $myrow['scope']."</label>
</p>
</td>
</tr>
<tr>
<td>
<label><span>Learning objectives defined in the curriculum:</span><br />
". $myrow['learn_object']."</label>
</td>
<td>
<label><span>Student's personal learning and development objectives:</span><br />
". $myrow['dev_object']."</label>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Additional information(e.g., R&D&I goals):</span><br />
". $myrow['add_info']."</label>
</p>
</td>
<td>
<p>
<label><span>Do you plan to apply for the grant?</span><br />
". $myrow['grant_practice']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Tasks during the practical training:</span><br />
".$myrow['tasks']."</label>
</p>
</td>
<td>
<p>
<label><span>Description of the tasks:</span><br />
".$myrow['tasks_descr']."</label>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label><span>Other terms:</span><br />
".$myrow['other_terms']."</label>
</p>
</td>
</tr>
</table></div>";
}
?>
<html>
<head>
<title>Contracts</title> 
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
   <li><a href="student_con.php"  class="selected">List of contracts</a></li>
   <li><a href="watch_feedback.php">Feedback from companies</a></li>
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