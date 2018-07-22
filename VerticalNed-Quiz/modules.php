<?php include "db/initial.php"; 
$page ="modules";

/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Home</title>
</head>

<body>
	<?php include 'facebook_page.php'; ?>
    <?php include 'nav.php'; ?>
	<div class="container">
    	<br><br>
       <div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-2">
                	<?php include 'left_home.php'; ?>
                </div>
                <div class="col-lg-6">
                	<div class="form-group">
                      <label class="control-label" for="focusedInput">Search topic</label>
                      <input class="form-control" id="focusedInput" type="text" value="Search...">
                    </div>
                    <hr class="intro-divider">
                    	<strong>Trending topics : </strong> 
                        <a href="#" class="btn btn-primary btn-xs">Science</a>
                        <a href="#" class="btn btn-primary btn-xs">Maths</a>
                        <a href="#" class="btn btn-primary btn-xs">Chemistry</a>
                        <a href="#" class="btn btn-primary btn-xs">General</a>
                        <a href="#" class="btn btn-primary btn-xs">HIMYM</a> 
                    <hr class="intro-divider">
                	<div class="well">
                      <h1>Calculas</h1>
                      <p class="text-muted">2016 . Hard . 10mins | Mathematics</p>
                      <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. </p>
                      <a href="#" class="btn btn-default">Score: 120</a>
                      <a href="#" class="btn btn-primary pull-right">Attempt <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                	Recent Activities,<br>
                	<div class="list-group">
                      <a href="#" class="list-group-item">
                        <strong>Nandini Deb</strong> has completed <strong>Science</strong> 19mins ago.
                      </a>
                      <a href="#" class="list-group-item">
                      	A new blog is posted on <strong>C/C++ Tricks</strong> by <strong>Vineet Srivastav</strong>
                      </a>
                      <a href="#" class="list-group-item">
                      	You just passed <strong>Apoorv Sethi</strong> in the topic <strong>Maths</strong>
                      </a>
                      <a href="#" class="list-group-item">
                        <strong>Nandini Deb</strong> has completed <strong>Science</strong> 19mins ago.
                      </a>
                      <a href="#" class="list-group-item">
                      	A new blog is posted on <strong>C/C++ Tricks</strong> by <strong>Vineet Srivastav</strong>
                      </a>
                      <a href="#" class="list-group-item">
                      	You just passed <strong>Apoorv Sethi</strong> in the topic <strong>Maths</strong>
                      </a>
                      <a href="#" class="list-group-item">
                        <strong>Nandini Deb</strong> has completed <strong>Science</strong> 19mins ago.
                      </a>
                      <a href="#" class="list-group-item">
                      	A new blog is posted on <strong>C/C++ Tricks</strong> by <strong>Vineet Srivastav</strong>
                      </a>
                      <a href="#" class="list-group-item">
                      	You just passed <strong>Apoorv Sethi</strong> in the topic <strong>Maths</strong>
                      </a>
                      <a href="#" class="list-group-item">
                        <p style="text-align:center;"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></p>
                      </a>
                      
                    </div>
                </div>
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

</body>

</html>
