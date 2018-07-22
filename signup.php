<?php include "db/initial.php"; 


//login to the site
$fname = $lname = $username = $gender = $password = $passworda = $email = $phone = $college = $state = '';
	
	function test_username($user){
		global $db;
		$res = mysqli_query($db,'SELECT `id` FROM `users` WHERE `username` = "'.$user.'"');
		if(mysqli_num_rows($res) > 0){
			return 'Username already exits';
		}else if(strlen($user) <8 || strlen($user) >15){
			return 'Username should be between 8 to 15 character, '.strlen($user);
		}else{
			return 1;
		}
	}
	function test_email($email){
		global $db;
		$res = mysqli_query($db,'SELECT `id` FROM `users` WHERE `email` = '.$email.'');
		if(mysqli_num_rows($res)>0){
			return 0;
		}else{
			return 1;
		}
	}
	
	function test_phone($phone){
		if(strlen($phone) !=10){
			return "Length should be 10 digits";
		}else if(!is_numeric($phone)){
			return "No alphabet allowed in phone number";
		}else{
			return 1;
		}
	}



if(isset($_POST['action']) && !empty($_POST['action'])){
	$fname = escape($_POST['fname']);
	$lname = escape($_POST['lname']);
	$username = escape($_POST['username']);
	$gender = escape($_POST['gender']);
	$password = escape($_POST['password']);
	$passworda = escape($_POST['passworda']);
	$email = escape($_POST['email']);
	$phone = escape($_POST['phone']);
	$college = escape($_POST['college']);
	$state 	= escape($_POST['state']);
	
	if(!preg_match("/^[a-zA-Z ]*$/",$fname)){
		$error[] = 'First name need to be changed'; 
	}else if(!preg_match("/^[a-zA-Z ]*$/",$lname)){
		$error[] = 'Last name need to be changed'; 
	}else if(test_username($username) != 1){
		$error[] = test_username($username);
	}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$error[] = 'Not a correct Email';
	}else if(test_phone($phone) != 1){
		$error[] = test_phone($phone);
	}else if(test_email($email) == 0){
		$error[] = 'Email Already Registered';
	}
	
	
	if($college == '0'){
		$error[] = 'Select College';
	}else if($gender == '0'){
		$error[] = 'Select Gender';
	}else if($state == '0'){
		$error[] = 'Select State';
	}
	
	$datetime = date('Y-m-d H:i:s', time());
	
	if(empty($error) && !isset($error)){
		mysqli_query($db, 'INSERT INTO `users`(`fname`, `lname`, `username`, `password`, `email`, `phone`, `state`, `college`, `gender`, `verified`, `position`, `created`) VALUES ("'.$fname.'", "'.$lname.'", "'.$username.'", "'.$password.'", "'.$email.'", "'.$phone.'", "'.$state.'", "'.$college.'", "'.$gender.'", "0", "1","'.$datetime.'")');
	}
	
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Sign Up | VerticalNed</title>
</head>

