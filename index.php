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
    <title>Srivin</title>
</head>

<body style="background-image:url(img/image.jpg); background-repeat:no-repeat; background-size:cover; background-attachment:fixed;">
	<?php include 'facebook_page.php'; ?>
    <?php include 'nav.php' ?>
	<div class="container">
       <div class="page-header" id="banner">
       <?php if(!is_logged_in()){ ?>
	
			<div class="row">
            	<div class="col-lg-7">
                <br><br>
                	<h2 style="font:Verdana, Geneva, sans-serif; font-size:64px; color:#FFF;"><b>SRIVIN,</b></h2>
                    <h3 style="color:#FFF;">Learn | Challenge | Blog | Portfolio</h3>
                </div>
                <div class="col-lg-5" style="background: rgba(128,128,128, 0.3); border:thin hidden #000; border-radius:10px;">
                	<br><br>
                    
                    <form style="color:#FFF;" class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                          <fieldset>
                            <legend style="color:#FFF; text-align:center;">LOGIN</legend>
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
                                <a href="signup.php" class="btn btn-info">Sign Up &nbsp; &nbsp;<i class="fa fa-user-plus" aria-hidden="true"></i></a>
                                <br>
                                <button type="reset" class="btn btn-link pull-right">having trouble logging in?</button>
                              </div>
                            </div>
                          </fieldset>
                        </form>
                    <?php if(!isset($stop) && empty($stop)){ ?>
                    <!--<hr class="intro-divider">
                    <a href="#" class="btn btn-info btn-lg btn-block"><i class="fa fa-facebook-square" aria-hidden="true"></i> | Facebook Connect</a>
                    <hr class="intro-divider">
                    -->
                    <?php } ?>
                </div>
           	</div><!-- /row -->
            <?php }?>
		</div>
    </div>
        <!-- /.container -->
        
