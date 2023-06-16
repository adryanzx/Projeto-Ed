let ul = document.querySelector('nav .ul');

function openMenu(){
    ul.classList.add('open');
}

function closeMenu(){
    ul.classList.remove('open');
}
const swiper = new Swiper('.carousel', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    pagination: {
        el: '.swiper-pagination'
    }
})
window.sr = ScrollReveal({reset:true});

sr.reveal('.banner-text', {duration:1000});

sr.reveal('.php-text', {duration:1000});

sr.reveal('.php-img', {duration:1000});

sr.reveal('.conectar', {duration:1000});

sr.reveal('.card', {duration:1000});

sr.reveal('.informacoes', {duration:1000});

sr.reveal('.cards', {duration:1000});

sr.reveal('.accordion', {duration:1000});

$("#signup").click(function() {
    $(".message").css("transform", "translateX(100%)");
    if ($(".message").hasClass("login")) {
      $(".message").removeClass("login");
    }
    $(".message").addClass("signup");
  });
  
  $("#login").click(function() {
    $(".message").css("transform", "translateX(0)");
    if ($(".message").hasClass("login")) {
      $(".message").removeClass("signup");
    }
    $(".message").addClass("login");
  });

