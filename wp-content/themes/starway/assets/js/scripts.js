var $ = jQuery,
    twp = new TimelineLite({paused:true}),
    twm = new TimelineLite({paused:true}),
    tw = new TimelineLite(),
    Stars;

function menuButton(){
    var menuButton = $('.menu-button'),
        menu = $('.main-menu'),
        menuElements = $('#site-navigation li');
    var block = $('.stripe-block'),
        st3 = block.find('.stripe3'),
        st13 = $('.stripe-block .stripe1, .stripe-block .stripe3'),
        st24 = $('.stripe-block .stripe2, .stripe-block .stripe4');

    twm.to(st13, .1, {x:6, onComplete:function(){
        twm.to(st24, 0, {opacity:0});
        twm.to(st3, .1, {x:-6, onComplete:function(){
            twm.to(st3, .2, {rotation:115})
        }})
    } },0);

    twp.staggerTo(menuElements, .2, {opacity: 1, x:15, delay: .6 }, .2);

    $('#primary-menu').on('click','li',function(){
        menuButton.removeClass('active');
        tw.to(menu, .3, {left:'102%', delay:.3, onComplete:function(){
            tw.to(menu, 0, {opacity:0,css:{display:'none'}});
            twp.reverse();
            twm.reverse();
        }})
    });
    menuButton.on('click', function(){
        if (!$(this).hasClass('active')){
            $(this).addClass('active');
            menu.css('left',0).fadeIn(400);
            window.setTimeout(function(){
                $('.site-header').delay(600).addClass('fixed-header');
            },400);
            twp.play();
            twm.play();

        } else {
            $('.site-header').removeClass('fixed-header');
            $(this).removeClass('active');
            menu.fadeOut(400);
            twp.reverse();
            twm.reverse();
        }
    });

}


(function (Stars) {

    function random(min, max) {
        if (max === void 0) { max = 0; }
        if (min > max) {
            var t = min;
            min = max;
            max = t;
        }
        return min + Math.random() * (max - min);
    }
    var hue = 216,
        blinkRatio = .01,
        starSize = 200, // stars size
        speed = 1, // Speed (% of star radius)
        starCount = 1000;

    if (window.matchMedia("(max-width:767px)").matches) {
        starCount = 500;
    }
    if (window.matchMedia("(max-width:575px)").matches) {
        starCount = 250;
    }

    function hypotenuse(width, height) {
        return Math.sqrt(width * width + height * height);
    }
    var Star = (function () {
        function Star() {
            this.orbitRadiusPercent = Math.random();
            this.resize();
            this.radiusPercent = random(this.orbitRadius / this.maxOrbitRadius);
            this.radius = starSize * this.radiusPercent;
            this.timePassed = random(2 * Math.PI);
            // angle = angle to move half of the star
            var angle = 2 * Math.asin(this.radius / (2 * this.orbitRadius));
            this.speed = random(angle / 32, angle / 64) * speed;
            this.alpha = random(.1, .4);
        }
        Star.prototype.draw = function (stars) {
            var x = Math.sin(this.timePassed) * this.orbitRadius - this.radius / 2, y = Math.cos(this.timePassed) * this.orbitRadius - this.radius / 2;
            x += (1 - this.radiusPercent) * stars.parallax.x;
            y += (1 - this.radiusPercent) * stars.parallax.y;
            stars.ctx.globalAlpha = this.alpha + (Math.random() > blinkRatio ? 0 : .6);
            stars.ctx.drawImage(this.canvas, x, y, this.radius, this.radius);
            this.timePassed += this.speed;
        };
        Star.prototype.resize = function () {
            this.orbitRadius = this.orbitRadiusPercent * this.maxOrbitRadius;
        };
        return Star;
    })();
    var Canvas = (function () {
        function Canvas(canvas) {
            this.stars = [];
            this.mouse = { x: 0, y: 0 };
            this.parallax = { x: 0, y: 0 };
            var self = this;
            this.canvas = canvas;
            this.ctx = canvas.getContext("2d");
            this.resize();
            // Create stars
            for (var i = 0; i < starCount; i++) {
                this.stars[this.stars.length] = new Star();
            }
            var bodyy = document.body; //move by body
            bodyy.addEventListener('mousemove', function (e) {
                self.mouse.x = e.clientX;
                self.mouse.y = e.clientY;
            });
            this.canvas.addEventListener('click', function (e) {
                self.pause = !self.pause;
            });
            window.addEventListener('resize', this.resize.bind(this));
            this.pause = false;
        }
        Object.defineProperty(Canvas.prototype, "pause", {
            get: function () {
                return this._pause;
            },
            set: function (pause) {
                this._pause = pause;
                if (!pause)
                    this.animation();
            },
            enumerable: true,
            configurable: true
        });
        Canvas.prototype.resize = function () {
            this.canvas.width = this.canvas.clientWidth;
            this.canvas.height = this.canvas.clientHeight;
            Star.prototype.maxOrbitRadius = hypotenuse(this.canvas.width, this.canvas.height);
            for (var i = 0; i < this.stars.length; i++) {
                this.stars[i].resize();
            }
        };
        Canvas.prototype.animation = function () {
            if (this.pause)
                return;
            this.parallax.x += (this.mouse.x - this.parallax.x) / 60;
            this.parallax.y += (this.mouse.y - this.parallax.y) / 60;
            //this.ctx.globalCompositeOperation = 'destination-out';
            //this.ctx.globalCompositeOperation = 'xor';
            //this.ctx.globalCompositeOperation = 'multiply';
            // this.ctx.globalCompositeOperation = 'lighten'; // drawning line
            this.ctx.globalCompositeOperation = 'hard-light'; //zbs
            // this.ctx.globalCompositeOperation = 'difference'; // COMETA SUKA !
            // this.ctx.globalCompositeOperation = 'hue'; // drawning not bad
            // this.ctx.globalCompositeOperation = 'saturation'; // drawning not bad too
            //this.ctx.globalCompositeOperation = 'luminosity'; // drawning not bad too
            this.ctx.globalAlpha = .4;
            this.ctx.fillStyle = 'hsl(' + hue + ', 60%, 10%)';
            this.ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
            this.ctx.globalCompositeOperation = 'lighter';
            for (var i = 0; i < this.stars.length; i++) {
                this.stars[i].draw(this);
            }
            window.requestAnimationFrame(this.animation.bind(this));
        };
        return Canvas;
    })();
    Stars.Canvas = Canvas;
    var canvas = document.createElement('canvas'), ctx = canvas.getContext('2d');
    // Star Resolution
    canvas.width = starSize;
    canvas.height = starSize;
    var radius = starSize / 2, gradient = ctx.createRadialGradient(radius, radius, 0, radius, radius, radius);
    gradient.addColorStop(.08, '#fff');
    gradient.addColorStop(.1, 'hsl(' + hue + ', 60%, 20%)');
    gradient.addColorStop(.2, 'hsl(' + hue + ', 60%, 10%)');
    gradient.addColorStop(1, 'transparent');
    ctx.fillStyle = gradient;
    ctx.beginPath();
    ctx.arc(radius, radius, radius, 0, Math.PI * 2);
    ctx.fill();
    Star.prototype.canvas = canvas;
    Star.prototype.ctx = ctx;



})(Stars || (Stars = {}));

