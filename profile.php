<?php include "db/initial.php"; 
	$page ="profile";
	
/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Profile</title>
</head>

<body>
	<?php include 'facebook_page.php'; ?>
    <?php include 'nav.php'; 
	/* Include to verify login and get the data from the database in $user; Table name : users */
		include "user_status.php";
	
	?>
	<div class="container">
    	<br><br>
       <div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-2">
                	<?php include 'left_home.php'; ?>
                </div>
                <div class="col-lg-6">
                	<div class="panel panel-default">
                      <div class="panel-body">
                        <div class="row">
            				<div class="col-sm-11">This is your status area. Will be activated soon.</div>
                            <div class="col-sm-1 pull-right"><i class="fa fa-pencil" aria-hidden="true"></i></div>
                        </div>
                      </div>
                    </div>
                    <br>
                    
                </div>
                <div class="col-lg-4">
                
                	<div class="panel panel-default">
                      <div class="panel-body">
                        <div class="row">
            				<div class="col-sm-1"><i class="fa fa-user" aria-hidden="true"></i></div>
                            <div class="col-sm-7">Gender</div>
                            <div class="col-sm-3 pull-right"><?php echo $user->gender; ?></div>
                        </div>
                      </div>
                    </div>
                    <hr>
                    <div class="list-group">
                          <a href="#" class="list-group-item">
                            <div class="row">
                                    <div class="col-lg-1"><i class="fa fa-university" aria-hidden="true"></i></div>
                                    <div class="col-lg-7"><?php echo $user->college ?></div>
                                    <div class="col-lg-3 pull-right"><span class="badge">-</span></div>
                            </div>
                          </a>
                          <a href="#" class="list-group-item">
                            <div class="row">
                                    <div class="col-sm-1"><i class="fa fa-globe" aria-hidden="true"></i></div>
                                    <div class="col-sm-7"><?php echo $user->state; ?>, India</div>
                                    <div class="col-sm-3 pull-right"><span class="badge">-</span></div>
                            </div>
                          </a>
                	</div>
                    <hr>
                    <div class="list-group">
                          <a href="#" class="list-group-item">
                            <div class="row">
                                    <div class="col-lg-1"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                    <div class="col-lg-10 pull-right"><?php echo $user->email; ?></div>
                            </div>
                          </a>
                          <a href="#" class="list-group-item">
                            <div class="row">
                                    <div class="col-sm-1"><i class="fa fa-phone" aria-hidden="true"></i></div>
                                    <div class="col-sm-10 pull-right"><?php echo $user->phone; ?></div>
                            </div>
                          </a>
                	</div>
                    <hr>
                    <div class="panel panel-default">
                      <div class="panel-heading">Basic Info</div>
                      <div class="panel-body" style="font-size:12px;">
                      <?php
					  $res = mysqli_query($db,'SELECT `desig`, `company` FROM `working` WHERE `userid`='.$_SESSION['userid'].'');
					  if(mysqli_num_rows($res)>0){
					  while($data2 = $res->fetch_object()){
					  ?>
                        <p><i class="fa fa-suitcase" aria-hidden="true"></i> | <?php echo $data2->desig; ?> at <u><?php echo $data2->company; ?></u></p>
                        <?php
					  	}
					  }else{
					  	echo '<p style="text-align:center;">No info yet. Update in settings.</p>';
					  }
					  ?>
						</div>
                    </div>
                </div><!-- col-4 -->
                <hr>
                
           	</div><!-- /row -->
		</div>
    </div>
        <!-- /.container -->
        
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                	<hr class="intro-divider">
                    <ul class="list-inline">
                        <li>
                            <a href="#">Home</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#services">Terms &amp; Conditions</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#contact">Contact</a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small">Copyright &copy; VerticalNed 2017. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script>
		
		
		
	</script>

</body>

</html>
