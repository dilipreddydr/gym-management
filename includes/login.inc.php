<?php

session_start();

if(isset($_POST['login'])) {
	
	include 'dbh.inc.php';
	
$uid = mysqli_real_escape_string($conn, $_POST['username']);
$pwd = mysqli_real_escape_string($conn, $_POST['password']);
 

   $sql = "SELECT * FROM logintb WHERE username='$uid'";
   $result = mysqli_query($conn, $sql);
   $resultCheck = mysqli_num_rows($result);
   if($resultCheck == 0) {
	   session_unset();
	   header("Location: ../admin.php?err=wrong username and password");
       exit();
   } 
    else {
	   
	   if($row = mysqli_fetch_assoc($result)) {
		  //de=hashing the password
		  $hashedPwdCheck = password_verify($pwd, $row['password']) ;
	      if($hashedPwdCheck == false) {
			  session_unset();
			  header("Location: ../admin.php?err=wrong password");
              exit(); 
		  } elseif ($hashedPwdCheck == true) {
			  
			  //log in the user here
			  $_SESSION['u_id'] = $row['username'];
			   header("Location: ../admin-panel.php");
              exit();  
			  
		  }
	   }
	   
   }
   
   
 }
  else {
 session_unset();

header("Location: ../admin.php");
exit(); 
	
}