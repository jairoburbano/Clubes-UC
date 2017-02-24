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
$page = 'miembros';
$subpage = '';
$type = 'page';
$template = '';
$title = 'Miembros';
$subpage_title = ' ';
include 'header.php';  ?>
<h1 class="headline">Miembros</h1>
<section class="miembros">
    <div class="wrap">
        <div class="filter">
            <div class="text__group filter-team js-text">Todas las categorias</div><!--.text__group-->
            <ul class="filters js-filter">
                <li class="filters__item js-list-item active" data-filter="*">Todas las categrias</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".dos">Filtro 1</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".tres">Filtro 2</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".cuatro">Filtro 3</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".cinco">Filtro 4</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".seis">Filtro 5</li><!--.filters__item-->
            </ul><!--.filters-->
        </div><!--.filter-->
        <div class="team team__column team__center isotope-grid">
            <!--NOTE: Inicia Item-->
            <div class="team__item js-logged dos">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/1" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Duis id Magna</h3>
                        <p class="team__ocupation">Sed ex laoreet</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                <div class="team__intereses">
                                    <h3>Intereses</h3>
                                    <p>Tennis</p>
                                    <p>Pool</p>
                                    <p>Karate</p>
                                    <p>Trekking</p>
                                </div>
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                                <div class="team__rss">
                                    <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                    <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                    <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                                </div><!--.team__rss-->
                            </div><!--.team__text-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item js-not-logged cinco">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/2" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Suspendisse eu Nisi</h3>
                        <p class="team__ocupation">Gravida nunc</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                <h2>Texto de prueba</h2>
                                <p>
                                    <a href="page-acceso.php" title="Accede" class="btn">Accede</a>
                                    <span>con tu cuenta, o</span>
                                    <a href="page-registro.php" title="Registrate" class="btn">Registrate</a>
                                </p>
                            </div><!--.team__text-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item tres">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/3" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Pellentesque Aliquam</h3>
                        <p class="team__ocupation">Justo nec ullamcorper</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item cuatro">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/4" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Proin non Diam</h3>
                        <p class="team__ocupation">Vel leo</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item seis">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/5" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Ultricies Vestibulum</h3>
                        <p class="team__ocupation"> Metus finibus</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/6" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Donec Sollicitudin</h3>
                        <p class="team__ocupation">Orci in libero</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/7" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Bermentum Sollicitudin</h3>
                        <p class="team__ocupation">Maecenas ac libero</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/8" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Cras Vitae Metus</h3>
                        <p class="team__ocupation">Maximus ultricies</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
            <!--NOTE: Inicia Item-->
            <div class="team__item">
                <div class="team__container">
                    <div class="team__image">
                        <img src="http://lorempixel.com/g/134/200/business/9" alt="Titulo">
                    </div><!--.team__image-->
                    <div class="team__block">
                        <h3 class="team__name">Nullam Fringilla</h3>
                        <p class="team__ocupation">Turpis lacinia</p>
                    </div><!--.team__block-->
                </div><!--.team__container-->
                <div class="team__lightbox">
                    <div class="team__lightbox__block">
                        <div class="team__close"><svg><use xlink:href="#shape-close" /></svg></div>
                        <div class="team__whole">
                            <div class="team__text">
                                Ut auctor nulla leo, eget commodo tellus dignissim in. Curabitur rhoncus luctus dolor. Suspendisse eros dolor, interdum eget lacus non, cursus fermentum felis. Praesent orci ante, ullamcorper et mattis a, consectetur pulvinar justo. Integer elementum tempus commodo. Sed feugiat, urna volutpat consectetur pulvinar, nibh quam porta nunc, nec rhoncus odio mauris nec velit.
                            </div><!--.team__text-->
                            <div class="team__rss">
                                <p class="team__rss__item"><span class="icon icon-mail"><svg><use xlink:href="#shape-icon-mail" /></svg></span><a href="mailto:clubes@ucatolica.cl" title="mail">clubes@ucatolica.cl</a></p>
                                <p class="team__rss__item"><span class="icon icon-phone"><svg><use xlink:href="#shape-icon-phone" /></svg></span><a href="tel:+5612345678" title="mail">+56 12345678</a></p>
                                <p class="team__rss__item"><span class="icon icon-linkedin"><svg><use xlink:href="#shape-icon-linkedin" /></svg></span><a href="http://linkedin.com" target="_blank" title="mail">/prettyWoman</a></p>
                            </div><!--.team__rss-->
                        </div><!--.team__whole-->
                    </div><!--.team__lightbox-->
                </div><!--.team__block-->
            </div><!--.team__item-->
        </div><!--.team-->
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>