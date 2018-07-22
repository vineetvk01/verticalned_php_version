<?php
include_once 'db/initial.php';
if(isset($_GET["id"]) && !empty($_GET["id"])){
	$postid = $_GET["id"];
	$sql = "SELECT `post_likes`.`username`, `fname`, `lname`, `img` FROM `post_likes`, `users` WHERE `post_id`= ".$postid." AND `post_likes`.`username` = `users`.`username`";
	$res = mysqli_query($db,$sql);
	if(mysqli_num_rows($res)>0){
		while($data2 = $res->fetch_object()){
			
		?>
       			<div class="thumbnail" style="height:50px; width:50px; float:left; margin:5px 20px;">
                            <img  src="<?php echo $data2->img; ?>" height="50" width="50">
                </div>
                <div style="margin-top:5px;">
                <span style="float:left;"><strong><?php echo $data2->fname; ?> <?php echo $data2->lname; ?></strong></span><br>
                <span style="float:left; color:#ccc;"><strong>@<?php echo $data2->username; ?></strong></span>
                </div>
                <div class="clearfix"></div>
                <hr>
        <?php
		}
	}else{
		echo '<h5 style="text-align:center;">No likes on this yet. Visit later.</h5>';
	}
	
	
}
?>