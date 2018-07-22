<?php
include_once 'db/initial.php';
if(isset($_POST["id"]) && !empty($_POST["id"])){
	$postid = $_POST["id"];
	$postid = ltrim($postid, 'c');
	//echo $postid;
	$sql = "SELECT `comment`, `username`, `fname`,`img`, `lname`, `when` FROM `comments`, `users` WHERE `postid`='".$postid."' AND `comments`.`userid` = `users`.`id` ";
	$res1 = mysqli_query($db,$sql);
	if(mysqli_num_rows($res1)>0){
		while($data2 = $res1->fetch_object()){
			
		?>
       			<div class="thumbnail" style="height:50px; width:50px; float:left; margin:5px 20px;">
                            <img  src="<?php echo $data2->img; ?>" height="50" width="50">
                </div>
                <div style="margin-top:5px;">
                <span style="color:#0020C2"><strong><?php echo $data2->fname; ?> <?php echo $data2->lname; ?></strong></span>
                &nbsp; &nbsp;<span><?php echo $data2->comment;?></span>
                <br />
                <a href="#" class="btn btn-link"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a>
                </div>
                <div class="clearfix"></div>
                <hr>
        <?php
		}
	}else{
		echo '<h5 style="text-align:center;">Be the first to comment here.</h5>';
	}
	
	
}
?>