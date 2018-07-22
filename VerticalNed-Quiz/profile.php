<?php include "db/initial.php"; 
	$page ="profile";
	
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
                	<div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default">Rank : 14358</a>
                      <a href="#" class="btn btn-default">Score : 2,00,543</a>
                      <a href="#" class="btn btn-default">Followers : 56</a>
                    </div>
                    <br>
                    <hr class="intro-divider">
                    <br>
                    <div class="form-group">
                         <textarea class="form-control" placeholder="Share your story..." rows="3" required></textarea>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-user" aria-hidden="true"></i> Vineet Srivastav</a>
                    <div class="pull-right">
                    <a href="#" class="btn btn-info btn-sm"> <i class="fa fa-globe" aria-hidden="true"></i> Post</a>
                    </div>
                    <hr class="intro-divider">
                    <br>               
                    <?php include 'posts.php'; ?>
                    <?php include 'posts.php'; ?>
                    <?php include 'posts.php'; ?>
                </div>
                <div class="col-lg-4">
                	<?php include 'right_home.php'; ?>
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
