<?php get_header(); ?>

<!-- start main-content -->
<main class="main-content">
    <!-- start section page -->
    <section class="block-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <!-- content -->
                    <h2 class="d-none"><?php the_title(); ?></h2>

                    <?php if (have_posts()) : while(have_posts()) : the_post(); ?>

                        <?php the_content(); ?>
                        
                    <?php endwhile; endif; ?>
                    <!-- /.end content -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.end section page -->
</main>
<!-- .end main-content -->

<?php get_footer(); ?>