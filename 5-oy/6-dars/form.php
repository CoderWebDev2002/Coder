<?php
    if(count($_POST)){
        print_r($_POST);
    }
?>

<form action="http://codelife.uz/index.php" method='POST'>
    <input type="text" name="test">

    <button>Submit</button>
</form>