<?php
header("Content-Type:text/html");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
	session_start();
	$userId = $_SESSION['userId'];
	$role = $_SESSION['user-role'];
	$city = $_SESSION['city'];
	$state = $_SESSION['state'];
	$userfullname = $_SESSION['user-fullname'];
	$pic = $_SESSION['pic'];
	
	require_once("../../dbconfig.php");
	$content = $_POST['postInfo'];
	$picture = "";
	$video = "";
	
	$sql = "insert into posts(userid,content,picture,video,dateposted)values('$userId','$content','$picture','$video',now())";
	$query = mysql_query($sql);
	if ($query)
	{
	   $packet = "<div style='padding:5px;border-radius:5px;color:#000000;margin-top:8px;background:#fafafa;border:1px solid #c1c1c1;width:100%'><div style='width:15%;float:left;border:1px solid #ffffff;height:70px;'><img  style='border-radius:40px;'width='60%' src='".$pic."'></div><div style='border:1px solid #ffffff;'>".$content."<div style='margin-top:6px;margin-bottom:-7px;'><small><em> Posted by <a href='#'>".$userfullname."</a> </div><div>(".$city.", ".$state." State). ".Date('D j M, Y (h:m)a')."</div></em><div style='float:'><a href='#'>Comment</a> | <a href='#'>Share</a> | <a href='#'>Thumbs Up</a> | <a href='#'>Message me</a></div></small></div></div>";
	   
	   /*
	   $result = array
	   ( 
	     "content"=>$packet
	   );*/	
	}else{
	   $result = array("status"=>"fail");	
	}
	
	//$result = json_encode($result);
	echo $packet;
	
		
	
}else{
 header("location:../index.html");	
}


   