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
    
 $on_page = 1;

$query = "SELECT * FROM contract WHERE place_of_training LIKE '%$searchq%' OR address LIKE '%$searchq%'";
 
$res = mysql_query($query) or die("could not search");
$count = mysql_num_rows($res);
    if($count == 0){
        $output = 'There was no such results!';
    }       
    else{
$count_records = mysql_fetch_row($res);
$count_records = $count_records[0];
 

$num_pages = ceil($count_records / $on_page);
 

$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
 

if ($current_page < 1)
{
    $current_page = 1;
}

elseif ($current_page > $num_pages)
{
    $current_page = $num_pages;
}
 

$start_from = ($current_page - 1) * $on_page;

 

$query = "SELECT * FROM contract WHERE
           place_of_training LIKE '%$searchq%'
           OR address LIKE '%$searchq%'
           LIMIT $start_from, $on_page";
$res = mysql_query($query);
 


while ($row = mysql_fetch_assoc($res))
{
   $output .= "<table  class= 'lists'>
<tr>
<td>
<label>
<span>Place of training:</span>  ". $row['place_of_training']."
</label><br />
<label>
<span>Phone:</span>  ".$row['phone']."
<label><br />
<label>
<span>Business ID:</span>  ".$row['business_id']."
</label><br />
<label>
<span>Address:</span>  ".$row['address']."
</label><br />
<label>
<span>Postal code and post office:</span>".$row['post_code_and_office']."
</label><br />
<label>
<span>Contact person:</span>  ".$row['contact_person']."
</label><br />
<label>
<span>Contact person's phone number and email address:</span>  ".$row['con_num_email']."
</label><br />
<label>
<span>Instructor:</span> ".$row['instructor']."
</label><br />
<label>
<span>Instructor's phone number and email address:</span> ".$row['ins_num_email']."
</label><br />
<label>
<span>Tasks during the practical training: </span> ".$row['tasks']."
</label>
</td>
</tr>
</table><br />";

}

 


for ($page = 1; $page <= $num_pages; $page++)
{
    if ($page == $current_page)
    {
        $output2 .= '<strong>'.$page.'</strong> &nbsp;';
    }
    else
    { 
    
        $output2 .= '<a href="'.$_SERVER['PHP_SELF'].'?page='.$page.'&searchq='. $_GET['searchq'] .'">'.$page.'</a> &nbsp;';
    }
}
}}
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
<table>
<tr>
<td>
<form action="companies.php" class="lists">
<label>
<input type="submit" class ="submit" value="Look at the list"/>
</label>
</form>
</td>
<tr>
</table>

<form action="list_companies.php" method ="post">
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