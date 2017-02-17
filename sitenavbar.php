<?php
   
   if ($_SESSION['user_category']=='research')
   {
	  require("users_navbar/researcher_navbar.php");   
   }
   else if($_SESSION['user_category']=='academic' && $_SESSION['user_category_desc']=='Institution')
   {
	   require("users_navbar/academic_navbar.php");  
   }
   else
   {
	   require("users_navbar/enduser_navbar.php");  
   }


?>