<?php define( 'WP_USE_THEMES', false );
/*
Template Name: home
*/
 get_header(); ?>
<header>
  <div class="hero-uno">
    <?php include("includes/hero-nav.php"); ?>
  </div>
</header>
<?php include("includes/nav.php"); ?>
    <div class="wrap cf">
      <?php include("includes/punch-line.php"); ?>

      <section class="portafolio cf" id="portafolio">
        <?php $i = 1; query_posts('posts_per_page=6');

        if (have_posts()) : while (have_posts()) : the_post(); ?>
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
      <h3><a href="/portafolio">Ver todos</a></h3>
    </div>
    <section class="contacto" id="contacto">
        <?php include("includes/form.php"); ?>

    </section>
    <?php get_footer(); ?>
