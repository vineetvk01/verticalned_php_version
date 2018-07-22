<?php
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
		if($n > 3){
			$i = 3;
			while($i < $length){
				$x[] = meanx($ar_marks, $i);
				$i++;
			}
			echo '<br>';
			disp($x);
			
			array_shift($ar_marks);
			array_shift($ar_marks);
			array_shift($ar_marks);
			echo '<br>';
			disp($ar_marks);
			echo '<br>';
			echo 'mean_y->'.$mean_y = mean($ar_marks);
			echo '<br>';
			echo 'mean_x->'.$mean_x = mean($x);
			echo '<br><br>';
			
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
			disp($sub_x);
			echo '<br><br>';
			disp($sub_y);
			$sum_1 = 0;
			for($i=0; $i<$length_new ; $i++){
				$sum_1 = $sum_1 + $sub_x[$i]*$sub_y[$i];
				echo '<br>'.($i+1).'->'.$sum_1;
			}
			
			echo '<br>';
			
			$sum_2 = 0; 
			for($i=0; $i<$length_new ; $i++){
				
				$sum_2 = $sum_2 + ($sub_x[$i]*$sub_x[$i]);
				echo '<br>'.($i+1).'->'.$sum_2.'//'.$sub_x[$i];
			}
			echo '<br>';
			echo '<br><br>';
			$b1 = $sum_1/$sum_2;
			echo "b1 Coefficient -> ".$b1;
			
			$b0 = $mean_y - ($b1*$mean_x);
			echo " |--| b0 Coefficient -> ".$b0;
			
			$y = $b0 + ($b1*$n);
			echo '<br><br>';
			//echo $y;
			if($y > 100){
				$y = 100;
			}
			return $y;
		}else{
		return '-';
		}
	}




	$array = array(7,8,5,9,6,8);
	 //mean($array).'//';
	 echo linear($array,1);
	 echo linear($array,2);
	 echo linear($array,3);
	 echo linear($array,4);
	 echo linear($array,5);
	 echo linear($array,6);
	 echo linear($array,7);
	 echo linear($array,8);
	 echo linear($array,9);
	 echo linear($array,10);
	 
	

?>