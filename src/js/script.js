console.dir(document);

// dropdown inside navbar dropdown menus clickable
$('.dropdown-nav-tabs').find('.nav-link').hover(function() {
    if (!$(this).hasClass('active'))
        $(this).addClass('theme-color');
}, function() {
    if (!$(this).hasClass('active'))
        $(this).removeClass('theme-color');
});
$('.nav.nav-pills a').on('click', function() {
    $(this).tab('show');
    $('.dropdown-nav-tabs').find('.bg-light.theme-color').removeClass('bg-light theme-color');
    $('.dropdown-nav-tabs').find('a.active').addClass('bg-light theme-color');
    return false;
});
// end dropdown  inside navbar dropdown menus clickable

// tooltip
$(function() {
    $('[data-toggle="tooltip"]').tooltip()
})
// end tooltip




$('.owl-carousel.hot-deals').owlCarousel({
    animateOut: 'slideOutDown',
    animateIn: 'flipInY',
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
})

$('.owl-carousel.second-sec-main-banner').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});
var tabContent = $('.owl-carousel').closest('.tab-content');
tabContent.parent('div').find('.nav a').click(function() {
    tabContent.find('.active').removeClass('active');
});



$('.owl-carousel.new-arrivals-carousel').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 3
        },
        1000: {
            items: 5
        }
    }
})



$('.owl-carousel.featured-products').owlCarousel({
    loop: true,
    margin: 15,
    nav: true,
    dots: false,
    autoplay: false,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 4
        }
    }
});

$('.owl-carousel.brands-slider').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
});

// $(document).ready(function(){
//   $('.owl-carousel.product-slider').owlCarousel({
//     thumbs: true,
//     thumbsPrerendered: true,
//     loop: true,
//     nav: false,
//     dots: true,
//     autoplay: false,
//     autoplayTimeout: 1000,
//     autoplayHoverPause: false,
//     items: 1
//   });
// });

$(document).ready(function() {
    $('.owl-carousel.product-slider-small-thumb').owlCarousel({
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 4
    });
});


// sticky
$(document).ready(function() {
    $(".fix-to-top").sticky({ topSpacing: 0, zIndex: '999' });
});



var owl = $('.owl-carousel.thumb-product-slider');
owl.owlCarousel({
    loop: true,
    nav: false,
    dots: true,
    items: 1,
    thumbs: true,
    autoplay: true,
    thumbImage: true,
    autoplayTimeout: 3000,
    thumbContainerClass: 'owl-thumbs',
    thumbItemClass: 'owl-thumb-item'
});



// price range slider
$(function() {
    var currency = '$ ';
    var min = 0;
    var max = 3000;
    var min_val = 235;
    var max_val = 2300;
    $("#slider-range-selector").slider({
        range: true,
        min: min,
        max: max,
        values: [min_val, max_val],
        slide: function(event, ui) {
            assignValueToField(ui.values[0], ui.values[1]);
        }
    });
    assignValueToField(min_val, max_val);

    $('#amount-selector1, #amount-selector2').on('input', function() {
        var minValue = parseInt($('#amount-selector1').val());
        var maxValue = parseInt($('#amount-selector2').val());
        assignValueToField(minValue, maxValue);
    });

    function assignValueToField(minValue, maxValue) {
        minValue = !minValue || minValue < 0 ? 0 : minValue;
        maxValue = !maxValue || maxValue < 0 ? 0 : maxValue;
        if(minValue > maxValue) {
            minValue = maxValue;
            $('#amount-selector1').val(minValue)
        }
        if(maxValue > max) {
            maxValue = max;
            $('#amount-selector2').val(max)
        }
        $("#slider-range-selector").slider('values',0,minValue);
        $("#slider-range-selector").slider('values',1,maxValue);
        $("#minVal").html(currency + minValue);
        $("#maxVal").html(currency + maxValue);
        $("#amount-selector1").val(minValue);
        $("#amount-selector2").val(maxValue);
    }
});
// end price range slider