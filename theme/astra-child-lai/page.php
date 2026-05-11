<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('lai-inner-page'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/nav'); ?>

<main class="lai-page" role="main">

  <div class="lai-page__hero">
    <div class="lai-page__hero-inner">
      <div class="lai-page__breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
        <span aria-hidden="true">›</span>
        <span><?php the_title(); ?></span>
      </div>
      <h1 class="lai-page__title"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="lai-page__content">
    <div class="lai-page__content-inner">
      <?php
      while (have_posts()) {
        the_post();
        the_content();
      }
      ?>
    </div>
  </div>

</main>

<?php get_template_part('template-parts/footer-site'); ?>

<?php wp_footer(); ?>

<script>
(function() {
  const burger = document.querySelector('.lai-nav__burger');
  const menu   = document.querySelector('.lai-nav__menu');
  if (burger && menu) {
    burger.addEventListener('click', function() {
      const open = menu.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', open);
    });
  }
})();
</script>

</body>
</html>
