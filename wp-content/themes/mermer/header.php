<?php /**
 * The header for our theme
 *
 * @package mermer
 */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="main-wrapper">
	<header class="block block-header">
        <div class="header-wrapper">
            <?php
            // the_custom_logo();  //Можно будет допилить.
            if ( is_front_page() && is_home() ) : //проверка что бы на главной логотип делать не ссылкой а span например, что бы не было цыкличности (для СЕО). Оставил цыкличную ссылку. ?>
                <div class="header-logo"><a href="#"><img class="black" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/header-logo.png" alt="logo"><img class="white" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/header-logo2.png" alt="logo"></a></div>
                <?php else : ?>
                <div class="header-logo"><a href="#"><img class="black" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/header-logo.png" alt="logo"><img class="white" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/header-logo2.png" alt="logo"></a></div>
                <?php  endif; ?>
            <div class="header-container">
                <button class="burger" type="button">
                    <div class="burger-box"><span></span></div>
                </button>
                <div class="mobile-wrapper">

                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'main-header-menu',
                        'container_class'        => 'header-menu',
                        'menu_class'        => 'menu',
                    ) );
                    ?>

                    <div class="header-call"><a href="tel:0858000007">
                            <div class="number">085 800 0007</div>
                            <div class="name">bel gratis</div></a></div>
                    <div class="header-rating">
                        <div class="rating-box">
                            <div class="icon">8,8</div>
                            <div class="info">
                                <div class="stars"><span class="star star-full"></span><span class="star star-full"></span><span class="star star-full"></span><span class="star star-full"></span><span class="star star-half"></span></div>
                                <div class="number">1487</div>
                                <div class="sub">beoordelingen</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .header-container -->
        </div><!-- .header-wrapper -->

	</header><!-- .block-header -->

    <main class="block block-main">
        <section class="block block-banner with-splash">
            <div class="bg-decoration"><img src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/decoration1.png" alt="decoration background"></div>
            <div class="block block-splash splash1">
                <div class="splash-bg"><img src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/splash-bg1.png" alt="splash background"></div>
                <div class="splash-img"><img class="shadow1" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/mask-shadow1.png" alt=""><img class="shadow2" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/mask-shadow2.png" alt=""><img class="image" src="<?php echo get_template_directory_uri(); ?>/dist/html/assets/img/splash-img1.jpg" alt=""></div>
            </div>
            <div class="banner-wrapper">
                <div class="banner-info">
                    <div class="main-title"><?php the_title(); ?></div>
                    <?php
                    $markers = get_field('benefits');
                    if ($markers) { ?>
                    <div class="advantages-markers">
                        <?php
                        foreach ($markers as $marker) { ?>
                            <div class="marker"><i class="icon">
			                        <?php get_template_part('template-parts/svg', 'ok');?>
                                </i><span><?php echo $marker->post_title;?></span></div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <?php //@todo переделать на CF7 форме. ?>
                <div class="banner-form">
                    <div class="block block-form">
	                    <?php echo do_shortcode('[contact-form-7 id="9" title="main-form"]'); ?>
                        <style>#arrow {fill: #fff;stroke: #fff;stroke-width: .1px; fill-rule: evenodd;} .pvb-display-none {display: none !important;} #form-step-2 {display: none} </style>
                    </div>
                </div>
            </div>
        </section>
