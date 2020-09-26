<?php

if(count($_POST)){
    print_r($_POST);
    die;
}

// declare(strict_types = 1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//Функции Облость видимости переменных Рекурсия в функциях



function hello($text = 'null'){
    if(is_string($text)){
        echo $text . ' hello !!!<br>' ;
    }else{
        echo 'funksiyaa faqat string qabul qiladi!!<br>';
    }
}
function test(){
    echo 'hello world<br>';
}
function helloCount($count){
    echo '<hr>';

    if(!is_int($count)){
        echo 'Faqat son kirgazing';
    }

    for ($i=1; $i <=$count ; $i++) { 
        echo 'Hello world<br>';
    }
}


function helloArrayElements($array){
    echo '<hr>';
    if(is_array($array)){
        foreach($array as $arr){
            echo 'Hello ' . $arr . '<br>';
        }
    }
}

hello('Asadbek');
hello('Abduhalil');
hello();
hello(1);
test();
helloCount(10);
helloCount(5);
helloCount('asd');


$students = ['Asadbek','Abduhalil','Ismoiljon','Ixtiyor','Lazizbek','Dilshodbek','Muhammadamin'];
$students2 = ['Asadbek2','Abduhalil2','Ismoiljon2','Ixtiyor2','Lazizbek2','Dilshodbek2','Muhammadamin2'];

helloArrayElements($students);
helloArrayElements($students2);
// hello();

// echo '<hr><b>5</b> va <b>10</b> nining yig\'indisi: ' . (5 + 10) . 'ga teng<br>';
// echo '<hr>15 va 10 nining yig\'indisi: ' .(15 + 10) . 'ga teng<br>';
// echo '<hr>25 va 10 nining yig\'indisi: ' .(25 + 10) . 'ga teng<br>';


$banlist = [1,2,3,4];


function getSumma($x,$y,$vir = '+'){
    $virs = ['-','+','*','/'];

    if(!in_array($vir,$virs)) {
        return '<hr>Bunday virojeniyani bilmayman!';
    }
    switch($vir){
        case '+':
            $answ = $x + $y;
            $name = "yi'gindi";
        break;
        case '-':
            $answ = $x - $y;
            $name = "ayirma";
        break;
        case '/':
            $answ = $x / $y;
            $name = "bo'linma";
        break;
        case '*':
            $answ = $x * $y;
            $name = "ko'paytma";
        break;
    }
    // echo '13';
    return "<hr><b>{$x}</b> va <b>{$y}</b> nining {$name}si:<b> " . $answ . '</b>ga teng<br>';
    echo '1234';
}
$tt = getSumma(5,10);
echo $tt;
echo getSumma(15,10);
echo getSumma(25,10);
echo getSumma(325,10);
echo getSumma(325,10,'-');
echo getSumma(325,10,'*');
echo getSumma(325,10,'&');
echo $tt;


function myFun(int $x,int $y):string {
    $k  = $x + $y;
     settype($k,'string');
    return $k;
}
echo '<hr>';
echo myFun(123,2);






// function change($x){

// }


$test = 5;

$token = 'BOT:123213123123';

function myFunction(&$test){

    echo '<pre>'.print_r($GLOBALS,1).'</pre>';

    $test++;
    global $token,$test;
    echo $token;
    echo $GLOBALS['token'];
}

myFunction($test);

echo '<hr>';
echo $test;

echo $a;


function staticFunction($n = 1,bool $G = false){
    static $marta = 0;

    if($G){
        return $marta . ' marta funksiya ishlatilgan<br>';
    }

    static $count = 0;
    $marta++;
    $count+=$n;
   
    return $count.'<br>';
}

echo staticFunction();
echo staticFunction();
echo staticFunction();
echo staticFunction();
echo staticFunction(5);
echo staticFunction(10);
echo staticFunction(1,true);
echo staticFunction();
echo staticFunction();
echo staticFunction();
echo staticFunction();
echo staticFunction(5);
echo staticFunction(10);
echo staticFunction(1,true);





function M($t){
    static $Text = '';

    $Text = $Text . ' '. $t;
    return $Text;
}


M('123');
M('yananimadir');
M('qalesiz');
echo M('');
?>

