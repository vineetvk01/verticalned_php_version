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
                <div class="col-lg-4">
                	<div class="panel panel-default">
                      <div class="panel-heading">Followers <span class="badge pull-right">14</span></div>
                      <div class="panel-body">
                      	<img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <br>
                        <img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <img class=" fol-profile pull-left" src="img/profile_img.jpg" />
                        <br>
                      </div>
                   </div>
                   
                   <div class="panel panel-default">
                      <div class="panel-heading">Basic-Info</div>
                      <div class="panel-body">
                      	<strong>Date Of Birth </strong> <span style="float:right;"> 1st June 1995</span> <br>
                        <strong>Nationality</strong> <span style="float:right;"> Indian</span> <br>
                        <strong>Gender</strong> <span style="float:right;"> Male</span> <br>
                        <strong>Language Known</strong> <span style="float:right;"> English, Hindi, French</span> <br>
                        <strong>Hobbies</strong> <span style="float:right;"> Designing websites</span> <br>
                      </div>
                   </div> 
                   
                   
                </div>
                
                <div class="col-lg-8">
                		<div class="panel panel-default">
                              <div class="panel-body" style="text-align:center;">
                              About Me :
                                <blockquote class="blockquote-reverse">
                                    <p> I am a web developer from Delhi, India and currently living in Chennai. I enjoy building everything from small business sites to rich interactive web apps. If you are a business seeking a web presence or an employer looking to hire, you can get in touch with me here.</p>
                                </blockquote>
                        	</div>
                        </div>

                		<div class="panel panel-default">
                              <div class="panel-body" style="text-align:center;">
                              	<div class="row">
                                	<div class="col-lg-4">
                                    	<h3>14</h3>
                                		<h4>BLOGS</h4>
                                    </div>
                                    <div class="col-lg-4" style="border-left:#999 solid 2px; border-right:#999 solid 2px;">
                                    	<h3>12</h3>
                                		<h4>PROJECTS</h4>
                                    </div>
                                    <div class="col-lg-4">
                                    	<h3>12</h3>
                                		<h4>PROGRAMS</h4>
                                    </div>
                                </div>
                              </div>
                         </div>
                         
                         <div class="panel panel-default">
                              <div class="panel-body" style="text-align:center;">
                              
                              <!-- TimeLine Starts -->
                              
                              
                              
                              <section id="cd-timeline" class="cd-container">
                             	 <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-picture">
                                        <img src="img/office.png" alt="Picture">
                                    </div> <!-- cd-timeline-img -->
                        
                                    <div class="cd-timeline-content">
                                        <h2>1st July 2017</h2>
                                        <p>Cognizant, CHENNAI</p>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                              
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-picture">
                                        <img src="img/college.png" alt="Picture">
                                    </div> <!-- cd-timeline-img -->
                        
                                    <div class="cd-timeline-content">
                                        <h2>1st May 2012 - 1st June 2017</h2>
                                        <p>SRM UNIVERSITY, CHENNAI</p>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                        
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-movie">
                                        <img src="img/college.png" alt="Picture">
                                    </div> <!-- cd-timeline-img -->
                        
                                    <div class="cd-timeline-content">
                                        <h2>1st May 2012 - 1st May 2013</h2>
                                        <p>D.A.V. Public School, DELHI</p>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                        
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-picture">
                                        <img src="img/school.png" alt="Picture">
                                    </div> <!-- cd-timeline-img -->
                        
                                    <div class="cd-timeline-content">
                                        <h2>1st May 2010 - 1st June 2011</h2>
                                        <p>D.A.V. Public School, DELHI</p>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                        
                                <div class="cd-timeline-block">
                                    <div class="cd-timeline-img cd-movie">
                                        <img src="img/born.png" alt="Movie">
                                    </div> <!-- cd-timeline-img -->
                        
                                    <div class="cd-timeline-content">
                                        <h2>1st June 1995</h2>
                                        <p>Born</p>
                                    </div> <!-- cd-timeline-content -->
                                </div> <!-- cd-timeline-block -->
                            </section> <!-- cd-timeline -->
                              
                              
                              
                              
                              
                              <!-- TimeLine Ends -->
                              
                              </div>
                         </div>
                         
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
