<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>TEST</title>
</head>

<body>
<?php
	unset($_SESSION['test_ans']);
	$datetime = date('y_mdHis', time());
	$_SESSION["test_id"] = 'VER'.$datetime;
	
	$test = true;
	$tcode = escape($_GET['t']);
	$_SESSION['tcode'] = $tcode;
	
	$res = mysqli_query($db, "SELECT `type1`, `subtype`, `price`, `description`, `added` FROM `ques_def` WHERE `tcode` = '".$tcode."'");
	if(mysqli_num_rows($res) == 1){
		$dat = $res->fetch_object();
	}
	
	$res = mysqli_query($db, "SELECT  max(`lvl`) as lvl FROM `quizpast` WHERE `username` ='".$_SESSION['username']."' AND tcode= '".$tcode."'");
	if(mysqli_num_rows($res) > 0){
		$lvl = $res->fetch_object()->lvl;
		$lvl++;
	}
	$_SESSION['lvl'] = $lvl;
	
	$resu = mysqli_query($db,"SELECT count(id) as qtotal FROM `questions` WHERE tcode = '".$tcode."'");
	if(mysqli_num_rows($resu) > 0){
		$total = $resu->fetch_object()->qtotal;
		if($total < 10){
			$test = false;
		}
	}

?>
		<div class="container">
        	<div class="row">
                <div class="col-lg-12">
                    <div class="jumbotron">
                        <h1>Begin - Quiz</h1><h5>QUIZ-ID : <?php echo $_SESSION["test_id"];?></h5>
                        <hr>
                        <div class="row">
                			<div class="col-md-4">
                            	<p><b>Test Number :</b> <?php echo $lvl; ?></p>
                            </div>
                            <div class="col-md-4">
                            	<p><b>Title :</b> <?php echo $dat->type1; ?></p>
                            </div>
                            <div class="col-md-4">
                            	<p class="pull-right"><b>Time :</b> 20 mins</p>
                            </div>
                        </div>
                        <hr>
                        <p><b>NOTE :</b></p>
                        	<ul>
                            	<li>Something in this quiz.</li>
                                <li>something again in this quiz</li>
                            </ul>
                        <hr>
                        <?php if($test == true){ ?>
                        <p><a href="test_begins.php?t=<?php echo $tcode; ?>"class="btn btn-primary btn-lg">Start &nbsp; &nbsp;<i class="fa fa-arrow-right"></i></a></p>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>