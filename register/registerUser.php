<?php

	$errmsg = "";
	require("../dbconfig.php");
	require("../alertsLib.php");
	
  if (isset($_POST['register'])){
	 $username = trim(htmlspecialchars(addslashes($_POST['username'])));
	 $surname = trim(htmlspecialchars(addslashes($_POST['surname'])));
	 $firstname = trim(htmlspecialchars(addslashes($_POST['firstname'])));
	 $othernames = trim(htmlspecialchars(addslashes($_POST['othernames'])));
	 $gender = $_POST['gender'];
	 $city = trim(htmlspecialchars(addslashes($_POST['city'])));
	 $state = trim(htmlspecialchars(addslashes($_POST['state'])));
	 $country = trim(htmlspecialchars(addslashes($_POST['country'])));
	 $phone = trim(htmlspecialchars(addslashes($_POST['phone'])));
	 $email = trim(htmlspecialchars(addslashes($_POST['email'])));
	 $occupation = trim(htmlspecialchars(addslashes($_POST['occupation'])));
	 $accountType = $_POST['accountType'];
	 
		 
	
	/*if ($surname=="" || $firstname=="" || $othernames=="" || $gender=="" || $city=="" || $country=="" 
		|| $phone=="" || $email=="" || $occupation=="" || $accountType=="")
		{
		  $errmsg = "Some important fields have been left unfilled.";	
		}
	*/ 
	if ($errmsg=="")
	{
		   $sqlCheckEmailUse = "Select email from users where email='".$email."'";
		   $result = mysql_query($sqlCheckEmailUse);
		   $num_rows = mysql_num_rows($result);
		   
		   if ($num_rows>0)
		   {
			  $errmsg = "That email address has been registered already by a user";   
		   }		   
	}
	 
	
	 
  }
  ?>
  
  
<?php
 
 if (isset($_POST['register']))
 { 
	  if ($errmsg=="")
		 {
			 $sqlInsert = "Insert into users(surname,firstname,othernames,gender,city,state,country,phone,username,
			 email,occupation,user_roles_id,dateposted)values('$surname','$firstname','$othernames','$gender','$city',
			 '$state','$country','$phone','$username','$email','$occupation','$accountType',now())"; 
			 $result = mysql_query($sqlInsert);
			 if ($result)
			 {
				 //successAlert("Registration has been successful. Check your email to activate and setup your account"); 
				 successAlert("Registration has been successful. Please <a href='https://agriservicomm.sci-gaia.eu'>Sign in</a> to complete the registration."); 
			 }else{
				 errorAlert("An error has occurred! Registration is aborted.");
			 }
		 }else{
       		fieldExist($errmsg);
	 	 }
 }
	 
?>
