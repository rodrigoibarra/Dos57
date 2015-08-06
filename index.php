<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("includes/nav.php"); ?>
    <div class="wrap cf">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content() ?>

            <?php endwhile; endif; ?>
    </div>


  <?php get_footer(); ?>
