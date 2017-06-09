<?php
 require("dbconfig.php");
 require("alertsLib.php");
 
 $errmsg = "";
 
 
	 /*if (isset($_POST['signin']))
	 {
		 $uname = trim(stripslashes(htmlspecialchars($_POST['userName'])));
		 $pwd = trim(stripslashes(htmlspecialchars($_POST['pwd'])));
		 
		 
		 
		 if ($uname!="" && $pwd!="")
		 {
			 checkActivate($uname,$pwd);			 
		 }
	}*/

	if (isset($_SERVER["REMOTE_USER"])) {
		//$username = $_SERVER["REMOTE_USER"];
		$username = $_SERVER["cn"];
		$name = getName();

		//print "<h1>Hi " . $username . "!!!</h1>";
		//print "<p>Your name is; " . $name . ".</p>";
		
		if(!IsNullOrEmptyString($name)) {
                       	//verify($username);
                       	verify($name);
		}
	}

	function getName() {
		if (array_key_exists("displayName", $_SERVER)) {
			return implode(" ", explode(";", $_SERVER["displayName"]));
		} else if (array_key_exists("cn", $_SERVER)) {
			return implode(" ", explode(";", $_SERVER["cn"]));
		} else if (array_key_exists("givenName", $_SERVER) && array_key_exists("sn", $_SERVER)) {
			return implode(" ", explode(";", $_SERVER["givenName"])) . " " .
				implode(" ", explode(";", $_SERVER["sn"]));
		}
		return "";
	}
	
	function IsNullOrEmptyString($str){
		return (!isset($str) || trim($str)==='');
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

	function verify($uname)
        {
                $sql = "select users_id,surname,firstname,othernames,city,state,country,user_roles_id
                                from users where (email='".$uname."' or  username='".$uname."')";
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
			header("location:register/register.php?username=".$uname);
                }
        }


?>
