<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
<header>
  <div class="hero-uno">
    <?php include("includes/hero-nav.php"); ?>
  </div>
</header>
<?php include("includes/nav.php"); ?>
    <div class="wrap cf">
      <?php include("includes/punch-line.php"); ?>

      <section class="portafolio" id="portafolio">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="galeria" >
            <figure class="effect-lily">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>">
              <figcaption>
                <a href="<?php the_permalink(); ?>">
                  <h2><?php the_title(); ?></h2>
                </a>
              </figcaption>
            </figure>
          </div>
      		<?php endwhile; endif; ?>
      </section>
    </div>
    <section class="contacto" id="contacto">
        <?php include("includes/form.php"); ?>

    </section>
    <?php get_footer(); ?>
