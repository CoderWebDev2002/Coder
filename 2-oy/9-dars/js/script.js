"use strict";
// sayHi();

// var sayHi = function(x1,x2){
//     alert('Salom');
//     return 'test';
// };



// var k = 'salom';
// let t = 'asd';



// function sayHi(x1 = 10,x2 = 20,x3) { 
//     console.log(x1,x2);
//     alert( "Привет" );
//   }
  
// //   sayHi(10,30);

// //   console.log(sayHi());
// //   let func = sayHi;    // (2) копируем
// //   func();


// function checkAge(age) {
//     if (age >=15) {
//       return true;
      
//     } 
//       return confirm('А родители разрешили?');
    
//   }
  
//   let age = prompt('Сколько вам лет?', 18);
  
//   if ( checkAge(age) ) {
//     alert( 'Доступ получен' );
//   } else {
//     alert( 'Доступ закрыт' );
//   }

// let chiz = (a,b) => 
//     parseInt(a) + parseInt(b);

// let lastchiz = function(a,b){
//     return parseInt(a) + parseInt(b);
// }

// console.log(chiz(10,5));


// function greeting(name) {
//     alert('Hello ' + name);
// }


  
//   function processUserInput(callback) {
//     var name = prompt('Please enter your name.');
//     callback(name);
//   }
  
//   processUserInput(greeting);


// function sayHi(name ){
//     return name;
// }
// function helloJavoxir(k){
    // console.log(k());
    // alert('Salom ' +  (k('Javoxir')))
// }
// function sayBye(){
//     return 'Bye';
// }
// helloJavoxir(sayHi);
// helloJavoxir(sayBye);
// helloJavoxir(sayHi);

function getAge(){
    return prompt('Yoshingizni kiriting:');
}
function getFirstName(){
    return prompt('Ismingizni kiriting:');
}
function getLastName(){
    return prompt('Familyangizni kiriting:');
}

function getUser(){
    let age = getAge();
    let name = getLastName();
    let f_name = getFirstName();
    console.log('Yosh: '+ age,'Ism: '+f_name,'Familiya: ' + name);
}

function test(){
    console.log(arguments);
}



test(1,234,5,6,7,8,9);

getUser();

(function (a,b,c) {
    console.log(a,b,c);
})(10,20,30);