<?php

require('fpdf/fpdf.php'); //pdf-library is located in subfolder of this folder
class PDF extends FPDF{

	function Header(){
		//Headers of the document
		$image = "res/lapinamk.jpg";
		$this->SetFont('Courier','B',15);
		//Print the headers
        $this->SetXY(10,10);
		$this->Cell(60,10,'PRACTICAL TRAINING - FEEDBACK',0,0);
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

$pdf->Ln(3); //3 height of line
$pdf->Cell(0,10,'At the end of the training period employer’s representative will fill this feedback form. ',0,1,'L');
$pdf->Ln(0); 
$pdf->Cell(0,10,'A student will return with his/her report to tutor teacher in Practical training seminar. A copy ',0,1,'L');
$pdf->Ln(0);
$pdf->Cell(0,10,'will be given to her/him.',0,1,'L');
$pdf->Ln(10); //10 line height
$pdf->SetFillColor(230,230,230);

$pdf->Cell(0,10,'',1,0,'L',1,0);
$pdf->SetXY(10,64);
$pdf->Cell(40,10,'Student','B',0);
$pdf->Cell(50,10,'The training period','B',0);
$pdf->Cell(50,10,'Employer','B',0);
$pdf->Ln(10);




//Select values from database
/*
include('internship_db.php');
$users_id = $_SESSION['users_id']; 
$sql="select * from contract where users_id = '$users_id'";
$result=mysql_query($sql) or die('Could not retrieve from table');*/
$x=185;
$y=44;
//while($rivi=mysql_fetch_array($result)){
	//print the results
	$pdf->Cell(40,10,'',1,0);
	$pdf->Cell(50,10,'',1,0);
	$pdf->Cell(100,10,'',1,0);
	//}
   
   $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,94);
   $pdf->Cell(0,10,'PROFESSIONAL SKILLS',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,104);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,124);
   $pdf->Cell(0,10,'Technical skills',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,134);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,154);
   $pdf->Cell(0,10,'Planning skills',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,164);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,184);
   $pdf->Cell(0,10,'Assesment skills',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,194);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
     $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,214);
   $pdf->Cell(0,10,'COMMUNICATION SKILLS',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,224);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,244);
   $pdf->Cell(0,10,'INTERNATIONAL SKILLS',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,254);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->AddPage(); //new page
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,24);
   $pdf->Cell(0,10,'SOCIAL SKILLS',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,34);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
     $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,54);
   $pdf->Cell(0,10,'Ability to co-operate',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,64);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,84);
   $pdf->Cell(0,10,'Initiative',1,0,'L',1); 
$pdf->Ln(10); //10 line height
$pdf->Cell(0,10,'',1,0,'L',1);
$pdf->SetXY(10,94);
$pdf->Cell(25,10,'Grade','B',0);
$pdf->Cell(50,10,'Explanation/Specific Information','B',0);
$pdf->Ln(10);

    $pdf->Cell(25,10,'',1,0);
	$pdf->Cell(165,10,'',1,0);
    
     $pdf->SetFillColor(230,230,230);
   $pdf->SetXY(10,124);
   $pdf->Cell(0,10,'OTHER INFORMATION',1,0,'L',1); 
$pdf->Ln(10); //10 line height


	$pdf->Cell(190,10,'',1,0);
    $pdf -> Ln(10);
   	$pdf->Cell(190,10,'',1,0);
    $pdf -> Ln(10);
   	$pdf->Cell(190,10,'',1,0);
    $pdf -> Ln(10);
    $pdf->Cell(190,10,'',1,0);
    
    $pdf->SetFillColor(230,230,230);

$pdf->SetXY(10,184);
$pdf->Cell(0,10,'',1,0,'L',1,0);
$pdf->SetXY(10,184);
$pdf->Cell(55,10,'Date','B',0);
$pdf->Cell(50,10,'Place','B',0);
$pdf->Ln(10);

    $pdf->Cell(55,10,'',1,0);
	$pdf->Cell(135,10,'',1,0);
    
 $pdf->SetXY(10,214);
$pdf->Cell(0,10,'',1,0,'L',1,0);
$pdf->SetXY(10,214);
$pdf->Cell(55,10,'Employers signature','B',0);
$pdf->Ln(10);

    $pdf->Cell(190,10,'',1,0);
    
    $pdf->SetXY(10,244);
$pdf->Cell(0,10,'',1,0,'L',1,0);
$pdf->SetXY(10,244);
$pdf->Cell(55,10,'Students signature','B',0);
$pdf->Ln(10);

    $pdf->Cell(190,10,'',1,0);

    
//create the pdf -document
$file='practical_training_feedback_empty.pdf';
$pdf->Output($file,'d'); 
//d=ask from user (open/save)
//i=opens automatically
//f=saves as file

?>