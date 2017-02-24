(function($) {
    // Tamaño de la pantalla
    var $window = $(window),
        windowSize	= $window.width(),
        body = $('body');
    function menuMobile() {
        var header = $('.header'),
            icon = $('.menu--icon'),
            menu = $('.menu--bottom'),
            buttons = $('.menu--buttons');
        if(windowSize < 740) {
            icon.click(function() {
                body.toggleClass('noscroll');
                buttons.stop().slideToggle(300);
                if(header.hasClass('active')) {
                    menu.stop().slideUp(300);
                    header.removeClass('active');
                    icon.empty();
                    icon.text('Menú');
                } else {
                    header.addClass('active');
                    menu.stop().slideDown(300);
                    icon.empty();
                    icon.text('Cerrar');
                }
            });
        }
    }
    function imagesAlianza() {
        var image = $('.ally__image'),
            imageWidth = $('.ally__image').width();
        image.css('height', imageWidth);
    }
    function filter() {
        var $container = $('.js-grid'),
            gridItem = $('.js-item'),
            text = $('.js-text'),
            filter = $('.js-filter'),
            filterItem = $('.js-filter-item'),
            item = $('.js-list-item, .js-filter-item span');
        var $grid = $container.imagesLoaded(function() {
            $container.masonry({
                itemSelector : '.js-item', 
                percentPosition: true,
                masonry: {
                    columnWidth: '.js-item'
                }
            });
        });
        text.click(function() {
            filter.stop().slideToggle();
        });
        item.click(function() {
            var itemText = $(this).text();
            filter.stop().slideUp();
            text.empty();
            text.text(itemText);
        });
        gridItem.each(function() {
            if($(this).hasClass('no-image')) {
                var filterH = $(this).find(filterItem).outerHeight(true);
                $(this).find('.isotope__title span').css('padding-bottom', filterH);
                var titleH = $(this).find('.isotope__title span').outerHeight(true) + 30,
                    calc = filterH + titleH;
                $(this).css('min-height', calc);
            }
        });
        $container.masonry();
    }
    function singleRedes() {
        var share = $('.share');
        if(share.length > 0) {
            var footer = $('.footer').offset().top,
                body = $(window).scrollTop() + $(window).height(),
                bodyScroll = $(window).scrollTop(),
                share = $('.share'),
                shareOffset = $('.share').offset().top,
                publicacion = $('.publicacion').offset().top;
            if(windowSize > 1024) {
                share.css('top', publicacion);
                if (bodyScroll > publicacion) {
                    share.css({
                        position: 'fixed',
                        bottom: 'auto',
                        top: 0
                    });
                } else {
                    share.css({
                        position: 'absolute',
                        bottom: 'auto',
                        top: publicacion
                    });
                }
            } else {
                if(body > footer) {
                    share.css({
                        position: 'absolute',
                        bottom: 'auto',
                        top: footer - 73
                    });
                } else {
                    share.css({
                        position: 'fixed',
                        bottom: '0',
                        top: 'auto'
                    });
                }
            }
        }
    }
    function registerYear() {
        var i,yr,now = new Date(),
            max = now.getFullYear() + 1;
        for (i=1960; i < max; i++) {
            $('.datepicker').append($('<option/>').val(i).text(i));
        };
    }
    function fileInput() {
        var fileContent = $('.file--group'),
            fileText = $('.text__file span'),
            file = $('.file');
        file.click(function () {
            fileText.empty();
        });
        file.change(function () {
            var textFile = $(this)[0].files[0]['name'];
            fileText.text(textFile);
        });
    }
    function checkbox() {
        var check = $('.check'),
            send = $('.send'),
            more = $('.addmore'),
            newEle = $('.new-ele'),
            group = $('.check-group');
        check.find('input').click(function() {
            if($(this).is(":checked")) {
                $(this).parent().addClass('checked');
            } else {
                $(this).parent().removeClass('checked');
            }
            group.removeClass('this-error');
        });
        more.click(function() {
            if($(this).is(":checked")) {
                newEle.removeClass('disable');
                newEle.find('input').attr('disabled', false);
            } else {
                newEle.addClass('disable').removeClass('error');
                newEle.find('input').attr('disabled', true);
            }
            group.removeClass('this-error');
        });
        send.click(function() {
            if(check.find('input').is(":checked")) {
                group.removeClass('this-error');
            } else {
                group.addClass('this-error');
            }
        });
        $('#interes').tagsInput({
            'onAddTag': function() {
                var data = $(this).val(),
                    input = $('.tag-value');
                input.empty().val(data);
            },
        });
        $('.main-page #interes_tag').attr('disabled', true);
    }
    function password() {
        var btn = $('.change-pass'),
            pass = $('.js-pass');
        btn.click(function() {
            $(this).addClass('disable');
            pass.removeClass('disable');
            pass.find('input').attr('disabled', false);
        });
    }
    function radio() {
        var student = $('.student'),
            guess = $('.guess'),
            group = $('.radio--group'),
            item = $('.radio__item').find('input'),
            send = $('.send'),
            select = $('.selector');
        student.click(function() {
            if($(this).is(":checked")) {
                select.removeClass('disable');
                select.find('select').addClass('required');
                select.find('select').attr('disabled', false);
            }
        });
        guess.click(function() {
            if($(this).is(":checked")) {
                select.addClass('disable');
                select.find('select').removeClass('required');
                select.find('select').attr('disabled', true);
            }
        });
        item.click(function() {
            group.removeClass('this-error');
        });
        send.click(function() {
            if(item.is(":checked")) {
                group.removeClass('this-error');
            } else {
                group.addClass('this-error');
            }
        });
    }
    function responseLightbox() {
        var light = $('.lightbox-message'),
            close = $('.js-close-lightbox'),
            text = $('.content__lightbox__text');
        close.click(function() {
            light.fadeOut();
            text.empty();
        });
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                light.fadeOut();
                text.empty();
            }
        });
    }
    function teamLightbox() {
        var team = $('.js-team'),
            container = $('.js-logged .team__container'),
            containerOut = $('.js-not-logged .team__container'),
            image = $('.team__image'),
            block = $('.team__block'),
            whole = $('.team__whole'),
            text = $('.team__text'),
            lightbox = $('.team__lightbox'),
            close = $('.team__close'),
            fixed = $('.team__lightbox__block');
        container.click(function() {
            $(this).parent().find(lightbox).fadeIn();
            $(this).parent().find(image).clone().prependTo(whole);
            $(this).parent().find(block).clone().prependTo(fixed);
            body.addClass('noscroll');
            var altoTitle = $(this).parent().find('.team__lightbox__block .team__block').outerHeight(true);
            if(windowSize < 740) {
                $(this).parent().find(whole).css({
                    paddingTop: altoTitle
                });
            } else {
                $(this).parent().find(text).css({
                    paddingTop: altoTitle
                });
            }
        });
        containerOut.click(function() {
            $(this).parent().find(lightbox).fadeIn();
            body.addClass('noscroll');
        });
        close.click(function() {
            $(this).parents(team).find(lightbox).fadeOut(function() {
                $(this).find('.team__image').remove();
                $(this).find('.team__block').remove();
            });
            body.removeClass('noscroll');
        });
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                close.parents(team).find(lightbox).fadeOut(function() {
                    $(this).find('.team__image').remove();
                    $(this).find('.team__block').remove();
                });
                body.removeClass('noscroll');
            }
        });
    }
    function contact() {
        var contact = $('.contact--container'),
            menuContact = $('.js-contact'),
            body = $('html, body'),
            closeContact = $('.contact__close');
        menuContact.click(function() {
            contact.fadeIn();
            body.addClass('noscroll');
        });
        closeContact.click(function() {
            contact.fadeOut();
            body.removeClass('noscroll');
        });
        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                contact.fadeOut();
                body.removeClass('noscroll');
            }
        });
    }
    function tituloNovedades() {
        var item = $('.js-item');
        item.each(function() {
            var titulo = $('.isotope__title span'),
                item = $('.js-item'),
                filtro = $('.isotope__filter'),
                alturaFiltro = $(this).find(filtro).height();
            $(this).find('.isotope__title span').css('padding-bottom', alturaFiltro);
            console.log(alturaFiltro);
        });
    }
    function sliderGallery() {
        var slide = $('.js-slider__gallery'),
            slideContent = $('.gallery'),
            fullscreen = $('.js-fullscreen'),
            altura = $window.height(),
            texto = $('.gallery__text p');
        slide.each(function() {
            $(this).flexslider({
                animation: "slide",
                controlNav: false,
                controlsContainer: $(".custom-controls-container"),
                prevText: '<svg><use xlink:href="#shape-flex-prev" /></svg>',
                nextText: '<svg><use xlink:href="#shape-flex-next" /></svg>',
                start: function(slider) {
                    $('.total-slides').text(slider.count);
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                },
                after: function(slider) {
                    $('.current-slide').text(slider.currentSlide+1);
                    var title = $('.flex-viewport .slides').find('.flex-active-slide').children().attr('alt');
                    texto.empty();
                    texto.text(title);
                }
            });
        });
        fullscreen.click(function() {
            if(fullscreen.hasClass('open-gallery')) {
                slideContent.removeClass('slider--fullscreen');
                fullscreen.removeClass('open-gallery');
                slide.find('ul li').css('height', 490);
            } else {
                slideContent.addClass('slider--fullscreen');
                fullscreen.addClass('open-gallery');
                slide.find('ul li').css('height', altura);
            }
            setTimeout(function(){ slide.resize(); }, 350);

        });
    }
    function shuffleIn() {
        var $container = $('.isotope-grid');
        var $grid = $container.imagesLoaded(function() {
            $container.isotope({
                itemSelector : '.team__item', 
                percentPosition: true,
                masonry: {
                    // use element for option
                    columnWidth: '.team__item'
                }
            });
        });
        $('.filters').on( 'click', 'li', function() {
            var filterValue = $( this ).attr('data-filter');
            // use filterFn if matches value
            $grid.isotope({ filter: filterValue });
        });
        // change is-checked class on buttons
        $('.filters').each( function( i, buttonGroup ) {
            var $buttonGroup = $( buttonGroup );
            $buttonGroup.on( 'click', 'li', function() {
                var type = $(this).data('save');
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
        $('.filters li.active').click(function () {
            filters = {};
            $('#isotope-grid').isotope({ filter: '*' });
        });
    }
    function perfilTags() {

    }
    menuMobile();
    imagesAlianza();
    filter();
    singleRedes();
    registerYear();
    fileInput();
    checkbox();
    teamLightbox();
    contact();
    tituloNovedades();
    radio();
    sliderGallery();
    responseLightbox();
    password();
    shuffleIn();
    perfilTags();
    $(window).resize(function() {
        menuMobile();
        tituloNovedades();
        imagesAlianza();
        filter();
    });
    $(window).scroll(function() {
        singleRedes();
    });
})(jQuery);
