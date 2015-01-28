function moveCarousel() {
    $('#custom_carousel').carousel(2);
    $('#custom_carousel .controls li').addClass("active");
    $('#custom_carousel .controls li').addClass("carousel-disabled");
    
    intializeLoader();
}

