1 5 9 13 17
2 16 30 44 58
3 27 51 75 99 
4 38 72 106 140
5 49 93 137 181


<?php
//от 3 до 60 и т.н. работи в стъпка +3 по вертикала и +15 по хоризонтала в следния ред
/*3 18 33 48
  6 21 36 51
  9 24 39 54
 12 27 42 57
 15 30 45 60 */
$m = 5; //tr
$n = 5; //td
$num = 0;
$arr = [];

for($i=0; $i < $m; $i++){
	$num = ($i+1) *1;
	for($j=0; $j < $n; $j++){
		$arr[$i][$j] = $num;
		$num = ($num + 4);

	}
}		
		$num1 = ($num+4) +14;
		$num2 = ($num+4) +24;
		$num3 = ($num+4) +34;
		$num4 = ($num+4) +44;

/*echo "<pre>";
var_dump($arr);
echo "</pre>";*/

echo "<table border=1>";	

for($x = 0; $x < $m; $x++){
	echo "<tr>";
	for($y = 0; $y < $n; $y++){
		echo "<td>" . $arr[$x][$y] . "</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>