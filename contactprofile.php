<?php include "db/initial.php"; 
	
if(isset($_GET['id']) && !empty($_GET['id'])){
	$id = escape($_GET['id']);
}
/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Vineet Srivastav</title>
    <style>
		.img-profile{
			width  : 150px;
			height : 150px;
			margin-left:50px;
			margin-top: -50px;
		}
		.fol-profile{
			width  : 32%;
			height : 100px;
			margin: 0 2px 5px 0;
		}
		.img-cover{
			height	:	300px;
			width	:	100%;
		}
		.info{
			margin	:	10px;
		}
	</style>
</head>

<body>
	<?php include 'facebook_page.php'; ?>
    <?php include 'nav.php'; 
	/* Include to verify login and get the data from the database in $user; Table name : users */
		include "user_status.php";
	
	?>
	<div class="container">
    	<div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-12">
                	
                    <div class="panel panel-default">
                      <div class="panel-body">
                      	<img class="img-thumbnail img-cover pull-left" src="img/theme/blog.jpg" />
                        <img class="img-thumbnail img-profile pull-left" src="img/profile_img.jpg" />
                        <div class="info pull-left">
                            <h2>Vineet Srivastav &nbsp;<i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i></h2>
                            <h5>Blogger</h5>
                        </div>
                        <div class="clearfix"></div>
                     </div><!-- Panel -->
                </div>
                <div class="col-lg-4">
                	<h4 style="text-align:center;">Social</h4>
                    <hr>
                	<div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-primary"><i class="fa fa-facebook" aria-hidden="true"></i> Facebook</a>
                      <a href="#" class="btn btn-primary"><i class="fa fa-envelope-o" aria-hidden="true"></i> Mail</a>
                      <a href="#" class="btn btn-primary"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
                    </div>
                    <hr>
                    <a href="#" class="btn btn-primary" style="width:100%"><i class="fa fa-download" aria-hidden="true"></i> &nbsp; &nbsp; Resume</a>
                </div> <!-- col-4 -->
                
                <div class="col-lg-8">
                     <form class="form-horizontal">
                      <fieldset>
                        <legend>Send a direct message :</legend>
                        <div class="form-group">
                          <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                          </div>
                          <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                          <div class="col-lg-4">
                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                          </div>
                        </div> 
                        
                        <div class="form-group">
                          <div class="col-lg-12">
                            <textarea class="form-control" rows="3" id="textArea" placeholder="Message"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div> 
                      </fieldset>
                     </form>     

                </div><!-- col-8 -->
                
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
    <script src="js/main.js"></script> <!-- Resource jQuery -->
    <script>
		
		
		
	</script>

</body>

</html>
