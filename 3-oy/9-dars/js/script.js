// "use strict";

function hello(){
    console.log('Hello',this)
}

// hello();



let person = {
    name: 'Javokhir',
    age: 20,
    job: 'Web developer',
    sayHello: hello,
    sayHelloWindow: hello.bind(Document), 
    logInfo: function(job,phone){
        console.group(`${this.name}` + '\'s info:');
        console.log(`Name is ${this.name}`);
        console.log(`Age is ${this.age}`);
        console.log(`Job is ${job}`);
        console.log(`Phone is ${phone}`);
        console.groupEnd();
    }
}

let lena = {
    name: 'ELena',
    age: 18
}
person.logInfo.bind(lena)('Front-end','+998917910090');
person.logInfo.call(lena,'Back-end','+998997930090');
person.logInfo.apply(lena,['Front-end2','+9989179100902']);
let array = [1,2,3,4,5];
// function multBy(array,n){
//     return array.map(function(i){
//         return i * n;
//     })
// }
 
// console.log(multBy(array,2));

Array.prototype.multBy = function(n){
   return this.map(function(i){
        return Math.pow(i,n);
   });
}

function CalcFunction(n){
    return function(){
        console.log(1000 * n);
    }
}


CalcFunction(5)();

function myfun(n){
    return function(num){
        return n + num;
    }
}

myfun(1)(10);
let addOne = myfun(1);
let addTen = myfun(10);

console.log(addOne(10));
console.log(addOne(50));

console.log(addTen(10));

function URLGenerator(domain){
    return function(site){
        return `https://${site}.${domain}`;
    }
}

let uzdomain = URLGenerator('uz');
let comdomain = URLGenerator('com');

console.log(uzdomain('kun'));
console.log(uzdomain('qalampir'));
console.log(comdomain('google'));
console.log(comdomain('yandex'));
console.log(comdomain('gmail'));



/*

    funtion logPerson(){
        console.log(`Person: ${this.name}, ${$this.age}, ${this.job});
    }

    let person1 = {name:'Person1',age:22,job:'Front-end'}
    let person2 = {name:'Person2',age:18,job:'Back-end'}


    bind(person1,logPerson);
    bind(person2,logPerson);

    Person: Person1, 22, Front-end
    Person: Person2, 18, Back-end


*/

k = true;

function logPerson(param1,param2){
    param1 =  param1 ?? '';
    param2 = param2 ?? '';
    console.log(`Person: ${this.name}, ${this.age}, ${this.job} ${param1} ${param2}`);
}

function bind(context,fn){
    return function(...args){
        console.log(args);
         fn.apply(context,args);
    }
}


let person1 = {name:'Person1',age:22,job:'Front-end'};
let person2 = {name:'Person2',age:18,job:'Back-end'};


bind(person1,logPerson)('test','test2');
bind(person2,logPerson)();


