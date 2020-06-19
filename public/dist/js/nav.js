$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass('showin');
    })
    $('#madmin').on('click', function() {
        $('.admin').toggleClass('showin')
    })
    $('#sidebare-icone').on('click', function() {
        $('#sidebare-right').toggleClass('on')
        $('main').toggleClass('activeMain')
    })
    $('#close-sidebare-right').on('click', function() {
        $('#sidebare-right').toggleClass('on')
        $('main').toggleClass('activeMain')
    })
})