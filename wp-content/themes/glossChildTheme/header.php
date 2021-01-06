<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gloss Dev Test</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- start page-container -->
    <div class="page-container">
        <!-- start main-header -->
        <header class="main-header">
            <div class="container-lg">
                <div class="main-header__top">
                    <ul class="list-unstyled d-flex flex-wrap justify-content-end m-0">
                        <li class="mt-2 mb-0 mr-3">
                            <a href="#" class="main-header__top-link">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="mt-2 mb-0 mx-0">
                            <a href="#" class="main-header__top-link">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                
                <nav class="main-navbar">
                    <div class="main-navbar__container">
                        <a href="#" class="main-navbar__brand">Logo</a>
                        <?php
                            wp_nav_menu( 
                                array( 
                                    'theme_location' => 'header-menu',
                                    'container_class' => 'main-navbar__list',
                                    'container_id' => 'navigation'
                                ) 
                            );
                        ?>

                        <button data-collapse data-target="#navigation" class="main-navbar__toggle">
                            <span class="icon"></span>
                        </button>
                    </div>
                </nav>
            </div>
        </header>
        <!-- /.end main-header -->