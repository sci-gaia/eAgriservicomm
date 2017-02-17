<html>
 <head>
    <title>Get Publications</title>
 <head>
 <body>
<?php
 //$url = "http://oar.sci-gaia.eu/search?of=recjson&jrec=1&10";
 //$url = 'http://oar.sci-gaia.eu/search?of=recjson&jrec=2&1';
 $url = 'data.json';
 $response = file_get_contents($url);
 $res= json_decode($response);



$totalRecord = count($res);
for($i=0; $i<$totalRecord; $i++)
{   echo "<div class='panel panel-default media' style='padding:10px;'>";
	echo "<div style='font-weight:bold;font-size:16px;'>".($res[$i]->title->title)."</div>";
	echo "<em>Authors (".count($res[$i]->authors),"): ";
	
	   $authors_number = count($res[$i]->authors);
	   for ($j=0; $j<$authors_number;$j++)
	   {
	   	  echo ($res[$i]->authors[$j]->full_name).", ";
	   }
    echo "</em>";
	echo "<br><em> keywords (".count($res[$i]->keywords).")</em>";
	$keyword_number = count($res[$i]->keywords);
	echo "<br>";
	echo "<em>".($res[$i]->creation_date)."</em>";
	  
	echo "<div style='padding-top:12px;'>".substr(($res[$i]->abstract->summary),0,450)."...&nbsp;<a href='#'><small>
									[+] Read More</small></a><p></div>";
	
	
	
	  /*
	  for ($b=0; $b<=$keyword_number;$b++)
	  {
	  	  echo ($res[$b]->keywords[$b]->term).", ";
	  }*/
	
	
	
	echo "<div><a href='#'><span class='glyphicon glyphicon-comment' title='comment'></a>&nbsp;&nbsp; <a href='#'><span class='glyphicon glyphicon-share' title='share'></a></span></div>";
	echo "</div>";
	
}

 //console.log(($res));
 //echo var_dump($res[0]->funding_info->grant_number);
 //echo $response;
 

?>
</body>