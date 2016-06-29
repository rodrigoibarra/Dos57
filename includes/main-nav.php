<nav id="header">
  <div class="flex-nav">
    <a href="/"><img src="<?php bloginfo('template_url'); ?>/build/images/logo-h.png" class="logo-h" alt="Dos Cincuentaysiete" /></a>
    <a href="/"> <img src="<?php bloginfo('template_url'); ?>/build/images/Dos57-resp.png" class="resp-logo" alt="Dos Cincuentaysiete" /></a>
    <a href="/">Home</a>
    <a href="/portafolio">Portafolio</a>
    <a href="/#contacto">Contacto</a>
    <a id="toggle">Categorias</a>
  </div>
  <div class="cat-nav cat-nav-hide ">
    <?php wp_list_categories( array(
        'title_li' => ''
    ) ); ?>
  </div>
</nav>
