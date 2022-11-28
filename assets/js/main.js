$('.single-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
   useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});
$('.timetable-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: false,
   useTransform: true,
    speed: 400,
    dots: true,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});
$('.gallery-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
   useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});
$('.gallery-slider-2').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
   useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});
$('.gallery-slider-3').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
    autoplay: true,
   useTransform: true,
    speed: 400,
    cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});
$('.nav-slider')
    .on('init', function(event, slick) {
        $('.nav-slider .slick-slide.slick-current').addClass('is-active');
    })
    .slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        focusOnSelect: false,
        infinite: true,
        responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
            }
        }, {
            breakpoint: 640,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
           }
        }, {
            breakpoint: 420,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
       }
        }]
    });

$('.single-slider').on('afterChange', function(event, slick, currentSlide) {
    $('.nav-slider').slick('slickGoTo', currentSlide);
    var currrentNavSlideElem = '.nav-slider .slick-slide[data-slick-index="' + currentSlide + '"]';
    $('.nav-slider .slick-slide.is-active').removeClass('is-active');
    $(currrentNavSlideElem).addClass('is-active');
});

$('.nav-slider').on('click', '.slick-slide', function(event) {
    event.preventDefault();
    var goToSingleSlide = $(this).data('slick-index');

    $('.single-slider').slick('slickGoTo', goToSingleSlide);
});

$('.log-carousel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    autoplay: true
})

$(document).on('scroll', function(){
    if($(document).scrollTop() > 100){
        $('.nav-area').addClass('shrink'); 
        $('.menu-btn-area').addClass('sp-shrink'); 
        $('.nav-area-red').addClass('shrink-white');
    } else{
        $('.nav-area').removeClass('shrink');
        $('.menu-btn-area').removeClass('sp-shrink');
        $('.nav-area-red').removeClass('shrink-white');
    }
})
// window.onscroll = function (e) {
//     if(window.scrollY > 2070){
//         $('.nav-area').removeClass('shrink');
//         $('.nav-area').addClass('shrink-white');

//     }
//     // console.log(window.scrollY); // Value of scroll Y in px
// };

const menuBtn = document.querySelector('.menu-btn');
const burger = document.querySelector('.menu-btn-burger');
const nav = document.querySelector('.nav-sp');
const menuNav = document.querySelector('.nav-sp-container');
const navItems = document.querySelectorAll('.nav-sp-item');
let showMenu = false;

menuBtn.addEventListener('click', toggleMenu)

function toggleMenu(){
    if(!showMenu){
        burger.classList.add('open');
        nav.classList.add('open');
        menuNav.classList.add('open');
        menuNav.classList.remove('close');
        navItems.forEach(item => item.classList.add('open'));
        showMenu = true;
    } else {
        burger.classList.remove('open');
        menuNav.classList.remove('open');
        menuNav.classList.add('close');
        navItems.forEach(item => item.classList.remove('open'));
        showMenu = false;
    }
}

//  $(document).ready(function() {
//     $(window).keyup(function(e){
//       if(e.keyCode == 44){
//         $("body").hide();
//       }

//     }); }); 
document.addEventListener('keyup', (e) => {
    if (e.key == 'PrintScreen') {
        navigator.clipboard.writeText('');
        alert('Screenshots disabled!');
    }
});

/** TO DISABLE PRINTS WHIT CTRL+P **/
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.key == 'p') {
        alert('This section is not allowed to print or export to PDF');
        e.cancelBubble = true;
        e.preventDefault();
        e.stopImmediatePropagation();
    }
});

