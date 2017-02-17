<?php
   session_start();
   if (!(isset($_SESSION['ag_signin']) && $_SESSION['ag_signin']!=''))
   {
		header("location:index.php");   
   }else{
	   
	   
	   if (!isset($_SESSION['user_category']))
	   {
		   require('dbconfig.php');		  
		   $_SESSION['user_category'] = $_SESSION['user_roles'];
		   
		   $sqlroles = "select status,description from user_roles where user_roles_id=".$_SESSION['user_roles'];
		   $result = mysql_query($sqlroles);
		   $db = mysql_fetch_assoc($result);
		   $_SESSION['user_category'] = $db['status'];
		   $_SESSION['user_category_desc'] = $db['description'];
	   }
	   
	    
	   
   }
   
   
   
?>