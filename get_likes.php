<?php
include_once 'db/initial.php';
if(isset($_POST["postid"]) && !empty($_POST["postid"])){
	$postid = $_POST["postid"];
	$sql = "SELECT count(`username`) as total FROM `post_likes` WHERE `post_id`=".$postid."";
}else{
	$sql = "SELECT count(`username`) as total FROM `post_likes` WHERE `post_id`=".$post->id."";
}
					$res = mysqli_query($db, $sql);
					if(mysqli_num_rows($res)>0){
						$lk = $res->fetch_object()->total;
						if($lk != NULL){
						?>
                        <hr />
                		<p style="font-size:12px;" style="cursor:pointer;">Liked by <?php echo $lk; ?>.</p>
                        <?php
						}
					}
				?>