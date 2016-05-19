<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("includes/main-nav.php"); ?>
    <div class="wrap cf">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <a class="galeria" href="<?php the_permalink(); ?>">
                <div class="fig">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>"/>
                  <h2><?php the_title(); ?></h2>
                </div>
            </a>

            <?php endwhile; endif; ?>
    </div>


  <?php get_footer(); ?>
