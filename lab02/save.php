<?php  
//print_r($_POST);
$db_host = "localhost";
$db_user = "s59160808";
$db_password = "weeris02";
$db_name = "s59160808";
 
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);
$mysqli->set_charset("utf8");
 
$emp_no=$_POST['emp_no'];
$emp_name=$_POST['emp_name'];
$emp_email=$_POST['emp_email'];
$emp_password=$_POST['emp_password'];
$sql = "INSERT
           INTO emp_2 (emp_no,emp_name,emp_email,emp_password)
           VALUES (?, ? ,? ,?)";
   $stmt = $mysqli->prepare($sql);
   $stmt->bind_param("ssss",$emp_no,$emp_name,$emp_email,$emp_password);
   $stmt->execute();
   echo $stmt->affected_rows . " row inserted.";
