<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AgricServicomm | Register</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="../css/sitewide.css" rel="stylesheet" type="text/css" >
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
		   $imgPath = "../images/";
		   require("../header.php");
		?>
    <!-- end of header //-->
    	
        
        <div class="row">
        	<div class="col-xs-1"><!-- blank column //--></div>           
            
        	<div class="col-xs-11 col-sm-11 col-md-8">
            	<!-- Second column for login //-->
                <div class="bottomspacer"> 
                	<h3>Sign Up</h3>
                </div>
                <div class="row">
                	<div class="col-xs-12 col-sm-12 col-md-12">
                    	<?php require("registerUser.php"); ?>
                    </div>
                </div>
            	<div class="topspacer1">
                     <form class="form-horizontal"  action="register.php" method="post">
                     	<div class="form-group">
                        	<label for="surname" class="col-xs-12 col-sm-2">Surname</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="surname" name="surname" placeholder="Surname" required>  
                            </div>                                                          
                        </div>
                        <div class="form-group">	
                        	<label for="firstname" class="col-xs-12 col-sm-2">First Name</label>
                            <div class="col-xs-12 col-sm-10">
                           		<input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                            </div>                          
                        
                        </div>
                        <div class="form-group">
                        	<label for="othernames" class="col-xs-12 col-sm-2">Other Names</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="othernames" name="othernames" placeholder="Other Names">
                            </div>
                        </div>
                        <div class="form-group">
                        	<label for="gender" class="col-xs-12 col-sm-2">Gender</label>
                            <div class="col-xs-12 col-sm-10">
                            	<div class="radio">
                                	<label>
                                    	<input type="radio" name="gender" value="M">Male                                       
                                    </label> &nbsp;
                                    <label>                                    	
                                        <input type="radio" name="gender" value="F">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="city" class="col-xs-12 col-sm-2">City</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="city" name="city" placeholder="City" required></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="state" class="col-xs-12 col-sm-2">State</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="country" class="col-xs-12 col-sm-2">Country</label>
                            <div class="col-xs-12 col-sm-10">
                            	<select id="country" name="country" class="form-control" required>
                                	<option value="">-- Select country --</option>
                                	<option value="NG">Nigeria</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="phone" class="col-xs-12 col-sm-2">Phone</label>
                            <div class="col-sm-12 col-sm-10">
                            	<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="email" class="col-xs-12 col-sm-2">Email</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="email" class="form-control" id="email" name="email" placeholder="email" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                        	<label for="occupation" class="col-xs-12 col-sm-2">Occupation</label>
                            <div class="col-xs-12 col-sm-10">
                            	<input type="text" class="form-control" id="occupation" name="occupation" placeholder="Occupation" required>
                            </div>                        	
                        </div>
                        
                        <div class="form-group">
                        	<label for="accountType" class="col-xs-12 col-sm-2">Account Type</label>
                            <div class="col-xs-12 col-sm-10">
                            	<select id="accountType" name="accountType" class="form-control">
                                	<option value="">-- Select account type --</option>
                                	<?php require("loadAccountTypes.php"); ?>
                                </select>
                            </div>                        	
                        </div>
                        
                        <div class="row">
                        	<div class="col-xs-12 col-sm-12 col-md-2"></div>
                            <div class="col-xs-12 col-sm-12 col-md-10">
                            	<input type="submit" name="register" class="btn btn-success">
                                <button type="reset" class="btn btn-default">Reset</button>
                            </div>
                        </div>
                        
                     </form>
                     
                </div><!-- end of second column //-->
            </div> <!-- end of row //-->                
                   
        </div><!-- end of container //-->
    
    <br>
    <?php
	  require("../footer.php");
	?>
    
    </div><!-- end of container //-->
    
    
    <script src="../js/jquery-1.11.1.min"></script>
    <script src="../js/bootstrap.min.js"></script>
	</body>
</html>