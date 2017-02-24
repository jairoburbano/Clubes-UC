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
<h1 class="headline">Recuperar contraseña</h1>
<section class="acceso">
    <div class="wrap">
        <div class="mail-form">
            <form action="" class="formulario form-login">
                <div class="input-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email">
                </div><!--.input-group-->
                <div class="send-group">
                    <input type="submit" value="Entrar" class="send">
                </div><!--.send-group-->
            </form><!--.formulario-->
        </div><!--.acceso-form-->
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>