$(document).ready(function() {
    $('i.menu-toggle').click(function(){
        $('.nav').toggleClass('showin');
    });
    
    $('#madmin').click(function(){
        $('.admin').toggleClass('showin');
    });

    $('#madmin').click(function(){
        $('#sidebare-right').toggleClass('on')
        $('main').toggleClass('activeMain')
    });
    $('#close-sidebare-right').click(function(){
        $('#sidebare-right').toggleClass('on')
        $('main').toggleClass('activeMain')
    })
})