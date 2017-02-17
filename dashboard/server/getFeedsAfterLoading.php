<?php
header("Content-Type:text/html");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
	
	
	require_once("../../dbconfig.php");

$sql = "select p.content as content,u.users_id,u.surname as surname,u.firstname as firstname,u.othernames as middlename,u.city as city,u.state as state,u.country as country,u.pic as pic,r.role as role,p.dateposted as dateposted from posts p left join users u on p.userid=u.users_id left join user_roles r on r.user_roles_id=u.user_roles_id order by p.id desc limit 0,40";
	$query = mysql_query($sql) or die(mysql_error());
	$packet="";
	while($db=mysql_fetch_assoc($query))
	{
		$userfullname = $db['surname']." ".$db['firstname']." ".$db['middlename'];
		$city = $db["city"];
		$state = $db["state"];
		$country = $db['country'];
		if ($db["pic"]!="")
		{$pic="userprofiles/".$db["pic"];}else{$pic="images/profile_img_thumbnail.png";}
		
		$dateposted = date("D, d M Y  (h:i a) ",strtotime($db['dateposted']));
		$packet .= "<div style='padding:5px;border-radius:5px;color:#000000;margin-top:8px;background:#fafafa;border:1px solid #c1c1c1;width:100%'><div style='width:15%;float:left;border:1px solid #ffffff;height:70px;'><img  style='border-radius:40px;'width='60%' src='".$pic."'></div><div style='border:1px solid #ffffff;'>".$db['content']."<div style='margin-top:6px;margin-bottom:-7px;'><small><em> Posted by <a href='#'>".$userfullname."</a> </div><div>(".$city.", ".$state." State, ".$country."). ".$dateposted."</div></em><div style='float:'><a href='#'>Comment</a> | <a href='#'>Share</a> | <a href='#'>Thumbs Up</a> | <a href='#'>Message me</a></div></small></div></div>";
	}
	
	
	echo $packet;

}else{
 header("location:../index.html");	
}


   