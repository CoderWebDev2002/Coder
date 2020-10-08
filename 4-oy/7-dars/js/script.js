$('.cartjs').on('click',function(){
    $('#cart').modal({
        backdrop:'static',
        keyboard:false
        
    });
});

$('.cartjs2').on('click',function(){
    $('#cart').modal('show');

});
$('.closewithjs').on('click',function(){
    $('#cart').modal('hide');
});

// $('#cart').on('hide.bs.modal', function (e) {
//     alert('Yopilmoqda');
// });
// $('#cart').on('hidden.bs.modal', function (e) {
//     alert('YOpilib boldi');
// });
// $('#cart').on('show.bs.modal', function (e) {
//     alert('Ochilmoqda');
// });

// $('#cart').on('shown.bs.modal', function (e) {
//     alert('Ochilib bolindi');
// });

$('#cart').on('hidePrevented.bs.modal', function (e) {
    alert('Static');
});