"use strict";
let a = 3;
let b = 3;
if(a>b){
    console.log('ishlayapti ' + a + '>' + b);
}
else if(a==b){
    console.log('ishlayapti ' + a + '=' + b);
}
else {
    console.log('ishlayapti ' + a + '<' + b);
}

let ish = 'olindiz';

if(ish=='olindiz'){
    console.log('ishga kiribsiz!');
}
else{
    console.log('ishga kirmabsiz!');

}

let yosh = 20;
 ish = 'dasturchi1';
 let tuman = 'Marhamat';
if(yosh >= 20 && ( ish=='dasturchi' || tuman!='Marhamat') ){
    console.log('ishga olindingiz!');
}else {
    console.log('ishga olinmadingiz!');
}
let j_num = 5;
if(j_num == 1){
    console.log('ohirida javob berasiz');
}

let dori='Sitramon';
let adminpanel ='admin';
let time = '08:00';
let dirktor_status = 'left';
if(adminpanel == 'admin' || adminpanel =='adminpanel'){
    if(time == '08:00'){
        console.log('Admin panelga kirish');
            if(dirktor_status!='online'){
                console.log('Admin panelga chiqish');

            }
    }else if(time == '10:00'){
        console.log('Admin panelga kirish hozir nonushta!');

    }

}
let son = 5;
switch(status){
    case '': 
        
    break; 
    case 2:
        console.log(2);
    break;
    default:
        console.log(son);

}
yosh  = 20;
switch(yosh){
    case 40:
        mening yhi 40da
    break;
    case 35:
        menig 35;
    break;
    case 20:
        console.log('Mening yoshim ' + yosh + 'da');
        break;
}



