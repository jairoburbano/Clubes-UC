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
<h1 class="headline">Acceso</h1>
<section class="acceso">
    <div class="wrap">
        <div class="login--top">
            <a href="#" title="Ingresa con Linkedin">
                Registrate o Enlaza con Linkedin
                <span>
                    <svg><use xlink:href="#shape-icon-linkedin" /></svg>
                </span>
            </a>
        </div><!--.login--top-->
        <div class="acceso-form">
            <form action="" class="formulario form-login">
                <div class="input-group">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email">
                </div><!--.input-group-->
                <div class="input-group">
                    <label for="pass">Contraseña <span>*</span></label>
                    <input type="password" id="pass" name="pass">
                </div><!--.input-group-->
                <div class="content__buttons">
                    <a href="page-recuperar.php" title="Olvidaste tu contraseña?" class="recuperar">Olvidaste tu contraseña?</a>
                    <div class="send-group">
                        <input type="submit" value="Entrar" class="send">
                    </div><!--.send-group-->
                </div><!--.content__buttons-->
            </form><!--.formulario-->
        </div><!--.acceso-form-->
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>