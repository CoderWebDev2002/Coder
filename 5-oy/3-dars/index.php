<?php


//Логические операции Оператор if-else Оператор switch-case


$csv = iconv("UTF-8", "ISO-8859-1", "Здравсвтуйте");
echo $csv;

$x = 17;
$y = 18;
$z = '17';
$r1 = $x > $y;
$r2 = $x < $y;
$r3 = $x == $y;
$r4 = $x >= $y;
$r5 = $x <= $y;
$r6 = $x === $z;
$r7 = $x != $y;
$r8 = 10 != 10 || 15 < 13 || false; // 10 != 10 OR 15 < 13 OR false;
$r9 = 10 == 10 && 15 > 13 && true; //10 == 10 AND 15 > 13 AND true





echo "$x > $y : " . $r1 . "</br>";
echo "$x < $y : " . $r2 . "</br>";
echo "$x == $y : " . $r3 . "</br>";
echo "$x >= $y : " . $r4 . "</br>";
echo "$x <= $y : " . $r5 . "</br>";
echo "$x != $y : " . $r7 . "</br>";
echo gettype($x) . " $x === ".gettype($z)." $z : " . $r6 . "</br>";
echo true === 1;
echo "10 != 10 || 15 < 13 || false : $r8 </br>";
echo "10 == 10 && 15 > 13 && true : $r9 </br>";
echo 'true AND false :' . (true AND false). "</br>";
echo 'true OR false :' . (true OR false) . "</br>";
echo 'true XOR true XOR false :' . (true ^ false ^ true) . "</br>"; 
echo '(!(true && false) xor (!true || 10 < 10)) : '  . (!(true && false) xor (!true || 10 < 10)) . '<br>';


// $a <=> $b оценивает:

// 0, если $a == $b
// -1 если $a < $b
// 1, если $a > $b

$a = 5;
$b = 4;
echo $a<=>$b . '<br>';

$x = 16;
if($x < 15 AND true !=false){
	echo '<br>$x kichkina 15dan';
}

echo '<br>';

$job = 'front-end1';
if($job == 'front-end'){
	echo 'begin back-end';
}


$x = 10;

if($x <= 10){
	echo 'x kichik yoki teng 10ga';
	
}
else{
	echo 'x kichkian emas 10dan';
}

$login = 'admin';
$password = 1234;
$key = '8h6Wg6O9fA2';
$qr = '@jayson';
echo '<br>';


/*if start*/
if($login == 'admin' && $password == 123){
	echo 'log in!!!';
}

else if($key == '8h6Wg6O9fA'){
	echo 'log in with key!!!';

}

else if($qr == '@jayson'){
	echo 'log in with qrcode!!!';

}



else {
	echo 'login or password invalid';
}
/*if end*/





if($login == 'admin' && $password == 1234){
	echo 'log in!!!';
}

 if($key == '8h6Wg6O9fA'){
	echo 'log in with key!!!';

}

 if($qr == '@jayson'){
	echo 'log in with qrcode!!!';

}
else {
	echo 'login or password invalid';
}




$price = 500;


if($price >= 3000){
	$cash = 3;
	
}
else if($price >= 2000){
	$cash = 3;
}
else if($price >= 1000){
	$cash = 2;
}
else if($price >= 500){
	$cash = 1;
}
else {
	$cash = 0;
}

echo "<br>";

echo $cash;


unset($cash);

$price= 'asd';


if($price == 3000 || $price == 2999 || $price == 2500 || $price = 4000 || $price == 5000)

switch($price){
	case 3000:
	case 2999:
	case 2500:
	case 4000:
	case 5000:
		$cash = 4;
	break;
	case 1999:
		$cash = 3;
	break;
	case 999:
		$cash = 2;
	break;	
	case 499:
		$cash = 1;
	break;
	default:
		$cash = 0;
}


echo "<br>";

echo 'Cash with stitch:'.$cash;


$price = 1001;

switch(true){
	case $price >= 1000 || false != true:
		$result = '1000';
	break;
	default:
		$result = 'not';
}

$var1 = 10 > 9 AND true == false ? 'var teng 10' : true == true ? 'var ikkichi tekshiruv natiajsiga kora'  : 'var teng 15';
$var2 = false;



$name = $var2!=null ? $var2 : 'guest';


$name = $var2 ?: $tt1 ?: $tt2 ;
$name2 = $var2 ?? $ttt1 ?? $tt2;






// if(true){
	// $var = 10;
// }
// else{
	// $var = 15;
// }	





echo "<br> $result";
echo "var1 =  $var1 <br>";
echo "var3 =  $var3 <br>";
echo "tt =  $tt <br>";
echo "name =  $name <br>";
echo "name2 =  $name2 <br>";

// $var1 = false;

$var5 = $var5 ?? 0;

echo "<br>";

echo 'Var5:'.$var5;


$var5 = 0;





$var5 ??= 'Jayson';



if($not_this_var){
	echo $not_this_var;
}

?>

<p>Hello <h2><?=$name?> <h2></p>
<p>Hello <h2><?=$var5?> <h2></p>


