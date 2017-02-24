(function($) {
    function acceso() {
        $('<div class="message"></div>').hide().appendTo('.acceso-form');
        $('.form-login').each(function() {
            $(this).validate({
                rules: {
                    pass: "required",
                    pass_again: {
                        equalTo: "#pass"
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    pass: {
                        required: "Ingresa tu contraseña"
                    },
                    pass_again: {
                        required: "La contraseña no coincide"
                    },
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form-login .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.acceso-form').attr('action'), $('.acceso-form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form-login .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.form-login .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                            $('.acceso-form').find('.form__valid').removeClass('form__valid');
                            $('.acceso-form')[0].reset();
                        } else {
                            $('.acceso-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function contact() {
        $('<div class="message"></div>').hide().appendTo('.form-contact');
        $('.contact-form').each(function() {
            $(this).validate({
                rules: {
                    subject: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    name: "required",
                    degree: "required",
                    phone: "required",
                    info: "required",
                },
                messages: {
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    subject: {
                        required: "Usa solo letras"
                    },
                    name: {
                        required: "Usa solo letras"
                    },
                    degree: {
                        required: "Usa solo letras"
                    },
                    phone: {
                        required: "Usa solo letras"
                    },
                    info: {
                        required: "Selecciona tu año"
                    },
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.contact-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.form-contact').attr('action'), $('.form-contact').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.contact-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.contact-form .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                            $('.form-contact').find('.form__valid').removeClass('form__valid');
                            $('.form-contact')[0].reset();
                        } else {
                            $('.form-contact .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function registro() {
        $('<div class="message"></div>').hide().appendTo('.regitro-form');
        $('.form-registro').each(function() {
            $(this).validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    pass: "required",
                    pass_again: {
                        equalTo: "#pass"
                    },
                    'something[]': "required",
                    name: "required",
                    lastname: "required",
                    title: "required",
                    interes: "required",
                    radio: "required",
                    linkedin: "required",
                },
                messages: {
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    pass: {
                        required: "Usa solo letras"
                    },
                    pass_again: {
                        required: "La contraseña no coincide"
                    },
                    name: {
                        required: "Usa solo letras"
                    },
                    lastname: {
                        required: "Usa solo letras"
                    },
                    title: {
                        required: "Usa solo letras"
                    },
                    radio: {
                        required: "Selecciona uno"
                    },
                    year: {
                        required: "Selecciona tu año"
                    },
                    interes: {
                        required: "Usa solo letras."
                    },
                    'something[]': {
                        required: "You must check at least 1 box"
                    },
                    linkedin: {
                        required: "Ingresa una URL correcta"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form-registro .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.regitro-form').attr('action'), $('.regitro-form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form-registro .loading').fadeOut();
                        if (obj.error === '1') {
                            $('.regitro-form .lightbox-message .content__lightbox__text').addClass('problem');
                            $('.regitro-form .lightbox-message').fadeIn();
                            $('.regitro-form .lightbox-message .content__lightbox__text').html('<h2>Error</h2><p class="warning-msg">' + obj.mensaje + '</p>');
                        } else {
                            $('.regitro-form .lightbox-message .content__lightbox__text').removeClass('problem');
                            $('.regitro-form .lightbox-message').fadeIn();
                            $('.regitro-form .lightbox-message .content__lightbox__text').html('<h2>Registro completado</h2><p class="warning-msg">Una vez aprobado se te informará por email.</p>');
                            $('.regitro-form').find('.form__valid').removeClass('form__valid');
                            $('.regitro-form')[0].reset();
                        }
                    });
                    return false;
                }
            });
        });
    }
    function tipo() {
        $('<div class="message"></div>').hide().appendTo('.tipo-form');
        $('.tipo-form').each(function() {
            $(this).validate({
                rules: {
                    name: "required",
                    email: {
                        required: true,
                        email: true
                    },
                    phone: "required",
                    info: "required",
                },
                messages: {
                    email: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    name: {
                        required: "Usa solo letras"
                    },
                    phone: {
                        required: "Usa solo letras"
                    },
                    info: {
                        required: "Selecciona tu año"
                    },
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parent().addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parent().removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.tipo-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.tipo-form').attr('action'), $('.tipo-form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.tipo-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.tipo-form .message').html('<p class="success-msg">Thanks for your message.</p>').fadeIn().delay('3000').fadeOut();
                            $('.tipo-form').find('.form__valid').removeClass('form__valid');
                            $('.tipo-form')[0].reset();
                        } else {
                            $('.tipo-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    acceso();
    registro();
    contact();
    tipo();
})(jQuery);