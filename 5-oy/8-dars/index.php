<?php



 function debug($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
 }

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// debug($_SERVER['REMOTE_ADDR']);
// debug(get_browser());

// echo '<b>asdasd</b><br>';
// echo '<string name="welcome_messages">Hello, %1$s! You have &lt;b>%2$d new messages&lt;/b>.</string>';



?>

<form name="myform" action="<?='http://'.$_SERVER['SERVER_NAME'].'/5-oy/8-dars/r.php'?>" method="POST"> 
    X: <input type="number" name="x"><br>
    Y: <input type="number" name="y"><hr>
   Tel: <input type="phone" name="tel"><br>
    <input type="submit" value="Yuborish" name="submit">
    <hr>
</form>

<?php



include_once 'footer2.php';
require 'footer.php';



echo $var;

include_once 'footer.php';

require_once 'footer.php';



?>

<hr>