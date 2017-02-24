<?php
/**
 * template-{Valor}.php
 *
 *
 * @package		clubes
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 *
 */
$page = 'registro';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Registro';
$subpage_title = ' ';
include 'header.php';  ?>
<h1 class="headline">Perfil</h1>
<section class="registro">
    <div class="wrap">
        <div class="registro-form">
            <form action="" class="formulario form-registro">
                <div class="column one">
                    <div class="input-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" name="email">
                    </div><!--.input-group-->
                    <div class="input-group js-pass disable">
                        <label for="pass">Contraseña <span>*</span></label>
                        <input type="password" id="pass" name="pass" disabled="true">
                    </div><!--.input-group-->
                    <div class="input-group js-pass disable">
                        <label for="pass_again">Repetir Contraseña <span>*</span></label>
                        <input type="password" id="pass_again" name="pass_again" disabled="true">
                    </div><!--.input-group-->
                    <p class="change-pass">Cambiar Contraseña</p>
                </div><!--.column-->
                <div class="column">
                    <div class="input-group">
                        <label for="name">Nombre <span>*</span></label>
                        <input type="text" id="name" name="name">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="lastname">Apellido <span>*</span></label>
                        <input type="text" id="lastname" name="lastname">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="title">Título Profesional <span>*</span></label>
                        <input type="text" id="title" name="title">
                    </div><!--.input-group-->
                    <div class="input-group disable">
                        <label for="radio">Eres un invitado? <span>*</span></label>
                        <div class="radio--group">
                            <div class="radio__item">
                                <label for="radio1"><input id="radio1" type="radio" name="radio" value="Si" class="guess" disabled="true">Si</label>
                            </div><!--.radio__item-->
                            <div class="radio__item">
                                <label for="radio2"><input id="radio2" type="radio" name="radio" value="No" class="student" disabled="true">No</label>
                            </div><!--.radio__item-->
                            <p class="msg-error">Selecciona una</p>
                        </div><!--.radio--group-->
                    </div><!--.input-group-->
                    <div class="input-group selector disable">
                        <label for="year">Año ingreso MBA UC <span>*</span></label>
                        <select name="year" id="year" class="datepicker" disabled="true">
                            <option value="">Selecciona un año</option>
                        </select>
                        <img src="img/select.svg" alt="Select" class="select__image">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="phone">Teléfono</label>
                        <input type="text" id="phone" name="phone">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="addres">Dirección</label>
                        <input type="text" id="addres" name="addres">
                    </div><!--.input-group-->
                    <div class="input-group disable">
                        <label for="linkedin">URL Linkedin <span>*</span></label>
                        <input type="text" id="linkedin" name="linkedin" disabled="true">
                    </div><!--.input-group-->
                    <div class="check-group">
                        <label for="interes">Interéses <span class="main">*</span><span>(Puedes seleccionar multiples casillas)</span></label>
                        <div class="check--div">
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op1" class="cbox" value="1">
                                <label for="op1">Fusce nec quam</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op2" class="cbox" value="2">
                                <label for="op2">Venenatis sed ligula at cursus</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op3" class="cbox" value="3">
                                <label for="op3">Nullam semper</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op4" class="cbox" value="4">
                                <label for="op4">Integer luctus</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op5" class="cbox" value="5">
                                <label for="op5">Mauris leo erat</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op6" class="cbox" value="6">
                                <label for="op6">Vestibulum eu tristique</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op7" class="cbox" value="7">
                                <label for="op7">Cras bibendum auctor</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op8" class="cbox" value="8">
                                <label for="op8">Ullamcorper gravida</label>
                            </span>
                            <span class="check">
                                <input type="checkbox" name="something[]" id="op9" class="cbox addmore" value="9">
                                <label for="op9">otro</label>
                            </span>
                        </div>
                    </div><!--.check--div-->
                    <div class="input-group new-ele check-group">
                        <label for="interes">Otros interéses <span class="main">*</span><span>(Para agregar un nuevo interés apreta enter)</span></label>
                        <input type="text" id="interes" name="interes" disabled="true">
                        <input type="hidden" value="" class="tag-value">
                    </div>
                    <div class="foto--perfil">
                        <img src="http://lorempixel.com/110/160/people/6" alt="Foto">
                    </div>
                    <div class="input-group">
                        <label for="perfil">Foto de perfíl</label>
                        <div class="file--group">
                            <div class="text__file">
                                <span>Subir imagen</span>
                            </div>
                            <input type="file" name="perfil" id="perfil" class="file">
                        </div>
                    </div><!--.input-group-->
                    <div class="textarea-group">
                        <label for="info">Información adicional</label>
                        <textarea name="info" id="info"></textarea>
                    </div><!--.input-group-->
                    <div class="send-group">
                        <input type="submit" value="Registrar" class="send">
                    </div><!--.send-group-->
                </div><!--.column-->
                <div class="lightbox-message">
                    <div class="content__lightbox">
                        <div class="content__lightbox__text">
                        </div>
                        <p class="lightbox__button js-close-lightbox">Regresar al formulario</p>
                    </div>
                </div>
            </form><!--.formulario-->
        </div><!--.acceso-form-->
    </div><!--.wrap-->
</section>
<script>
    function perfilTags() {
        var e = jQuery.Event("keypress");
        e.which = 13; //choose the one you want
        e.keyCode = 13;
        var text = 'hola,dos,tres,lld';
        $('#interes_tagsinput input').val(text).trigger(e);
        $( '#interes_tagsinput .tag a')[0].click();
    }
</script>
<?php include 'footer.php'; ?>