<h1>Matematika!</h1>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';

//Математические функции Строковые функции Функции для работы с массивами

echo M_PI.'<br>';
echo M_E.'<br>';
echo M_PI_2.'<br>';
echo M_PI_4.'<br>';
echo abs(-3).'<br>';
echo round(3.541414,2).'<br>';

echo floor(3.999).'<br>';
echo ceil(4.00000001).'<br>';
echo mt_rand(1,10);

for($i=0;$i<=10;$i++){
    $arr[] = mt_rand(1,100);
}
debug($arr);

echo min($arr).'<br>';
echo max($arr).'<br>';
echo base_convert(100,10,2).'<br>';

echo sin(90).'<br>';
echo cos(90).'<br>';
echo tan(90).'<br>';
echo 1/tan(90).'<br>';


echo asin(0.5).'<br>';
echo acos(90).'<br>';
echo atan(90).'<br>';
echo (M_PI / 2 - atan(90)).'<br>';
echo rad2deg(asin(0.5)).'<br>';
echo deg2rad(30).'<br>';

?>
<hr>
<h1>Stringlar</h1>
<?php
$s_1 = 'Hello worldello';
$s_2 = 'Привет мирр';

echo $s_1[0].'<br>';
echo $s_2[0].'<br>';

echo strlen($s_1).'<br>';
echo strlen($s_2).'<br>';
echo strlen("👨‍💻").'<br>';
echo strlen("😊").'<br>';

echo mb_strlen($s_1,'UTF-8').'<br>';
echo mb_strlen($s_2,'UTF-8').'<br>';

echo strpos($s_1,'1ello').'<br>';


if(strpos($s_1,'Hello') !== false){
    echo 'Bor!'.'<br>';
}else {
    echo "Yo'q<br>";
}

$s_3 = 'ықққҚasdasd';

$search = mb_strpos($s_3,'Қa');

// echo $s_3[$search];

echo $search.'<br>';
if($search !== false){
    echo 'Bor!'.'<br>';
}else {
    echo "Yo'q<br>";
}

echo substr($s_1,0,5).'<br>';
echo substr($s_1,3).'<br>';
echo mb_substr($s_3,4,1).'<br>';
$email = '               asd asd sa@mail.ru                    ';
echo trim($email).'<br>';
$javoxir = 'Javoxir xi xi Xi';
echo str_replace('xi','h1',$javoxir).'<br>';

$text = "Assalomu aleykum ^name^! Siz bizning ^site^ saytimizda ro'yxatdan o'tdingiz вқ";


if(true){
    $text = str_replace(['^name^','^site^','вқ'],['Jayson','codelife.uz',''],$text);
    echo $text.'<br>';
}
echo mb_strtolower('LSLDLSKDKL sss').'<br>';
echo mb_strtoupper('LSLDLSKDKL sss').'<br>';

$tt = '<b>asdasdasd';


echo $tt = strip_tags($tt).'<br>';

echo "Assalomu aleykum $tt?Qalaysiz ishlar joyidami".'<br>';


$password = "test".'202cb962ac59075b964b07152d234b70'.'1999';
$parol = 1234;
echo md5(123).'<br>';


if('test'.md5($parol).'1999' == $password){
    echo 'parol togri ekan!'.'<br>';
}else {
    echo 'parol notogri'.'<br>';
}

echo uniqid();

?>

<hr>
Array

<?php


$array = [1000,1,5,4,1,2,5,10,10,1000,1000,1000];
$uniq_array = array_unique($array);

debug($uniq_array);
shuffle($uniq_array);

debug($uniq_array);

$rever_array = array_reverse($uniq_array,true);
$array_flip = array_flip($uniq_array);

debug($rever_array);
debug($array_flip);


$myarray = ['key'=>'test','key2'=>'test2','key3'=>'test3'];

debug(array_values($myarray));
debug(array_keys($myarray));



$arr1 = [1,2,3,4];
$arr2 = [5,6,7,8];
$newarr = array_merge($arr1,$arr2);
debug($newarr);

$list = range(1,100,2);

debug($list);

$slice_array = array_slice($newarr,3);

debug($slice_array);


$list = [5,10,7,3,-1,2];

// sort($list);

// debug($list);

// asort($list);

// debug($list);

arsort($list);

debug($list);

uasort($list,function($a,$b){
    return  1;
});

debug($list);

?>

