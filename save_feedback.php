<?php
session_start();
include ("internship_db.php");
  
  if (isset($_POST['student_name'])) { 
        $student_name = $_POST['student_name'];
         $student_name = stripslashes($student_name);
         $student_name = htmlspecialchars($student_name);
         $student_name = trim($student_name);
         $_SESSION["student_name"] = $student_name;
        if ($student_name == '') {
            unset($student_name);
            } 
            } 
             if (isset($_POST['period'])) { 
        $period = $_POST['period'];
         $period = stripslashes($period);
         $period = htmlspecialchars($period);
         $period = trim($period);
         $_SESSION["period"] = $period;
        if ($period == '') {
            unset($period);
            } 
            } 
             if (isset($_POST['employer'])) { 
        $employer = $_POST['employer'];
         $employer = stripslashes($employer);
         $employer = htmlspecialchars($employer);
         $employer = trim($employer);
         $_SESSION["employer"] = $employer;
        if ($employer == '') {
            unset($employer);
            } 
            } 
            if (isset($_POST['pro_skills'])) { 
        $pro_skills = $_POST['pro_skills'];
         $pro_skills = stripslashes($pro_skills);
         $pro_skills = htmlspecialchars($pro_skills);
         $pro_skills = trim($pro_skills);
         $_SESSION["pro_skills"] = $pro_skills;
        if ($pro_skills == '') {
            unset($pro_skills);
            } 
            } 
            if (isset($_POST['pro_explan'])) { 
        $pro_explan = $_POST['pro_explan'];
         $pro_explan = stripslashes($pro_explan);
         $pro_explan = htmlspecialchars($pro_explan);
         $pro_explan = trim($pro_explan);
         $_SESSION["pro_explan"] = $pro_explan;
        if ($pro_explan == '') {
            unset($pro_explan);
            } 
            } 
             if (isset($_POST['tech_skills'])) { 
        $tech_skills = $_POST['tech_skills'];
         $tech_skills = stripslashes($tech_skills);
         $tech_skills = htmlspecialchars($tech_skills);
         $tech_skills = trim($tech_skills);
         $_SESSION["tech_skills"] = $tech_skills;
        if ($tech_skills == '') {
            unset($tech_skills);
            } 
            } 
            if (isset($_POST['tech_explan'])) { 
        $tech_explan = $_POST['tech_explan'];
         $tech_explan = stripslashes($tech_explan);
         $tech_explan = htmlspecialchars($tech_explan);
         $tech_explan = trim($tech_explan);
         $_SESSION["tech_explan"] = $tech_explan;
        if ($tech_explan == '') {
            unset($tech_explan);
            } 
            } 
            
             if (isset($_POST['plan_skills'])) { 
        $plan_skills = $_POST['plan_skills'];
         $plan_skills = stripslashes($plan_skills);
         $tech_skills = htmlspecialchars($plan_skills);
         $plan_skills = trim($plan_skills);
         $_SESSION["plan_skills"] = $plan_skills;
        if ($plan_skills == '') {
            unset($plan_skills);
            } 
            } 
            
            if (isset($_POST['plan_explan'])) { 
        $plan_explan = $_POST['plan_explan'];
         $plan_explan = stripslashes($plan_explan);
         $plan_explan = htmlspecialchars($plan_explan);
         $plan_explan = trim($plan_explan);
         $_SESSION["plan_explan"] = $plan_explan;
        if ($plan_explan == '') {
            unset($plan_explan);
            } 
            } 
            
            if (isset($_POST['asses_skills'])) { 
        $asses_skills = $_POST['asses_skills'];
         $asses_skills = stripslashes($asses_skills);
         $asses_skills = htmlspecialchars($asses_skills);
         $asses_skills = trim($asses_skills);
         $_SESSION["asses_skills"] = $asses_skills;
        if ($asses_skills == '') {
            unset($asses_skills);
            } 
            } 
            if (isset($_POST['asses_explan'])) {   //NO, it is short for the word "assessment", not what you think
        $asses_explan= $_POST['asses_explan'];
         $asses_explan = stripslashes($asses_explan);
         $asses_explan = htmlspecialchars($asses_explan);
         $asses_explan = trim($asses_explan);
         $_SESSION["asses_explan"] = $asses_explan;
        if ($asses_explan == '') {
            unset($asses_explan);
            } 
            } 
            if (isset($_POST['comm_skills'])) { 
        $comm_skills = $_POST['comm_skills'];
         $comm_skills = stripslashes($comm_skills);
         $comm_skills = htmlspecialchars($comm_skills);
         $comm_skills = trim($comm_skills);
         $_SESSION["comm_skills"] = $comm_skills;
        if ($comm_skills == '') {
            unset($comm_skills);
            } 
            } 
            if (isset($_POST['comm_explan'])) { 
        $comm_explan = $_POST['comm_explan'];
         $comm_explan = stripslashes($comm_explan);
         $comm_explan = htmlspecialchars($comm_explan);
         $comm_explan = trim($comm_explan);
         $_SESSION["comm_explan"] = $comm_explan;
        if ($comm_explan == '') {
            unset($comm_explan);
            } 
            } 
            if (isset($_POST['inter_skills'])) { 
        $inter_skills = $_POST['inter_skills'];
         $inter_skills = stripslashes($inter_skills);
         $inter_skills = htmlspecialchars($inter_skills);
         $inter_skills = trim($inter_skills);
         $_SESSION["inter_skills"] = $inter_skills;
        if ($inter_skills == '') {
            unset($inter_skills);
            } 
            } 
            if (isset($_POST['inter_explan'])) { 
        $inter_explan = $_POST['inter_explan'];
         $inter_explan = stripslashes($inter_explan);
         $inter_explan = htmlspecialchars($inter_explan);
         $inter_explan = trim($inter_explan);
         $_SESSION["inter_explan"] = $inter_explan;
        if ($inter_explan == '') {
            unset($inter_explan);
            } 
            } 
             if (isset($_POST['soc_skills'])) { 
        $soc_skills = $_POST['soc_skills'];
         $soc_skills = stripslashes($soc_skills);
         $soc_skills = htmlspecialchars($soc_skills);
         $soc_skills = trim($soc_skills);
          $_SESSION["soc_skills"] = $soc_skills;
        if ($soc_skills == '') {
            unset($soc_skills);
            } 
            } 
             if (isset($_POST['soc_explan'])) { 
        $soc_explan = $_POST['soc_explan'];
         $soc_explan = stripslashes($soc_explan);
         $soc_explan = htmlspecialchars($soc_explan);
         $soc_explan = trim($soc_explan);
         $_SESSION["soc_explan"] = $soc_explan;
        if ($soc_explan == '') {
            unset($soc_explan);
            } 
            } 
             if (isset($_POST['ability_to_coop'])) { 
        $ability_to_coop = $_POST['ability_to_coop'];
         $ability_to_coop = stripslashes($ability_to_coop);
         $ability_to_coop = htmlspecialchars($ability_to_coop);
         $ability_to_coop = trim($ability_to_coop);
          $_SESSION["ability_to_coop"] = $ability_to_coop;
        if ($ability_to_coop == '') {
            unset($ability_to_coop);
            } 
            } 
            if (isset($_POST['ability_explan'])) { 
        $ability_explan = $_POST['ability_explan'];
         $ability_explan = stripslashes($ability_explan);
         $ability_explan = htmlspecialchars($ability_explan);
         $ability_explan = trim($ability_explan);
          $_SESSION["ability_explan"] = $ability_explan;
        if ($ability_explan == '') {
            unset($ability_explan);
            } 
            } 
              if (isset($_POST['initiative'])) { 
        $initiative = $_POST['initiative'];
         $initiative = stripslashes($initiative);
         $initiative = htmlspecialchars($initiative);
         $initiative = trim($initiative);
         $_SESSION["initiative"] = $initiative;
        if ($initiative == '') {
            unset($initiative);
            } 
            } 
            if (isset($_POST['initiative_explan'])) { 
        $initiative_explan = $_POST['initiative_explan'];
         $initiative_explan = stripslashes($initiative_explan);
         $initiative_explan = htmlspecialchars($initiative_explan);
         $initiative_explan = trim($initiative_explan);
          $_SESSION["initiative_explan"] = $initiative_explan;
        if ($initiative_explan == '') {
            unset($initiative_explan);
            } 
            } 
            if (isset($_POST['other_info'])) { 
        $other_info = $_POST['other_info'];
         $other_info = stripslashes($other_info);
         $other_info = htmlspecialchars($other_info);
         $other_info = trim($other_info);
          $_SESSION["other_info"] = $other_info;
        if ($other_info == '') {
            unset($other_info);
            } 
            } 
            if (isset($_POST['date'])) { 
        $date = $_POST['date'];
         $date = stripslashes($date);
         $date = htmlspecialchars($date);
         $date = trim($date);
          $_SESSION["date"] = $date;
        if ($date == '') {
            unset($date);
            } 
            } 
            if (isset($_POST['place'])) { 
        $place = $_POST['place'];
         $place = stripslashes($place);
         $place = htmlspecialchars($place);
         $place = trim($place);
         $_SESSION["place"] = $place;
        if ($place == '') {
            unset($place);
            } 
            } 
            
            if (empty($student_name) or empty($period) or empty($employer) or empty($pro_skills) or empty($pro_explan) or empty($tech_skills) or empty($tech_explan) or empty($plan_skills) or empty($plan_explan) or empty($asses_skills) or empty($asses_explan) or empty($comm_skills) or empty($comm_explan) or empty($inter_skills) or empty($inter_explan) or empty($soc_skills) or empty($soc_explan) or empty($ability_to_coop) or empty($ability_explan) or empty($initiative) or empty($initiative_explan) or empty($date) or empty($place))
            {
                exit (header('location:feedback_again.php')); 
                //exit ("INSERT INTO feedback(student_name,period,employer,pro_skills, pro_explan, tech_skills, tech_explan, asses_skills, asses_explan, comm_skills, comm_explan, inter_skills, inter_explan, soc_skills, soc_explan, ability_to_coop, ability_explan, initiative, initiative_explan, other_info, date, place) VALUES('$student_name','$period','$employer','$pro_skills', '$pro_explan', '$tech_skills', '$tech_explan', '$asses_skills', '$asses_explan', '$comm_skills', '$comm_explan', '$inter_skills', '$inter_explan', '$soc_skills', '$soc_explan', '$ability_to_coop', '$ability_explan', '$initiative', '$initiative_explan', '$other_info', '$date', '$place')");
               
            }
            $result = mysql_query("INSERT INTO feedback(student_name,period,employer,pro_skills, pro_explan, tech_skills, tech_explan, plan_skills, plan_explan, asses_skills, asses_explan, comm_skills, comm_explan, inter_skills, inter_explan, soc_skills, soc_explan, ability_to_coop, ability_explan, initiative, initiative_explan, other_info, date, place) VALUES('$student_name','$period','$employer','$pro_skills', '$pro_explan', '$tech_skills', '$tech_explan', '$plan_skills', '$plan_explan', '$asses_skills', '$asses_explan', '$comm_skills', '$comm_explan', '$inter_skills', '$inter_explan', '$soc_skills', '$soc_explan', '$ability_to_coop', '$ability_explan', '$initiative', '$initiative_explan', '$other_info', '$date', '$place')");
if ($result == 'TRUE'){
    header('location:main_company_good.php');
   
    }
 else {
    exit (header('location:mistake_co.php'));
    }


?>