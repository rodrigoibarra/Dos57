<?php define( 'WP_USE_THEMES', false );
/*
Template Name: portafolio
*/
 get_header(); ?>
<?php include("includes/main-nav.php"); ?>
    <div class="wrap cf">
        <h1 class="titulo">Portafolio</h1>
      <section class="portafolio" id="portafolio">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <a class="galeria" href="<?php the_permalink(); ?>">
              <div class="fig">
            <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>"/>
                <h2><?php the_title(); ?></h2>
              </div>
          </a>
      		<?php endwhile; endif; ?>
      </section>
    </div>


  <?php get_footer(); ?>
