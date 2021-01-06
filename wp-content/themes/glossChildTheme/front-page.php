<?php
get_header();
?>
<!-- start main content -->
<main class="main-content">
    <!-- start hero -->
    <section class="hero" style="background-image: url(<?php echo esc_url(get_field('hero_bg')['url']); ?>);">
        <div class="container">
            <h1 class="text-white"><?php the_field('title') ?></h1>
            <p class="hero__description"><?php the_field('description') ?></p>
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
                            <p class="my-4 my-lg-5"><?php the_field('column_light_description') ?></p>
                            <a href="#" class="button button-1"><?php the_field('column_light_button') ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.end courses -->
    <!-- start team -->
    <section class="team pt-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0 p-lg-0">
                    <div class="team__container">
                        <div class="team__content">
                            <h3 class="text-white"><?php the_field('column_dark_title') ?></h3>
                            <p class="my-4 my-lg-5"><?php the_field('column_dark_description') ?></p>
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
    <!-- start people -->
    <section class="people pt-0">
        <div class="container">
            <h3 class="text-center mb-3">Lorem Ipsum Dolor Sit Amet</h3>
            <p class="text-center mb-3">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

            <!-- Start latest post -->

            <div class="row mt-5">
                <?php $latest_post = get_posts( 'numberposts=4' ); // Defaults args fetch posts starting with the most recent ?>
                <?php foreach( $latest_post as $post ) : setup_postdata( $post ); ?>
                
                    <div class="col-sm-6 col-lg-3">
                        <div class="position-relative">
                            <figure>
                                <?php the_post_thumbnail(); ?>
                            </figure>
                            <div class="text-center">
                                <h5 class="mb-0">
                                    <a class="text-dark stretched-link no-underline" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h5>
                                <p class="m-0"><small><?php the_content(); ?></small></p>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </section>
    <!-- /.end people -->
    <!-- start newsletter -->
    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-4 mb-lg-0">
                    <p class="newsletter__description text-center text-lg-left">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                </div>
                <div class="col-lg-3 text-center text-lg-left">
                    <a href="#" class="button button-2">Improve Thinking</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.end newsletter -->
</main>
<!-- /.end main content -->
<?php get_footer(); ?>