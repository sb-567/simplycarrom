(function($) {
    "use strict";
    jQuery(document).ready(function() {
        $('[data-shipping]').on('click', function() {
            if ($('[data-shipping]:checked').length > 0) {
                $('#shipping-form').slideDown();
            } else {
                $('#shipping-form').slideUp();
            }
        })
        $('[name="payment-method"]').on('click', function() {
            var $value = $(this).attr('value');
            $('.single-method p').slideUp();
            $('[data-method="' + $value + '"]').slideDown();
        })
        $('.view-mode-icons a').on('click', function(e) {
            e.preventDefault();
            var shopProductWrap = $('.shop-product-wrap');
            var viewMode = $(this).data('target');
            $('.view-mode-icons a').removeClass('active');
            $(this).addClass('active');
            if (viewMode == "list") {
                shopProductWrap.removeClass('five-column');
            } else {
                shopProductWrap.addClass('five-column');
            }
            shopProductWrap.removeClass('grid list').addClass(viewMode);
        })
        var imagePopup = $('.big-image-popup');
        imagePopup.magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
        $('.pro-qty-cart').append('<a href="#" class="inc qty-btn-cart"><i class="fa fa-plus"></i></a>');
        $('.pro-qty-cart').prepend('<a href="#" class= "dec qty-btn-cart"><i class="fa fa-minus"></i></a>');
        $('.qty-btn-cart').on('click', function(e) {
            e.preventDefault();
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
        $('.pro-qty').append('<a href="#" class="inc qty-btn mr-5"><i class="fa fa-plus"></i></a>');
        $('.pro-qty').append('<a href="#" class= "dec qty-btn"><i class="fa fa-minus"></i></a>');
        $('.qty-btn').on('click', function(e) {
            e.preventDefault();
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            if ($button.hasClass('inc')) {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find('input').val(newVal);
        });
        var windows = $(window);
        var screenSize = windows.width();
        var sticky = $('.header-sticky');
        windows.scroll(function() {
            var scroll = windows.scrollTop();
            if (scroll < 300) {
                sticky.removeClass('is-sticky');
            } else {
                sticky.addClass('is-sticky');
            }
            if (scroll >= 400) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }
        });
        var categoryToggleWrap = $('.category-toggle-wrap');
        var categoryToggle = $('.category-toggle');
        var categoryMenu = $('.category-menu');

        function categoryMenuToggle() {
            var screenSize = windows.width();
            if (screenSize <= 767) {
                categoryMenu.slideUp();
            } else {
                categoryMenu.slideDown();
            }
        }

        function categorySubMenuToggle() {
            var screenSize = windows.width();
            if (screenSize <= 991) {
                $('.category-menu .menu-item-has-children > a').prepend('<i class="expand menu-expand"></i>');
                $('.category-menu .menu-item-has-children ul').slideUp();
            } else {
                $('.category-menu .menu-item-has-children > a i').remove();
                $('.category-menu .menu-item-has-children ul').slideDown();
            }
        }
        categoryMenuToggle();
        windows.resize(categoryMenuToggle);
        categorySubMenuToggle();
        windows.resize(categorySubMenuToggle);
        categoryToggle.on('click', function() {
            categoryMenu.slideToggle();
        });
        $('.category-menu').on('click', 'li a, li a .menu-expand', function(e) {
            var $a = $(this).hasClass('menu-expand') ? $(this).parent() : $(this);
            if ($a.parent().hasClass('menu-item-has-children')) {
                if ($a.attr('href') === '#' || $(this).hasClass('menu-expand')) {
                    if ($a.siblings('ul:visible').length > 0) $a.siblings('ul').slideUp();
                    else {
                        $(this).parents('li').siblings('li').find('ul:visible').slideUp();
                        $a.siblings('ul').slideDown();
                    }
                }
            }
            if ($(this).hasClass('menu-expand') || $a.attr('href') === '#') {
                e.preventDefault();
                return false;
            }
        });
        var categoryChildren = $('.sidebar-category li .children');
        categoryChildren.slideUp();
        categoryChildren.parents('li').addClass('has-children');
        $('.sidebar-category').on('click', 'li.has-children > a', function(e) {
            if ($(this).parent().hasClass('has-children')) {
                if ($(this).siblings('ul:visible').length > 0) $(this).siblings('ul').slideUp();
                else {
                    $(this).parents('li').siblings('li').find('ul:visible').slideUp();
                    $(this).siblings('ul').slideDown();
                }
            }
            if ($(this).attr('href') === '#') {
                e.preventDefault();
                return false;
            }
        });
        var mainMenuNav = $('.main-menu nav');
        mainMenuNav.meanmenu({
            meanScreenWidth: '991',
            meanMenuContainer: '.mobile-menu',
            meanMenuClose: '<span class="menu-close"></span>',
            meanMenuOpen: '<span class="menu-bar"></span>',
            meanRevealPosition: 'right',
            meanMenuCloseSize: '0',
        });
        $('.horizontal-product-list').slick({
            prevArrow: '<i class="fa fa-angle-left slick-prev-btn"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-next-btn"></i>',
            slidesToShow: 4,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }]
        });
        $('.horizontal-double-row-product-list').slick({
            prevArrow: '<i class="fa fa-angle-left slick-prev-btn"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-next-btn"></i>',
            slidesToShow: 2,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        $('.vertical-product-list').slick({
            prevArrow: '<i class="fa fa-angle-down slick-prev-btn"></i>',
            nextArrow: '<i class="fa fa-angle-up slick-next-btn"></i>',
            vertical: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            verticalSwiping: true,
            mobileFirst: true,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }]
        });
        $('.vertical-auto-slider-product-list').slick({
            vertical: true,
            arrows: false,
            autoplay: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            verticalSwiping: true,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }]
        });
        $('.brand-logo-list').slick({
            prevArrow: '<i class="fa fa-angle-left"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-next-btn"></i>',
            slidesToShow: 6,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
        $("#changeLanguage").on("click", function(event) {
            event.stopPropagation();
            $("#languageList").slideToggle();
            $("#currencyList").slideUp("slow");
        });
        $("#changeCurrency").on("click", function(event) {
            event.stopPropagation();
            $("#currencyList").slideToggle();
            $("#languageList").slideUp("slow");
        });
        $("body:not(#changeLanguage)").on("click", function() {
            $("#languageList").slideUp("slow");
        });
        $("body:not(#changeCurrency)").on("click", function() {
            $("#currencyList").slideUp("slow");
        });
        $("#shopping-cart").mouseenter(function() {
            $("#cart-floating-box").stop().slideDown(1000);
        });
        $("#shopping-cart").mouseleave(function() {
            $("#cart-floating-box").stop().slideUp(1000);
        });
        $('.single-slide-menu').slick({
            prevArrow: '<i class="fa fa-angle-left"></i>',
            nextArrow: '<i class="fa fa-angle-right slick-next-btn"></i>',
            slidesToShow: 3,
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            }, {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }, {
                breakpoint: 480,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }]
        });
        $('.modal').on('shown.bs.modal', function(e) {
            $('.single-slide-menu').resize();
        })
        $('.single-slide-menu a').on('click', function(e) {
            e.preventDefault();
            var $href = $(this).attr('href');
            $('.single-slide-menu a').removeClass('active');
            $(this).addClass('active');
            $('.product-details-large .tab-pane').removeClass('active show');
            $('.product-details-large ' + $href).addClass('active show');
        });
        var heroSlider = $('.hero-slider');
        heroSlider.slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 5000,
            dots: true,
            pauseOnFocus: false,
            pauseOnHover: false,
            fade: true,
            infinite: true,
            slidesToShow: 1,
        });
        $('.scroll-top').on('click', function() {
            $('html,body').animate({
                scrollTop: 0
            }, 2000);
        });
        $('#mc-form').ajaxChimp({
            language: 'en',
            callback: mailChimpResponse,
            url: 'http://devitems.us11.list-manage.com/subscribe/post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef'
        });

        function mailChimpResponse(resp) {
            if (resp.result === 'success') {
                $('.mailchimp-success').html('' + resp.msg).fadeIn(900);
                $('.mailchimp-error').fadeOut(400);
            } else if (resp.result === 'error') {
                $('.mailchimp-error').html('' + resp.msg).fadeIn(900);
            }
        }
    });
})(jQuery);