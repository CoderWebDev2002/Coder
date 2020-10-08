"use strict";
document.getElementById('ochish').onclick = function(){
    document.getElementById('clickf').innerHTML = 'Lorem ipsum...';
}
document.getElementById('yopish').onclick = function(){
    document.getElementById('clickf').innerHTML = '';
}
// document.getElementById('focus').onblur = function(){
    // let elem = document.getElementById('focus');
    // let v = elem.value;
    // if(v == '') elem.insertAdjacentHTML('beforeend','<b>Login toldirilishi shart</b>');
    // else if(v == 'admin')  elem.insertAdjacentHTML('afterend','<b>Bunday login band</b>');
    // else elem.insertAdjacentHTML('afterend','<b>✅</b>');

    // "afterbegin" - ohirga faqat elementni ichiga
    // "afterend" - ohiriga faqat elementni tashqarisiga
    // "beforebegin" - boshiga faqat elementni tashqarsiga
    // "beforeend"ohiriga faqat elementni ichiga
// }
// document.getElementById('focus').onchange = function(){
//         let elem = document.getElementById('focus');
//     let v = elem.value;
//     if(v == '') elem.insertAdjacentHTML('beforeend','<b>Login toldirilishi shart</b>');
//     else if(v == 'admin')  elem.insertAdjacentHTML('afterend','<b>Bunday login band</b>');
//     else elem.insertAdjacentHTML('afterend','<b>✅</b>');
// }
// document.getElementById('focus').onfocus = function(){
//     let elem = this.style.border = '1px solid red';
//     // background-color
//     // backgroundColor
// }





// document.getElementById('focus').onchange = function(){
      
// }
document.getElementById('l').ondblclick = function(){
    alert('doubleclick');

}
// document.getElementById('l').onmousedown = function(){
//     alert('mousedown');
// }
document.getElementById('l').oncontextmenu = function(){
    alert('contextmenu');
    return false;
}
// document.getElementById('l').onmousemove = function(e){
//     console.log(e);
// }
// document.getElementById('l').onmouseenter = function(e){
//     alert('hover');
// }
// document.getElementById('l').onmouseout = function(e){
//     alert('mouseout ');
// }
// document.getElementById('l').onmouseover = function(e){
//     alert('mouseover ');
// }
document.getElementById('l').onmouseup = function(e){
    
    alert('mouseup ');
}
// document.getElementById('focus').onselect = function(){
//     alert('select');
// }
document.getElementsByTagName('body')[0].onunload = function(){
    confirm('Oynani yopasizmi?')
}
// document.getElementById('focus').onkeydown = function(){
//     let v = this.value;

//     let insertedContent = document.querySelector(".insertedContent");
//     if(insertedContent) {
//         insertedContent.parentNode.removeChild(insertedContent);
//     }
//         if(v == '') this.insertAdjacentHTML('beforeend','<b class="insertedContent">Login toldirilishi shart</b>');
//     else if(v.length < 5 ) this.insertAdjacentHTML('afterend','<b class="insertedContent">Minimum 5 ta harf boliw wart</b>');
//     else if(v == 'admin')  this.insertAdjacentHTML('afterend','<b class="insertedContent">Bunday login band</b>');
//     else this.insertAdjacentHTML('afterend','<b class="insertedContent">✅</b>');
// }
// document.onkeypress = function (){
//     alert('keypress');
// }
// document.onkeyup = function(){
//     alert('keyup');

// }

document.getElementById('focus').addEventListener('change',myFuction);
document.getElementById('pass').addEventListener('change',myFuction);

function myFuction(e){
    let v = this.value;
    console.log(e);
    let insertedContent = document.querySelector(".insertedContent");
    if(insertedContent) {
        insertedContent.parentNode.removeChild(insertedContent);
    }
        if(v == ''){
            this.insertAdjacentHTML('beforeend','<b class="insertedContent error-color">Login toldirilishi shart</b>');
            this.classList.add('error');
            this.classList.remove('done');
        } 
    else if(v.length < 5 ) {
        this.insertAdjacentHTML('afterend','<b class="insertedContent error-color" >Minimum 5 ta harf boliw wart</b>');
        this.classList.add('error');
        this.classList.remove('done');


    }
    else if(v == 'admin')  {
        this.insertAdjacentHTML('afterend','<b class="insertedContent error-color">Bunday login band</b>');
        this.classList.add('error');
        this.classList.remove('done');

    }
    else {
        this.insertAdjacentHTML('afterend','<b class="insertedContent">✅</b>');
        this.classList.add('done');
        this.classList.remove('error');

    }
}