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
        <span>Actualités</span>
      </div>
      <h1 class="lai-page__title">Actualités</h1>
    </div>
  </div>

  <div class="lai-page__content">
    <div class="lai-blog">

      <?php if (have_posts()) : ?>

        <div class="lai-blog__grid">
          <?php while (have_posts()) : the_post(); ?>

            <article class="lai-blog-card" id="post-<?php the_ID(); ?>">

              <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="lai-blog-card__img-wrap" tabindex="-1" aria-hidden="true">
                  <?php the_post_thumbnail('medium_large', ['class' => 'lai-blog-card__img', 'alt' => '']); ?>
                </a>
              <?php else : ?>
                <div class="lai-blog-card__img-placeholder" aria-hidden="true">
                  <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1A5FAB" stroke-width="1.5">
                    <circle cx="12" cy="12" r="2.5" fill="#1A5FAB"/>
                    <circle cx="12" cy="12" r="6" stroke="#1A5FAB" stroke-width="1.5" fill="none"/>
                    <circle cx="12" cy="12" r="10" stroke="#1A5FAB" stroke-width="1" fill="none" opacity=".4"/>
                  </svg>
                </div>
              <?php endif; ?>

              <div class="lai-blog-card__body">

                <div class="lai-blog-card__meta">
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
                  <time datetime="<?php echo get_the_date('c'); ?>" class="lai-blog-card__date">
                    <?php echo get_the_date('j F Y'); ?>
                  </time>
                </div>

                <h2 class="lai-blog-card__title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>

                <p class="lai-blog-card__excerpt">
                  <?php echo wp_trim_words(get_the_excerpt(), 20, '…'); ?>
                </p>

                <a href="<?php the_permalink(); ?>" class="lai-blog-card__link">
                  Lire la suite →
                </a>

              </div>
            </article>

          <?php endwhile; ?>
        </div>

        <div class="lai-blog__pagination">
          <?php the_posts_pagination([
            'mid_size'  => 2,
            'prev_text' => '← Plus récents',
            'next_text' => 'Plus anciens →',
          ]); ?>
        </div>

      <?php else : ?>
        <div class="lai-blog__empty">
          <p>Aucune actualité pour le moment. Revenez bientôt !</p>
        </div>
      <?php endif; ?>

    </div>
  </div>

</main>

<?php get_template_part('template-parts/footer-site'); ?>
<?php wp_footer(); ?>

<!-- <script>
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
</script> -->

</body>
</html>
