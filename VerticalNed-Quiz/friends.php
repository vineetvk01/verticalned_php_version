<?php include "db/initial.php"; 
$page ="friends";

/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Friends</title>
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
                      <label class="control-label" for="friendsearch">Search Friends</label>
                      <input class="form-control" id="friendsearch" type="text" placeholder="Search...">
                    </div>
                    <hr class="intro-divider">
                	<!-- Friend showcase-->
                    <div id="friends">
                    	<?php include 'friends_showcase.php'; ?>
                    </div>
                    <div id="friends1">
                    	<?php //include 'new_friends.php'; ?>
                    </div>
                    <!-- Friend showcase-->
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
	<script>
	
	$(document).ready(function() {
		
		$("#friendsearch").keyup(function(){
			$friend = $(this).val();
			if($friend == ""){
				$("#friends").show();
				$("#friends1").hide();
			}else{
				$("#friends").hide();
				$("#friends1").show();
			//alert($friend);
			//$("#friends").html($friend);
			$.post("new_friends.php", {user: $friend}, function(data,status){
						$("#friends1").html(data);
				});
			}
		});
		
		
		
		
		
		// The rel attribute is the userID you would want to follow

		$('#friends1, #friends').on('click', 'button.followButton', function(e){
			e.preventDefault();
			$button = $(this);
			if($button.hasClass('following')){
				
				//$.ajax(); Do Unfollow
				
				$.post("follow.php?q=del",{user: $button.attr('rel')},function(data,status){
						$button.prop('disabled', true);
						$button.html('<i class="fa fa-spinner fa-spin"></i>');
						//alert(data);
						if(status == "success"){ 
							$button.prop('disabled', false);
							$button.html('<i class="fa fa-user"></i> &nbsp; Follow');
						}
				});
				
				//$.ajax(); Do Unfollow
				
				$button.removeClass('following');
				$button.removeClass('unfollow');
				
			} else {
				
				// $.ajax(); Do Follow
				$.post("follow.php?q=fol",{user: $button.attr('rel')},function(data,status){
						$button.prop('disabled', true);
						$button.html('<i class="fa fa-spinner fa-spin"></i>');
						//alert(data);
						if(status == "success"){ 
							$button.prop('disabled', false);
							$button.html('<i class="fa fa-check"></i> &nbsp; Following');
						}
				});
				// $.ajax(); Do Follow
				
				$button.addClass('following');
				$button.html('<i class="fa fa-check"></i> &nbsp; Following');
			}
		});
		
		$('button.followButton').hover(function(){
			$button = $(this);
			if($button.hasClass('following')){
				$button.addClass('unfollow');
				$button.text('Unfollow');
			}
		}, function(){
			if($button.hasClass('following')){
				$button.removeClass('unfollow');
				$button.html('<i class="fa fa-check"></i> &nbsp; Following');
			}
		});
		
		
	});
		
		
    
	</script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
