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
$page = 'acceso';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Acceso';
$subpage_title = ' ';
include 'header.php';  ?>
<h1 class="headline">Ingresar nueva contraseña</h1>
<section class="acceso">
    <div class="wrap">
        <div class="pass-form">
            <form action="" class="formulario form-login">
                <div class="input-group">
                        <label for="pass">Contraseña <span>*</span></label>
                        <input type="password" id="pass" name="pass">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="pass_again">Repetir Contraseña <span>*</span></label>
                        <input type="password" id="pass_again" name="pass_again">
                    </div><!--.input-group-->
                <div class="send-group">
                    <input type="submit" value="Entrar" class="send">
                </div><!--.send-group-->
            </form><!--.formulario-->
        </div><!--.acceso-form-->
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>