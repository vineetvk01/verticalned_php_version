<?php
	include_once('db/initial.php');
	$postid = $_POST['id'];
	$postid = ltrim($postid, 's');
	$results = mysqli_query($db,'SELECT `id`, `userid`, `post`, `moment` FROM `posts` WHERE id='.$postid.'');
	if(mysqli_num_rows($results) > 0 ){
	while($post = $results->fetch_object()){
		$user = get_user($post->userid);
		?>
        <div class="row">
        <div class="col-lg-12">
        	<div class="panel panel-default">
            	<div class="row">
                    <div class="col-lg-12">
                        <div class="thumbnail pull-left" style="margin: 10px; border-radius:15px;">
                        	<img class="img-responsive user-photo" src="<?php echo $user->img; ?>" style="border-radius:15px;" height="50" width="50">
                        </div><!-- /thumbnail -->
                    	<div class="panel-heading">
                        	<strong><?php echo $user->fname.' '.$user->lname; ?></strong> &nbsp;
                            <?php if($user->verified == 2){ ?>
                            <img src="img/verified.png" height="20" width="20">
                            <?php } ?>
                            <?php 
							//Delete and other options
							if($post->userid == $_SESSION['id']){?>
                            <a data-toggle="dropdown" class="dropdown-toggle text-muted pull-right" href="#"><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                            <ul class="dropdown-menu pull-right animated fadeInRight m-t-xs">
                                <li><a class="delete" id="<?php echo $post->id; ?>"><i class="fa fa-trash" aria-hidden="true" ></i> &nbsp;Delete</a></li>
                                
                            </ul>
                            <?php } ?>
                            
                            <p class="text-muted"> <strong>@<?php echo $user->username; ?> </strong> | &nbsp;
                            <?php echo date_format((date_create($post->moment)),' l, h:i a ') ?></p>
						</div>
                        <div class="panel-body">
                			<?php echo $post->post; ?>
                		</div>
                    </div>
                </div>
             </div><!-- panel-->
       </div><!-- col-->
 </div><!-- row-->
                
        <?php
		}
	}else{
		echo '<h4>ERROR!</h4>';	
	}

?>