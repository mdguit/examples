<?php
session_start();
include ('internship_db.php');
$staff_id = $_SESSION['staff_id'];
$query = mysql_query("SELECT first_name, last_name FROM staff WHERE staff_id = '$staff_id'");
while($row = mysql_fetch_array($query)){
    $f_name = $row['first_name'];
    $l_name = $row['last_name'];
    }
    
    $output = '';
    
    // number of companies, which appears on the page
$per_page=2;
// gerring the number of the page
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

$start=abs($page*$per_page);
    $query1 = mysql_query("SELECT first_name, last_name, login FROM  students ORDER BY users_id LIMIT $start,$per_page");
    
    while($row1=mysql_fetch_array($query1)){
        $first_name = $row1['first_name'];
        $last_name = $row1['last_name'];
        $student_code = $row1['login'];
    
    $output .= "<table class='extra_lists'><tr>
    <td>
    <label>
    <span>".$first_name." ".$last_name."</span>
    </label>
    </td>
    <td>
    <label>
    <span>".$student_code."</span>
    </label>
    </td>
    </tr>
    </table>";
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
   
  <div id="apDiv2" align="center"><a href="main_staff.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left">
<ul id="menu">
<li><a href="main_staff.php" class="selected">Main page</a></li>

   <li><a href="sf_eval.php">Evaluation</a></li>

   <li><a href="student_con.php">List of contracts</a></li>
   <li><a href="watch_feedback.php">Feedback from companies</a></li>
   
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align ="center">
<form action="main_staff.php" class="evaluation"> 
<label>
Hello <?php echo ''.$f_name.' '.$l_name.'';?>. You logged in as staff.
</label>

<table>
<tr>
<td>
<label>
<input type="submit" class="submit" value="Hide list"/>
</label>
</form>
</td>
</tr>
</table>
<br />
<?php print ("$output");
$result=mysql_query("SELECT count(*) FROM students");

$row=mysql_fetch_row($result);
$total_rows=$row[0];

$num_pages=ceil($total_rows/$per_page);

for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {
    echo $i." ";
  } else {
    echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a> ";
  }
}
 ?>
</div>
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>
</body>

</html>