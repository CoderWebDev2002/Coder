<?php



// echo PHP_VERSION;

//Komment
#asdasdasdas

/*test
param1 stirng
param2 inter */


#O'zgaruvchilarga ega bo'lgan harakatlar isset() gettype() settype is_type() unset() & $a $$a CONST

$a = 123;
$b = 456;
$k = 123;
$a = 566;
$name = 'Jayson';
$f = 10.4;
$isnull = null;
$b_1 = true;
$b_2 = false;
$fun = function(){};

$arr = [];
//$A != $a  javob: true;



echo 'Isset $a: ' .isset($a) . "<br>";
echo 'Isset $k: ' .isset($k) . "<br>";;
echo 'Isset $b: ' .isset($b) . "<br>";
echo 'Value of $a: ' .false . "<br>";
echo 'Value of $a: ' .true . "<br>";
echo 'Type of $a: ' .gettype($a). "<br>";
echo 'Type of $name: ' .gettype($name). "<br>";
echo 'Type of $f: ' .gettype($f). "<br>";
echo 'Type of $isnull: ' .gettype($isnull). "<br>";
echo 'Type of $b_1: ' .gettype($b_1). "<br>";
echo 'Type of $b_2: ' .gettype($b_2). "<br>";
echo 'Type of $fun: ' .gettype($fun). "<br>";
echo 'Type of $obj: ' .gettype($obj). "<br>";
echo 'Type of $arr: ' .gettype($arr). "<br>";


$int_var = 21;
$new_string_var = (string) $int_var; #convert type to string

echo 'Type of $int_var: ' .gettype($int_var) . "<br>";
echo 'Type of $new_string_var: ' . gettype($new_string_var) . "<br>";

echo 'Converted type of $new_string_var: ' .gettype( (int) $new_string_var) . "<br>";
echo 'Converted type of $new_string_var: ' .gettype( (double) $new_string_var) . "<br>";

echo 'Type of $new_string_var: ' .gettype($new_string_var) . "<br>";

$new_string2 = '123asd';

echo 'Type of $new_string2: ' .gettype($new_string2) . "<br>";

$new_string2_int = (int) $new_string2; #convert type to int

echo 'Type of $new_string2_int: ' . $new_string2_int . "<br>";

$foo = '123asd';
echo 'Type of $foo: ' .gettype($foo) . "<br>";

settype($foo, "integer"); 

echo 'Type of $foo: ' .gettype($foo) . "<br>";

$ttk = (int) '123asd';


echo 'Type of $ttk: ' .gettype($ttk) . "<br>";

$myStrig = 'Hello, world1';

echo 'Is string $myStrig: ' . is_string($myStrig) . "<br>";
echo 'Is string $ttk: ' . is_string($ttk). "<br>";
echo 'Is int $ttk: ' . is_int($ttk). "<br>";
echo 'Is double $ttk: ' . is_double($ttk). "<br>";
echo 'Is double $f: ' . is_double($f). "<br>";
echo 'Is numberic $f: ' . is_numeric($f). "<br>";
echo 'Is numberic $ttk: ' . is_numeric($ttk). "<br>";

echo 'Type of $f: ' .gettype($f) . "<br>";



$i = 10;

$i2 = & $i; #gipperhavolaga aylantirmoqdamiz



$i2 = 15;
$i = 10;
echo $i2 . "<br>";
echo $i . "<br>";


$a = 'Hello';
$ab = 'topolmadi';
$b = 'ab';

echo $$b . "<br>"; #havolali o'zgaruvchiga aylantirmoqdamiz

$time = '21:52'; #yangi ozgaruvchi ochmoqdamiz
echo $time . "<br>";

$time = '21:53'; #yangilamoqdamiz 
echo $time . "<br>";



// echo PHP_VERSION;
// echo PI;
// PI = 3.15;

define('COLOR','#ff0000');
CONST TEST = 'test';


echo COLOR . "<br>";;
echo defined('COLOR') . "<br>";

echo "COLOR is ".  constant('TEST') . "<br>";
echo __FILE__	 . "<br>";
echo __LINE__	 . "<br>";
echo __DIR__	 . "<br>";

echo '<hr>';

$x = 7;
$y = 10;

echo "x = $x; y = $y</br>";
echo "x va y yig'indisi " . ($x + $y) . "<br>";
echo "x va y ayirmasi " . ($x - $y) . "<br>";
echo "x va y  ko'paytmasi " . ($x * $y) . "<br>";
echo "x va y  bo'linmasi " . ($x  / $y) . "<br>";
echo "22 va 10 bo'linmasi qoldig'i " . (22 % 10 ) . "<br>";
echo "$x ninig {$y}chi darajasi " . ($x ** $y ) . "<br>";
echo "$x kvadrat ildiz " . ($x ** 0.5 ) . "<br>";

$x = $x + 1; // 8
$x++; //9
$x = $x - 1; //8
$x--; //7

$x = $x - 5; // 2
$x -=5; // -3

$x += 5; // 2
$x  = $x + 5; //7

?>



<br><i style="color: <?=COLOR?>">Marhamat matonat №64</i>