"use strict";

console.log(window.innerHeight);
console.log(window.innerWidth);


console.log(document.documentElement.clientHeight);
console.log(document.documentElement.clientWidth);


var w = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

var h = window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

// let openedWindow = window.open('https://google.com');
// openedWindow.close();

console.log(screen.width);
console.log(screen.height);
console.log(history.forward());
console.log(document.getElementsByTagName('b')[0].tagName);
console.log(document.getElementsByTagName('b')[0].parentNode);
console.log(document.getElementById('li').nodeName);
console.log(document.getElementById('myul').childNodes);
console.log(document.getElementById('myul').children);
console.log(document.getElementById('myul').children);
console.log(document.getElementById('myul').firstChild);

// console.log();
// console.log(document.getElementsByTagName('body')[0].innerText);
document.getElementsByTagName('b')[0].innerHTML = 'Mening sahifam <br>';
document.getElementsByClassName('myclass')[0].innerHTML = '<i>Kursiv yozuv</i>'
document.getElementById('myid').innerHTML = '<mark>Mark yozuv</mark>'
document.getElementsByName('first_name')[0].value = 'Mark yozuv'
document.querySelector('#newid').innerHTML = 'yangi soz';
// document.querySelector('.myclass').innerHTML = 'yangi soz';
document.querySelectorAll('.myclass')[0].innerHTML = 'yangi soz2';
// location.reload();
//  location.replace('https://google.com');
let task_Arr = document.querySelectorAll('.task1');
for(let key in task_Arr) if(!isNaN(key)) task_Arr[key].innerHTML *= 10;




