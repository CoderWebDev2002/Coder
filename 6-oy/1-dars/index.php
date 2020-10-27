<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';

//Статические свойства и методы Магические методы  Сериализация объектов. 



class Physis{


    public static $Pi = M_PI;
    private static $counter = 0;


    public static function S($v,$t){
        self::$counter++;
        return $v*$t;
    }

    public static function Pi2(){
        return self::$Pi * self::$Pi;
    }
    public static function getCounter(){
        return self::$counter;
    }
}


class Test{
    public $x = 10;
}

class Test2{

}

class User{
    private $data = [];
    private $x = 10;
    private $date_time ;
    

    public function __construct(){
        //reqursad asd $data

        $data = [
            'first_name' => 'Jayson',
            'last_name'=>'Dev',
            'password'=>'asd'
        ];
        $this->data_time = time();
        $this->data = $data; 
    }
    public function __get($key){
        $array = ['first_name','last_name','get'];
        if(in_array($key,$array)) return $this->data[$key];
        else return $this->$key;
        
    }

    public function __sleep(){
        $this->sdata = $this->data;
        unset($this->sdata['password']);
        return ['sdata','date','data_time'];
    }
    public function __wakeup(){
        sleep(3);
        $this->data_time = time();
    }

}


$user = new User();
echo $user->first_name ."<br>";
echo $user->x ."<br>";
$serilize_user = serialize($user);

// debug(unserialize($serilize_user));
file_put_contents('user.txt',$serilize_user);

debug($user);
debug(unserialize(file_get_contents('user.txt')));


class Request{
    private $data;
    public $t;
    public $key;

    public function __construct(Test $n){
        
        $this->t = $n;
        $this->data = $_REQUEST; 
    }
    public function test(){
        return 123;
    }

    public function __get($name){
       if(isset($this->data[$name])) return $this->data[$name];
       return "Bunday eleemtn yoq ";
    }
    public function __set($name,$value){
        return $this->data[$name] = $value;
    }
    public function __isset($name){
        return isset($this->data[$name]);
    }
    public function __unset($name){
         unset($this->data[$name]);
    }

    public function __toString(){
       return 'Objectni echo qilma!!!';
    }

    public function __clone(){
        $this-> t = clone $this->t;
    }
    // public function __call($method,$args){
    //     echo $method;
    //     debug($args);
    // }
}


echo Physis::S(10,60)."<br>";
echo Physis::S(100,600)."<br>";
echo Physis::S(100,600)."<br>";
echo Physis::S(100,600)."<br>";
echo Physis::S(100,600)."<br>";
echo "Pi = ".Physis::$Pi."<br>";
echo "PiKvadrat = ".Physis::Pi2()."<br>";
echo "COunter is ".Physis::getCounter()."<br>";

$request = new Request(new Test());

echo $request->key."<br>";


$request->key = 'f67c2bcbfcfa30fccb36f72dca22a817';
$request->a = 10;

echo $request->key."<br>";
echo $request->asdasdasd;
echo $request->test."<br>";
echo $request->key;
echo isset($request->key)."<br>";

debug($request);

// echo $request;

echo '<hr>';

$r = $request;
debug($r);
echo $r->a = 100;
debug($request);
debug($r);
$request->t->x = 1000;
echo "<b style='color:red'>{$request->t->x}</b>";
$request->notFound(12312312,11231231223,123123,123);

echo '<hr>';

$r = clone $request;



debug($request);
debug($r);
$r->a = 50;
debug($request);
debug($r);

$r->t->x = 100;
echo "<b style='color:red'>{$r->t->x}</b><br>";
echo "<br style='color:green'>{$request->t->x}</br>";

?>