<!-- Services Section -->
    <section style="background-color:#FFF; margin-top:-15px;">
        <div class="container">
        <br><br>
            <div class="row">
                <div class="col-lg-3">
                    <h3 style="font:Verdana, Geneva, sans-serif;"><b>Top 10 Users / Points</b></h3>
                    <hr>
                    <div class="list-group">
                    <?php 
						$i = 0;
						$result = mysqli_query($db,'SELECT `userid`, sum(`score`) as score FROM `quizpast` group by `userid` order by sum(`score`) desc');	
						if(mysqli_num_rows($result)>0){
							while($list = $result->fetch_object()){
								$i++;
							?>
                            
                            <a href="<?php echo $_SERVER['REQUEST_URI'].'\vineet'; ?>" class="list-group-item">
                            	<span class="badge"><?php echo $list->score; ?></span>
                            	<?php echo get_user($list->userid)->fname.' '.get_user($list->userid)->lname;?>
                         	</a>
                            
                            
							<?php
							}
						}
						while($i<10){ $i++;
						?>
                        	<a href="#" class="list-group-item">
                            	<span class="badge">-</span>
                            	-
                         	</a>
                        
                        <?php
						}
					?>
                      
                      
                    </div><!-- list Area -->
               </div><!-- Col4 -->
               
               <div class="col-lg-6">
               		<h3 style="font:Verdana, Geneva, sans-serif;"><b>Latest Blogs :</b></h3>
                    <hr>
                    <div class="list-group">
             <!-- fetching blog -->         
             <?php
			   
			   	$result = mysqli_query($db,'SELECT `id`, `title`, `category`, `content`, `moment`, `userid` FROM `blog` ');
				if(mysqli_num_rows($result) > 0 ){
					while($blog = $result->fetch_object()){?>
					  <a href="#" class="list-group-item">
                        <h4 class="list-group-item-heading"><b><?php echo $blog->title; ?></b></h4>
                        <h5 style="font-size:12px;"><b><?php echo $blog->category; ?></b></h5>
                        <p class="list-group-item-text"><?php echo substr($blog->content, 0, 100); ?>...<u><b>Read More</b></u></p>
                        <hr>
                        <p>by, <?php echo get_user($blog->userid)->fname.' '.get_user($blog->userid)->lname; ?> <span class="pull-right"><?php echo $blog->moment; ?></span></p>
                      </a>
                      <br>
                     <?php 
					}
				}
			   
			   ?>
               	
                <!-- fetching blog -->
                    </div>
                    <a style="width:100%;" href="#" class="btn btn-default btn-sm">More Blogs</a>
               </div>
               <div class="col-lg-3">
               		<h3 style="font:Verdana, Geneva, sans-serif;"><b>Weekly Quiz:</b></h3>
                    <hr>
                    <p>Earn prizes by solving weekly quizes and be a part of the VerticalNed Family.</p>
                    <p style="text-align:center;"><b>Time Left</b></p>
                    <div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default disabled">10h</a>
                      <a href="#" class="btn btn-default disabled">50mins</a>
                      <a href="#" class="btn btn-default disabled">20secs</a>
                    </div>
                    <hr>
                    <a style="text-align:center; width:100%" href="#" class="btn btn-primary btn-sm">Open this Quiz?</a>
                    <hr>
                    <p style="text-align:center;"><b>Previous Week's Winner:</b></p>
                    <div class="list-group">
                      <a href="#" class="list-group-item">
                        Vineet Srivastav  <span class="pull-right"><i class="fa fa-inr " aria-hidden="true"></i> 200</span>
                      </a>
                   </div>
                   
                   <!-- Quotes -->
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <h5 style="text-align:center;"><b>Techinal Quotes:</b></h5>
                        <hr>
                        <?php
							$result = mysqli_query($db,'SELECT `id`, `quotes`, `userid`, `approve` FROM `quotes` WHERE `approve`= "1"');
							if(mysqli_num_rows($result)>0){
								while($quotes = $result->fetch_object()){
									?>
                                    
                                    <blockquote>
                                      <p><?php echo $quotes->quotes; ?></p>
                                      <small><?php echo get_user($quotes->userid)->fname.' '.get_user($quotes->userid)->lname; ?></small>
                                    </blockquote>
                                    <hr>
                                    
                                    
                                    <?php
								}
							}
						?>
                        <a style="text-align:center; width:100%" href="#" class="btn btn-primary btn-sm">Submit yours?</a>
                      </div>
                    </div>
                    
                    <!--/quotes -->
               </div>
            </div><!-- Row -->
        </div><!-- Container -->
    
    </section>
        <!-- /.section -->
        
        <!-- Services Section -->
    <section style="background-color:#FFF;">
        <div class="container">
        <br><br>
            <div class="row">
                <div class="col-lg-6">
                	<div class="panel panel-default">
                      <div class="panel-body">
                        
                        <h3 style="font:Verdana, Geneva, sans-serif;"><b>Interview Experience :</b></h3>
                         <hr>
                         <div class="list-group">
                         <?php 
						 	
							$result = mysqli_query($db,'SELECT `id`, `userid`, `title`, `content`, `moment`, `approved` FROM `job_exp` WHERE `approved`= "1"');
							if(mysqli_num_rows($result)>0){
								while($exp = $result->fetch_object()){
									?>
                                <a href="#" class="list-group-item">
                                <h4 class="list-group-item-heading"><?php echo $exp->title; ?><?php echo $exp->moment; ?></h4>
                                <p class="list-group-item-text">
                                <?php echo $exp->content; ?>
                                </p>
                              </a>
                              <br>    
									
					<?php
								}
							}
						?>
                         
                      </div>
                    </div>
                   </div>
                 </div><!-- Col6 -->
              	 <div class="col-lg-6">
               		<h3 style="font:Verdana, Geneva, sans-serif;"><b>Follow us :</b></h3>
                    <hr>
                    <div class="fb-page" data-href="https://www.facebook.com/verticalned/" data-small-header="true" data-width="500" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/verticalned/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/verticalned/">Verticalned</a></blockquote></div>
               </div>
               
            </div><!-- Row -->
        </div><!-- Container -->
    
    </section>
        <!-- /.section -->
        
        
        
        
        
        
        
    
    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
