<?php 
#prime numbers 
echo "<h1 style = 'text-align :center'> prime numbers between 1 and 100 </h1>";
for($i = 2; $i < 100; $i++){
	$j = 2; $flag = true;
	while($j < $i){
		if($i % $j == 0){
			$flag = false;
		}
		$j++;
	}
	if($flag == true){
		echo "<h style = 'padding-left:2.7%; font-size:20px; color:red;'>" . $i . "</h>";
	}
}
#convert days into years , weeks and days
echo "<h1>convert days into years , weeks and days</h1>";
$days     = 700;
$years    = (int)($days /365);
$weeks    = (int)($days % 365 / 7);
$daysLeft = (int)($days % 365 % 7);
echo  "<h2 style = 'color:red'>". $days . " days = " . $years . " years :  " . $weeks . " weeks :  " . $daysLeft . " days </h2>";

//maximum of three integers 
echo "<h1> maximum of three integers  </h1>";
$num1 = 25; $num2 = 35; $num3 = 15;
if($num1 > $num2 && $num1 > $num3){
	echo "<h2 style ='color:red'> num1 is maximum <h2>";
} 
elseif($num2 > $num1 && $num2 > $num3){
	echo "<h2 style ='color:red'> num2 is maximum <h2>";
}
elseif($num3 > $num1 && $num3 > $num2){
	echo "<h2 style ='color:red'> num3 is maximum <h2>";
}
else{
	echo  "<h2 style ='color:red'> two numbers or three numbers  are  equals </h2> ";
}

#even numbers between 1 and 50
echo "even numbers between 1 and 50";
for($i = 1; $i <=50; $i++){
	if($i % 2 == 0)
		echo "<li style='color:red;'>" . $i . "</li>";
}

#print square using hash 
echo "<h1>print square using hash</h1>";
const size = 4;
for($i = 1; $i<=5; $i++){
	for($j = 1; $j <=size; $j++){
		echo "<h style='color: red; font-size:25px;'>#</h>";
	}
	echo "<br>";
}


