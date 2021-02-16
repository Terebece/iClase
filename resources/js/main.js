$('#cuadrito').on('click', function (e) {
    // e.stopPropagation();
    
    $('#cuadrito').addClass('open');
    $('body').removeClass('overflowy_visible').addClass('overflowy_hidden');
    console.log("picado!");

});

$('.dropdown-menu .menu_white').on('click', function (e) {
    // e.stopPropagation();
    console.log("dentro!")
});

$('.dropdown-menu.main_menu_drop').on('click', function (e) {
    // e.stopPropagation();
    $('#cuadrito').removeClass('open');
    $('body').removeClass('overflowy_hidden').addClass('overflowy_visible');
    console.log("afuera")
});
