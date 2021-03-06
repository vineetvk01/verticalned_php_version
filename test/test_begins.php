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
	
	/*if(!isset($_SESSION['test_id']) && !isset($_SESSION['lvl'])){
		die();
	}
	*/
	
?>
<script>
	var ini = 1;
	var ans = new Array("-", "-", "-", "-", "-", "-", "-", "-","-", "-", "-" );

</script>
		<div class="container">
        	<div class="jumbotron">
            	<div id="dispans"></div>
            	<h3><?php echo $dat->type1; ?> </h3>
                <h5>QUIZ-ID : <?php echo $_SESSION["test_id"]; ?><span style="float:right;">LEVEL :<?php echo $_SESSION["lvl"]; ?></span></h5>
                <hr>
                <div class="row">
                    <div class="col-lg-2">
                        <div class="bs-component">
                          <ul class="list-group">
                            <li class="list-group-item">
                              <span class="badge"><b id="q1">-</b></span>
                              Question 1
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q2">-</b></span>
                              Question 2
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q3">-</b></span>
                              Question 3
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q4">-</b></span>
                              Question 4
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q5">-</b></span>
                              Question 5
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q6">-</b></span>
                              Question 6
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q7">-</b></span>
                              Question 7
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q8">-</b></span>
                              Question 8
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q9">-</b></span>
                              Question 9
                            </li>
                            <li class="list-group-item">
                              <span class="badge"><b id="q10">-</b></span>
                              Question 10
                            </li>
                          </ul>
                        </div>
                    </div>
                    <div class="col-lg-10">
                    <div id="question_here"></div>
                    		<div class="jumbotron">
                            <hr>
                           
                            <button class="btn btn-primary" id="previous">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i> Previous</button>
                            <button class="btn btn-primary" id="next">Next <i class="fa fa-chevron-right" aria-hidden="true"></i></button>
                            <button class="btn btn-warning" id="reset">Reset</button>
                            
                            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">Submit</button>
                             <hr> 
                            </div> 
                    </div>
                    
                </div>
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
                	<div id="disp"> 
                        <h4 style="padding:5%;">Are you sure about submitting the asnwers ? </h4> 
                        <button class="btn btn-success pull-right" id="submit">Submit</button>  
                    </div> 	
                 </div>
              </div>
            </div>
          </div>
        </div>
    <script>
		$(document).ready(function(){
			
			/*$(".options").on('click' , function() {
				var value = $(this).val();
				alert(value);
			}); */
			function conv(h){
				switch(h){
					case "a" : return "A"; break;
					case "b" : return "B"; break;
					case "c" : return "C"; break;
					case "d" : return "D"; break;
					default : return "-";
				};
			}
			function showit(){
				i=1;
				$(".badge").each(function(){
					alph = conv(ans[i]);
					$(this).html(alph);
					i++;
				});
			}
			function submit_each(w)
			{
				var valq = $("input[name='options']:checked").val();
				//alert(valq);
				if(w !=3 ){
					if(valq != undefined){
						//alert(valq);
						ans[ini] = valq;
					}
				}else{ans[ini] = "k";}
				showit();
			}
			
			
			function ques(){
				$.post("question_pop.php",
					{
					  ques: ini
					},
					function(data,status){
						$("#question_here").html(data);
						if(ini != 1){
							$("#previous").prop("disabled", false);
						}else{ $("#previous").prop("disabled", true); }
						if(ini == 10){
							$("#next").prop("disabled", true);
						}else{ $("#next").prop("disabled", false); }
					});
				/*if(ans[ini] != "-"){
					switch(ans[ini]){
						case "1": $("#op1").prop("checked", true); break;
						case "2": $("#op2").prop("checked", true); break;
						case "3": $("#op3").prop("checked", true); break;
						case "4": $("#op4").prop("checked", true); break;
						default : ans[ini] = "?";
					}
				} */
			}
			
			function result(){
				$.post("makesessionans.php",{ ansarray: ans},
				function(data,status){
					//$("#disp").html(data);
					window.location = "results.php";
				}); 
			}
			
			$("#next").click(function(){
				submit_each();
				ini++;
				ques();
			});
			
			$("#previous").click(function(){
				submit_each();
				ini--;
				ques();
			});
			$("#reset").click(function(){
				$(".options").prop('checked', false);
				submit_each(3);
			});
			$("#submit").click(function(){
				submit_each();
				$("#disp").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>');
				result();
			});
			ques();
			//showit();
		});
		</script>
        
</body>
</html>