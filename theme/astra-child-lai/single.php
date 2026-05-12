<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class('lai-inner-page lai-single-post'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/nav'); ?>

<?php while (have_posts()) : the_post(); ?>

<main class="lai-page" role="main">

  <div class="lai-page__hero">
    <div class="lai-page__hero-inner">
      <div class="lai-page__breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Accueil</a>
        <span aria-hidden="true">›</span>
        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>">Actualités</a>
        <span aria-hidden="true">›</span>
        <span><?php the_title(); ?></span>
      </div>
      <h1 class="lai-page__title"><?php the_title(); ?></h1>
      <div class="lai-post__hero-meta">
        <?php
        $cats = get_the_category();
        if ($cats) :
          $cat = $cats[0];
          $colors = [
            'Podiums'     => 'gold',
            'Vie du club' => 'blue',
            'Fédération'  => 'navy',
            'Événements'  => 'green',
          ];
          $color = $colors[$cat->name] ?? 'blue';
        ?>
          <span class="lai-blog-card__cat lai-blog-card__cat--<?php echo esc_attr($color); ?>">
            <?php echo esc_html($cat->name); ?>
          </span>
        <?php endif; ?>
        <time datetime="<?php echo get_the_date('c'); ?>" class="lai-post__date">
          <?php echo get_the_date('j F Y'); ?>
        </time>
        <span class="lai-post__author">par <?php the_author(); ?></span>
      </div>
    </div>
  </div>

  <?php if (has_post_thumbnail()) : ?>
    <div class="lai-post__featured-img">
      <?php the_post_thumbnail('large', ['class' => 'lai-post__img', 'alt' => get_the_title()]); ?>
    </div>
  <?php endif; ?>

  <div class="lai-page__content">
    <div class="lai-page__content-inner lai-post__content">
      <?php the_content(); ?>

      <div class="lai-post__footer">
        <a href="<?php echo esc_url(get_post_type_archive_link('post')); ?>" class="lai-post__back">
          ← Retour aux actualités
        </a>
        <?php
        $prev = get_previous_post();
        $next = get_next_post();
        if ($prev || $next) : ?>
          <div class="lai-post__nav">
            <?php if ($next) : ?>
              <a href="<?php echo esc_url(get_permalink($next)); ?>" class="lai-post__nav-link lai-post__nav-link--prev">
                <span>← Article précédent</span>
                <strong><?php echo esc_html(get_the_title($next)); ?></strong>
              </a>
            <?php endif; ?>
            <?php if ($prev) : ?>
              <a href="<?php echo esc_url(get_permalink($prev)); ?>" class="lai-post__nav-link lai-post__nav-link--next">
                <span>Article suivant →</span>
                <strong><?php echo esc_html(get_the_title($prev)); ?></strong>
              </a>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>

    </div>
  </div>

</main>

<?php endwhile; ?>

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
