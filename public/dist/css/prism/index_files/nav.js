$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass('showin');
    })
    $('#madmin').on('click', function() {
        $('.admin').toggleClass('showin')
    })
})