<?php
include_once('db/initial.php');
$results = mysqli_query($db,'SELECT `id`, `shared`, `userid`, `post`, `moment` FROM `posts` ORDER BY id DESC');
if(mysqli_num_rows($results) > 0 ){
	while($post = $results->fetch_object()){
		
		if($post->post == ''){
			$res = mysqli_query($db,'SELECT `post` FROM `posts` WHERE id = '.$post->shared.'');
			$post->post = $res->fetch_object()->post;
		}
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
                            <i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i>
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
                    </div>
                </div>
                <div class="panel-body">
                
                <?php echo $post->post; ?>
                <?php if(isset($post->shared)){ 
						$res = mysqli_query($db,'SELECT `fname`, `lname`, `username`, `verified` FROM `posts`,`users` WHERE `posts`.`userid` = `users`.`id` AND `posts`.`id`='.$post->shared.'');
						$shared = $res->fetch_object();
				?>
                	<br />	<br />
                	<div class="panel panel-default">
                      <div class="panel-body">
                        original post by, <?php echo $shared->fname.' '.$shared->lname.' | @'.$shared->username; if($shared->verified == 2){echo '&nbsp; <i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i>';}  ?>
                      </div>
                    </div>
                <?php } ?>
                <span class="getlikes" id="post_<?php echo $post->id; ?>" data-toggle="modal" data-target="#myModal" data-href="get_likers.php?id=<?php echo $post->id; ?>" style="cursor:pointer;"><?php include 'get_likes.php'; ?></span>
                </div><!-- /panel-body -->
                <div class="panel-footer">
                    <div class="row" style="text-align:center;">
                    <?php
						$res = mysqli_query($db,"SELECT id FROM `post_likes` WHERE `post_id`=".$post->id." AND `username` = '".$_SESSION['username']."'");
					if(mysqli_num_rows($res)>0){
						$dip = "blue";
					}else
					{
						$dip = "";
					}
					?>
                    	<div class="col-lg-4 like <?php echo $dip; ?>" style="border-right:thin #666 solid; cursor:pointer;" id="<?php echo $post->id; ?>">
                                <i class="fa fa-thumbs-up" aria-hidden="true" ></i> Like
                        </div>
                        <div class="col-lg-4 comment" data-toggle="modal" data-target="#cModal" style="cursor:pointer;" id="c<?php echo $post->id; ?>">
                        	<i class="fa fa-comment-o" aria-hidden="true"></i> Comment
                        </div>
                        <div class="col-lg-4 share" data-toggle="modal" data-target="#sModal" id="s<?php if(isset($post->shared) && !empty($post->shared)){echo $post->shared; }else{echo $post->id;} ?>" style="border-left:thin #666 solid; cursor:pointer;">
                        	<i class="fa fa-share-square-o" aria-hidden="true"></i> Share
                        </div>
                    </div>
                </div>
            </div><!-- /panel panel-default -->
        </div><!-- /col-sm-5 -->
    </div><!-- /row -->


<?php
		
	}
}else{
?>
	<div class="row">
        <div class="col-lg-12">
        	<h4 style="text-align:center;">Follow more people to get updated.</h4>
        </div>
    </div>
<?php 
	} 
?>	  
