<?php include "db/initial.php"; 
	
if(isset($_GET['blogid']) && !empty($_GET['blogid'])){
	$id = escape($_GET['blogid']);
}
/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";

$res = mysqli_query($db,'SELECT `title`, `content`, `moment`, `userid` FROM `blog` WHERE `id` = '.$id.'');
	if(mysqli_num_rows($res) == 1){
		$blog = $res->fetch_object();
	}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title><?php echo $blog->title; ?></title>
    <style>
		.gap{
			height: 80px;
		}
		.img-profile{
			width  : 150px;
			height : 150px;
			margin-left:50px;
			margin-top: -50px;
		}
		.img-profile_s{
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
    <?php include 'nav.php'; ?>
	<div class="container">
    	<div class="gap"></div>
    	<div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-9">
                	
                   <h1> <?php echo $blog->title; ?> </h1>
                  	<br>
                   <ul class="breadcrumb">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">Blogs</a></li>
                      <li class="active">Read : <?php echo $blog->title; ?> </li>
                   </ul>
                   <hr>
                   <h4 class="date"> <?php echo $blog->moment; ?></h4>
                   <hr>
                   <p>
                  	<?php echo $blog->content; ?>
                   </p>
                <hr>
                12 Likes
                <hr>
                		
				</div><!-- col-9 -->
                
                <div class="col-lg-3">
                
                	<div class="panel panel-default">
                      <div class="panel-body">
                      		<img class="img-thumbnail img-profile_s pull-left" src="img/profile_img.jpg" />
                        <div class="clearfix"></div>
                            <div class="info" style="text-align:center;">
                                <h4 ><b>Vineet Srivastav </b>&nbsp;<i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i></h4>
                                <p>Full Stack Developer</p>
                            </div>
                            <div class="clearfix"></div>
                     	</div><!-- Panel -->
                     </div>
                
                
                
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