function fullHeight(target) {
    var getSizes = getWindowSizes(),
        height = getSizes.split('#')[1],
        width = getSizes.split('#')[0],
        navBarHeight = document.getElementById('masthead').clientHeight;

        $(target).css({
            height: (height - navBarHeight) + 'px'
        });
    }

function getWindowSizes() {
    var myWidth = 0, myHeight = 0;
    if( typeof( window.innerWidth ) == 'number' ) {
        //Non-IE
        myWidth = window.innerWidth;
        myHeight = window.innerHeight;
    } else if( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) ) {
        //IE 6+ in 'standards compliant mode'
        myWidth = document.documentElement.clientWidth;
        myHeight = document.documentElement.clientHeight;
    } else if( document.body && ( document.body.clientWidth || document.body.clientHeight ) ) {
        //IE 4 compatible
        myWidth = document.body.clientWidth;
        myHeight = document.body.clientHeight;
    }
    return myWidth + '#' + myHeight
}

//Parallax effect
function parallaxEffect() {
    var element = $('[data-smooth]');
    element.each(function (i, el) {
         var getData = $(this).data('smooth'),
             delay = $(this).data('delay');
        $(window).scroll(function () {
            var top = $(this).scrollTop();
            $(el).css({
                "transform": "translateY(" + top / getData + "px)",
                "-webkit-transform": "translateY(" + top /getData + "px)",
                "-moz-transform": "translateY(" + top / getData + "px)"
            })
        });
    });
}


function frt_allHeightAsOne(selector, midWay) {
    var heightArr = new Array();

    if (midWay == null || midWay == 'undefined'){
        midWay = '.wpb_wrapper > div';
    }

    selector.each(function(i,a){
        var elemHeight = parseInt($(this).css('height'));
        heightArr.push(elemHeight);
    });

    maxHeight = Math.max.apply(null, heightArr);
    selector.css('height',maxHeight+'px');

    if (selector.hasClass('skew-space')){
        selector.parent().find('.skew-space').css('height',0);
    }

}
function noWords(e) {
    if ((e.charCode >= 48 && e.charCode <= 57) || (e.keyCode>=37 && e.keyCode<=46) || e.keyCode==8) {
        return true;
    } else if (e.keyCode == 13) {
        e.preventDefault();
    } else {
        e.preventDefault();
    }
};

