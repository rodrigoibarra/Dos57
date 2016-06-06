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
            <a class="galeria" href="<?php the_permalink(); ?>">
                <div class="fig">
              <img src="<?php the_field('thumbnail'); ?>" alt="<?php the_title(); ?>"/>
                  <h2><?php the_title(); ?></h2>
                </div>
            </a>
      		<?php endwhile; endif; ?>

      </section>
      <div class="ver">
        <a class="botton" href="/portafolio">Ver todos</a>
      </div>
      <section class="contacto" id="contacto">
        <div class="wrap">
          <?php include("includes/form.php"); ?>
        </div>
      </section>
    </div>
    <?php get_footer(); ?>
