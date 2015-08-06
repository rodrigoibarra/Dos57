<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<?php include("includes/nav.php"); ?>
    <div class="wrap cf">
      <section class="portafolio" id="portafolio">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="galeria" >
            <figure class="effect-lily">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>"/>
              <figcaption>
                <div>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                </div>
              </figcaption>
            </figure>
          </div>
      		<?php endwhile; endif; ?>
      </section>
    </div>


  <?php get_footer(); ?>
