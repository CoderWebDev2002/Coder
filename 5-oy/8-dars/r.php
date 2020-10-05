<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);




if(isset($_REQUEST['submit'])){ 
    // echo 'get';debug($_GET);
    // echo 'post';debug($_POST);
    // debug($_SERVER['REQUEST_METHOD']);
    // echo 'bazaga saqlash uchun:' .$_POST['x'].'-yuborildi'; 
    
    $summa = $_POST['x'] + $_POST['y'];
    // if(!($_POST['x'] > 0) || !($_POST['y'] > 0)){
    //    die('Faqat son yozing!');
    // }
    $phone = $_POST['tel'];

    if($phone > 0 && strlen($phone) == 12){
        echo "bazaga {$phone} yozilmoqda....";
    }else{
        die('Notogri format');
    }
    ?>

    
    Yigindi:<?=$summa?></b>


    <?php } 
    
    include 'footer.php';

    echo $var;
    ?>




