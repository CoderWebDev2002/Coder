"use strict";

// console.log('Start ');

// window.setTimeout(function(){
//     console.log('Request');
// },2000);

// function myfun(){
//         console.log('Request');
// }

// window.setTimeout(myfun,3000);


// console.log('End');



// console.log('Ruquest data...');


// setTimeout(()=>{
//     console.log('Preparing data...');
//     const backEnd = {
//         server: 'aws',
//         port:2000,
//         status: 'working'
//     };
//     setTimeout(()=>{
//         backEnd.modified = true;
//         console.log('Data received',backEnd);
//     },2000);
// },2000);

// const p = new Promise(function(resolve,reject){
    
// setTimeout(()=>{
//     console.log('Preparing data...');
//         const backEnd = {
//         server: 'aws',
//         port:2000,
//         status: 'working'
//     };
//     resolve(backEnd);
// },2000);
// });


// p.then((dataFromServer)=>{
//     return new Promise(function(resolve,reject){
//         setTimeout(()=>{
//             dataFromServer.modified = true;
//             if(!dataFromServer.server) reject(dataFromServer);
//             else resolve(dataFromServer);
//         },2000);
//     });
// }).then(clientData=>{
//     clientData.fromPromise = true;
//     return clientData;
// }).then(data => {
//     console.log(data);
// }).catch(error => console.error(error))
// .finally(()=>console.log('Finally'));


let sleep = (ms) => {
   return new Promise( (resole) => {
       setTimeout(()=> resole(), ms)
    
})  
};

// sleep(2000).then( ()=> console.log('2 sekunddan keyin ishla'));
// sleep(3000).then( ()=> console.log('3 sekunddan keyin ishla'));


// Promise.all([sleep(2000),sleep(5000)]).then(()=>{
//     console.log('Alll');
// });

// Promise.race([sleep(2000),sleep(5000)]).then(()=>{
//     console.log('race');

// });

//Методы массивов ForEach Map Filter Reduce Find FindIndex  

let myArray = [1,2,3,4,5];

let k = myArray.map(function(n){
    return n * 2; 
});

let filter = myArray.filter(function(n){
    return n == 3;
});
let Reduce = myArray.reduce(function(element){
    return element
});
var arr = [1, 2, 3, 4, 5]

// для каждого элемента массива запустить функцию,
// промежуточный результат передавать первым аргументом далее
var result = arr.reduce(function(sum, current) {
  return sum + current;
}, 0);

let find = myArray.find(function(n){
    return n > 1;
});
let FindIndex = myArray.findIndex(function(n){
    return n > 1;
});

let ForEach = myArray.forEach(function(element){
    console.log(element + 'elemnt');
});
console.log(result);
console.log(k);
console.log(filter);
console.log(find);
console.log(FindIndex);

// array.forEach(element => {
    
// });









