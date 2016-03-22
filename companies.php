<?php
session_start();

include ('internship_db.php');
$output1 = '';

// number of companies, which appears on the page
$per_page=2;
// gerring the number of the page
if (isset($_GET['page'])) $page=($_GET['page']-1); else $page=0;

$start=abs($page*$per_page);


$result = mysql_query("SELECT * FROM contract ORDER BY users_id LIMIT $start,$per_page");
while($row = mysql_fetch_array($result)) {
    
    $place_of_training = $row['place_of_training'];
            $address = $row['address'];
            $phone = $row['phone'];
            $business_id = $row['business_id'];
            $post_code_and_office = $row['post_code_and_office'];
            $contact_person = $row['contact_person'];
            $con_num_email = $row['con_num_email'];
            $tasks = $row['tasks'];
            $instructor = $row['instructor'];
            $ins_num_email = $row['ins_num_email'];
            
$output1 .= "<table  class= 'lists'>
<tr>
<td>
<label>
<span>Place of training:</span>  ". $place_of_training."
</label><br />
<label>
<span>Phone:</span>  ".$phone."
<label><br />
<label>
<span>Business ID:</span>  ".$business_id."
</label><br />
<label>
<span>Address:</span>  ".$address."
</label><br />
<label>
<span>Postal code and post office:</span>".$post_code_and_office."
</label><br />
<label>
<span>Contact person:</span>  ".$contact_person."
</label><br />
<label>
<span>Contact person's phone number and email address:</span>  ".$con_num_email."
</label><br />
<label>
<span>Instructor:</span> ".$instructor."
</label><br />
<label>
<span>Instructor's phone number and email address:</span> ".$ins_num_email."
</label><br />
<label>
<span>Tasks during the practical training: </span> ".$tasks."
</label>
</td>
</tr>
</table><br />";
}
      ?>

<html>
<head>
<title>Companies</title> 
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

   <li><a href="list_companies.php" class="selected">Companies</a></li>
   
   <li><a href="evaluation.php">Evaluation</a></li>
</ul>
  </div>
  <p>&nbsp;</p>
  
  <p align="center">&nbsp;</p>
  <p align="center">&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
<div id="apDiv3" align ="center">

<h2>Here you can search for the companies, in which students already had practical training or just look at the list of companies.</h2>

<form action="list_companies.php" method ="post">
<input type="text"  name="search" placeholder="Search 'em all"/>
<input type="submit" value=">>"/>
</form>

<?php 
print("$output1");
$result=mysql_query("SELECT count(*) FROM contract");

$row=mysql_fetch_row($result);
$total_rows=$row[0];

$num_pages=ceil($total_rows/$per_page);

for($i=1;$i<=$num_pages;$i++) {
  if ($i-1 == $page) {
    echo '<strong>'.$i.'</strong> &nbsp;';
  } else {
    echo '<a href="'.$_SERVER['PHP_SELF'].'?page='.$i.'">'.$i."</a> ";
  }
}
?>

<br />
</div>
<div id="apDiv4">
<p>
<img src="res/logo_2.png"  alt="logo2" height="96" width="98" align="left">
</p>
</div>

</body>

</html>