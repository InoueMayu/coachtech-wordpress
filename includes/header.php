<?php wp_body_open(); ?>

<header>
      <a href="<?php echo esc_url( home_url('/') ); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/img/estramedia__logo.png" alt="">
      </a>
      <nav class="header__nav">
        <ul>
          <li>
            <a href="<?php echo get_category_link( 7 ); ?>" class="">HTML</a>
          </li>
          <li class="nav__list">
            <a href="<?php echo get_category_link( 6 ); ?>">CSS</a>
          </li>
          <li class="nav__list">
            <a href="<?php echo get_category_link( 5 ); ?>">JavaScript</a>
          </li>
          <li class="nav__list">
            <a href="<?php echo get_category_link( 4 ); ?>">PHP</a>  
          </li>
          <li class="nav__list">
            <a href="<?php echo get_category_link( 3 ); ?>">MySQL</a>
          </li>
        </ul>
      </nav>
    </header>
