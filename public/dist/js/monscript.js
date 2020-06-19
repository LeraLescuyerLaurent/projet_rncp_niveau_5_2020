$(document).ready(function() {
    $('.menu-toggle').on('click', function() {
        $('.nav').toggleClass('showin');
    })
    $('#madmin').on('click', function() {
        $('.navadmin').toggleClass('showin')
    })
    $('#toggleAdminBtn').on('click', function() {
        $('#sidebaAdmin').toggleClass('active')
        $('main').toggleClass('activeMain')
        $('#toggleAdminBtn').toggleClass('col')
    })
    $('#closeMenuAdmin').on('click', function() {
        $('#sidebaAdmin').toggleClass('active')
        $('main').toggleClass('activeMain')
        $('#toggleAdminBtn').toggleClass('col')
    })

})


