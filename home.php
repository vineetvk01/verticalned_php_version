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
                <?php
					$res = mysqli_query($db,'SELECT sum(`score`) as total FROM `quizpast` WHERE `username` = "'.$_SESSION['username'].'"');
					if(mysqli_num_rows($res)>0){
						$score = $res->fetch_object()->total;
					}else{
						$score = 0;
					}
				
				
				?>
                <div class="col-lg-6">
                	<div class="btn-group btn-group-justified">
                      <a href="#" class="btn btn-default">Rank : -</a>
                      <a href="profile.php" class="btn btn-default">Score : <?php echo $score; ?></a>
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
                <?php if($user->position == '2'){ ?>
                	<div class="list-group">
                      <a href="map/" class="list-group-item">
                        Admin Area
                      </a>
                      <a href="#" class="list-group-item">
                     	Block Users
                      </a>
                      <a href="#" class="list-group-item">
                      	Off-Site
                      </a>
                    </div>
                 <?php } ?>
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
	
    
    <!-- MOdal 1 -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Likes</h4>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
    <!-- modal 2 -->
    <div class="modal fade" id="cModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Comments</h4>
          </div>
          <div class="modal-body">
          </div>
        </div>
      </div>
    </div>
    
    <!-- modal 3 -->
    <div class="modal fade" id="sModal" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" style="text-align:center;">Cofirm share?</h4>
          </div>
          <div class="modal-body">
          </div>
          <div class="modal-footer">
          	<button class="shared" class="btn btn-info disabled"><i class="fa fa-globe" aria-hidden="true"></i> &nbsp; Share</button>
          </div>
        </div>
      </div>
    </div>
    
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
				
				function load_likes(num){
					$("#post_"+num).html('<hr><i class="fa fa-spinner fa-spin fa-fw"></i>');
					$.post("get_likes.php",{postid: num},function(data,status){
						if(status == "success"){
							$("#post_"+num).html(data);
						}
					});
				}
				
				$("body").on("click", ".like", function(){
					$(this).toggleClass("blue");
					btn = $(this);
					kid = this.id
					btn.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
					$.post("like_post.php",{postid: this.id},function(data,status){
						if(status == "success"){
							btn.html('<i class="fa fa-thumbs-up" aria-hidden="true"></i> Like');
							load_likes(kid);
						}
					});
				});
				
				$("body").on("click", ".delete", function(){
					btn = $(this);
					kid = this.id;
					btn.html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
					$.post("delete_post.php",{postid: this.id},function(data,status){
						if(status == "success"){
							loadDoc();
						}
					});
				});
									
				$("body").on("click", ".getlikes", function(e) {
					var link1 = $(this).data("href");
					$.post(link1,function(data,status){
						if(status == "success"){
							$('#myModal .modal-body').html(data);
						}
					});
				});
				
				$("body").on("click", ".comment", function(e) {
					btn = $(this);
					kid = this.id;
					$.post("get_comments.php", {id: kid},function(data,status){
						if(status == "success"){
							$('#cModal .modal-body').html(data);
						}
					});
				});
				
				$("body").on("click", ".share", function(e) {
					btn = $(this);
					kid = this.id;
					$.post("doshare.php", {id: kid},function(data,status){
						if(status == "success"){
							$('#sModal .modal-body').html(data);
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
