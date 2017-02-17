<?php
  require("../authenticateLogin.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>AgricServicomm - Dashboard</title>
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
    <!-- navbar //-->
    	<?php
			require("../sitenavbar.php");
		?>
    
    <!-- end of navbar //-->
    
    <div class="mycontainer">
    
    
    <!-- header //-->
    	
    <!-- end of header //-->
    	
        <div class="row">
        	<div class="col-xs-12 col-sm-6 col-md-3">
                 <!--
					<form class="form">            	 
                         <div class="form-group">
                         	<textarea class="form-control" id="status" placeholder="Share your thoughts..."></textarea>                         	
                         </div>
                         <div class="form-group" style="text-align:right;">
                         		<input type="submit" value="Share" class="btn btn-success">
                         </div>
                         
                    </form>
                    
                    //-->
            </div>
            
            <div class="col-xs-12 col-sm-6 col-md-3 col-md-push-6">
            	
                	 <h3>Number of Results by Category</h3>
               
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-md-pull-3">
            	<div id="sitefeed">
                
                	<form class="form-horizontal">
                    	<div class="col-md-8">
                            <select class="form-control" id="resourcesType" id="resourcesType">
                                <option>All Resource</option>
                                <option>Dataset</option>
                                <option>Publication</option>
                                <option>Video</option>
                            </select>           
                        </div>                        
                             
                    </form>
                    <div class="row">
                    	<div class="col-xs-12">
                            <!-- pagination //-->
                            
                            <!-- end of pagination //-->
                         </div>
                     </div>
                    
                    <div class="row">
                    	<div class="col-xs-12">
                	  		<?php require("getPublications.php") ?>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    
    
    <?php
	  require("../footer.php");
	?>
    
    </div><!-- end of container //-->
    
    
    <script src="../js/jquery-1.11.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/dashboard/feed.js"></script>
    
	</body>
</html>