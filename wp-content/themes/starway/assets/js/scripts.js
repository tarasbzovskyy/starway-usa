var $ = jQuery;

function menuButton(){
    var menu = $('.menu-button');

    menu.on('click', function(){
        $(this).addClass('active');
        if ($(this).hasClass('active')){
            menuAnimation.play();
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
            menuAnimation.reverse();
        }
    });

       var menuAnimation = anime.timeline({
            duration: 300,
            delay:0,
            easing: 'easeInCirc'
        });
        menuAnimation.add({
            targets: '.stripe1',
            translateY: 5
        })
            .add({
                targets: '.stripe3',
                translateY: 5,
        })

    menuAnimation.pause();

}

$(document).ready(function () {
    // menuButton()
});

$(window).on("load", function () {

});

window.onresize = function (e) {

};