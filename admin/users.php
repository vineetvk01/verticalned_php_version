<?php include "../db/initial.php"; 
	$page ="admin";
	/* Include to verify login and get the data from the database in $user; Table name : users */
		include "../user_status.php";
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Admin | Users</title>
</head>

<body>
	<?php include '../facebook_page.php'; ?>
    <?php include 'nav.php'; 
	
	?>
	<div class="container">
    	<br><br>
       <div class="page-header" id="banner">
			<div class="row">
            	<div class="col-lg-2">
                	<?php include 'left_home.php'; ?>
                </div><!-- col-2 -->
                <div class="col-lg-10">
                	Users Registered,
                    <table class="table table-striped table-hover ">
                          <thead>
                            <tr>
                              <th>#id</th>
                              <th>Name</th>
                              <th>username</th>
                              <th>Email</th>
                              <th>phone</th>
                              <th>created</th>
                              <th>options</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
						  $result = mysqli_query($db,'SELECT `id`, `fname`, `lname`, `username`, `email`, `phone`, `verified`, `position`, `created` FROM `users` ORDER BY `id` DESC ');
						  if(mysqli_num_rows($result)>0){
							  while($data = $result->fetch_object()){
						  ?>
                            <tr <?php if($data->verified == 0){echo 'class="warning"';}else if($data->verified == 2){echo 'class="info"';}?> >
                              <td><?php echo $data->id; ?></td>
                              <td><?php echo $data->fname.' '.$data->lname; ?></td>
                              <td><?php echo '@'.$data->username; 
							  if($data->verified == 2){echo '&nbsp; <i class="fa fa-check-circle" style="color:#ffffff" aria-hidden="true"></i>'; } ?></td>
                              <td><?php echo $data->email; ?></td>
                              <td><?php echo $data->phone; ?></td>
                              <td><?php echo date_format((date_create($data->created)),' l, h:i a '); ?></td>
                              <td>activate | verify | block </td>
                            </tr>
                            <?php
							  }
						  }
						  ?>
                            
                          </tbody>
                        </table>
                    
                    
                </div><!-- col-6 -->
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
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
    <script>
		
		
		
	</script>

</body>

</html>
