<?php
include 'functions.php';
/**
 * Cabacera de la Página
 *
 * Nuestra todo el contenido hasta <body>
 *
 * @package		clubes
 * @author		Agencia Digital Reactor <contacto@reactor.cl>
 * @version		1.0.0
 */
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title><?php wp_title(); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body <?php body_class(); ?>>
        <?php include('svg-defs.svg'); ?>
<!--        <div style=" position: absolute; top: 0; left: 0; z-index: 1000; width: 100%; height: 3662px; background: url(views/desk/desktop_single-novedades.jpg) no-repeat red; opacity: .2;"></div>-->
        <header class="header">
            <div class="wrap menu--top">
                <div class="logo">
                   <a href="index.php" title="Index" class="<?php if ( $page == 'home' ) { echo ' current-menu-item current-page-ancestor'; } ?>">
                    <img src="img/logo.png" alt="Logo">
                    </a>
                </div>
                <p class="menu--icon">Menú</p>
                <div class="menu--buttons">
                    <div class="redes">
                        <a href="#" title="Facebook">
                            <svg><use xlink:href="#shape-icon-facebook" /></svg>
                        </a>
                        <a href="#" title="Twitter">
                            <svg><use xlink:href="#shape-icon-twitter" /></svg>
                        </a>
                        <a href="#" title="Linkedin">
                            <svg><use xlink:href="#shape-icon-linkedin" /></svg>
                        </a>
                    </div><!--.redes-->
                    <div class="access">
                        <a href="page-acceso.php" title="Acceso" class="<?php if ( $page == 'acceso' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Acceso</a>
                        <a href="page-registro.php" title="Registro" class="<?php if ( $page == 'registro' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Registro</a>
                    </div>
<!--
                    <div class="logout">
                        <a href="#" title="Perfil">Perfil</a>
                        <a href="index.php" title="Salir">Salir</a>
                    </div>
-->
                </div><!--.menu--buttons-->
            </div><!--.menu--top-->
            <div class="menu--bottom">
                <div class="wrap">
                    <ul class="nav">
                        <li>
                            <a href="page-somos.php" title="Somos" class="<?php if ( $page == 'somos' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Somos</a>
                        </li>
                        <li>
                            <a href="page-alianzas.php" title="Alianzas" class="<?php if ( $page == 'alianzas' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Alianzas</a>
                        </li>
                        <li>
                            <a href="page-novedades.php" title="Novedades" class="<?php if ( $page == 'novedades' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Novedades</a>
                        </li>
                        <li>
                            <a href="page-miembros.php" title="Miembros" class="<?php if ( $page == 'miembros' ) { echo ' current-menu-item current-page-ancestor'; } ?>">Miembros</a>
                        </li>
                        <li>
                            <a href="#" title="Contacto" class="js-contact">Contacto</a>
                        </li>
                    </ul>
                </div><!--.wrap-->
            </div><!--.menu--bottom-->
        </header>
        <div class="fix--foo">