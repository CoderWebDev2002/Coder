"use strict";

// let user  = new Object();
// let user2 = {};

// console.log(typeof user);
// console.log(typeof user2);
// let arr = [18,'Akbarov Javoxir'];
// arr['age'] = 18;
// user = {
//     age:18,
//     fullName:'Akbarov Javoxir',
//     adress: 'Marhamat city',
//     job:'developer'
// };
// user.isAdmin = true;
// user["likes birds"] = true;
// user[age] = true;


// console.log(arr);
// console.log(user);

// delete user.age;
// delete user["likes birds"];

// console.log(user);


// let fruit = prompt("Qaysi mevani olmoqchisiz?");

// let bag = {
// //   [fruit]: 5, // имя свойства будет взято из переменной fruit
//     fruits: fruit
// };

// console.log( bag); 

// let fn1 = prompt('Ismiz:');
// let ln1 = prompt('Familiyez:');
// let age1 = prompt('Yoshiz:');

// let User1 = makeUser(fn1,ln1,age1);

// console.log(User1);


function makeUser(firstname,lastname,age){
    let user =  {
        firstname,
        lastname,
        age
    };

    console.log(user);
    return user;
}

let User2 = makeUser('Javoxir','Akbarov',21);
User2.lastname = 'Akbarov2';
User2.adress = 'Marhamat';
User2.let = 'Qanaqadur ozgaruv';

delete User2.let;
if('let' in User2){
    console.log('let keyi bor va u: ' + User2.let);
}
console.log(User2);

let company = {
    teacher:"O'qituvchini kiriting",
    director:"Direktorni kiriting",
    hr:"HR managerni kiriting",
    freelancer:"Freelancerni kiriting",
    client: "Cleintni kiriting"
};


// for(let key in company){
//     // let ans = prompt(company[key]);
//     ans = ans ? ans : "Yo'q";
//     // if(ans == true ) ans = ans;
//     // else ans = "Yo'q"
//     company[key] =  ans ;
//     console.log(key + ': ' + ans);
// }
console.log(company);

let k ;
if(k) console.log(k);


const obj3 = {
    'test':123
};

obj3.test = 345;

console.log(obj3);