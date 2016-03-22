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
$per_page=1;
// getting the number of the page
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

$start=abs($page*$per_page);

    $query = $query = "SELECT * FROM feedback WHERE student_name LIKE '%$searchq%' OR employer LIKE '%$searchq%'  LIMIT $start,$per_page";
    $res = mysql_query($query) or die("could not search");
   $count = mysql_num_rows($res);
    if($count == 0){
        $output = 'There was no such results!';
    }       
    else{
    
        while($row = mysql_fetch_assoc($res)){
            
            $student_name = $row['student_name'];
            $employer = $row['employer'];
            $_POST['company_id'] = $row['company_id'];
            

            $output .= '<table class = "lists"><tr><td>'.$student_name.', '.$employer.': 
            </td>
            <td>   
            <form action="comp_feed.php" method="post">
    <label>
   <input type="submit" name="submit" class ="submit" value="Look at the feedback">
   </label>
   <input type="hidden" name="company_id" value="' . $row['company_id'] . '">
</form>

</td>
</tr>
</table><br \>';
        }
    $result=mysql_query("SELECT count(*) FROM feedback WHERE student_name LIKE '%$searchq%' OR employer LIKE '%$searchq%'");

$row=mysql_fetch_row($result);
$total_rows=$row[0];
if($total_rows>$per_page){
    
$num_pages=ceil($total_rows/$per_page);
 
for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {
    $output2 .= '<strong>'.$i.'</strong> &nbsp;';
  } else {
    $output2 .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'&searchq='. $_GET['searchq'] .'">'.$i."</a> ";
   }
}
}
 }
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
<h2>Search the filled feedback from companies.</h2>

<form action="watch_feedback.php" method ="post">
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