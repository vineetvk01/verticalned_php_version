<?php include "db/initial.php"; 

$page ="blogs";
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
                <div class="col-lg-10">
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
                        
                        <div class="btn-group pull-right">
                          <a href="#" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            Top First
                            <span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu">
                            <li><a href="#">Latest First</a></li>
                            <li><a href="#">Oldest First</a></li>
                            <li><a href="#">Top First</a></li>
                           </ul>
                        </div>
                    <hr class="intro-divider">
                	<div class="row">
                    	<div class="col-lg-6">
                        	<div class="well well-lg">
                            	
                            </div>
                        </div>
                        <div class="col-lg-6">
                        	
                        </div>
                        <!--- col-lg-6 -->
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
