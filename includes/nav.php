<nav id="header" class="nav-up flex-nav">
  <a href="/"><img src="<?php bloginfo('template_url'); ?>/build/images/logo-h.png" class="logo-h" alt="Dos Cincuentaysiete" /></a>
  <a href="/"> <img src="<?php bloginfo('template_url'); ?>/build/images/Dos57-resp.png" class="resp-logo" alt="Dos Cincuentaysiete" /></a>
  <a href="#nosotros">Nosotros</a>
  <a href="#portafolio">Portafolio</a>
  <a href="#contacto">Contacto</a>
</nav>
<div class="cat-nav cat-nav-hide ">
  <?php wp_list_categories( array(
      'title_li' => ''
  ) ); ?>
</div>
