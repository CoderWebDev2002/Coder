'use strict';


const person = {
    name: 'Javokhir',
    age: 20,
    hello: ()=>{
        console.log('Hello world');
    }

};

const person2 = Object.create(person);
person2.name = 'Jayson';




function Car(name,year){

    // this = {};
    this.name = name;
    this.year = year;

    // return this;
}

let fort = new Car('Fort',2015);
let bmw = new Car('BMW X-7',2017);

fort.distance = 150000;
bmw.distance = 100000;


Car.prototype.getAge = function(){
    return new Date().getFullYear() - this.year;
}
Car.prototype.getDistanceOneYear = function(){
    return Math.ceil(this.distance / this.getAge());
}


Object.prototype.sayHello = function(){
    console.log('Hello world with prototype');
}
Object.prototype.developer = 'Jayson';
console.log(person);


let mypromise_obj = {
    myFun: function (params) {
        return 'MyFUnction'
    }
} 

let myobj = Object.create(mypromise_obj);

myobj.name = 'Name';
myobj.age = 18;

// for(let key in myobj){
    // if(myobj.hasOwnProperty(key)) {
    //     console.log(myobj[key]);
    // }
// }
Object.keys(myobj).forEach(function(key) {
    console.log(myobj[key]);
});



let str = new String('I am string');

String.prototype.newname = 'Jayson2';

let mystr = 'My str';




