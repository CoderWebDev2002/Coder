"use strict";

let  massiv = ["Hello world",'Javoxirbek',20,'Tatuda o\'qiydi','Marhamat tumanidan'];

console.log( massiv[0] );
console.log( massiv[1] );
console.log( massiv[2] );
console.log( massiv[3] );
console.log( massiv[4] );
console.log( '______________' );
let mevalar = ["Olma","Anor","Behi","Shaftoli","Yong'oq","Pomidor","Nok"];

// console.log( mevalar[0] );
// console.log( mevalar[1] );
// console.log( mevalar[2] );
// console.log( mevalar[3] );
for(let i=0;i<mevalar.length;i++){
    console.log( mevalar[i] );
}
let savzavotlar = ["Sabzi","Tarvuz","Qovun","Pomidor"];

for(let i=0;i<savzavotlar.length;i++){
    console.log( savzavotlar[i] );
}
mevalar = [
    ['olma','nok','anor','shaftoli','yana qanaqadur meva'],
    ['sabzi','piyoz','kartoshka' ],
    ['tarvuz','qovun','handalak'],
];
console.log( '______________' );

console.log( mevalar[0][0] );
console.log( mevalar[0][1] );
console.log( mevalar[0][2] );

console.log(mevalar[1][0]);
console.log(mevalar[1][1]);
console.log(mevalar[1][2]);


/*Whilega olib o'tasiz */


let mevalar_toplami;
let maxsulotlar_nomi  ;
for(let i = 0; i<mevalar.length; i++){
    if(i == 0 ) maxsulotlar_nomi = 'Mevalar: ';
    else if(i == 1 ) maxsulotlar_nomi = 'Sabzavotlar: ';
    else maxsulotlar_nomi = 'Poliz ekinlari: ';
  mevalar_toplami  = '';
   for(let k = 0; k < mevalar[i].length;k++){
    mevalar_toplami += mevalar[i][k] + ' ';
   }
   console.log(maxsulotlar_nomi + mevalar_toplami);
}

/*Whilega olib o'tasiz */

var i = 0;
console.log('______');
for(let qiymat of mevalar){
    if(i == 0 ) maxsulotlar_nomi = 'Mevalar: ';
    else if(i == 1 ) maxsulotlar_nomi = 'Sabzavotlar: ';
    else maxsulotlar_nomi = 'Poliz ekinlari: ';
    mevalar_toplami = '';
    for(let mahsulot of qiymat){
       mevalar_toplami += mahsulot + ' ';
    }
     console.log(maxsulotlar_nomi + mevalar_toplami);
    i++;
}



for(let key in mevalar){
    for(let key2 in mevalar[key]){
        console.log(mevalar[key][key2]);
    }
}





