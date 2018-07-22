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
    <title><?php echo $id; ?>Vineet Srivastav</title>
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
		.date{
			font-size:11px;
			color:#0C9;
			
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
                            <h5>Full Stack Developer</h5>
                        </div>
                        <div class="info pull-right"><br>
                        <a href="#" class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp; &nbsp; &nbsp; Contact</a>
                        </div>
                          
                        <div class="clearfix"></div>
                     </div><!-- Panel -->
                </div>
                <div class="col-lg-9">
                	
                   <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li class="active">Blogs</li>
                   </ul>
                   
                   
                   <div class="list-group">
                      <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">How to be successfull ?</h4>
                        <span class="date">12-DEC-2016 12:05 PM</span>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      </a>
                      <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading">My secret of coding</h4>
                        <span class="date">12-DEC-2016 12:05 PM</span>
                        <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                      </a>
                    </div>
                   
                   
                   
                   
                   
                   <ul class="pagination">
                      <li class="disabled"><a href="#">&laquo;</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">&raquo;</a></li>
                    </ul>
                		
				</div><!-- col-9 -->
                <div class="col-lg-3">
                	<div class="panel panel-default">
                      <div class="panel-heading">Blog Content</div>
                      <div class="panel-body">
                      	<div class="btn-group">
                            <div class="btn-group">
                              <a href="#" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                January
                                <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">blog 1</a></li>
                                <li><a href="#">blog 2</a></li>
                                <li><a href="#">blog 3</a></li>
                               </ul>
                            </div>
                          </div>
                      </div>
                    </div>
                </div>
                <hr><!-- col-3 -->
                
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
