<?php
session_start();
include ("internship_db.php");
$users_id = $_SESSION['users_id'];
$query = mysql_query("SELECT first_name, last_name, login FROM students WHERE users_id = '$users_id'");
  while($row = mysql_fetch_array($query)){
    
$f_name = $row['first_name'];
$l_name = $row['last_name'];
$student_code = $row['login'];
}


?>
<html>
<head>
<title>Practical training contract</title>
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
<li><a href="main.php">Main page</a></li>

   <li><a href="contract.php" class="selected">Contract</a></li>

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
<div id="apDiv3" >


<form action="save_contract.php" class="basic-grey" method="post">
<h1>Contract for practical training.
<span>* - mandatory fields</span>
</h1>
<h1>
Student
</h1>
<table>
<tr>
<td>
<label><span>Name* :</span><br />
<input name="name" type="text"  maxlength="100"  value="<?php echo ''.$f_name.' '.$l_name.''; ?>">
</label>
</td>
<td>
<label><span>Student Code* :</span>
<input name="student_code" type="text" maxlength="30"  value="<?php echo $student_code;?>">
</td>
<td>
<label><span>Group Code :</span>
<input name="group_code" type="text"  maxlength="100" >
</label>
</td>
</tr>
<tr>
<td>
<label><span>Field of study*:</span>
<select name="field_of_study">
  <option value=""></option>
  <option value="Information Technology">Information Technology</option>
  <option value="Business Administration">Business Administration</option>
  <option value="Business">Business</option>
</select>
</label>
</td>
<td>
<label><span>Programme*:</span>
<input name="programme" type="text" class="text"size="20" maxlength="100">
</label>
</td>
</tr>
<tr>
<td>
<label><span>Phone number*:</span>
<input name="phone_number" type="text" size="20" maxlength="30">
</label>
</td>
<td>
<label><span>Email address*:</span>
<input name="email_address" type="text" size="20" maxlength="30">
</label>
</td>
</tr>
</table>
<h1>
</h1>
<h1>
Place of practical training
</h1>
<table>
<tr>
<td>
<p>
<label>Place of practical training*:<br /></label>
<textarea style="width:300px; height:32px;"  name="place_of_training" cols="80" maxlength="300"></textarea>
</p>
</td>
<td>
<p>
<label>Phone*:<br /></label>
<input name="phone" type="text" size="20" maxlength="30">
</p>
</td>
<td>
<p>
<label>Business ID:<br /></label>
<input name="b_id" type="text" size="18" maxlength="30">
</p>
</td>
</tr>
<tr>
<td>
<p>
<label>Address*:<br /></label>
<textarea style="width:300px; height:32px;"  name="address" cols="80" maxlength="300"></textarea>
</p>
</td>
<td>
<p>
<label>Postal code and post office*:<br /></label>
<textarea style="width:350px; height:32px;"  name="post_code_and_office" cols="80" maxlength="350"></textarea>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label>Contact person*:<br /></label>
<input name="contact_person" type="text" size="50" maxlength="100">
</p>
</td>
<td>
<p>
<label>Contact person's phone number and email address*:<br /></label>
<textarea style="width:350px; height:32px;"  name="con_num_email" cols="80" maxlength="350"></textarea>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label>Instructor(if not the contact person)*:<br /></label>
<input name="instructor" type="text" size="50" maxlength="100">
</p>
</td>
<td>
<p>
<label>Instructors phone number and email address*:<br /></label>
<textarea style="width:350px; height:32px;"  name="ins_num_email" cols="80" maxlength="350"></textarea>
</p>
</td>
</tr>
</table>
<h1></h1>
<h1>
Lapland University of Applied Sciences
</h1>
<table>
<tr>
<td>
<p>
<label>Contact person*:<br /></label>
<input name="contact_person_luas" type="text" size="50" maxlength="100">
</p>
</td>
<td>
<p>
<label>Contact person's phone number and email address*:<br /></label>
<textarea style="width:350px; height:32px;"  name="con_num_email_luas" cols="80" maxlength="350"></textarea>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label>Instructor(if not the contact person)*:<br /></label>
<input name="instructor_luas" type="text" size="50" maxlength="100">
</p>
</td>
<td>
<p>
<label>Instructors phone number and email address*:<br /></label>
<textarea style="width:350px; height:32px;"  name="ins_num_email_luas" cols="80" maxlength="350"></textarea>
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

