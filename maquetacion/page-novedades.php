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
$subpage = '';
$type = 'page';
$template = '';
$title = 'Novedades';
$subpage_title = ' ';
include 'header.php';  ?>
<h1 class="headline">Novedades</h1>
<section class="novedades">
    <div class="wrap">
        <div class="filter">
            <div class="text__group js-text">Todas las categorias</div><!--.text__group-->
            <ul class="filters js-filter">
                <li class="filters__item js-list-item active" data-filter="*">Todas las categrias</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".filtro-1">Filtro 1</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".filtro-2">Filtro 2</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".filtro-3">Filtro 3</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".filtro-4">Filtro 4</li><!--.filters__item-->
                <li class="filters__item js-list-item" data-filter=".filtro-5">Filtro 5</li><!--.filters__item-->
            </ul><!--.filters-->
        </div><!--.filter-->
        <div class="isotope js-grid">
           <div class="isotope__item js-item filtro-3 no-image">
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Cras vitae metus ut erat maximus</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Orci In Libero</span>, <span data-filter=".filtro-2">Fermentum</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
            <div class="isotope__item js-item filtro-1">
                <div class="isotope__image">
                    <img src="http://lorempixel.com/280/252/people/5" alt="Titulo">
                </div><!-- /.isotope__image -->
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Nullam finibus nisl sit amet libero lacinia, quis vehicula nunc scelerisque.</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Donec</span>, <span data-filter=".filtro-1">Sollicitudin</span>, <span data-filter=".filtro-1">Orci In Libero</span>, <span data-filter=".filtro-1">Fermentum</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
            <div class="isotope__item js-item filtro-3 no-image">
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Maecenas ac libero sit amet orci</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Lorem ipsum dolor.</span>, <span data-filter=".filtro-2">Este es otro filtro</span>, <span data-filter=".filtro-3">Filtro 3</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
            <div class="isotope__item js-item filtro-2">
                <div class="isotope__image">
                    <img src="http://lorempixel.com/400/300/people/8" alt="Titulo">
                </div><!-- /.isotope__image -->
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Nullam finibus nisl sit amet libero lacinia, quis vehicula nunc scelerisque.</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Filtro 1</span>, <span data-filter=".filtro-2">Filtro 2</span>, <span data-filter=".filtro-3">Filtro 3</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
            <div class="isotope__item js-item filtro-3 no-image">
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Quisque a quam quis felis pharetra ullamcorper</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Lorem ipsum dolor.</span>, <span data-filter=".filtro-2">Este es otro filtro</span>, <span data-filter=".filtro-3">Filtro 3</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
            <div class="isotope__item js-item filtro-2 filtro-4">
                <div class="isotope__image">
                    <img src="http://lorempixel.com/250/500/people/2" alt="Titulo">
                </div><!-- /.isotope__image -->
                <div class="isotope__content">
                    <a href="single.php" title="titulo" class="isotope__title">
                        <span>Nullam finibus nisl sit amet libero lacinia, quis vehicula nunc scelerisque.</span>
                    </a>
                    <div class="isotope__filter js-filter-item">
                        <p><strong>Publicado en:</strong> <span data-filter=".filtro-1">Filtro 1</span>, <span data-filter=".filtro-2">Filtro 2</span>, <span data-filter=".filtro-3">Filtro 3</span></p>
                    </div><!-- /.isotope__filter -->
                </div><!-- /.isotope__content -->
            </div><!-- /.isotope__item -->
        </div><!--.isotope-->
        <a href="#" title="Crgar más" class="load-more">Cargar más</a>
    </div><!--.wrap-->
</section>
<?php include 'footer.php'; ?>