<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



//Рекурсия в функциях Анонимные функции Генераторы  Отладочные функции



// function factorial($n){
//     if($n < 1) return 1;
//     return  $n * factorial($n - 1);
// }




//  echo factorial(100) . '<br>';

//  $hello = function($str){
//      echo $str;
//  };
// //  $hello('asd');
// $debug =  function ($arr){
//     echo '<pre>'.print_r($arr,true).'</pre>';
//  };

//  function test($a, $fun){
//     $fun($a);
//  }

//  function myfun($a,$func,$fun2 = debug ){
//     $arr = [];
//     for($i = 0; $i < $a; $i++){
//         $arr[] = $func($i);
//     }
//     $fun2($arr);
//     // return $arr;
//  }
//  test('asd',$hello);
//  $myarr = myfun(5,function($i){
//     return $i * $i;
//  },function($arr){
//     echo '<pre>'.print_r($arr,true).'</pre>';   
//  });
//  $newarr = myfun(10,function($i){
//     return $i * 10;
//  },function($arr){
//     echo '<pre>'.print_r($arr,true).'</pre>';   
//  });

//  function debug($arr){
//     echo '<pre>'.print_r($arr,true).'</pre>';
//  }


// //  debug($myarr);
// //  debug($newarr);


// $arr = [1,2,3,4,[
//     1,
//     2,
//     4,
// ]];
// echo '<pre>'.
// print_r($arr,true)
// . '</pre>';

// echo '<hr>';

// foreach($arr as $k => $v){
//     echo "$k => $v <br>";
    
// }
// echo '<hr>';

// unset($ar);
// debug($arr);
// echo '<hr>';
// echo '<pre>';

// var_dump($arr,true);
// echo '/<pre>';
// echo '<hr>';

// $k = var_export($arr,true);

// debug($k);

// debug($qweqweqwe);


// function gen1(){
//     echo 1;
//     yield 1;
//     echo 2;
//     yield 2;
//     echo 3;
//     yield 3;
//     echo 4;
//     yield 4;
// }


// foreach (gen1() as $value) {
//     echo " - из цикла $value<br>";
// }

// function gen2($from,$to){
//     for($i = $from;$i<=$to;$i++){
//         echo "$i - " ;
//         yield $i;
//     }
// }
// echo '<hr>';
// foreach (gen2(1,10) as $value) {
//     echo " - из цикла $value<br>";
// }
// echo '<hr>';
// foreach (gen2(1,10) as $value) {
//     echo "ni 2ga ko'paytirsak ".($value * 2). "  <br>";
// }

// function doubbleArray($arr,$callback){
//     foreach($arr as $v) yield $callback($v);
// }
// $arr = [1,2,3,4,5,6,7,8,9,10];

// $arr2 = doubbleArray($arr,function($v){
//     return $v * 2;
// });
// foreach($arr2 as $a){
//     echo "$a - ";
// }

// $arr = ['Jayson'=>21,'Dev'=>17];


// function gen3($arr,$callback){
//     foreach($arr as $k => $v){
//         yield $k=>$callback($v);
//     }
// }

// $gen3 = gen3($arr,function($age){
//     return ($age < 20) ? 'student' : 'worker';
// });
// echo '<hr>';

// foreach($gen3 as $k=>$v){
//     echo "$k - $v<br>";
// }

// echo '<hr>';

// foreach(gen1() as $k=>$v){
//     echo "$k => $v<br>";
// }


// foreach (input_parser($input) as $id => $fields) {
//     echo "$id:\n";
//     echo "    $fields[0]\n";
//     echo "    $fields[1]\n";
// }

echo '<hr>';

$count = 10000000;


$s = 0;
$arr = [];
for ($i=0; $i < $count ; $i++) { 
   $arr[] = $i;
}



foreach($arr as $v) $s+=$v;

echo 'Result ' . $s .'<br>';
echo memory_get_usage().'<br>';

unset($arr);
echo memory_get_usage().'<br>';


function ememorytest($count){
    for ($i=0; $i < $count ; $i++) { 
        yield $i;
     }
}
$s = 0; 
foreach(ememorytest($count) as $v) $s+=$v;
echo 'Result ' . $s .'<br>';
echo memory_get_usage().'<br>';

?>