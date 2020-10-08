"use strict";


// const person1 = {
//     name: 'Javoxir',
//     family: 'Akbarov',
//     sayHello: function (){
//         console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);
//     },
//     getAge(){

//     }
// };

// const person2 = {
//     name: 'Abduhalil',
//     family: 'Rahmonberdiyev',
//     sayHello: function (){
//         console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);
//     }
    
// };

// let f = sayHello.bind(person1)();

// person1.sayHello();

// function getPerson(name,family,age){
//    const person = {
//         name: name,
//         family: family,
//         age:age,
//         sayHello(){
//             console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);
//         }
//    };
//    return person;
// }


// const person1 = getPerson('Javoxir','Akbarov',21);
// const person2 = getPerson('Ixtiyor','Erkinboyev',18);


// person1.sayHello();
// person2.sayHello();


// function Person(name,family,age){
//     this.name = name;
//     this.family = family;
//     this.age = age;
    // this.sayHello = ()=>{
    //     console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);

    // }
// }

// Person.prototype.sayHello = function(){
//     console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);
// }

// Person.test = '123';


// 
// const person2 = new Person('Ixtiyor','Erkinboyev',18);
// console.log(Person);


class Person{
    constructor(name,family,age){
        this.name = name;
        this.family = family;
        this.age = age;
        Person.count++;
    }
    get fullName(){
        return this.name + ' ' + this.family;
    }

    set fullName(setVal){
        let fullname = setVal.split(' ');

        this.name = fullname[0];
        this.family = fullname[1];
    }
    sayHello(){
       console.log(`Salom, mening ism-sharifim ${this.name} ${this.family}`);
    }

    goToHome(){
        // GO to home!
    }
    static howMuch(){
        console.log(Person.count + ' are users');
    }

}

Person.count = 0;
const person1 = new Person('Javoxir','Akbarov',21);
const person2 = new Person('Lazizbek','Tojiboyev',16);
const person3 = new Person('Lazizbek','Tojiboyev',16);
Person.howMuch();





class Animal{
    k = 15;
    #test = 20;
    constructor(name){
        this.sound = 'mysound';
        this.name = name;
    }

    get getSound(){
        console.log(this.sound);
    }
    get _getAkbarov(){
        return this.#test;
    }
}



class Dog extends Animal{
    constructor(name,sound){
        super(name);
        this.sound = sound; 
        this.name = name; 
    }



}
class Cat extends Animal{
    
    constructor(name,sound){
        super(name);
        this.name = name;  
        this.sound = sound; 
    }

    
    
    

}

const dog = new Dog('Bobik',"wow");
const cat = new Cat('Tom',"myau");





class Point{

    constructor(){
        this.x = 0;
        this.y = 0;
    }

}

class Circle extends Point{
    constructor(){
        super()
        this.r = 0;
    }
}

class Ring extends Circle{
    constructor(){
        super();
        this.R = 0;
    }
}

class Decoresion extends Ring{
    constructor(){
        super();
        this.cost = 0;
    }
}





