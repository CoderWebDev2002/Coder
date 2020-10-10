
<h1>Функции для работы с датой и временем Функции для работы с файлами Парсинг INI-файлов  Права доступа к файлам</h1>

<?php

date_default_timezone_set('Asia/Tashkent');

$start_time = microtime(true);



ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';



$end_time = microtime(true);


$time_of_work_this_script = $end_time - $start_time;

echo $time_of_work_this_script."<br>";

echo time()."<br>";
echo microtime(true)."<br>";



//d - 0 bn yoziladigon chislo
//D - 3ta harflik hafta kuni
//j - 0 siz yoziladigon chislo
//l - to'lliq harflar bilan yozilgan hafta kuni
//N - hafta kuni son bilan (1-Dushanba;7-Yakshanba);
//w - hafata kuni son bilan (0-Yakanshba;6-Shanba)
//z - 1 yil ichidagi ayni kun raqami 
//W - 1 yil ichidagi ayni hafta raqami
//F - oy nomi to'lliq holda 
//M - aoy nomi 3t harfi 
//m - 0 bn yoziladigon oy raqami
//n - 0 siz yoziladigon oy raqami
//t - oynining nechchi kundan tashkil topkani 
//L - kabisa yili ekanini tekshiradi, agar bo'lsa 1 aks holda 0
//Y - yilni tolliq 4 xonalik holda (masalan 1999)
//y - yilni ohirgi 2 ta raqami (masalan 99)


///https://www.php.net/manual/ru/datetime.format.php


//Hozir 21:55:10 10.10.2020
echo 'Hozir: ' . date('H:i:s d.m.Y ').'<br>';

// echo strtotime('10.10.2020 23:59:59');
echo strtotime('now') .'<br>';
echo time().'<hr>';

$ts = strtotime(date('H:i:s'));
echo gmdate('H:i:s',$ts).'<br>';

// sleep(3);
// $t = strtotime('now');
$t = strtotime(date('H:i:s'));


echo gmdate('H:i:s',$t + 3600 * 4).'<br>'; 


// $file = fopen('user.txt','a+');

// echo fread($file,filesize('user.txt')).'<br>';

// fwrite($file,"Hello world");

// fclose($file);





$str = file_get_contents('user.txt');

echo $str;


file_put_contents('user.txt','Hello world',FILE_APPEND);

copy('user.txt','users.txt');
// sleep(5);
rename('users.txt','new.txt');
// sleep(5);
unlink('new.txt');


$fp = fopen('somefile.txt', 'r');


$data = fgets($fp, 4096);



// перемещаемся назад к началу файла
// то же самое, что и rewind($fp);
// fwrite($fp,'Hello world');

fseek($fp, 0);

$config = parse_ini_file('config.ini',true,INI_SCANNER_TYPED );


debug($config);


echo $config['user']['age'];


$users = file_get_contents('somefile.txt');

$users = explode(',',file_get_contents('somefile.txt'));

if(!in_array('454546',$users)){
    file_put_contents('somefile.txt','454546,',FILE_APPEND);
}



// $array = explode(';',$users);
// $user = explode('=',$array[0]);
// debug($user);

// echo "user balans:".$user[1];


$users = explode(',',file_get_contents('somefile.txt'));





?>
<table border="1">

    <tr>
        <th>User IDlar</th>
    </tr>
    <?php

foreach($users as $user){
?>
       <?php if($user != '') { echo '<tr> <td>' . $user . '</td> </tr>'; } } ?>

</table>




