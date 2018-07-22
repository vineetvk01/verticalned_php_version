<?php
include_once('../db/initial.php');
$ques_n = $_POST["ques"];
$tcode = escape($_SESSION['tcode']);
$lvl = escape($_SESSION['lvl']);
$q = $ques_n-1;
						
						$result = mysqli_query($db,"SELECT `question`, `optA`, `optB`, `optC`, `optD`, `tcode`, `lvl` FROM `questions` WHERE `tcode`='".$tcode."' AND `lvl`= ".$lvl." limit ".$q.",1");
						if(mysqli_num_rows($result) > 0){
							while($ques = $result->fetch_object()){
								?>
                            <h3><?php echo "Q.".$ques_n." ) ".$ques->question; ?></h3>
                        	<hr>
                            <div class="btn-group" data-toggle="buttons" style="width:100%;">
                              <label class="btn btn-default pull-left col-lg-5">
                                <input type="radio" name="options" class="options" id="op1" value="a" autocomplete="off"> A | <?php echo $ques->optA; ?>
                              </label>
                              <label class="btn btn-default pull-right col-lg-5">
                                <input type="radio" name="options" class="options" id="op2" value="b" autocomplete="off"> B | <?php echo $ques->optB; ?>
                              </label>
                              <p style="clear:both"></p>
                              <label class="btn btn-default pull-left col-lg-5">
                                <input type="radio" name="options" class="options" id="op3" value="c" autocomplete="off"> C | <?php echo $ques->optC; ?>
                              </label>
                              <label class="btn btn-default pull-right col-lg-5">
                                <input type="radio" name="options" class="options" id="op4" value="d" autocomplete="off"> D | <?php echo $ques->optD; ?>
                              </label>
                            </div>    
                                
                          <?php
							}
						}
					
					?>