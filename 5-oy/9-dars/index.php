<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
function bot($method, $data = [], $token = '1136805868:AAEplrEy1LOJmRwhfJdOFjqXnsM5PVhgXCs')
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot' . $token . '/' . $method);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $res = curl_exec($ch);
    return json_decode($res);
}
if (count($_POST))
{
    list($age, $chat_id, $surname, $name) = $_POST;
    $json = bot('sendMessage', ['chat_id' => $_POST['chat_id'], 'text' => "Assalomu aleykum <b>{$_POST['name']} {$_POST['familya']}</b>! Sizning <b>{$_POST['age']}</b> yoshingiz bilan tabriklayman!", 'parse_mode' => 'HTML']);
    die(json_encode($json));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <!-- <button id="button">Yuborish</button> -->
    <div class="page hide"></div>
    <form  method="POST" class='form '>
        
    Chat_id: <input type="text" name="chat_id"><br>
    Name: <input type="text" name="name"><br>
    Surname: <input type="text" name="surname"><br>
    Age: <input type="text" name="age"><br>
    <button type="button" id="button">Button</button>
    </form>
  <script src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>
    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script>
    // document.querySelector('#button').addEventListener('click',test);
// let chat_id = prompt('chat_idni kiriting');
// let yosh = prompt('Yoshizi kiritng:');
// let name = prompt('Ismizi kiriting kiritng:');
// let username = prompt('Familyezi kiriting kiritng:');
// var form = new FormData();
// form.append("chat_id", chat_id);
// form.append("age", yosh);
// form.append('name',name);
// form.append('familya',username);
//          function test(){
// var settings = {
//   "url": "http://codelife1.lc/5-oy/9-dars/index.php",
//   "method": "POST",
//   "processData": false,
//   "contentType": false,
//   "mimeType": "multipart/form-data",
//   "data": form
// }
// $.ajax(settings).done(function (response) {
//   console.log(response);
// });
// }
// fetch('http://codelife1.lc/5-oy/9-dars/index.php',{
//     method: 'POST',
//     body:form
// })
// .then(function(value){
//     return value.json();
// })
// .then(function(data){
// }).catch(function(error){
//     console.log(error);
// });
async function test() {
var form = new FormData();
form.append("chat_id", document.querySelector('[name="chat_id"]').value);
form.append("age", document.querySelector('[name="age"]').value);
form.append('name', document.querySelector('[name="name"]').value);
form.append('familya', document.querySelector('[name="surname"]').value);
let request = await fetch('http://codelife1.lc/5-oy/9-dars/index.php', {
    method: 'POST',
    body: form
});
let data = await request.json();
console.log(data);
if (data.ok) {
    document.querySelector('.page').innerHTML = '<div class="alert alert-success alert-dismissible fade show" role="alert">Habar yuborildi<button type="button" class="close-success-button">Qaytadan yuborish</button><button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true" >&times;</span></button></div>';
    $('.form').hide(500);
    $('.page').show(1000);;
} else {
    document.querySelector('.page').innerHTML = '<div class="alert alert-danger alert-dismissible fade show" role="alert">Xatolik: ' + data.description + '<button type="button" class="close " data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'
}
// .then(function(value){
//     return value.json();
// })
// .then(function(data){
// }).catch(function(error){
//     console.log(error);
// });
}
document.querySelector('#button').addEventListener('click', test);
$('.close-success-button').click(function() {
console.log('123');
location.reload();
});
<
/script>
    
</body>
</html>
