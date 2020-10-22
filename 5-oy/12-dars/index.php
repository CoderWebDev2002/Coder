<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';



class User{
    

    public $login = 'userLogin';
    public $password = 'userPassword';
    public $email = 'eskimail@mail.ru';

    public function __construct($email= false,$login = 'userLogin',$parol = 'userPassword'){
        if($email){
            $this->email = $email;
            $this->not = 'not this var';
        }
        $this->login = $login;
        $this->password = $parol;
    }

    public function getEmail(){
        return $this->email;
    }
    public function olmoq(){
        return $this->login;
    }
    public function setEmail($newmail){
        $this->email = $newmail;
    }

    // public function __destruct(){
    //     echo "Удаляем " . __CLASS__  ;
    // }
}


$user = new User('user@mail.ru');

echo $user->login.'<br>';
echo $user->password.'<br>';
echo $user->email;


echo '<hr>';

$user2 = new User('telegram.org@mail.ru');

$user2->login = 'jayson';
$user2->password = 'mypassword';
$user2->age = 21;

echo $user2->login."<br>";
echo $user2->password."<br>";
echo $user2->email."<br>";
echo $user2->age."<hr>";



$user3 = new User('codelife','codelifepassword','emailwithcontructor@mail.ru');

echo $user3->login."<br>";
echo $user3->password."<br>";

echo $user3->email."<br>";
$email = $user3->getEmail();
echo $email ."<br>";
echo $user3->olmoq();
echo $user3->setEmail('newmail@mail.com')."<br>";
echo $user3->getEmail() ."<hr>";
// $user3->email = 'zapresiz@mail.ru';
// echo $user3->email."<br>";

$user4 = new User('yangi@mail.ru');
echo $user4->getEmail()."<br>";
echo $user4->not."<br>";

// unset($user4);

$user4->not;


class User2{

    // private protected public

    // private - "Faqat shu class ichida ishlaydi"
    // protected - "Faqat shu class va bolalari ichida ishlaydi"
    // public - "Hamma joyda ishlaydi"


    private $name;
    protected $email;
    // protected $id = 1;

    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }
    public function setEmail($text){
        $this->email = $text;
        
    }
    public function setName($text){

        $this->name = strip_tags($text);
    }

    public function getEmail(){
        return $this->email;
        
    }
    public function getName(){
        return $this->name;
    }
    protected function getId(){
        return $this->id;
    }

    public function test(){

    }
}

echo '<hr>';

$user5 = new User2('Jayson','telegram.org@mail.ru');

echo $user5->getName()."<br>";

$user5->setName("Jayson <b>Dev</b>");
echo $user5->getName()."<br>";

echo $user5->getEmail()."<br>";
// echo $user5->getId()."<br>";
debug($user5);


// echo $user5->name;
?>