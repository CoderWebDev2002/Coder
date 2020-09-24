<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$test = 'test';


$array = array(1,2,3,'asdasd','Hello word',true,false,$test,true);

$array2 = [1,2,3];



// echo $array === $array2;


// echo $array[0] . "<br>";
// echo $array[1] . "<br>";
// echo $array[2] . "<br>";
// echo $array[3] . "<br>";
// echo $array[4] . "<br>";
// echo $array[5] . "<br>";
// echo $array[6] . "<br>";
// echo $array[7] . "<br>";
// echo $array[8] . "<br>";

$array[] = 'qweqwe';
$array[2] = 4;


for($i = 0;$i < count($array); $i++){
    echo $array[$i] . "<br>";
}


$arr_2 = [
    15 => 'bu bizning key',
    'name' => 'Jayson', 
    'login'=>'jayson@mail.ru',
    'password'=> 'parol',
    'innerarr' =>
            [
                'first_child'=>1,
                'second_child'=>2,
                'last_child'=>3,
                [

                ]
            ],
    
];

$arr_2[] = 'biron ohirgi element';
$arr_2['name'] = 'Jayson2';

// echo $arr_2['name'] . "<br>";
// echo $arr_2['login'] . "<br>";
// echo $arr_2['password'] . "<br>";
// echo $arr_2['15'] . "<br>";

// echo count($array);

echo '<pre>' . print_r($arr_2,true) . '</pre>';
echo $arr_2['innerarr']['first_child'];


$club = [
    'barca'=> [
        'name'=> 'Barcelona FC',
        'wins'=> 30,
        'losses'=>10,
        'equals'=>5
    ],
    'real'=>[
        'name'=> 'Real Madrid',
        'wins'=> 40,
        'losses'=>20,
        'equals'=>15
    ]
];

echo '<pre>' . print_r($club,true) . '</pre>';
echo $club['real']['name'];


$arr_3 = [
    [
        1,2,3,4,5,6,7,8,9
    ],
    [
        111,222,333,444,555,66,77,889,  'name'=>'Jayson',

    ],
    'true',
    123,
    'test',
    'name'=>'Jayson',

];


// for($i = 0; $i < count($arr_3); $i++){
//     $element = $arr_3[$i];
//     if(is_array($element)){
//         for($j = 0; $j < count($element);$j++){
//             echo  "<br>" .$element[$j] ;
//         }
//     }else{
//         echo  "<br>" .$element;
//     }
// }

echo '<hr>';
foreach ($arr_3 as $q => $qq2) {
    echo $arr_3[$q] == $qq2;
    
    // if(is_array($element)){
    //     foreach ($element as $value) {
    //         echo  "<br>" .$value ;
    //     }
    // }else{
    //     echo  "<br>" .$element;
    // }
}

$arr_4 = [
    'name'=>'Jayson',
    'age'=>21,
    'pustishka'=>NULL,
    12,
    21

];

$arr_5 = [];

foreach ($arr_4 as $key => $value) {
    $arr_5[$key] = $value;
}
echo '<hr>';
echo $arr_5 === $arr_4;





// $a = 5;
// $b = &$a;
// $n = &$a;


// $a = 10;

// echo '<hr>';

// echo "$a - $b - $n";


$arr_5 = [1,2,3,4,5,6,7,8,9,10];

foreach ($arr_5 as &$value) {
    $value  *= 5;
}
echo '<hr>';
print_r($arr_5);


$arr = ['Jayson',null,'Dev',21];


// $first_name = $arr[0];
// $last_nam = $arr[1];
// $age = $arr[2];
echo '<hr>';


list(,,$last_nam,$age) = $arr;


echo "$last_nam $age";

$info = array('кофе', 'коричневый', 'кофеин');


list($drink, $color, $power) = $info;

echo "$drink - $color, а $power делает его особенным.\n";


$test = [
    0=>'Jayson',
    1=>'Dev',
    2=>21
];


list($name, $last_name, $age) = $test;

echo "$name $last_name, разработчик по фулл стеку и  ему $age лет .\n";



$arr_1 = ['name_1'=> 'tt1','name_2'=>'tt2','test3'];
$arr_2 = ['name_1'=> 'tt3','name_2'=>'tt4','test2'];

$new_arr = $arr_1 + $arr_2;

echo '<hr>';
print_r($new_arr);
?>