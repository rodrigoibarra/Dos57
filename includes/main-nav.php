<nav id="header" class="flex-nav">
  <a href="/"><img src="<?php bloginfo('template_url'); ?>/build/images/logo-h.png" class="logo-h" alt="Dos Cincuentaysiete" /></a>
  <a href="/"> <img src="<?php bloginfo('template_url'); ?>/build/images/Dos57-resp.png" class="resp-logo" alt="Dos Cincuentaysiete" /></a>
  <a href="/">Home</a>
  <a href="/portafolio">Portafolio</a>
  <a href="/#contacto">Contacto</a>

  <?php echo do_shortcode( '[searchandfilter fields="category" class="nav-form" search_placeholder="categorias" submit_label="Buscar" taxonomies="post_tag"]' ); ?>

</nav>
