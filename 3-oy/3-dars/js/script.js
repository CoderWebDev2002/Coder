document.getElementById('tepaga').onclick = function(){
    let scrolling = window.pageYOffset;
    let time = 50; //vaqt
    ScrollToTop();
    function ScrollToTop(){
        if(scrolling > 0){
            scrolling -=50; //tezlik 
            window.scrollTo(0,scrolling);
            var int = setTimeout(ScrollToTop,time);
   
        }else{
            clearTimeout(int);
            window.scrollTo(0,0);
        }
        


       
    }
   
}

document.onwheel = function(){
    if(pageYOffset>100){
        
        document.getElementById('tepaga').style.display = 'inline-block';
    }else{
        document.getElementById('tepaga').style.display = 'none';

    }
}
var left = document.getElementById('slider').style.left;
document.getElementById('scroll_left').onclick = function(){
    left -=64;
    if(left < -256) left = 0;
    document.getElementById('slider').style.left = left + 'px';
}

document.getElementById('range').oninput = function(){
    console.log(this.value);
}

let body = document.getElementsByTagName('body')[0];
body.insertAdjacentHTML('beforeend','<img src="img/cat.png" alt="" id="cat">');
let cat = document.getElementById('cat');
cat.style.position = 'fixed';

document.onmousemove = function(event){
    cat.style.left = event.clientX + 20 + 'px';
    cat.style.top = event.clientY + 20 + 'px';
}