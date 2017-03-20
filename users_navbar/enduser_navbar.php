<div class="navbar navbar-default navbar-custom">
        	<div class="contain-fluid" style="">
            
            	<div class="nav-header">
                	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
                    	<span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">AgriServicomm</a> 
                   <form class="navbar-form navbar-left" role"search">
                   		<div class="form-group">
                        	<input type="text" class="form-control" placeholder="Search">
                        </div>
                   </form>
                     
                                    
                </div>
               
                <div class="collapse navbar-collapse" id="mynavbar-content">
                        <ul class="nav navbar-nav">
                            <li><a class="active" href="#"><span class="glyphicon glyphicon-home"></span> <small><?php echo $_SESSION['surname'].' '.$_SESSION['firstname']; ?></small></a></li>                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                        	<li><a href="#" title="Notifications"><small><span class="glyphicon glyphicon-bell"></span> Alerts</small></a>
                        	<li><a href="#"><small><span class="glyphicon glyphicon-envelope"></span> Message</small></a>	</li>
                            <li class="dropdown">
                            	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                	<small>
                                    	<span class="glyphicon glyphicon-briefcase"></span> My Account <b class="caret"></b>
                                    </small>
                                </a>
                                <ul class="dropdown-menu">
                                	<li><a href="#"><small><span class="glyphicon glyphicon-user"></span> Profile</small></a></li>
                                    <li><a href="#"><small><span class="glyphicon glyphicon-camera"></span> Photo</small></a></li>
                                    <li><a href="/Shibboleth.sso/Logout"><small><span class="glyphicon glyphicon-off"></span> Sign Out</small></a></li>
                                </ul>
                             </li>
                            <li><a href="#"><small><span class="glyphicon glyphicon-wrench"></span> Settings</small></a>
                        </ul>
                 </div>
                 
               
            </div>    
            
        </div>
