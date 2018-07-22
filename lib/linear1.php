<?php
	function accuracy($predict, $actual){
		$predict = 10;
		$actual = 10;
		$acc = $actual + $predicted;
		//$acc = $acc *100;
		//$acc = round($acc,2);
		return $acc;
	}
	
	function disp($ar_marks){
		foreach ($ar_marks as $ar_mark){
		 echo $ar_mark.'<br>';
		}
	}
	
	function mean($ar_marks){
	
	$length = sizeof($ar_marks);
	$sum = 0;
	
	foreach ($ar_marks as $ar_mark) {
			$sum = $sum + $ar_mark;
		}
	$avg = $sum/$length;
	return $avg;
	}
	
	function meanx($ar_marks, $num){
		
		$length = $num;	
		$sum  = 0;
		
		for($i=0; $i<$num; $i++){
			$sum = $sum + $ar_marks[$i];
		}
		$avg = $sum/$length;
		return $avg;
	}
	
	function linear($ar_marks, $n){
		$length = sizeof($ar_marks);
		$i=1;
		while($i <= $length){
			$x[]=$i;
			$i++;
		}
			//echo '<br>';
			//disp($x);
			//echo '<br><br>';
			//disp($ar_marks);
			//echo '<br>';
			$mean_y = mean($ar_marks);
			$mean_x = mean($x);
			//echo '<br><br>';
			
			$length_new = sizeof($x);
			$i = 0;
			while($i < $length_new){
				$sub_x[] = $x[$i] - $mean_x; 
				$i++;
			}
			$i = 0;
			while($i < $length_new){
				$sub_y[] = $ar_marks[$i] - $mean_y; 
				$i++;
			}
			//disp($sub_x);
			//echo '<br><br>';
			//disp($sub_y);
			$sum_1 = 0;
			for($i=0; $i<$length_new ; $i++){
				$sum_1 = $sum_1 + $sub_x[$i]*$sub_y[$i];
				//echo '<br>'.($i+1).'->'.$sum_1;
			}
			
			//echo '<br>';
			
			$sum_2 = 0; 
			for($i=0; $i<$length_new ; $i++){
				
				$sum_2 = $sum_2 + ($sub_x[$i]*$sub_x[$i]);
				//echo '<br>'.($i+1).'->'.$sum_2.'//'.$sub_x[$i];
			}
			$b1 = $sum_1/$sum_2;
			//echo "b1 Coefficient -> ".$b1;
			
			$b0 = $mean_y - ($b1*$mean_x);
			//echo " |--| b0 Coefficient -> ".$b0;
			
			$y = $b0 + ($b1*$n);
			//echo '<br><br>';
			//echo $y;
			if($y >100){
				$y = 97;
			}
			return $y;
	}




	$array = array(1,3,2,3,5);
	 //mean($array).'//';
	 

	 
	

?>