"use strict";

document.getElementById('all_corners').oninput = function(){
    document.getElementById('block').style.borderRadius = this.value + 'px';
    document.getElementById('content').innerHTML = `border-radius: ${this.value}px ${this.value}px ${this.value}px ${this.value}px;<br>-moz-border-radius: ${this.value}px ${this.value}px ${this.value}px ${this.value}px;<br>-webkit-border-radius: ${this.value}px ${this.value}px ${this.value}px ${this.value}px;<br>border: 0px solid #000000;<br>`;
}