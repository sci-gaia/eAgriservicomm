<?php
 require("dbconfig.php");
 require("alertsLib.php");
 
 $errmsg = "";
 
 
	 if (isset($_POST['signin']))
	 {
		 $uname = trim(stripslashes(htmlspecialchars($_POST['userName'])));
		 $pwd = trim(stripslashes(htmlspecialchars($_POST['pwd'])));
		 
		 
		 
		 if ($uname!="" && $pwd!="")
		 {
			 checkActivate($uname,$pwd);			 
		 }
		 
	 }


	function checkActivate($uname,$pwd)
	{
		$sqlcheckActivate = "select users_id,email,activated from users 
		 where (email='".$uname."' or username='".$uname."') and username!=''";
		 $result = mysql_query($sqlcheckActivate);
		 $num_rows = mysql_num_rows($result);
		 if ($num_rows>0)
		 {
			 $db = mysql_fetch_assoc($result);
			 if ($db['activated']=='y')
			 {
				   verifySignIn($uname,$pwd);
			 }else{
				 echo " Account has not been activated"; 
			 }	 
		 }else{
			echo "Invalid account info.."; 
		 }
		
	}
	
	function verifySignIn($uname, $pwd)
	{
		$pwdhash = sha1($pwd);
		$sql = "select users_id,surname,firstname,othernames,city,state,country,user_roles_id
				from users where (email='".$uname."' or  username='".$uname."') and pass='".$pwdhash."'";
		$result = mysql_query($sql);
		$num_rows = mysql_num_rows($result);
		if ($num_rows>0)
		{
			session_start();
			$db = mysql_fetch_assoc($result);
			$_SESSION['userId'] = $db['users_id'];
			$_SESSION['surname'] = $db['surname'];
			$_SESSION['firstname'] =  $db['firstname'];
			$_SESSION['othernames'] = $db['othernames'];
			$_SESSION['city'] = $db['city'];
			$_SESSION['state'] = $db['state'];
			$_SESSION['country'] = $db['country'];
			$_SESSION['user_roles'] = $db['user_roles_id'];
			$_SESSION['ag_signin'] = '1';
			header("location:dashboard.php");
		}else{
			session_start();
			$_SESSION['ag_signin']='';
			session_destroy();
		}
	}

?>