$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    items: 1,
    nav: false,
    dots: false,
    autoplay: true
})


window.addEventListener('scroll',function (){
    let header = document.querySelector('.navbar')
    header.classList.toggle('navbar-scrolled', scrollY > 100)
})
