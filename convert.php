<?php
session_start();

require('fpdf/fpdf.php'); //pdf-library is located in subfolder of this folder
class PDF extends FPDF{
    
	function Header(){
	   
	$image = "res/lapinamk.jpg";
		$this->SetFont('Courier','B',15);
		//Print the headers
        $this->SetXY(10,10);
		$this->Cell(60,10,'PRACTICAL TRAINING CONTRACT',0,0);
        $this->SetXY(137,0);
		$this->Cell(60,10,$this->Image($image,$this->GetX(), $this->GetY(), 70),0,1); 
        $this->SetXY(10,20); 
		$this->Cell(0,1,'','B',1);	//Prints a line to bottom of current line
	}
	function Footer(){
		//footer for the page
		$this->SetFont('Times','',8);
		$this->SetY(-15); //about 1,5cm from the bottom
		$this->Cell(0,1,'','B',1);	//line to the current location
		$this->Cell(60,10,'',0,0); //empty cess
	
	}
}
//Access the PDF -class
$pdf=new PDF();
$pdf->AddPage(); //new page
$pdf->SetFont('Arial','B',12);
$pdf->SetFillColor(230,230,230);
$pdf->Ln(3); //3 height of line
$pdf->Cell(0,10,'STUDENT',1,0,'L',1); //Cell, width whole lin
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1); //Line with borders
$pdf->SetXY(10,34);
$pdf->Cell(40,10,'Name','B',0);
$pdf->Cell(30,10,'Student code','B',0);
$pdf->Cell(50,10,'Group Code','B',0);
$pdf->Cell(60,10,'Field of study ','B',1);



//Select values from database
include('internship_db.php');
$users_id = $_SESSION['users_id']; 
$sql="select * from contract where users_id = '$users_id'";
$result=mysql_query($sql) or die('Could not retrieve from table');
$x=185;
$y=44;
while($row=mysql_fetch_array($result)){
//print the results
	$pdf->Cell(40,10,$row['name'],1,0);
	$pdf->Cell(30,10,$row['student_code'],1,0);
	$pdf->Cell(50,10,$row['group_code'],1,0);
	$pdf->Cell(70,10,$row['field_of_study'],1,1);
   
    

$pdf->SetFillColor(230,230,230);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,54);
$pdf->Cell(80,10,'Programme','B',0);
$pdf->Cell(40,10,'Phone number','B',0);
$pdf->Cell(70,10,'E-mail address','B',0);
$pdf->Ln(10);


  
    $pdf->Cell(80,10,$row['programme'],1,0);
	$pdf->Cell(40,10,$row['phone_number'],1,0);
	$pdf->Cell(70,10,$row['email_address'],1,0);
   
   
     $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,74);
   $pdf->Cell(0,10,'PLACE OF PRACTICAL TRAINING',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,84);
$pdf->Cell(55,10,'Place of practical training','B',0);
$pdf->Cell(40,10,'Phone','B',0);
$pdf->Cell(30,10,'Business ID','B',0);
$pdf->Cell(65,10,'Address','B',1);


	$pdf->Cell(55,10,$row['place_of_training'],1,0);
	$pdf->Cell(40,10,$row['phone'],1,0);
	$pdf->Cell(30,10,$row['business_id'],1,0);
	$pdf->Cell(65,10,$row['address'],1,1);
    
$pdf->SetFillColor(230,230,230);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,104);
$pdf->Cell(80,10,'Postal code and postal office','B',0);
$pdf->Cell(40,10,'Contact person','B',0);
$pdf->Cell(70,10,'Contact pers. phone and email','B',0);
$pdf->Ln(10);
  
    $pdf->Cell(80,10,$row['post_code_and_office'],1,0);
	$pdf->Cell(40,10,$row['contact_person'],1,0);
	$pdf->Cell(70,10,$row['con_num_email'],1,0);
    
