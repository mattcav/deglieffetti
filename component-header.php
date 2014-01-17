<header role="banner" id="top-header" class="banner">
<a class="left-off-canvas-toggle menu-icon"><span></span></a>
    <div class="row">
        <div class="logo">
            <h1 class="logo__title">
                <a href="<?php bloginfo('url'); ?>">
                    <svg width="175" height="30">
                      <image width="175" height="30" xlink:href="<?php bloginfo('template_directory'); ?>/images/deglieffetti.svg" src="<?php bloginfo('template_directory'); ?>/images/deglieffetti.png" />
                    </svg>  
                </a>
            </h1>
        </div>

        <nav class="top-menu">
            <ul class="visible-menu">
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="#">the boutique</a>
                </li>
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="#">latest arrivals</a>
                </li>
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="#">magazine</a>
                </li>
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="#">shop online</a>
                </li>
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="#">contact us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<?php get_template_part('component', 'offcanvas'); ?>