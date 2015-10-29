<?php define( 'WP_USE_THEMES', false );
/*
Template Name: portafolio
*/
 get_header(); ?>
<?php include("includes/main-nav.php"); ?>
    <div class="wrap cf">
      <section class="portafolio" id="portafolio">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="galeria" >
            <a href="<?php the_permalink(); ?>">
            <figure class="effect-lily">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>"/>
              <figcaption>
                <div>
                  <h2><?php the_title(); ?></h2>
                </div>
              </figcaption>
            </figure>
            </a>
          </div>
      		<?php endwhile; endif; ?>
      </section>
    </div>


  <?php get_footer(); ?>
