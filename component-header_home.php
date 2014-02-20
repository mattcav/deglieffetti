<header role="banner" id="top-header" class="banner banner--home">
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
                    <a class="scroll visible-menu__link" data-speed="500" data-easing="easeInOutCubic" data-url="true" href="#boutique">the boutique</a>
                </li>
                <li class="visible-menu__item">
                    <a class="scroll visible-menu__link" data-speed="500" data-easing="easeInOutCubic" data-url="true" href="#social">latest arrivals</a>
                </li>
                <li class="visible-menu__item">
                    <a class="scroll visible-menu__link" data-speed="500" data-easing="easeInOutCubic" data-url="true" href="#focus-section">focus on</a>
                </li>
                <li class="visible-menu__item">
                    <a class="scroll visible-menu__link" data-speed="500" data-easing="easeInOutCubic" data-url="true" href="#magazine">magazine</a>
                </li>
                <li class="visible-menu__item">
                    <a class="scroll visible-menu__link" data-speed="500" data-easing="easeInOutCubic" data-url="true" href="#designers">shop online</a>
                </li>
                <li class="visible-menu__item">
                    <a class="visible-menu__link" href="<?php bloginfo('url')?>/contact-us/">contact us</a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<?php get_template_part('component', 'offcanvas_home'); ?>