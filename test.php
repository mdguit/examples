<?php
session_start();
include ("internship_db.php");
$output = '';  
$output2 = '';


if(isset($_POST['search'])) {
    $searchq = $_POST['search'];
     $_GET['searchq'] = $searchq;
    }
   
  if(isset($_GET['searchq'])) {$searchq=$_GET['searchq'];
    $searchq = preg_replace("#[^0-9_a-z A-Z]#i","", $_GET['searchq'] );
// number of companies, which appears on the page
$per_page=2;
// gerring the number of the page
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

$start=abs($page*$per_page);

    $query = "SELECT * FROM contract WHERE name LIKE '%$searchq%' OR student_code LIKE '%$searchq%'  LIMIT $start,$per_page";
    $res = mysql_query($query) or die("could not search");

while ($row = mysql_fetch_assoc($res))
{
            $name = $row['name'];
            $student_code = $row['student_code'];
            $_POST['users_id'] = $row['users_id'];
            $users_id = $_POST['users_id'];
            $query1 = mysql_query("SELECT * FROM evaluation WHERE users_id =$users_id");
            $row1 = mysql_fetch_array($query1);
            $st_grade = $row1['self_evaluation'];
            if($st_grade == ''){
                $st_grade = 'No grade yet';
            }
            $sf_grade = $row1['staff_evaluation'];
            if($sf_grade == ''){
                $sf_grade = 'No grade yet';
            }
            $c_grade = $row1['company_evaluation'];
             if($c_grade == ''){
                $c_grade = 'No grade yet';
            }
            $output .= '<table class = "lists"><tr><td>'.$name.' 
            </td>
            <td>
            '.$student_code.' 
            </td>
            <td>
            
            <form action="sf_evaluation.php" method="post">

   
     <label>
     <select name="staff_evaluation">
     <option value=""></option>
     <option value="0">0</option>
     <option value="1">1</option>
     <option value="2">2</option>
     <option value="3">3</option>
     <option value="4">4</option>
     <option value="5">5</option></label>
</select>
    
    
    <input type="submit" name="submit" class = "submit" value="Staff Evaluation">
    <input type="hidden" name="users_id" value="' . $row['users_id'] . '">
</form>

</td>
</tr>
<tr>
<td>
<label>Self Evaluation: </label>'.$st_grade.'
</td>
<td>
<label>Staff Evaluation: </label>'.$sf_grade.'
</td>
<td>
<label>Company Evaluation: </label>'.$c_grade.'
</td>
</tr>
</table><br />';

}

$result=mysql_query("SELECT count(*) FROM contract");

$row=mysql_fetch_row($result);
$total_rows=$row[0];

$num_pages=ceil($total_rows/$per_page);

for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {
    $output2 .= $i." ";
  } else {
    $output2 .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'&searchq='. $_GET['searchq'] .'">'.$i."</a> ";
  }
}
 }
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
  <div id="apDiv2" align="center"><a href="main_staff.php"><img src="res/logo_1.png" width="256" height="88" alt="logo" align="left"></a>
<ul id="menu">
<li><a href="main_staff.php" >Main page</a></li>

   <li><a href="sf_eval.php" class="selected">Evaluation</a></li>
   <li><a href="student_con.php">List of contracts</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align = "center">
<h2>Search the student, whom you want to punish... Oh, I mean, evaluate.</h2>

<form action="test.php" method ="post">
<input type="text"  name="search" placeholder="Search 'em all"/>
<input type="submit" value=">>"/>
</form>

<?php 
print("$output");
print("$output2");

?>

</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>

</body>

</html>