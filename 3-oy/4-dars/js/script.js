
document.getElementById('slider_row').onmousemove = function(e){
    document.getElementById('slider2').style.width = e.clientX + 'px';
}
document.getElementById('slider_row').onmouseleave = function(){
    document.getElementById('slider2').style.width = '375px';

}

for(let i=1;i<=9;i++){
    document.getElementById('game').innerHTML += '<span class="mygameblock"></span>'
}
let son = 0;

document.getElementById('game').onclick = function(e){


   if(Array.from(event.target.classList).indexOf('mygameblock') > -1){
    if(event.target.innerHTML  == ''){
        if( son % 2 ==0) e.target.innerHTML = 'X';
        else e.target.innerHTML = '0';
        son++;
        checkGame();
    }else{
        alert('boshqa katak tanlang');
    }
   } 

  
}

function checkGame(){
    let blocks = document.querySelectorAll('.mygameblock');
    let tolgan = 0;
    for(let element of blocks){
        if(element.innerHTML != '') tolgan ++;
    }
    if(checkPosition('X',blocks)){
        console.log('X lar yutddi');
        resetGame(blocks);
    }
    else if(checkPosition('0',blocks)) {
        console.log('0 lar yutddi');
        resetGame(blocks);
  
    }
    else if (tolgan == blocks.length){
        console.log('durrang'); 
        resetGame(blocks);
 
    }    

    
}

function checkPosition(pos,blocks){
    switch(true){
     case blocks[0].innerHTML == pos && blocks[1].innerHTML == pos && blocks[2].innerHTML == pos:
         case blocks[3].innerHTML == pos && blocks[4].innerHTML == pos && blocks[5].innerHTML == pos:
         case blocks[6].innerHTML == pos && blocks[7].innerHTML == pos && blocks[8].innerHTML == pos:
          case blocks[0].innerHTML == pos && blocks[3].innerHTML == pos && blocks[6].innerHTML == pos:
         case blocks[1].innerHTML == pos && blocks[4].innerHTML == pos && blocks[7].innerHTML == pos:
          case blocks[2].innerHTML == pos && blocks[5].innerHTML == pos && blocks[8].innerHTML == pos:
          case blocks[0].innerHTML == pos && blocks[4].innerHTML == pos && blocks[8].innerHTML == pos:
          case blocks[2].innerHTML == pos && blocks[4].innerHTML == pos && blocks[6].innerHTML == pos:
              return true;
        default: return false;      
    }
}
function resetGame(blocks){
    for(let element of blocks){
        element.innerHTML = '';
    }

    son = 0;
}



