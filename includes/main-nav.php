<nav id="header" class="flex-nav">
  <a href="/"><img src="<?php bloginfo('template_url'); ?>/build/images/logo-h.png" class="logo-h" alt="Dos Cincuentaysiete" /></a>
  <a href="/"> <img src="<?php bloginfo('template_url'); ?>/build/images/Dos57-resp.png" class="resp-logo" alt="Dos Cincuentaysiete" /></a>
  <a href="/">Home</a>
  <a href="/portafolio">Portafolio</a>
  <a href="/#contacto">Contacto</a>
  <form class="nav-form" method="get" action="<?php bloginfo('url'); ?>">
    <fieldset>
    <input type="text" name="category_name" value="" placeholder="Busca por categoría" maxlength="50" required="required" />
    <button type="submit">Buscar</button>
    </fieldset>
  </form>
</nav>
