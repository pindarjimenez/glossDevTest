<?php
get_header();
?>
<!-- start main content -->
<main class="main-content">
    <!-- start hero -->
    <section class="hero">
        <div class="container">
            <h1><?php the_field('title') ?></h1>
            <p><?php the_field('description') ?></p>
            <a href="#" class="button button-1"><?php the_field('button') ?></a>
        </div>
    </section>
    <!-- /.end hero -->
    <!-- start courses -->
    <section class="courses">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <figure class="content-centered">
                        <?php 
                            $coursesImage = get_field('column_light_image');
                        ?>
                        <img class="img-fluid" src="<?php echo esc_url($coursesImage['url']); ?>" alt="<?php echo esc_attr($coursesImage['alt']); ?>">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="content-centered">
                        <div>   
                            <h3><?php the_field('column_light_title') ?></h3>
                            <p><?php the_field('column_light_description') ?></p>
                            <a href="#" class="button button-1"><?php the_field('column_light_button') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.end courses -->
    <!-- start team -->
    <section class="team">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 p-lg-0">
                    <div class="team__container">
                        <div class="team__content">
                            <h3 class="text-white"><?php the_field('column_dark_title') ?></h3>
                            <p><?php the_field('column_dark_description') ?></p>
                            <a href="#" class="button button-1"><?php the_field('column_dark_button') ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-lg-0">
                    <figure class="team__figure">
                        <?php 
                            $teamImage = get_field('column_dark_image');
                        ?>
                        <img src="<?php echo esc_url($teamImage['url']); ?>" alt="<?php echo esc_attr($teamImage['alt']); ?>">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- /.end team -->
</main>
<!-- /.end main content -->
<?php get_footer(); ?>