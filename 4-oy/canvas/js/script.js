var $canvas = document.querySelector('#c1');
let $ctx = $canvas.getContext('2d');

// $ctx.fillStyle = "red";
// $ctx.fillStyle = "rgba(255,0,0,0.5)";
// $ctx.fillRect(200,50,150,75);
// $ctx.fillStyle = "#fff";

// $ctx.fillRect(50,100,200,100);
// $ctx.clearRect(0,0,400,200);




// $ctx.strokeStyle = 'red';
// $ctx.lineWidth = 5;
// $ctx.fillStyle = 'green';
// $ctx.rect(45,45,100,100);
// $ctx.stroke();
// $ctx.fill();



// $ctx.beginPath();
// $ctx.strokeStyle = 'red';
// $ctx.lineWidth = 5;
// $ctx.moveTo(50,50);
// $ctx.lineTo(200,200);
// $ctx.stroke();


// $ctx.beginPath();
// $ctx.moveTo(200,200);
// $ctx.lineTo(300,40);
// $ctx.strokeStyle = 'blue';
// $ctx.stroke();

// $ctx.beginPath();

// $ctx.moveTo(150,50);
// $ctx.lineTo(250,50);
// $ctx.lineWidth = 10;
// $ctx.lineCap = 'square';
// $ctx.stroke();


// $ctx.beginPath();


// $ctx.lineWidth = 10;
// $ctx.lineCap = 'round';
// $ctx.moveTo(150,100);
// $ctx.lineTo(250,100);
// $ctx.lineTo(250,150);
// $ctx.stroke();

// $ctx.clearRect(0,0,400,200);

// $ctx.closePath();

// $ctx.beginPath();
// $ctx.moveTo(50,150);
// $ctx.lineTo(150,50);
// $ctx.lineTo(200,150);
// $ctx.lineTo(50,150);
// $ctx.lineCap = 'round';
// $ctx.lineWidth = 4;
// $ctx.fillStyle = 'yellow';

// $ctx.stroke();
// $ctx.fill();

// let myColor;
//     $canvas.addEventListener('mousedown',function(){
//         $canvas.onmousemove = function(e){
//             color = document.querySelector('#color').addEventListener('input',function(){
//                     myColor = this.value;
//             });
//             let x = e.offsetX;
//             let y = e.offsetY;
//             $ctx.fillStyle = myColor;
//             $ctx.fillRect(x,y,10,10);
//             };
//         $canvas.addEventListener('mouseup',function(){
//             $canvas.onmousemove = null;
//         });
// });


// $ctx.beginPath();
// $ctx.strokeStyle = 'red';
// $ctx.lineWidth = 5;
// $ctx.arc(100, 75,50, 0,2* Math.PI,true);
// $ctx.stroke();
// $ctx.fill();
// $ctx.closePath();


// $ctx.beginPath();
// $ctx.strokeStyle = 'green';
// $ctx.lineWidth = 5;
// $ctx.arc(150, 80,150, 0,2* Math.PI,true);
// $ctx.stroke();
// $ctx.fill();
// $ctx.closePath();

// var x = 0;
// var timer;
// function drawSin(){
//     y = Math.sin(x);
    
//     if(5*x>=400){
//         x = 0;
//         $ctx.fillStyle = 'red';
//     }
//     else{
//         x= x+0.3 ;
//     }
//     $ctx.fillRect(5*x,100 + 20 * y,2,2);
//     timer = setTimeout(drawSin,100);
// }
// drawSin();



var $canvas = document.querySelector('#c2');
 $ctx = $canvas.getContext('2d');

var R = 50;
var r = 120;
var d = 50;
var teta = 0;
var timer;

function spiro(){
    var x = (R-r) * Math.cos(teta) + d * Math.cos( (R-r) * teta / r);
    var y = (R-r) * Math.sin(teta) - d * Math.sin( (R-r) * teta / r);
    teta += 0.3;

    $ctx.fillRect(300 + x ,300 + y,4,4);
    timer = setTimeout(spiro,1);
}
spiro();