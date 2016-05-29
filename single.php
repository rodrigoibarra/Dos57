<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("includes/main-nav.php"); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="hero" style="background:linear-gradient(rgba(0, 0, 0, 0.20), rgba(0, 0, 0, 0.20)), linear-gradient(rgba(0, 0, 0, 0.10), rgba(0, 0, 0, 0.90)), url(<?php the_field('featured'); ?>);">
  <div class="intro">
    <h1 class="titulo"><?php the_title(); ?></h1>
  </div>

</div>

    <div class="wrap cf">
      <section class="single-post cf">
        <p><?php the_field('intro')?></p>
                <?php the_content() ?>
      </section>

      <div class="post-nav">
        <<?php previous_post(' % ','Anterior','no'); ?> <a class="botton" href="http://www.dos57.com/portafolio">Volver a portafolio</a> <?php next_post(' % ', 'Siguiente', 'no'); ?>
      </div>

    </div>

  <?php endwhile; endif; ?>
  <?php get_footer(); ?>
