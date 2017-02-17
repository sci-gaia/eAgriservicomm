<?php
  require("../dbconfig.php");
  $sql = "Select user_roles_id,role from user_roles order by role";
  $query = mysql_query($sql);
  $num_rows = mysql_num_rows($query);
  if ($num_rows>0)
  {
	  while ($db = mysql_fetch_assoc($query))
	  {
		   echo "<option value='".$db["user_roles_id"]."'>".$db['role']."</option>";
	  }
  }else{
	  
  }

?>