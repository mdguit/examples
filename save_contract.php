<?php
session_start();
include ("internship_db.php");
  
  if (isset($_POST['name'])) { 
        $name = $_POST['name'];
         $name = stripslashes($name);
         $name = htmlspecialchars($name);
         $name = trim($name);
        if ($name == '') {
            unset($name);
            } 
            } 
            
    if (isset($_POST['student_code'])) {
        $student_code=$_POST['student_code']; 
        $student_code = stripslashes($student_code);
        $student_code = htmlspecialchars($student_code);
        $student_code = trim($student_code);
       
        if ($student_code =='') {
            unset($student_code);
            }
            }
            
        if (isset($_POST['programme'])) {
        $programme=$_POST['programme']; 
        $programme = stripslashes($programme);
        $programme = htmlspecialchars($programme);
        $programme = trim($programme);
        $_SESSION["programme"] = $programme;
        if ($programme =='') {
            unset($programme);
            }
            }
            
            if (isset($_POST['phone_number'])) {
        $phone_number=$_POST['phone_number']; 
        $phone_number = stripslashes($phone_number);
        $phone_number = htmlspecialchars($phone_number);
        $phone_number = trim($phone_number);
        $_SESSION["phone_number"] = $phone_number;
        if ($phone_number =='') {
            unset($phone_number);
            }
            }
            
             if (isset($_POST['email_address'])) {
        $email_address=$_POST['email_address']; 
        $email_address = stripslashes($email_address);
        $email_address = htmlspecialchars($email_address);
        $email_address = trim($email_address);
        $_SESSION["email_address"] = $email_address;
        if ($email_address =='') {
            unset($email_address);
            }
            }
            
             if (isset($_POST['place_of_training'])) {
        $place_of_training=$_POST['place_of_training']; 
        $place_of_training = stripslashes($place_of_training);
        $place_of_training = htmlspecialchars($place_of_training);
        $place_of_training = trim($place_of_training);
        $_SESSION["place_of_training"] = $place_of_training;
        if ($place_of_training =='') {
            unset($place_of_training);
            }
            }
            
             if (isset($_POST['address'])) {
        $address=$_POST['address']; 
        $address = stripslashes($address);
        $address = htmlspecialchars($address);
        $address = trim($address);
        $_SESSION["address"] = $address;
        if ($address =='') {
            unset($address);
            }
            }
            if (isset($_POST['post_code_and_office'])) {
        $post_code_and_office=$_POST['post_code_and_office']; 
        $post_code_and_office = stripslashes($post_code_and_office);
        $post_code_and_office = htmlspecialchars($post_code_and_office);
        $post_code_and_office = trim($post_code_and_office);
        $_SESSION["post_code_and_office"] = $post_code_and_office;
        if ($post_code_and_office =='') {
            unset($post_code_and_office);
            }
            }
            
            
             if (isset($_POST['field_of_study'])) {
        $field_of_study=$_POST['field_of_study'];
        $field_of_study = stripslashes($field_of_study);
        $field_of_study = htmlspecialchars($field_of_study); 
        $field_of_study = trim($field_of_study);
        
        if ($field_of_study =='') {
            unset($field_of_study);
            }
            }
             if (isset($_POST['phone'])) {
        $phone=$_POST['phone']; 
        $phone = stripslashes($phone);
        $phone = htmlspecialchars($phone);
        $phone = trim($phone);
        $_SESSION["phone"] = $phone;
        if ($phone =='') {
            unset($phone);
            }
            }
            
            
            if (isset($_POST['type'])) {
        $type=$_POST['type']; 
        $type = stripslashes($type);
        $type = htmlspecialchars($type);
        $type = trim($type);
        $_SESSION["type"] = $type;
        if ($type =='') {
            unset($type);
            }
            }
            
            if (isset($_POST['scope'])) {
        $scope=$_POST['scope'];
        $scope = stripslashes($scope);
        $scope = htmlspecialchars($scope); 
        $scope = trim($scope);
        $_SESSION["scope"] = $scope;
        if ($scope =='') {
            unset($scope);
            }
            }
                    
            if (isset($_POST['learn_object'])){
                $learn_object = array_map('trim', $_POST["learn_object"]); 
                $l = mysql_real_escape_string(implode(',', $learn_object)); 
            if ($l =='') {
            unset($l);
            }
            }
            
            if (isset($_POST['dev_object'])) {
            $dev_object = array_map('trim', $_POST["dev_object"]); 
            $d = mysql_real_escape_string(implode(',', $dev_object)); 
            if ($dev_object =='') {
            unset($dev_object);
            }
            }
           
             if (isset($_POST['tasks'])){
                $tasks = array_map('trim', $_POST["tasks"]); 
                $t = mysql_real_escape_string(implode(',', $tasks)); 
            if ($t =='') {
            unset($t);
            }
            }
            
             if (isset($_POST['tasks_descr'])) {
        $tasks_descr=$_POST['tasks_descr'];
        $tasks_descr = stripslashes($tasks_descr);
        $tasks_descr = htmlspecialchars($tasks_descr);
        $tasks_descr = trim($tasks_descr); 
        $_SESSION["tasks_descr"] = $tasks_descr;
        if ($tasks_descr =='') {
            unset($tasks_descr);
            }
            }
            
             if (isset($_POST['grant'])) {
        $grant=$_POST['grant'];
        $grant = stripslashes($grant);
        $grant = htmlspecialchars($grant);
        $grant = trim($grant); 
        
        if ($grant =='') {
            unset($grant);
            }
            }
    
    if (isset($_POST['b_id'])) {
        $b_id=$_POST['b_id'];
         $b_id = stripslashes($b_id);
         $b_id = htmlspecialchars($b_id);
         $b_id = trim($b_id);
         $_SESSION["b_id"] = $b_id;
        if ($b_id =='') {
            unset($b_id);
            }
            }
   
    
             if (isset($_POST['contact_person'])) {
        $contact_person=$_POST['contact_person']; 
        $contact_person = stripslashes($contact_person);
        $contact_person = htmlspecialchars($contact_person);
        $contact_person = trim($contact_person);
        $_SESSION["contact_person"] = $contact_person;
        if ($contact_person =='') {
            unset($contact_person);
            }
            }
             
    
            
             if (isset($_POST['con_num_email'])) {
        $con_num_email=$_POST['con_num_email']; 
        $con_num_email = stripslashes($con_num_email);
        $con_num_email = htmlspecialchars($con_num_email);
        $con_num_email = trim($con_num_email);
        $_SESSION["con_num_email"] = $con_num_email;
        if ($con_num_email =='') {
            unset($con_num_email);
            }
            }
   
     if (isset($_POST['instructor'])) {
        $instructor=$_POST['instructor'];
        $instructor = stripslashes($instructor);
        $instructor = htmlspecialchars($instructor);
        $instructor = trim($instructor); 
        $_SESSION["instructor"] = $instructor;
        if ($instructor =='') {
            unset($instructor);
            }
            }
    if (isset($_POST['ins_num_email'])) {
        $ins_num_email=$_POST['ins_num_email']; 
        $ins_num_email = stripslashes($ins_num_email);
        $ins_num_email = htmlspecialchars($ins_num_email);
        $ins_num_email = trim($ins_num_email);
        $_SESSION["ins_num_email"] = $ins_num_email;
        if ($ins_num_email =='') {
            unset($ins_num_email);
            }
            }
     
    
    
     if (isset($_POST['group_code'])) {
        $group_code=$_POST['group_code']; 
        $group_code = stripslashes($group_code);
        $group_code = htmlspecialchars($group_code);
        $group_code = trim($group_code);
        $_SESSION["group_code"] = $group_code;
        if ($group_code =='') {
            unset($group_code);
            }
            }
    
    if (isset($_POST['contact_person_luas'])) {
        $contact_person_luas=$_POST['contact_person_luas'];
        $contact_person_luas = stripslashes($contact_person_luas);
        $contact_person_luas = htmlspecialchars($contact_person_luas);
        $contact_person_luas = trim($contact_person_luas); 
        $_SESSION["contact_person_luas"] = $contact_person_luas;
        if ($contact_person_luas =='') {
            unset($contact_person_luas);
            }
            }
             if (isset($_POST['con_num_email_luas'])) {
        $con_num_email_luas=$_POST['con_num_email_luas']; 
        $con_num_email_luas = stripslashes($con_num_email_luas);
        $con_num_email_luas = htmlspecialchars($con_num_email_luas);
        $con_num_email_luas = trim($con_num_email_luas);
        $_SESSION["con_num_email_luas"] = $con_num_email_luas;
        if ($con_num_email_luas =='') {
            unset($con_num_email_luas);
            }
            }
    
    
    
    if (isset($_POST['instructor_luas'])) {
        $instructor_luas=$_POST['instructor_luas']; 
        $instructor_luas = stripslashes($instructor_luas);
        $instructor_luas = htmlspecialchars($instructor_luas);
        $instructor_luas = trim($instructor_luas);
        $_SESSION["instructor_luas"] = $instructor_luas;
        
        if ($instructor_luas =='') {
            unset($instructor_luas);
            }
            }
    
    
    if (isset($_POST['ins_num_email_luas'])) {
        $ins_num_email_luas=$_POST['ins_num_email_luas']; 
        $ins_num_email_luas = stripslashes($ins_num_email_luas);
        $ins_num_email_luas = htmlspecialchars($ins_num_email_luas);
        $ins_num_email_luas = trim($ins_num_email_luas);
        $_SESSION["ins_num_email_luas"] = $ins_num_email_luas;
        if ($ins_num_email_luas =='') {
            $_SESSION["ins_num_email_luas"] = '';
            }
        if ($ins_num_email_luas =='') {
            unset($ins_num_email_luas);
            }
            }
            
    if (isset($_POST['add_info'])) {
        $add_info=$_POST['add_info']; 
        $add_info = stripslashes($add_info);
        $add_info = htmlspecialchars($add_info);
        $add_info = trim($add_info);
        $_SESSION["add_info"] = $add_info;
        if ($add_info =='') {
            unset($add_info);
            }
            }
    
    if (isset($_POST['other_terms'])) {
        $other_terms=$_POST['other_terms']; 
        $other_terms = stripslashes($other_terms);
        $other_terms = htmlspecialchars($other_terms);
        $other_terms = trim($other_terms);
        $_SESSION["other_terms"] = $other_terms;
        if ($other_terms =='') {
            unset($other_terms);
            }
            }
   
    if (empty($name) or empty($student_code) or empty($programme) or empty($phone_number) or empty($email_address) or empty($place_of_training) or empty($field_of_study) or empty($address) or empty($phone) or empty($post_code_and_office) or empty($type) or empty($scope) or empty($learn_object) or empty($dev_object) or empty($tasks) or empty($tasks_descr) or empty($grant)) 
    { 
        exit (header('location:contract_again.php'));
    }
    if(empty($contact_person) and empty($instructor))
    {
        exit (header('location:contract_again.php'));
    }
    if(empty($con_num_email) and empty($ins_num_email))
    {
        exit (header('location:contract_again.php'));
    }
     if(empty($contact_person_luas) and empty($instructor_luas))
    {
        exit (header('location:contract_again.php'));
    }
    if(empty($con_num_email_luas) and empty($ins_num_email_luas))
    {
        exit (header('location:contract_again.php'));
    }
   
   $result = mysql_query("INSERT INTO contract(name, student_code,programme,phone_number,email_address,place_of_training,address,post_code_and_office,contact_person,con_num_email,field_of_study,phone,contact_person_luas,con_num_email_luas,type,scope,learn_object,dev_object,tasks,business_id,grant_practice,instructor,ins_num_email,group_code,instructor_luas,ins_num_email_luas, add_info, other_terms, tasks_descr) VALUES('$name','$student_code','$programme','$phone_number','$email_address','$place_of_training','$address','$post_code_and_office','$contact_person','$con_num_email','$field_of_study','$phone','$contact_person_luas','$con_num_email_luas','$type','$scope','$l','$d','$t','$b_id','$grant','$instructor','$ins_num_email','$group_code','$instructor_luas','$ins_num_email_luas','$add_info','$other_terms','$tasks_descr')");
   $result2 = mysql_query("INSERT INTO evaluation(self_evaluation, login) VALUES ('','$student_code')");
  
    if ($result == 'TRUE'){
    header('location:main_good.php');
   
    }
 else {
    exit (header('location:mistake.php'));
    //exit ($result);
    }
    
 ?>