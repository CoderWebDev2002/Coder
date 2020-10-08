"use strict";
// let schedule = {};

// // alert( isEmpty(schedule) ); // true

// schedule["8:30"] = "get up";

// // alert( isEmpty(schedule) ); // false

// function isEmpty(obj) {
//     for(let key in obj) {
//         return false;
//     }
//     return true;
// }
// let salaries = {
//     John: 100,
//     Ann: 160,
//     Pete: 130
//   }
//   var summ = 0;
//   function sum(obj2) {
//     for(let key in obj2) {
//         summ += salaries[key];
//       }
//   }
//   sum(salaries);
//   console.log(summ)

//   let menu = {
//     width: 200,
//     height: 300,
//     title: "My menu"
//   };
  
//   multiplyNumeric(menu);
//   function multiplyNumeric(menu) {
//       for(let key in menu) {
//         if(!isNaN(menu[key])) {
//             menu[key] *= 2;
//         }
//       }
//   }
//   console.log(menu);



var User = {
    name: 'Javoxir',
    surname: 'Akbarov',
    is_admin: false,
    inobj: {
        test: 2
    }

};


let strobj = '{"name":"Javoxir","surname":"Akbarov","is_admin":false,"inobj":{"test":2},"fullName":"Akbarov2 Javoxir2"}';

Object.defineProperty(User, "fullName", {
    // get: function() {
    //     return this.name + ' ' + this.surname;
    //   },
    //   set: function(val){
    //       let k = val.split(' ');
    //       this.surname = k[0];
    //       this.name = k[1];
    //   },
    configurable: true, 
     writable: true, 
     enumerable: true ,
    //  value: 'Test'
  });

//   delete User.fullName;

  User.fullName = 'Akbarov2 Javoxir2';
  for(let key in User){
      console.log(key);
  }
  console.log(User);
  console.log(Object.keys(User));
  console.log(Object.values(User));
  console.log(Object.entries(User));

  let json = JSON.stringify(User,'',5);
  console.log(json);
  document.getElementById('test').innerHTML = json;
  
let newobj = JSON.parse(strobj);
  console.log(newobj);

  let arr = [123,123,123];
  console.log( strobj.length);
  console.log( typeof strobj);
  let newstring = new String();
  

  function test(name){
       this.name = name;
  }
  let test2 = new test('Javoxir');
  console.log(test2);


  function User2(name) {
    // this = {};  (неявно)
  
    // добавляет свойства к this
    this.name = name;
    this.isAdmin = false;
  
    // return this;  (неявно)
  }
 new User2('asdasdasd');