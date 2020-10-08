var less = require('less');
var fs = require('fs');
var lessFile = fs.readFileSync('style/style.less',{encoding:'utf-8'});
less.render(lessFile,function (error,output) {
    if(error) throw new Error(error);
    fs.writeFileSync('style/style.css',output.css);
     
});