<body>

    <?php include 'nav.php' ?>
    <br><br>
	<div class="container">
    	<div class="row">
             <div class="col-lg-6">
                <h1>SIGNUP</h1>
          		<ul class="breadcrumb">
                  <li>Verticalned</li>
                  <li class="active">Signup</li>
                </ul>
            </div>
        </div>
        <hr>
        
        
        
        <?php
		if(!isset($error) && empty($error) && isset($_POST['action'])){
			?>
            <div class="jumbotron">
              <h1>Ola! Successful...</h1>
              <p>Welcome! A final verification link has been sent to your email : <?php echo $echo; ?> , Please visit to verify your account with us. Click below to go to the login page.</p>
              <p><a href="index1.php" class="btn btn-primary btn-lg">Login here</a></p>
            </div>
        
		<?php
		}else {
			if(isset($error) && !empty($error)){
		?>
        	<div class="alert alert-dismissible alert-danger">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <strong>Oh snap!</strong> 
              <ul>
                <?php foreach ($error as $e){
                            echo '<li>'.$e.'</li>';
                        }
                ?>
              </ul>
        	</div>
        <?php } ?>
        <!-- Form -->
        	<form action="signup.php" method="post">
            <input type="hidden" name="action" value="submit" />
        	<div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="fname">First Name</label>
                      <input class="form-control" name="fname" id="fname" type="text" placeholder="Example: Vineet" value="<?php echo $fname; ?>">
                    </div>
                 </div>
                 <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="lname">Last Name</label>
                      <input class="form-control" name="lname" id="lname" type="text" placeholder="Example: Srivastav" value="<?php echo $lname; ?>">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="username">Username</label>
                      <div class="input-group">
                          <input class="form-control" name="username" id="username" type="text" placeholder="Example: vineetvk1" value="<?php echo $username; ?>">
                          <span class="input-group-addon" id="check"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                      </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                      <label class="control-label" for="gender">Gender</label>
                      <select class="form-control" name="gender" id="gender" placeholder="Gender">
                      	  <option value="0">Choose..</option>
                          <option value="m">Male</option>
                          <option value="f">Female</option>
                      </select>
                    </div>
                </div>
                <div class="clearfix"></div>
                
                <div class="col-lg-6">
                    <div class="form-group" id="password1">
                      <label class="control-label" for="password">Password</label>
                      <input class="form-control" name="password" id="password" type="password" placeholder="Something not to share">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="passworda">Password Again</label>
                      <div class="input-group">
                          <input class="form-control" name="passworda" id="passworda" type="password" placeholder="Same here">
                          <span class="input-group-addon" id="check1"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></span>
                      </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="email">Email</label>
                      <input class="form-control" id="email" name="email" type="text" placeholder="Example: v.example@verticalned.com" value="<?php echo $email; ?>">
                    </div>
               </div>
               <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="phone">Phone</label>
                      <input class="form-control" name="phone" id="phone" type="text" placeholder="XX-XX-XXXX" value="<?php echo $phone; ?>">
                    </div>
              </div>
              <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="college">Select College/School</label>
                      	<select class="form-control" name="college" id="college" placeholder="Select College">
                          <option value="0">Choose..</option>
                          <option value="col1">SRM University</option>
                          <option value="col2">IIT Madaras</option>
                          <option value="col3">VIT Vellore</option>
                          <option value="col4">Anna University</option>
                        </select>
                    </div>
               </div>
               <div class="col-lg-6">
                    <div class="form-group">
                      <label class="control-label" for="state">Select State</label>
                      <select class="form-control" id="state" name="state" placeholder="Select State">
                          <option value="0">Choose..</option>
                          <option value="dl">Delhi</option>
                          <option value="tn">Tamil Nadu</option>
                          <option value="mh">Maharastra</option>
                          <option value="rj">Rajesthan</option>
                       </select>
                    </div>
                </div>    
            </div>
            <button type="reset" class="btn btn-default">Reset &nbsp; | &nbsp; <i class="fa fa-repeat" aria-hidden="true"></i></button>
			<button type="submit" name="submit" value="1" class="btn btn-primary">SignUp &nbsp; | &nbsp; <i class="fa fa-thumbs-up" aria-hidden="true"></i></button>
            </form>
            <!-- Form -->
            <?php } ?>
        </div>
    </div>
        
	
    
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
	
		$(document).ready(function(){
			$("#username").keyup(function(){
				$("#check").html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
				var u = this.value;
				$.post("usercheck.php",
					{
						user: u,
					},
					function(data, status){
						$("#check").html(data);
					});
			});
			
			$("#passworda").keyup(function(){
				$("#check1").html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
				var u = this.value;
				var p = $("#password").val();
				if(u != p){
					$("#check1").html('<i class="fa fa-times" aria-hidden="true" style="color:red"></i>');
				}else{
					$("#check1").html('<i class="fa fa-check" aria-hidden="true" style="color:green"></i>');
				}
			});
			
			$("#password").keyup(function(){
				var p = this.value;
				var len = p.length;
				if(len == 0){
					$("#password1").addClass('has-error');
					$("#password1").removeClass('has-warning');
					$("#password1").removeClass('has-success');
				}else if(len < 10){
					$("#password1").addClass('has-warning');
					$("#password1").removeClass('has-error');
					$("#password1").removeClass('has-success');
				}else if(len>=10){
					$("#password1").addClass('has-success');
					$("#password1").removeClass('has-warning');
					$("#password1").removeClass('has-error');
				}
				
				});
		})
	
	</script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