<label>Type of training(e.g., basic training)*:<br /></label>
<textarea style ="width:450px; height: 32px;" name="type" cols="80" maxlength ="450"></textarea>

</td>
<td>

<label>Scope of training(cr)*:<br /></label>
<input name="scope"  type="text" size="20" maxlength="30">

</td>
</tr>
<tr>
<td>
<label>Learning objectives for practical training defined in the curriculum*:<br /></label>

  <input type="checkbox" name="learn_object[]" value="Deepen the competences based on the curriculum">Deepen the competences based on the curriculum<br />
  <input type="checkbox" name="learn_object[]" value="To widen the competences by learning something not included the curriculum">To widen the competences by learning something not included the curriculum<br />
  <input type="checkbox" name="learn_object[]" value="Specialize in a certain area">Specialize in a certain area

</td>
<td>
<label>Student's personal learning and development objectives*:<br /></label>

  <input type="checkbox" name="dev_object[]" value="One">One<br />
  <input type="checkbox" name="dev_object[]" value="Two">Two<br />
  <input type="checkbox" name="dev_object[]" value="Three">Three<br />
</td>
</tr>
</table><h1></h1>
<table>
<tr>
<td>
<p>
<label>Additional information(e.g., R&D&I goals):<br /></label>
<textarea style="width:480px; height:32px;"  name="add_info" cols="80" maxlength="480"></textarea>
</p>
</td>
<td>
<p>
<label>Do you plan to apply for the grant?*<br /></label>
<select name="grant">
  <option value=""></option>
  <option value="Yes">Yes</option>
  <option value="No">No</option>
</select>
</p>
</td>
</tr>
<tr>
<td>
<p>
<label>Tasks during the practical training*:<br /></label>
<div class="cont">
<div>
  <input type="checkbox" name="tasks[]" value="IT business and management">IT business and management<br />
  <input type="checkbox" name="tasks[]" value="Operating systems">Operating systems<br />
  <input type="checkbox" name="tasks[]" value="Networks">Networks<br />
  <input type="checkbox" name="tasks[]" value="Servers">Servers<br />
  <input type="checkbox" name="tasks[]" value="Software design">Software design<br />
  <input type="checkbox" name="tasks[]" value="Programming">Programming<br />
  <input type="checkbox" name="tasks[]" value="Databases">Databases<br />
  <input type="checkbox" name="tasks[]" value="Graphics">Graphics<br />
  <input type="checkbox" name="tasks[]" value="Project work">Project work<br />
  <input type="checkbox" name="tasks[]" value="Team work">Team work<br />
  <input type="checkbox" name="tasks[]" value="CRM">CRM<br />
  <input type="checkbox" name="tasks[]" value="ERP (like SAP)">ERP (like SAP)<br />
  </div>
  </div>
</p>
</td>
<td>
<p>
<label>Description of the tasks and how it will increase your own competence?*:<br /></label>
<textarea style="width:480px; height:32px;"  name="tasks_descr" cols="80" maxlength="480"></textarea>
</p>
</td>
</tr>

<tr>
<td>
<p>
<label>Other terms:<br /></label>
<textarea style="width:480px; height:32px;"  name="other_terms" cols="80" maxlength="480"></textarea>
</p>
</td>
</tr>
</table>
<p>
    <input type="submit" name="submit" class ="submit" value="Submit">
</p>


</form>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>
</body>
</html>