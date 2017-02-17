<?php
header("Content-Type:text/html");
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')
{
		
	require_once("../../../dbconfig.php");

$sql = "select p.content as content,u.users_id,u.surname as surname,u.firstname as firstname,u.othernames as middlename,u.city as city,u.state as state,u.country as country,u.pic as pic,r.role as role,p.dateposted as dateposted from posts p left join users u on p.userid=u.users_id left join user_roles r on r.user_roles_id=u.user_roles_id order by p.id desc limit 0,40";
	$query = mysql_query($sql) or die(mysql_error());
	$packet="";
	while($db=mysql_fetch_assoc($query))
	{
		$userfullname = $db['surname']." ".$db['firstname'];
		$city = $db["city"];
		$state = $db["state"];
		$country = $db['country'];
		if ($db["pic"]!="")
		{$pic="userprofiles/".$db["pic"];}else{$pic="images/profile_img_thumbnail.png";}
		
		$dateposted = date("D, d M Y  (h:i a) ",strtotime($db['dateposted']));
		$packet .= "
			<div class='panel panel-default media' style='padding-top:5px;'>
				
						<a class='pull-left' href='#'>
							<img class='media-object image-rounded pull-left' width='60px' src='".$pic."'>
						</a>
						<div class='media-body'>
							<h5 class='media-heading'><b><a href='#'>".$userfullname."</a></b></h5>
							
							<p>								
								<small><a href='#'>".$city."</a>, <a href='#'>".$state." State</a>, <a href='#'>".$country."</a></small>
								<small><br>".$dateposted."</small></p>
							</p>
							<p>
								".$db['content']."
							</p>
							<p>
								<small>
									<a href='#' title='Comment'><span class='glyphicon glyphicon-comment'></span></a>&nbsp;&nbsp;&nbsp; 
									<a href='#' title='Share'><span class='glyphicon glyphicon-share'></span></a> &nbsp;&nbsp;&nbsp;  
									<a href='#' title='Thumbs Up'><span class='glyphicon glyphicon-thumbs-up'></span></a>&nbsp;&nbsp;&nbsp;
									<a href='#' title='Message me'><span class='glyphicon glyphicon-envelope'></span></a>&nbsp;&nbsp;&nbsp;			</small>
							</p>
						</div>	
						
							
						
			</div>";
	}
	
	
	echo $packet;

}else{
 header("location:../index.html");	
}


   