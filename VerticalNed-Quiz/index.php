<?php include "db/initial.php"; 


//login to the site
if(isset($_POST['login']) && !empty($_POST['login'])){
	
	$user 	  = $_POST['user'];
	$password = $_POST['password'];
	
	if(login($user, $password)){
		header("location: profile.php");
		}else{
			$stop = 1;
	}
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>VerticalNed</title>
</head>

<body>

    <?php include 'nav.php' ?>
	<div class="container">
       <div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-7">
                <br><br>
                	<?php include "banner.php"; ?>
                </div>
                <div class="col-lg-5">
                	<br><br>
                    
                    <form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                          <fieldset>
                            <legend>Login</legend>
                            <?php if(isset($stop) && !empty($stop)){ ?>
                                <div class="alert alert-dismissible alert-danger">
                                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                                  <strong>Error!</strong> Provided username and password are not correct. Try again.
                                </div>
                            <?php } ?>
                            <div class="form-group">
                              <label for="inputEmail" class="col-lg-2 control-label">Username</label>
                              <div class="col-lg-10">
                                <input type="text" class="form-control" id="inputEmail" name="user" placeholder="Email">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                              <div class="col-lg-10">
                                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox"> Remember Me!
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-10 col-lg-offset-2">
                                <button type="submit" name="login" value=1 class="btn btn-primary">Sign In</button>
                                <button type="reset" class="btn btn-default">Forgot Password</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                    <?php if(!isset($stop) && empty($stop)){ ?>
                    <hr class="intro-divider">
                    <a href="#" class="btn btn-info btn-lg btn-block"><i class="fa fa-facebook-square" aria-hidden="true"></i> | Facebook Connect</a>
                    <hr class="intro-divider">
                    <?php } ?>
                </div>
           	</div><!-- /row -->
		</div>
    </div>
        <!-- /.container -->
        
<!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                	<br><br>
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Best way to prepare for any competetive exam.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-book fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Learn</h4>
                    <p class="text-muted">Learn topics from the refrences given and start evaluating yourself with the help of the test provided.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-question fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Assessment</h4>
                    <p class="text-muted">This section will help you to gain experience about the topic which are covered by you and give your best in the quiz to get better results.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Result</h4>
                    <p class="text-muted">Our Data-science techniques will help us to determine the weak and good point in your personality observing from the past tests.</p>
                </div>
            </div>
        </div>
    </section>
        <!-- /.section -->
    
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

</body>

</html>
