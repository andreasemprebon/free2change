<?php

/**
 * HEADER
 *
 * Tutte le informazioni prima dell'apertura del tag body
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/reset.css" />

	<?php wp_head(); ?>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
              integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
                crossorigin="anonymous"></script>

    <!-- CSS Personalizzati -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/header.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/menu.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/index.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/home.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/post.css" />

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/footer.css" />

</head>

<body>

<script text="type/javascript">
    $(document).ready(function () {
        /**
         * Se sono nella versione mobile e clicco
				 * sul pulsante More con i tre puntini,
				 * mostro il menù
         */
        $(".mobile-menu").on("click", ".icon.more", function () {
						if ( $(this).hasClass("rotazioneOraria") ) {
							$(this).addClass("rotazioneAntiOraria").removeClass("rotazioneOraria");
							$(".menu").hide(500);
						} else {
							$(this).addClass("rotazioneOraria").removeClass("rotazioneAntiOraria");
							$(".menu").show(500);
						}
				});

    });
</script>


<header class="main-header">
    <div class="header-container">

        <div class="left-link">

            <div class="social">

                <div class="icon facebook">
                    <a href="#">
                        <?php include(get_stylesheet_directory() . "/img/social/facebook.svg"); ?>
                    </a>
                </div>

                <div class="icon instagram">
                    <a href="#">
                        <?php include(get_stylesheet_directory() . "/img/social/instagram.svg"); ?>
                    </a>
                </div>

            </div>


        </div>

        <div class="logo-border">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>" class="logo-bg">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Free2Change" class="logo-desktop"/>
										<img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo-mobile.png" alt="Free2Change" class="logo-mobile"/>
                </a>
            </div>
        </div>

        <div class="right-link">
            Ciao
        </div>

				<div class="mobile-menu">
					<div class="mobile-icon">

							<div class="icon blog">
									<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>">
											<?php include(get_stylesheet_directory() . "/img/menu/blog.svg"); ?>
									</a>
							</div>

							<div class="icon more">
									<a href="#">
											<?php include(get_stylesheet_directory() . "/img/menu/more.svg"); ?>
									</a>
							</div>

					</div>
				</div>

    </div>
</header>

<div class="clear"></div>

<div class="menu">
    <div class="container">

        <ul>

            <li>
                <a href="<?php echo get_home_url(); ?>" class="home">
                    Home
                </a>
            </li>

            <li>
                <a href="#" class="chi-siamo">
                    Chi Siamo
                </a>
            </li>

            <li>
                <a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Blog' ) ) ); ?>" class="blog">
                    Blog
                </a>
            </li>

            <li>
                <a href="#" class="crowdfunding">
                    Crowdfunding
                </a>
            </li>

            <li>
                <a href="#" class="careers">
                    Careers
                </a>
            </li>

            <li>
                <a href="#" class="contatti">
                    Contatti
                </a>
            </li>

        </ul>

    </div>
</div>
