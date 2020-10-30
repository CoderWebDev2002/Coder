<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>


    </style>
</head>
<body>
    
</body>
</html>


<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

@include 'functions.php';




abstract class Form{
 public function OpenForm($action,$method){
     echo "<form action='{$action} method='{$method}'";
 }
 public function InputText($x,$y){
     echo "Login: ". "<input type='{$x}' placeholder='{$y}'>";
 }
 public function Password($password,$place){
     echo "Password: ". "<input type='{$password}' placeholder='{$place}'>";
 }
 public function Textarea($placeholder){
     echo "<textarea placeholder='{$placeholder}' cols='30' rows='10'></textarea> ";
 }
 public function Submit($submit,$go){
     echo "<input type='{$submit}' value='{$go}'>";
 }
 public function Close(){
     echo "</form>";
 }




}
 class GetForm extends Form{

 }
 $form = new GetForm;
 $form->OpenForm('','POST');
 echo "<br>";
 $form->InputText('text','!!!');
 echo "<br>";
 $form->Password('password','!!!');
 echo "<br>";
 $form->Textarea('123');
 echo "<br>";
 $form->Submit('submit','Go');
$form->Close();




























    // // public function NewForm($action,$Post){
    // //     echo "<form action='{$action}' method='{$Post}'>";
    // // }
    // // public function InputText($text,$value1){
    // //     echo "<input type='{$text}' value='{$value1}'>";
    // // }
    // // public function Password($password,$value2){
    // //     echo "<input type='{$password}' value='{$value2}'>";
    // // }
    
    // // public function Submit($submit,$go){
    // //     echo "<input type='{$submit}' value='{$go}'>";
    // // }
    // // public function Textarea($plsceholder,$value3){
    // //     echo "<textarea placeholder='{$plsceholder}' value='{$value3}'> </textarea>";
    // // }
    // // public function Close(){
    // //     echo "</form>";
    // }



// $form = new Form();
// $form->NewForm('','POST');
// $form->InputText('text','!!!')."<br>";
// $form->Password('passord','!!!').'<br>';
// $form->Submit('Submit','GO').'<br>';
// $form->Textarea('123','!!!').'<br>';

// $form->Close();
// $form->draw();







?>

