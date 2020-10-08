"use strict";
/**
 * SetInterval Clearinterval SetTImeout Math va Date toLowercase toUpperCase substring indexOf push();pop(); shift(); unshift();toString();join();split(); slice() toFixed isFinite isNaN
 */
var date = new Date();

 var time = date.getSeconds();
 var minut = date.getMinutes(); 
 var h = date.getHours();
//  function echo(arr){
//      console.log('Function working');
//      setTimeout(echo,1);
//  }

//  echo();

 function second(){
     time++;
    //  setTimeout(second,1000)
     if(time == 60) {
         minut++;
         if(minut == 60){
             minut = 0;
             h++;
         }
         time = 0;

     }
     console.log(h,minut,time)
    //  if(time == 20) clearTimeout(timerId);
 }
//  second();
// var timerId  = setInterval(second,1000);

var z1 = 'A';
function zadanie1(){
    z1+='A';
    if(z1.length == 20) clearInterval(t); 
    console.log(z1);
}
// var t = setInterval(zadanie1,100);


// console.log(Math.E);
// console.log(Math.LN2);
// console.log(Math.PI);
// console.log(Math.SQRT1_2);
// console.log(Math.SQRT2);
// console.log(Math.sqrt(20));
// console.log(Math.pow(10,2));
// console.log(Math.floor(10.9));
// console.log(Math.round(10.49));
// console.log(Math.ceil(10.1));
// console.log(Math.tan(60));
// console.log(Math.sin(180));
// console.log(Math.tan(180));
// console.log(date.getDate());
// console.log(date.getDay());
// console.log(date.getTime());
// console.log(date.getHours());
// console.log(date.getMinutes());
// console.log(date.getSeconds());



console.log(date.getHours() + ":"+ date.getMinutes() + ":"+date.getSeconds());

let unix_timestamp = 1593061520
// Create a new JavaScript Date object based on the timestamp
// multiplied by 1000 so that the argument is in milliseconds, not seconds.
var date2 = new Date(unix_timestamp * 1000);
console.log(date2);

var obj = {
    name: 'Akbarov Javoxir',
    age: 21,
    famely: [1,2,3]
};

// console.log(obj.toString());

let str = 'Salom dunSS SSyo Qalesiz';
console.log(str.toLocaleLowerCase());
console.log(str.toLocaleUpperCase());
console.log(str.substring(5));
console.log(str.indexOf('a'));

let myarr = ['test',123,321];

myarr.push('salom');

console.log(myarr);
myarr.pop();

console.log(myarr);

myarr.shift();

console.log(myarr);

myarr.unshift('unshift');

console.log(myarr);

var myarr2 = [123,123,123123];

let myvar = myarr2.join('i ');

console.log(myvar);

let arrforsplit = 'AKbarovi Javoxiri Oybekovich';
let newarr = arrforsplit.split('i ');

console.log(newarr);

let arrforsplice = ['myarr','mykey','test','test2'];
arrforsplice.splice(2,1);
console.log(arrforsplice);

let int = 3.1467744;
console.log(int.toFixed(2));

console.log(5/0);

let isInf = 0/5;

if(isFinite(isInf)){
    console.log('Chekli');
}else{
    console.log('Cheksiz');
}



