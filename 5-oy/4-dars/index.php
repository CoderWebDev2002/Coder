<p>Циклы</p>
<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
	
	//$i = $i + 1 => $i++
	//$i +=5;
	$str = '';
	$n = 0;
	

	for($i = 1;$i<=30;$i++){
		
		// $i++;
		// if($i == 2){
			// echo "Biz 2ga tengligini aynan shu joyda aniqladik <br>";
		// }else{
			// echo "{$i} - Salom dunyo <br>";
		// }
		
		 // if($i == 2){
			 
		 // }else{
			 // echo "<p>Salom $i</p>";
		 // }
		 $str .= $i; //	$str = $i + $str;

		 echo "<p>Salom $i</p>";

		 if($i == 10) break;

		 if($i == 2 || $i == 10) {
			 
			 continue;
			 
		 }
		 		 $n++;

		 
		 
		 // echo "<p>Salom $i</p>";

			
			
		// if($i == 2 || $i == 10){
			
		// }else{
			// echo "<p>Salom $i</p>";

		// }
	}
	
	echo "<p>SOnlar - $str</p> ";
	echo "<p>Sikl - {$n}marta aynadi</p> ";
	echo "<p>Sikl - {$i}gacha aynadi</p> ";
	
	
	  $summa = 0;
	
	

	for($son = 1; $son <= 10; $son++){
		 // echo "<pr>$son) Sikl boshlanguncha - $summa ======= ";

		$summa = $son + $summa;
		 // echo "Sikl tugagach $summa</p><br>";
		
	}
	
	echo "<br> 1dan 10gacha(10 ham kiradi) bo'lgan sonlar yi'g'indi {$summa}ga teng!";
	
	$i = 10;
	echo "<br>";
	while($i<=30){
		echo $i;
		 $i += 10;
	}
	
	$k = 10;
	 do{
		echo "<br> Do WHILE: " . $k;
	 }while($k > 10);
	 
	 
	 $son = 0;
	 
	 do{
		 	 $son++;
		 echo "<p>$son</p>";
		 	

	 }while($son <=10);
	

	
	
	
?>


