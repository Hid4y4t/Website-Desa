$(function() {
    var pull = $('#mobile');
    var pull = $('#mobile2'); // Variabel tombol navigasi (akan muncul hanya pada perangkat mobile)
    menu = $('nav ul'); // Variabel menu

    // $(mobile).on('click', function(a) {
    //     a.preventDefault();
    //     menu.slideToggle();
    // });
    $(window).resize(function() {
        var w = $(window).width();
        if (w > 600 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }
    });
});

$(document).ready(function() {
    $(".bimbingan-karir2").click(function() {
        $(".bimbingan-karir").css("left", "0");
    });

    $(".keluar").click(function() {
        $(".bimbingan-karir").css("left", "-100vw");
    });
});