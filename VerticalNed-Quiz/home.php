<?php include "db/initial.php"; 

$page ="home";

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
                      <a href="friends.php" class="btn btn-default">Followers : <span id="follower"></span></a>
                      <?php include 'each_follower.php'; ?>
                    </div>
                    <br>
                    <hr class="intro-divider">
                    <br>
                    <div class="form-group">
                         <textarea class="form-control" id="post_user" placeholder="Share your story..." rows="3" required></textarea>
                    </div>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-user" aria-hidden="true"></i> <?php echo $user->fname." ".$user->lname; ?></a>
                    <div class="pull-right">
                    <button id="post" class="btn btn-info btn-sm"> <i class="fa fa-globe" aria-hidden="true"></i> Post</button>
                    </div>
                    <hr class="intro-divider">
                    <br>
                    <span id="posts"></span>          
                </div>
                <div class="col-lg-4">
                	<?php include 'right_home.php'; ?>
                </div>
           	</div><!-- /row -->
		</div>
    </div>
        <!-- /.container -->
    
    <script>
		
		
		function loadDoc() {
			  var xhttp = new XMLHttpRequest();
			  xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
				 document.getElementById("posts").innerHTML = this.responseText;
				}else{
				 document.getElementById("posts").innerHTML = '<p style="text-align:center;"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i> Loading...<span class="sr-only">Loading...</span></p>';
				}
			  };
			  xhttp.open("GET", "posts.php", true);
			  xhttp.send();
			}
		
	</script>
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
    
    <script>
	
	var modal = document.getElementById('myModal');
	
	function resetIt(){
		$("#post").html('<i class="fa fa-globe" aria-hidden="true"></i> Post');
		$("#post_user").val("");
		$("#post").prop('disabled', false);
		loadDoc();
	}
	
	
	$(document).ready(function(){
				$("#post").click(function(){
					$.post("make_post.php",{userpost: $("#post_user").val()},function(data,status){
						$("#post").text('Posting...');
						$("#post").prop('disabled', true);
						if(status == "success"){ 
							setTimeout(resetIt, 2000);
						}else{
							alert('Error-211. Refresh the page !');
							setTimeout(resetIt, 1000);
						}
					});
				});
				loadDoc();
			});
	
	
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
