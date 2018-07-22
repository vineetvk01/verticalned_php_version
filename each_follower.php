<?php
include_once 'db/initial.php';

$result = mysqli_query($db,'SELECT `followerid` FROM `following` WHERE `userid` = '.$_SESSION['id'].'');
//print_r($result);
$t_fol = 0;
if(mysqli_num_rows($result) > 0){
	while($fol_id = $result->fetch_object()->followerid){
		$follower = get_user($fol_id);
		$t_fol++ ;
		if($page !="home"){
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
                                            <img src="img/verified.png" height="20" width="20">
											<?php }?>
                                            <p class="text-muted">@<?php echo $follower->username; ?></p>
                                            </div>
                                            <div id="buttons_func">
                                            <button rel="<?php echo $fol_id; ?>" value="" class="followButton <?php echo get_fol($fol_id,1); ?> btn btn-default btn-sm pull-right" style="width:100px;"><?php echo get_fol($fol_id,2); ?></button>
                                            <br><br>
                                            <a href="#" class="btn btn-default btn-sm pull-right" style="width:100px;"><i class="fa fa-times"></i> &nbsp;Block</a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                  </div>
                                </div>
                          </div>
                          
                          	
	<?php }
	}
	?>
    
    <?php
}
?>
<script>
		document.getElementById("follower").innerHTML = '<?php echo $t_fol; ?>';
</script>