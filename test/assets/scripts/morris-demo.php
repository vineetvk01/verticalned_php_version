
//morris area chart
<?php include_once '../../../lib/linear1.php';?>

$(function () {

    //morris line chart
    Morris.Line({
        element: 'morris-line-chart',
        data: [
        
        <?php
	
	include_once('../../../db/initial.php');
	$tcode = $_SESSION['tcode'];
	$results = mysqli_query($db,'SELECT `quiz_id`, `lvl`, `score`, `when` FROM `quizpast` WHERE username = "'.$_SESSION['username'].'" AND tcode= "'.$tcode.'"');
	if(mysqli_num_rows($results) > 0){
		$ar_marks = array();
		while($marks = $results->fetch_object()){
			$ar_marks[] = $marks;
			$ar_score[] = $marks->score;
		}
	}
	?>
    
    <?php
		$i=0;
		foreach ($ar_marks as $ar_mark){
			$i++;
	?>
		{
            y: '<?php echo $ar_mark->lvl; ?>',
            a: <?php echo $ar_mark->score; ?>,
            b: <?php echo mean($ar_score);?>,
            c: <?php echo linear($ar_score, $ar_mark->lvl);?>
        },
       <?php
		}
		while($i <=10){
			?>
            {
            y: '<?php echo $i ?>',
            b: <?php echo mean($ar_score);?>,
            c: <?php echo linear($ar_score, $i)-5; ?>,
            },
            <?php
			$i++;
		}
       ?>     
       
        ],
        xkey: 'y',
        ykeys: ['a', 'b', 'c'],
        labels: ['Actual', 'Mean', 'Expected'],
        hideHover: 'auto',
        resize: true
    });

});
