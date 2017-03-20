<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AgricServicomm</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/sitewide.css" rel="stylesheet" type="text/css" >
         <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/
        ➥3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/
        ➥respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
	</head>

	<body>
    <div class="container">
    <!-- header //-->
    	<?php
		   $imgPath = "images/";
		   require("header.php");
		?>
    <!-- end of header //-->
    	
        <div class="row">
        	<div class="col-xs-12 col-sm-4 col-md-4 col-md-push-8">
            	<!-- Second column for login //-->
                <div> 
                	<h3>Already member?<br>Sign In.</h3>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12"><?php require("signin.php"); ?></div>
                </div>
            	<div class="topspacer1">
                     <!--form class="form" action="index.php" method="post"-->
                     <!--form class="form" action="dashboard.php" method="get">
                     	<div class="form-group">
                        	<label for="userName">Email or Username</label>
                            <input type="text" class="form-control" id="userName" name="userName" placeholder="Email or Username" >                            
                        </div>
                        <div class="form-group">
                        	<label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password" >                          
                        
                        </div>
                        <div class="row">
                        	 <div class="col-xs-12 col-sm-12 col-md-3">
                             	<input type="submit" name="signin" value="Sign In" class="btn btn-success"-->
                             	<input type="submit" name="signin" value="Sign In" class="btn btn-success" onclick="window.location='/signin.php';">
                             <!--/div>
                             <div class="col-xs-12 col-sm-12 col-md-9">
                             		<div class="checkbox">
                                    	<label>
                                        	<input type="checkbox">
                                            	<small>
                                                	
                                                     	Remember me &nbsp; | &nbsp;
                                                        <a href="#" style="text-align:right;">
                                                        	Forgot password?
                                                        </a>
                                                        
                                                    </span>
                                                </small>
                                        </label>
                                    </div>
                             </div>
                             
                        </div>
                     </form>
                     <div class="topspacer1 bottomspacer">                     
                        New here? <a href="register/register.php">Register now</a>
                     </div-->
                </div><!-- end of second column //-->
            </div> <!-- end of row //-->       
            
            <div class="col-xs-12 col-sm-8 col-md-8 col-md-pull-4 hidden-xs">
            	<!-- First column for slider //-->
               <div class="well well-sm" style="text-align:center;">
               		<img src="images/one_man_land.jpg" width="80%">                    
               </div>
               
               		
                    	<img src="images/funaablogo.png">
                    	<img src="images/sci-gaia.png">
                        <img src="images/wacren_logo1.png">
                        <img src="images/eko_konnectlogo1.png">
               
            </div>
            
        </div>
    
    
    <?php
	  require("footer.php");
	?>
    
    </div><!-- end of container //-->
    
    
    <script src="js/jquery-1.11.1.min"></script>
    <script src="js/bootstrap.min.js"></script>
	</body>
</html>