function scrollingAnimation(target, addSomeClass, offsetPercent) {
    var el = $(target);
    var waypoints = el.waypoint(function(direction) {
        $(this.element).each(function(){
            $(this).addClass(addSomeClass)
        });
    }, {
        offset: offsetPercent
    })

}


function mouseParallax(target) {
    var element = $(target);

    element.each(function(){

        var that = this,
            // view = $(that).parents('.viewpoint'),
            getStep = $(that).data('step'),
            step = 150;

        if (typeof getStep !== "undefined" ) {
            step = getStep;
        }

        $('body').mousemove(function(e){
            var xx = e.clientX,
                yy = e.clientY;

                $(that).css({
                'transform': 'translate(-'+ xx/step +'% ,-' + yy/step + '%)'
            })

        })
    })

}

function fadeEffect() {
    var el = $('.fade-in'),
        target = el.find('.fade-me-in');

    tw.staggerTo(target, 0, {opacity: 0,x:-20});

    if (!$('.fade-in').hasClass('start')) {
        var waypoints = el.waypoint(function(direction) {
            $(this.element).each(function(){
                $(this).addClass('start');
                if ($(this).hasClass('start')) {
                    tw.staggerTo($(this).find('.block-skew'), .3, {opacity: 1, x:0}, .1);
                }
            });
        }, {
            offset: '50%'
        })
    }

}

function scrollToEelement(select, speed) {
    if (speed === 'undefined' ) {
        speed = 1000
    }
    jQuery('html, body').animate({
        scrollTop: parseInt(select.offset().top)
    }, speed);
};

function cropLargeUrls(target, number){
    target.each(function(){
        if (jQuery(this).text().length > number) {
            jQuery(this).text(jQuery(this).text().substring(0,number) + '...');
        }
    });
}

//functions init
$(document).ready(function () {

    setTimeout(function(){
        $('.logo-loading').addClass('start');
    },200)



    menuButton();
    if ($('body').hasClass('home')) {
        var headerCanv = $('<canvas/> ', {
            id:'space'
        }).prependTo('body');
        var stars = new Stars.Canvas(document.getElementById('space'));
    }

    var swiper = new Swiper('.swiper-container', {
        effect: 'fade',
        autoplay: {
            delay: 5000,
        },
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            nextEl: '.swiper-nav-next',
            prevEl: '.swiper-nav-prev',
        },
    });

    if (window.matchMedia("(min-width:400px)").matches) {
        if ($('#masthead').length) {
            fullHeight('.full-height')
        }
    } else {
        // < 400px
    }

    if ($('body').hasClass('home')) {
        setTimeout(function(){
            $('body').addClass('lets-party');
            scrollToEelement($('body'), 1);
            if ($('body.page').hasClass('lets-party')) {
                if (window.matchMedia("(min-width:768px)").matches) {
                    mouseParallax('.walking-block');
                    parallaxEffect();
                    $('html').smoothScroll(500);
                }

                scrollingAnimation('.block-reveal','on-screen','50%');
                fadeEffect();
            }
        },4000);
    } else {
        setTimeout(function(){
            $('body').addClass('lets-party');
            if ($('body.page').hasClass('lets-party')) {
                if (window.matchMedia("(min-width:768px)").matches) {
                    mouseParallax('.walking-block');
                    parallaxEffect();
                    $('html').smoothScroll(500);
                }

                scrollingAnimation('.block-reveal','on-screen','80%');
                fadeEffect();
            }
        },1000);
    }


    $('.show-contact-form').on('click',function(){
        scrollToEelement($('.contacts-block'))
    });
    if ($('.only-numbers').length) {
        noWords($('.only-numbers'))
    }
});

$(window).on("load", function () {
    if($('#masthead').length) {
        fullHeight('.full-height');
        fullHeight('.main-header');
    }
    if (window.matchMedia("(min-width:768px)").matches && $('.particles-js').length) {
        $('.particles-js').each(function(num, index){
            var elem = $('<div/>', {
                id: 'particles-js'+'-'+ num
            }).prependTo(this);
            particlesJS.load('particles-js'+'-'+ num, '/wp-content/themes/starway/assets/js/particlesjs-config.json');
        })
    }
    if ($('#masthead').length) {
        fullHeight('.full-height')
    }
});

window.onresize = function (e) {
    if ($('#masthead').length) {
        fullHeight('.full-height')
    }
};