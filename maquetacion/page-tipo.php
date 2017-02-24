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
$page = 'novedades';
$subpage = 'single';
$type = 'single';
$template = '';
$title = 'Titutlo Noticia';
$subpage_title = ' ';
include 'header.php';  ?>
<section class="single--content">
    <div class="wrap">
        <h1>Nullam finibus nisl sit amet libero lacinia, quis vehicula nunc scelerisque.</h1>
        <div class="content">
            <div class="publicacion">
                <p><strong>Publicado en: </strong>Donec, Sollicitudin, Orci In Libero, Fermentum</p>
                <a href="page-novedades.php" title="Novedades" class="go-back">Volver a novedades</a>
            </div>
            <div class="dest__image">
                <img src="http://lorempixel.com/g/1100/500/people" alt="Titulo">
            </div><!--.dest__image-->
            <div class="text--content">
                <h2>Donec sollicitudin mi eget dolor tempor, et porta justo maximus. Duis fermentum eros velit, et tempor magna luctus eget.</h2>
                <p>
                    Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; <strong>Donec malesuada finibus</strong> arcu at bibendum. Suspendisse eu lacinia justo, sed accumsan arcu. Integer velit justo, feugiat consequat ante quis, <a href="#" title="titulo">hendrerit tincidunt metus</a>.
                </p>
                <h3>Fusce iaculis imperdiet sem</h3>
                <p>
                    Ut sit amet neque velit. Donec sodales, eros a dictum accumsan, arcu tellus vulputate tortor, id dapibus erat nulla eget mi.
                </p>
                <ul>
                    <li>Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo.</li>
                    <li>Integer elementum tempus commodo.</li>
                    <li>Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.</li>
                    <li>Nullam erat leo, euismod euismod urna et, porta congue ipsum.</li>
                    <li>Quisque metus turpis, accumsan non mi eu, aliquet mollis ante. Donec mollis aliquet justo ac rutrum.</li>
                    <li>Pellentesque condimentum dui feugiat lectus commodo dictum. Proin commodo blandit odio.</li>
                </ul>
                <figure class="wp-caption">
                    <img src="http://lorempixel.com/g/800/350/people/1" alt="Titulo">
                    <figcaption class="wp-caption-text">Ut sit amet neque velit. Donec sodales, eros a dictum accumsan, arcu tellus vulputate tortor, id dapibus erat nulla eget mi. Sed lacinia erat quis magna auctor porta.</figcaption>
                </figure>
                <blockquote>
                    Nullam tristique sed leo et tincidunt. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                </blockquote>
                <p>
                    Fusce rhoncus tempor ligula, ut ornare orci pellentesque ut. In luctus, lorem quis ultricies consectetur, mi nibh maximus purus, quis venenatis odio risus sit amet eros. Aenean tincidunt enim id ornare rutrum. Nulla erat nulla, maximus a volutpat at, porttitor sed lacus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed at metus elit. Sed sapien metus, euismod at velit et, maximus bibendum dui.
                </p>
                <p>
                    Mauris viverra iaculis sapien ut lacinia. Donec porta lobortis turpis, consequat congue augue commodo non. Morbi vel interdum neque, ut viverra risus.
                </p>
            </div><!--.text--content-->
        </div><!--.content-->
        <div class="gallery">
            <div class="slider__gallery js-slider__gallery">
                <ul class="slides">
                    <li>
                        <img src="http://lorempixel.com/400/200/food" alt="Lorem ipsum dolor.">
                    </li>
                    <li>
                        <img src="http://lorempixel.com/400/200/food/2" alt="Lorem ipsum dolor sit amet.">
                    </li>
                    <li>
                        <img src="http://lorempixel.com/400/200/food/3" alt="Lorem.">
                    </li>
                </ul><!--.slides-->
            </div><!--.js-slider-->
            <div class="gallery__content">
                <div class="gallery__controls clearfix">
                    <div class="gallery__controls__content">
                        <div class="gallery__fullscreen js-fullscreen">
                            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#shape-fullscreen"></use></svg>
                        </div>
                        <div class="custom-controls-container"></div>
                    </div><!--.gallery__controls__content-->
                </div><!--.gallery__controls-->
                <div class="gallery__desc clearfix">
                    <div class="gallery__number">
                        <span class="current-slide"></span>/
                        <span class="total-slides"></span>
                    </div>
                    <div class="gallery__text">
                        <p></p>
                    </div><!--.galllery__text-->
                </div><!--.galley__desc-->
            </div>
        </div><!--.gallery-->
    </div><!--.wrap-->
    <div class="bg--content">
        <div class="wrap">
            <div class="tipo-form">
                <h2 class="sub-title tcenter">Contacto</h2>
                <form action="" class="formulario tipo-form">
                    <div class="input-group">
                        <label for="name">Nombre <span>*</span></label>
                        <input type="text" id="name" name="name">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="email">Email <span>*</span></label>
                        <input type="email" id="email" name="email">
                    </div><!--.input-group-->
                    <div class="input-group">
                        <label for="phone">Telefono</label>
                        <input type="text" id="phone" name="phone">
                    </div><!--.input-group-->
                    <div class="textarea-group">
                        <label for="info">Comentario <span>*</span></label>
                        <textarea name="info" id="info"></textarea>
                    </div><!--.input-group-->
                    <div class="send-group">
                        <input type="submit" value="Entrar" class="send">
                    </div><!--.send-group-->
                </form>
            </div><!--.tipo-form-->
        </div><!--.bg--content-->
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>