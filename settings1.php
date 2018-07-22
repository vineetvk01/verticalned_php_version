<?php include "db/initial.php"; 
	$page ="settings";
	
/* Include to verify login and get the data from the database in $user; Table name : users */
include "user_status.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Info - Settings</title>
    <style>
		
				.main label{
				color: rgba(0, 0, 0, 0.71);
				margin-left: 60px;
				}
				#image_preview{
				/*position: absolute;*/
				text-align: center;
				line-height: 180px;
				font-weight: bold;
				color: #C0C0C0;
				background-color: #FFFFFF;
				overflow: auto;
				}
				
				
				#file {
				color: red;
				padding: 5px;
				border: 5px solid #8BF1B0;
				background-color: #8BF1B0;
				margin-top: 10px;
				border-radius: 5px;
				box-shadow: 0 0 15px #626F7E;
				margin-left: 15%;
				width: 72%;
				}
				
				#success
				{
				color:green;
				}
				#invalid
				{
				color:red;
				}
				
				#error
				{
				color:red;
				}
				#error_message
				{
				color:blue;
				}
				#loading
				{
				display:none;
				font-size:25px;
				}
	</style>
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
                	<form class="form-horizontal">
                      <fieldset>
                        <legend>
                        	Basic Settings
                        </legend>
                        <hr>
                        <div class="row">
                        	<div class="col-lg-4 text-center">
                            	<img src="<?php if(isset($user->img) && !empty($user->img)){ echo $user->img;}else{ echo "img/user.png";} ?>" height="190" width="190"><hr>
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary btn-xs">Upload</button>
                            </div>
                            <div class="col-lg-8">
                            	<div class="form-group">
                                  <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="<?php echo $user->fname; ?>" value="<?php echo $user->fname; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="<?php echo $user->lname; ?>" value="<?php echo $user->lname; ?>">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                                  <div class="col-lg-10">
                                    <input type="text" class="form-control" id="inputEmail" placeholder="<?php echo $user->email; ?>" value="<?php echo $user->email; ?>">
                                  </div>
                                </div>
                            </div>
                        </div>
                        <legend>
                        	Detailed
                        </legend>
                        <hr>
                        <div class="form-group">
                          <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                          <div class="col-lg-10">
                            <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                            <div class="checkbox">
                              <label>
                                <input type="checkbox"> Checkbox
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="textArea" class="col-lg-2 control-label">Textarea</label>
                          <div class="col-lg-10">
                            <textarea class="form-control" rows="3" id="textArea"></textarea>
                            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Radios</label>
                          <div class="col-lg-10">
                            <div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                Option one is this
                              </label>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                Option two can be something else
                              </label>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="select" class="col-lg-2 control-label">Selects</label>
                          <div class="col-lg-10">
                            <select class="form-control" id="select">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                            <br>
                            <select multiple="" class="form-control">
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2">
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                      </fieldset>
                    </form>
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
    
    <!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Upload Image...</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                        	<div class="col-lg-4 text-center">
                            	<img src="<?php if(isset($user->img) && !empty($user->img)){ echo $user->img;}else{ echo "img/user.png";} ?>" height="190" width="190">
                            </div>
                            <div class="col-lg-8">
                            	<!-- Copied -->
                            		<div class="main">
                                    <form id="uploadimage" action="" method="post" enctype="multipart/form-data">
                                    <!--<div id="image_preview"><img id="previewing" src="img/user.png" /></div>-->
                                        <div id="selectImage">
                                        <label>Select Your Image</label><br/>
                                        <input type="file" name="file" id="file" required />
                                        <button type="submit" class="btn btn-primary btn-sm" style="text-align:center;">Upload</a>
                                        </div>
                                    </form>
                                    </div>
                                    <h4 id='loading' >loading..</h4>
                                    <div id="message"></div>
                                <!-- /copied -->
                            </div>
                 </div>
              </div>
            </div>
          </div>
        </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <script>
		$(document).ready(function (e) {
			$("#uploadimage").on('submit',(function(e) {
			e.preventDefault();
			$("#message").empty();
			$('#loading').show();
			$.ajax({
			url: "ajax_php_file.php", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false,        // To send DOMDocument or non processed data file it is set to false
			success: function(data)   // A function to be called if request succeeds
			{
			$('#loading').hide();
			$("#message").html(data);
			}
			});
			}));
			
			// Function to preview image after validation
			$(function() {
			$("#file").change(function() {
			$("#message").empty(); // To remove the previous error message
			var file = this.files[0];
			var imagefile = file.type;
			var match= ["image/jpeg","image/png","image/jpg"];
			if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
			{
			$('#previewing').attr('src','noimage.png');
			$("#message").html("<p id='error'>Please Select A valid Image File</p>"+"<h4>Note</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
			return false;
			}
			else
			{
			var reader = new FileReader();
			reader.onload = imageIsLoaded;
			reader.readAsDataURL(this.files[0]);
			}
			});
			});
			function imageIsLoaded(e) {
			$("#file").css("color","green");
			$('#image_preview').css("display", "block");
			$('#previewing').attr('src', e.target.result);
			$('#previewing').attr('width', '250px');
			$('#previewing').attr('height', '230px');
			};
			});
	
	</script>

</body>

</html>
