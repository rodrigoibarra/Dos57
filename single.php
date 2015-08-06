<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("includes/nav.php"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hero" style="background:linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), linear-gradient(rgba(0, 0, 0, 0.10), rgba(0, 0, 0, 0.90)), url(<?php the_field('featured'); ?>);">
  <h1 class="titulo"><?php the_title(); ?></h1>

</div>

    <div class="wrap cf">
      <section class="single-post">
                <?php the_content() ?>
      </section>



    </div>
  <?php endwhile; endif; ?>

  <?php get_footer(); ?>