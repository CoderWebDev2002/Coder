function echo(t){
    console.log(t);
}
// let $menu = $('li');

// for(let i = 0;i<$menu.length;i++){
//     // $menu.get(i).style.color = "red";
// }
// let menu = $('#menu').get(0).style.color = "red";
//  menu = $('.test1').get(0).style.color = "green";

// $form = $(':text');
// for(let i = 0;i<$form.length;i++){
//     $form.get(i).style.border = "1px solid red";
// }

// $menu_a = $('#menu a').get(0).style.color = 'black';
// $menu_a = $('#menu li:first').get(0).style.color = 'yellowgreen';
// $menu_a = $('#menu li:eq(1)').get(0).style.color = 'yellowgreen';


// $('#jins').get(0).onclick = function(){
//    echo( $(':text').val().trim() );
//    echo($('input[name="jins"]:checked').val());
//    echo($.trim());
// }
//  let $menu = $('#menu').add('.test1').add('.test2');
 let $menu = $('#menu,.test1,.test2');
 for(let i = 0;i<$menu.length;i++){
     $menu.css('color','red');
}

$imgs_not_alt = $('img').not('img[alt="k"]');


for(let i = 0;i<$imgs_not_alt.length;i++){
    $imgs_not_alt.get(i).setAttribute('alt','Jqeury');
}


$('.test2').get(0).onclick = function(){
    $(this).css('backgroundColor','pink').css('border','1px solid red');
    // $(this).html('<b>Bold</b>');
    $(this).html('<b>Bold</b>');
    // $(this).append('<b>Test</b>');
  
};

$( ".greet" ).appendTo( '.container' );
$( ".greet" ).wrap( '<h1>asd</h1>' );
// $( ".greet" ).remove(  );
// $( ".greet" ).empty(  );
// $( ".container" ).insertAfter( ".test2" );
// $( ".container" ).insertBefore( ".test2" );

let $clone = $('.container').clone();
$('#testmyclone').bind('click mousemove change',bgcol);

function bgcol(){
    
        $(this).css('backgroundColor','red');
    
}

$('.second').hide();
$('.first').bind('click',function(){
    $(this).fadeOut();
    $('.second').fadeIn(1000);
   
});
$('.second').bind('click',function(){
    $(this).fadeOut();
    $('.first').fadeIn(1000);
});