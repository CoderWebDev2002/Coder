<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';

//Механизм наследования и абстрактные классы. Интерфейсы Трейты



interface Draw{
 
    public function draw();
    public function  drawWithPen();
    public static function E();

}

interface Design{
    public function setColor();
}

abstract class Shape implements Draw,Design{
    protected $x;
    protected $y;

    public static function Pi(){
        echo pi();
    }




    public function __toString(){
        return '<hr><pre style="background:pink">'.print_r($this,1).'</pre><hr>';
    }

    public static function E(){

    }

    abstract protected function getX($y);

  
}




class Circle extends Shape  {
 

    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }

    public static function Pi(){
        echo 3.14;
    }
    
    public  function draw(){
        echo "Aylana chizishni boshladik.Aylana kordinataleri x:".$this->x." y:".$this->y;
    }
    public function color($color = '#000'){
        echo "Aylana chizishni boshladik.Aylana kordinataleri x:".$this->x." y:".$this->y.". Va aylana $color rangda!";
    }


    public function getX($x = 15){
        echo __CLASS__. '=> ning x-'.$this->x . " ------- {$x}";
    }
    public function drawWithPen(){}
    public function setColor(){}
     
}


class Rectangle extends Shape{

    private $z;
    private $h;

    public function __construct($x,$y,$z,$h){
            $this->x = $x;
            $this->y = $y;
            $this->z = $z;
            $this->h = $h;
    }

    public  function draw(){
        echo "Tortburchak chizishni boshladik.Tortburchak kordinataleri x:".$this->x." y:".$this->y." z: " .$this->z ." h: ".$this->h;
    }
    public function getX($z = 10){
        echo __CLASS__. ' ning x-'.$this->x . " ------- {$z}";
    }
    public function drawWithPen(){}
    public function setColor(){}
    public static function E(){
        echo 'E bizda o\'zgardi';
    }
}



// $shape = new Shape();

$circle = new Circle(15,30);

 $circle -> draw();
//  hr();
//  $circle -> color('#fff');
echo $circle;

$rc =  new Rectangle(10,25,35,50);

$rc -> draw();

echo $rc;
Circle::Pi();
hr();
Shape::Pi();
br();



$circle -> getX(500);
br();
$rc -> getX(100);
br();

$circle2 = new Circle(30,40);
$circle2 -> draw();

echo $circle2;


$list = [$circle,$rc,$circle2];
foreach($list as $l){
    // if($l instanceof Circle) $l->circleDraw();
    // else if($l instanceof Rectangle) $l->rectangleDraw();
    $l->draw();
    br();
}
br();





interface newImp{
    public function __construct($x,$y);
}

class Test implements newImp{
    public function __construct($x,$y){
        
    }
}


trait Id{
    private $id;

    public function getId(){
        echo $this->id;
    }

    public function setId(int $v){
        $this->id = $v;
    }
}

trait Name{
    public $name;

    public function getName(){
        echo $this->name;
    }

    public function setName($value){
            $this->name = $value;
    }
}


class User{

    use Id,Name;
    public $last_name = 'last name';

    public function __construct($id,$name){
        $this->id = $id;
        $this->name = $name;
    }
    
   


}

class Category{
    use Name;

}



$user = new User(10,'Test');

debug($user);

// $user->name;

$user->setId(15);
$user->getId();
$user->setName('Jayson');

debug($user);


?>