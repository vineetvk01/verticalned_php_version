<?php
include_once 'db/initial.php';

if(isset($_POST['user']) && !empty($_POST['user'])){
$new = $_POST['user'];

$result = mysqli_query($db,'SELECT `id` FROM `users` WHERE `fname` like "'.$new.'%" OR `lname` like "'.$new.'%" OR `username` = "'.$new.'"');
$t_fol = 0;
if(mysqli_num_rows($result) > 0){
	while($fol_id = $result->fetch_object()->id){
		$follower = get_user($fol_id);
		if($fol_id != $_SESSION['id']){
		$t_fol++ ;
		
		?>
						
					<div class="col-lg-6">	
                            <div class="panel panel-default" style="height:120px;">
                                  <div class="panel-body">
                                    
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="thumbnail" style="height:80px; width:80px">
                                            <img  src="<?php echo $follower->img; ?>" height="100" width="100">
                                            </div><!-- /thumbnail -->
                                        </div>
                                        <div class="col-lg-10">
                                            <div class="panel-heading pull-left">
                                            <strong><?php echo $follower->fname.' '.$follower->lname; ?></strong> &nbsp;
                                            <?php if($follower->verified > 1){ ?>
                                            <i class="fa fa-check-circle" style="color:#1E90FF" aria-hidden="true"></i>
											<?php }?>
                                            <p class="text-muted">@<?php echo $follower->username; ?></p>
                                            </div>
                                            <button rel="<?php echo $fol_id; ?>" value="" class="followButton <?php echo get_fol($fol_id,1); ?> btn btn-default btn-sm pull-right" style="width:100px;"><?php echo get_fol($fol_id,2); ?></button>
                                            <br><br>
                                            <a href="#" class="btn btn-default btn-sm pull-right" style="width:100px;"><i class="fa fa-times"></i> &nbsp;Block</a>
                                        </div>
                                    </div>
                                    
                                    
                                  </div>
                                </div>
                          </div>
                          
                          	
	<?php }
	}
  }
}else{
	//include 'friends_showcase.php';
}
?>