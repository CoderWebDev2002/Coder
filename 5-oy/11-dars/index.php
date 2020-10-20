<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';




// mkdir('normal',0755,true);

$difiles = scandir('normal');
debug($difiles);
foreach($difiles as $file){
    if($file != '.' && $file!='..' && !is_dir('normal/'.$file) && file_exists('normal/'.$file)){
        require_once 'normal/'.$file;
    }
}

// echo "<hr>";
// $ip_adress = gethostbyname('gotika2.ru') ;

// echo $ip_adress;

// echo "<hr>";

// $site_name = gethostbyaddr($ip_adress);

// echo $site_name;

$str = 'ab cdef ab 123 c a1b';
$date = '30-08-1999';

$p = preg_match('/a\d\db/',$str);

echo '<hr>';

echo $p."<br>";

$p2 = preg_match('/^\d\d-\d\d-\d\d\d\d$/',$date);

if($p2){
    echo "Tu'gilgan yilingiz qabul qilindi! ".$date;
}else{
    echo "Tug'ilgan yilingan formatu noto'g'ri!KK-OO-YYYY formatida kiriting<br><br>Masalan: 30-08-1999";
}



echo "<br>";
$p3 = preg_match('/S \D B/',"S 1 B");
echo $p3;

echo "<br>";
$p4 = preg_match('/S \w B/',"S _ B");
echo $p4;


echo "<br>";
$p5 = preg_match('/S \W B/',"S @ B");
echo $p5;


echo "<br>";
$p6 = preg_match('/S\sB/',"S  B");
echo $p6;

echo "<br>";
$p7 = preg_match('/S\SB/',"S B");
echo $p7;


$str = "Ss\nB";
echo "<br>";
echo $str;
echo "<br>";
$p8 = preg_match('/Ss\nB/',$str);
echo $p8;

echo "<br>";
$p9 = preg_match('/ABC.ABC/',"ABCABC");
echo $p9;


echo "<br>";

$name = "30.08.1999";

$str = "\d";


echo preg_match("/^\d\d\.\d\d\.\d\d\d\d$/",$name)."<br>";
echo preg_match("/^\\\d$/",$str)."<br>";
echo preg_match("/[a-z]/","b")."<br>";
echo preg_match("/[A-Z]/","A")."<br>";
echo preg_match("/^[0-9][0-9]-[a-zA-Z]$/","01-A")."<br>";
echo preg_match("/^[a-c]$/","d")."<br>";

$str = "min30000";

if(preg_match("/min\s?\d\d\d\d/",$str)){
    $ex = trim(explode('min',$str)[1]);

    echo " Minimal yechish summasi $ex ga o'zgardi<br>";
}

echo preg_match("/^[a-z] (abc)?$/","d abc")."<br>";




?>