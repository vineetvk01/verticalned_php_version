<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'head_main.php' ?>
    <title>Quiz</title>
    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
	<!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
	/*
	$tcode = escape($_GET['t']);
	$test = true;
	$res = mysqli_query($db, "SELECT `type1`, `subtype`, `price`, `description`, `added` FROM `ques_def` WHERE `tcode` = '".$tcode."'");
	if(mysqli_num_rows($res) == 1){
		$dat = $res->fetch_object();
	}

	$resu = mysqli_query($db,"SELECT count(id) as qtotal FROM `questions` WHERE tcode = '".$tcode."'");
	if(mysqli_num_rows($resu) > 0){
		$total = $resu->fetch_object()->qtotal;
		//print_r($total);
		if($total < 10){
			$test = false;
			die(header("location: ../modules.php"));
		}
	}
	*/
?>
<?php //$ansarray = array('-', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a');
	  //print_r($ansarray);
	  $ansarray = $_SESSION['test_ans'];
 ?>
<script>
	

</script>
		<div class="container">
        	<div class="jumbotron">
            	<h3>ScoreCard  </h3><h5>QUIZ-ID : <?php echo $_SESSION['test_id']; ?></h5>
                <hr>
                
                
                <!--  page-wrapper -->
       
        <div id="page-wrapper">
            <div class="row">
                
                <div class="col-lg-12">
                     <!--  Line Chart -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        	<div class="row">
                            	<div class="col-lg-6">
                                <?php
								$res = mysqli_query($db,'SELECT `fname`, `lname`, `username`, `state`, `college` FROM `users` WHERE `username` = "'.$_SESSION['username'].'"');
								if(mysqli_num_rows($res) == 1){
									$data = $res->fetch_object();
								}
								
								?>
                                		<h4>Name : <b class="pull-right"><?php echo $data->fname." ".$data->lname; ?></b></h4>
                                        <h4>Subject : <b class="pull-right"><?php echo $_SESSION['tcode']; ?></b></h4>
                                        TEST NUMBER#
                                            <br>
                                            <ul class="pagination">
                                              <li <?php if($_SESSION['lvl'] == 1){echo 'class="active"';} ?>><a href="#">1</a></li>
                                              <li <?php if($_SESSION['lvl'] == 2){echo 'class="active"';} ?>><a href="#">2</a></li>
                                              <li <?php if($_SESSION['lvl'] == 3){echo 'class="active"';} ?>><a href="#">3</a></li>
                                              <li <?php if($_SESSION['lvl'] == 4){echo 'class="active"';} ?>><a href="#">4</a></li>
                                              <li <?php if($_SESSION['lvl'] == 5){echo 'class="active"';} ?>><a href="#">5</a></li>
                                              <li <?php if($_SESSION['lvl'] == 6){echo 'class="active"';} ?>><a href="#">6</a></li>
                                              <li <?php if($_SESSION['lvl'] == 7){echo 'class="active"';} ?>><a href="#">7</a></li>
                                              <li <?php if($_SESSION['lvl'] == 8){echo 'class="active"';} ?>><a href="#">8</a></li>
                                              <li <?php if($_SESSION['lvl'] == 9){echo 'class="active"';} ?>><a href="#">9</a></li>
                                              <li <?php if($_SESSION['lvl'] == 10){echo 'class="active"';} ?>><a href="#">10</a></li>
                                            </ul>
                                </div>
                                <div class="col-lg-6">
                                	<h4>Marks: <b class="pull-right"><span id="marks">
                                    <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
                                    </span></b></h4>
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="panel-body">
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>
                     <!--  End Line Chart -->
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-6">
                	<div class="alert alert-success">
                    	<h2>Strengths</h2>
                        <span id="strength">
                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
                        </span>
                    </div>
                </div>
                <div class="col-lg-6">
                	<div class="alert alert-danger">
                    	<h2>Weaknesses</h2>
                        <span id="weakness">
                        <i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row">
            	<div class="col-lg-12">
                    
                    <?php
				$i = 0; $total = 0;
				$tcode = escape($_SESSION['tcode']);
				$lvl = escape($_SESSION['lvl']);
				$result = mysqli_query($db,"SELECT `question`, `optA`, `optB`, `optC`, `optD`, `correct`, `keyword` FROM `questions` WHERE `tcode`='".$tcode."' AND `lvl`= ".$lvl." ");
						if(mysqli_num_rows($result) > 0){
							while($ques = $result->fetch_object()){
								$i++;
								?>
                                
                                <div class="panel panel-primary">
                                      <div class="panel-heading">
                                        <h3 class="panel-title"><?php echo $ques->question;?></h3>
                                      </div>
                                      <div class="panel-body">
                                        <?php switch($ques->correct){
												case 'a' : echo $ques->optA; break;
												case 'b' : echo $ques->optB; break;
												case 'c' : echo $ques->optC; break;
												case 'd' : echo $ques->optD; break;
											   }
										?>
                                        <span class="pull-right">Your Answer : 
                                        <?php
											switch($ansarray[$i]){
												case 'a' : echo $ques->optA; break;
												case 'b' : echo $ques->optB; break;
												case 'c' : echo $ques->optC; break;
												case 'd' : echo $ques->optD; break;
											   }
											if($ques->correct == $ansarray[$i]){
												echo ' || <i class="fa fa-check" aria-hidden="true"></i>';
												$strength.=' <span class="label label-primary">'.$ques->keyword.'</span>';
												$total++;
												// echo $strength;
											}
											else{
												echo ' || <i class="fa fa-times" aria-hidden="true"></i>';
												$weakness.=' <span class="label label-primary">'.$ques->keyword.'</span>';
												// echo $weakness;
											}
                                        ?>
                                        </span>
                                      </div>
                                </div>
                                
                                <?php
								
							}
						}
						
						//Make entry in the quizPast Table
						$datetime = date('Y-m-d H:i:s', time());
						$tcode = $_SESSION['tcode'];
						$lvl = $_SESSION['lvl'];
						mysqli_query($db,'INSERT INTO `quizpast`(`quiz_id`, `tcode`, `lvl`, `username`, `score`, `when`) VALUES ("'.$_SESSION["test_id"].'","'.$tcode.'","'.$lvl.'","'.$_SESSION['username'].'","'.($total*10).'","'.$datetime.'")');
						
			
			?>
                    
                    
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
                
            </div>
        </div>
        
        
	<!-- Modal -->
		<div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Submit ?</h4>
              </div>
              <div class="modal-body">
                <div class="row">
                    <h4 style="padding:5%;">Are you sure about submitting the asnwers ? </h4> 
                    <button class="btn btn-success pull-right" id="submit">Submit</button>   	
                 </div>
              </div>
            </div>
          </div>
        </div>
    <script>
		$(document).ready(function(){
			
			$("#strength").html('<?php echo $strength; ?>');
			$("#weakness").html('<?php echo $weakness; ?>');
			$("#marks").html('<?php echo ($total*10)."%"; ?>');
			
		});
		</script>
     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="assets/plugins/pace/pace.js"></script>
    <script src="assets/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/plugins/morris/morris.js"></script>
    <script src="assets/scripts/morris-demo.php"></script>
</body>
</html>