$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,124);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,124);
$pdf->Cell(95,10,'Instructor(if not cont.pers.)','B',0);
$pdf->Cell(95,10,'Instructors phone and email','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(95,10,$row['instructor'],1,0);
	$pdf->Cell(95,10,$row['ins_num_email'],1,0);
    

    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,144);
   $pdf->Cell(0,10,'LAPLAND UNIVERSITY OF APPLIED SCIENCES',1,0,'L',1); 
$pdf->Ln(10); 
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,154);
$pdf->Cell(95,10,'Contact Person','B',0);
$pdf->Cell(95,10,'Contact persons phone and email','B',0);
$pdf->Ln(10);

    $pdf->Cell(95,10,$row['contact_person_luas'],1,0);
	$pdf->Cell(95,10,$row['con_num_email_luas'],1,0);
    
$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,174);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,174);
$pdf->Cell(95,10,'Instructor(if not cont.pers.)','B',0);
$pdf->Cell(95,10,'Instructors phone and email','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(95,10,$row['instructor_luas'],1,0);
	$pdf->Cell(95,10,$row['ins_num_email_luas'],1,0);

    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,194);
   $pdf->Cell(0,10,'INFORMATION ABOUT THE PRACTICAL TRAINING',1,0,'L',1); 
$pdf->Ln(10); 
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,204);
$pdf->Cell(95,10,'Type of training(e.g. basic training)','B',0);
$pdf->Cell(95,10,'Scope of training(cr)','B',0);
$pdf->Ln(10);

	$pdf->Cell(95,10,$row['type'],1,0);
	$pdf->Cell(95,10,$row['scope'],1,0);

$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,224);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,224);
$pdf->Cell(95,10,'Learning objectives(defined in the curriculum)','B',0);
$pdf->Cell(95,10,'Students personal learn. and dev. objectives','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(95,10,$row['learn_object'],1,0);
	$pdf->Cell(95,10,$row['dev_object'],1,0);
    
    $pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,244);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,244);
$pdf->Cell(115,10,'Additional information','B',0);
$pdf->Cell(75,10,'Do you plan to apply for the grant?','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(115,10,$row['add_info'],1,0);
	$pdf->Cell(75,10,$row['grant_practice'],1,0);
    
     
    
    $pdf->AddPage(); //new page
    
$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,24);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,24);
$pdf->Cell(95,10,'Tasks during the practical training','B',0);
$pdf->Cell(95,10,'Tasks description','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(95,10,$row['tasks'],1,0);
	$pdf->Cell(95,10,$row['tasks_descr'],1,0);
    

$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,44);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,44);
$pdf->Cell(95,10,'Other terms','B',0);
$pdf->Ln(10);
    
    $pdf->Cell(190,10,$row['other_terms'],1,0);
    $pdf->Ln(10);
    $pdf->Cell(190,10,'',1,0);
	
 $pdf->SetFillColor(230,230,230);
 $pdf->SetXY(10,84);
 $pdf->Cell(0,10,'SIGNATURES',1,0,'L',1); 
$pdf->Ln(10); 
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,94);
$pdf->Cell(65,10,'Place and date','B',0);
$pdf->Cell(125,10,'Student','B',0);
$pdf->Ln(10);

    $pdf->Cell(65,10,'',1,0);
	$pdf->Cell(125,10,'',1,0);
    
$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,114);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,114);
$pdf->Cell(65,10,'Place and date','B',0);
$pdf->Cell(125,10,'Contact person/instructor at the place of practical training','B',0);
$pdf->Ln(10);

    $pdf->Cell(65,10,'',1,0);
	$pdf->Cell(125,10,'',1,0);
    
$pdf->SetFillColor(230,230,230);
$pdf->SetXY(10,134);
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,134);
$pdf->Cell(65,10,'Place and date','B',0);
$pdf->Cell(125,10,'UASs represantative: name and position','B',0);
$pdf->Ln(10);

    $pdf->Cell(65,10,'',1,0);
	$pdf->Cell(125,10,'',1,0);
}

mysql_free_result($result);


//create the pdf -document
$file='practical_training_contract.pdf';
$pdf->Output($file,'d'); //prints to the browser
//d=ask from user (open/save)
//i=opens automatically
//f=saves as file
?>