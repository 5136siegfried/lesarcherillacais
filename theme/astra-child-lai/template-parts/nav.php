<nav class="lai-nav" role="navigation" aria-label="Navigation principale">
  <div class="lai-nav__inner">

    <a href="<?php echo esc_url(home_url('/')); ?>" class="lai-nav__logo" aria-label="<?php bloginfo('name'); ?> — Accueil">
      <?php
      $logo_id = get_theme_mod('custom_logo');
      if ($logo_id) {
        echo wp_get_attachment_image($logo_id, 'full', false, ['class' => 'lai-nav__logo-img', 'alt' => get_bloginfo('name')]);
      } else { ?>
        <div class="lai-nav__logo-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" width="18" height="18">
            <circle cx="12" cy="12" r="2.5" fill="#F5C400"/>
            <circle cx="12" cy="12" r="6" stroke="#F5C400" stroke-width="1.5" stroke-opacity=".6" fill="none"/>
            <circle cx="12" cy="12" r="10" stroke="#F5C400" stroke-width="1" stroke-opacity=".3" fill="none"/>
          </svg>
        </div>
      <?php } ?>
      <div class="lai-nav__logo-text">
        <span class="lai-nav__logo-name"><?php bloginfo('name'); ?></span>
        <span class="lai-nav__logo-tagline">St Jean d'Illac · Gironde</span>
      </div>
    </a>

    <div class="lai-nav__menu" id="primary-menu">
      <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container'      => false,
        'menu_class'     => 'lai-nav__list',
        'depth'          => 2,
        'fallback_cb'    => false,
      ]); ?>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('je-debute'))); ?>" class="lai-nav__cta">
        Nous rejoindre
      </a>
    </div>

    <button class="lai-nav__burger" aria-controls="primary-menu" aria-expanded="false" aria-label="Ouvrir le menu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>
