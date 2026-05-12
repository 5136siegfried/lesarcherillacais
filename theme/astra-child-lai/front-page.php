<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class('lai-homepage'); ?>>
<?php wp_body_open(); ?>

<?php get_template_part('template-parts/nav'); ?>

<!-- ═══ HERO CAROUSEL ════════════════════════════════════════ -->
<main>
<section class="lai-hero" aria-label="Présentation du club">
  <div class="lai-carousel" role="region" aria-roledescription="carousel">

    <!-- Slide 1 -->
    <div class="lai-slide lai-slide--active" style="background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/2026/05/compagny.jpeg')); ?>');" background-size: cover; background-position: center;" role="group" aria-roledescription="slide" aria-label="Slide 1 sur 3">
      <div class="lai-slide__overlay" aria-hidden="true"></div>
      <div class="lai-slide__content">
        <div class="lai-slide__eyebrow" aria-hidden="true">
          <span class="lai-slide__line"></span>
          <span>Compagnie de tir à l'arc</span>
        </div>
        <h1 class="lai-slide__title">Un club familliale et compétitif,<br>une pratique<br><em>ouverte à tous.</em></h1>
        <p class="lai-slide__text">Débutants, confirmés, jeunes et adultes — bienvenue à St Jean d'Illac.</p>
        <div class="lai-slide__actions">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('je-debute'))); ?>" class="lai-btn lai-btn--primary">Nous rejoindre</a>
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('calendrier'))); ?>" class="lai-btn lai-btn--outline">Voir le calendrier</a>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="lai-slide" style="background-image: url('<?php echo esc_url(home_url('wp-content/uploads/2026/05/Tir-du-roy-4.jpeg')); ?>');" background-size: cover; background-position: center;" role="group" aria-roledescription="slide" aria-label="Slide 2 sur 3">
      <div class="lai-slide__overlay" aria-hidden="true"></div>
      <div class="lai-slide__content">
        <div class="lai-slide__eyebrow" aria-hidden="true">
          <span class="lai-slide__line"></span>
          <span>Événements</span>
        </div>
        <h1 class="lai-slide__title">Des événements<br>tout au long<br><em>de la saison.</em></h1>
        <p class="lai-slide__text">Tir du Roy, TAG Archers, concours régionaux — une saison vivante et rythmée.</p>
        <div class="lai-slide__actions">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('calendrier'))); ?>" class="lai-btn lai-btn--gold">Voir le calendrier</a>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="lai-slide" style="background-image: url('<?php echo esc_url(home_url('/wp-content/uploads/2026/05/terrain.jpeg')); ?>');" background-size: cover; background-position: center;" role="group" aria-roledescription="slide" aria-label="Slide 3 sur 3">
      <div class="lai-slide__overlay" aria-hidden="true"></div>
      <div class="lai-slide__content">
        <div class="lai-slide__eyebrow" aria-hidden="true">
          <span class="lai-slide__line"></span>
          <span>Pratique</span>
        </div>
        <h1 class="lai-slide__title">En salle,<br>en extérieur —<br><em>toute l'année.</em></h1>
        <p class="lai-slide__text">Mercredi 18h–20h et samedi. Accessible dès 12 ans, tous niveaux.</p>
        <div class="lai-slide__actions">
          <a href="<?php echo esc_url(get_permalink(get_page_by_path('je-debute'))); ?>" class="lai-btn lai-btn--primary">Nous rejoindre</a>
        </div>
      </div>
    </div>

    <button class="lai-carousel__prev" aria-label="Slide précédente">&#8249;</button>
    <button class="lai-carousel__next" aria-label="Slide suivante">&#8250;</button>

    <div class="lai-carousel__dots" role="tablist" aria-label="Slides">
      <button class="lai-dot lai-dot--active" role="tab" aria-selected="true"  aria-label="Aller au slide 1" onclick="goToSlide(0)"></button>
      <button class="lai-dot"                 role="tab" aria-selected="false" aria-label="Aller au slide 2" onclick="goToSlide(1)"></button>
      <button class="lai-dot"                 role="tab" aria-selected="false" aria-label="Aller au slide 3" onclick="goToSlide(2)"></button>
    </div>

  </div>
</section>

<!-- ═══ EVENTS STRIP ═════════════════════════════════════════ -->
<div class="lai-events-strip" aria-label="Prochains événements">
  <div class="lai-events-strip__inner">
    <div class="lai-events-strip__label" aria-hidden="true">
      <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#F5C400" stroke-width="2" aria-hidden="true">
        <rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/>
        <line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/>
      </svg>
      À venir
    </div>
    <div class="lai-events-strip__events">
      <span><em>30 mai</em> Tir du Roy</span>
      <span><em>19 juil</em> TAG Archers</span>
      <span><em>4 juil</em> Fin de saison</span>
    </div>
  </div>
</div>

<!-- ═══ FEATURE CARDS ════════════════════════════════════════ -->
<section class="lai-features" aria-labelledby="features-title">
  <div class="lai-features__inner">
    <p class="lai-section-label" id="features-title">Le club en bref</p>
    <div class="lai-features__grid">

      <article class="lai-card lai-card--blue">
        <div class="lai-card__icon" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#1A5FAB" stroke-width="1.5">
            <rect x="3" y="4" width="18" height="18" rx="2"/>
            <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
            <line x1="3" y1="10" x2="21" y2="10"/>
          </svg>
        </div>
        <h2>Calendrier</h2>
        <p>Entraînements, concours et événements de la saison — toujours à jour.</p>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('calendrier'))); ?>" class="lai-card__link lai-card__link--blue">Voir les dates →</a>
      </article>

      <article class="lai-card lai-card--gold">
        <div class="lai-card__icon" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#B87A00" stroke-width="1.5">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
            <line x1="19" y1="8" x2="19" y2="14"/><line x1="22" y1="11" x2="16" y2="11"/>
          </svg>
        </div>
        <h2>Je débute</h2>
        <p>Quel matériel acheter, comment s'inscrire, tarifs et premières séances.</p>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('je-debute'))); ?>" class="lai-card__link lai-card__link--gold">Guide débutant →</a>
      </article>

      <article class="lai-card lai-card--neutral">
        <div class="lai-card__icon" aria-hidden="true">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="1.5">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14,2 14,8 20,8"/>
            <line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/>
          </svg>
        </div>
        <h2>Ressources</h2>
        <p>Fiches pratiques encadrants, mandats des compétitions, règlement intérieur.</p>
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('ressources'))); ?>" class="lai-card__link lai-card__link--neutral">Accéder →</a>
      </article>

    </div>
  </div>
</section>
</main>

<!-- ═══ DERNIÈRES ACTUALITÉS ══════════════════════════════════ -->
<?php
$actus = new WP_Query([
    'posts_per_page' => 3,
    'post_status'    => 'publish',
]);
if ($actus->have_posts()) : ?>

<section class="lai-home-actus" aria-labelledby="actus-title">
  <div class="lai-home-actus__inner">

    <div class="lai-home-actus__header">
      <p class="lai-section-label" id="actus-title">Dernières actualités</p>
      <a href="<?php echo esc_url(get_permalink(get_page_by_path('actualite'))); ?>" class="lai-home-actus__all">
        Toutes les actualités →
      </a>
    </div>

    <div class="lai-blog__grid">
      <?php while ($actus->have_posts()) : $actus->the_post(); ?>
        <article class="lai-blog-card">
          <?php if (has_post_thumbnail()) : ?>
            <a href="<?php the_permalink(); ?>" class="lai-blog-card__img-wrap" tabindex="-1" aria-hidden="true">
              <?php the_post_thumbnail('medium_large', ['class' => 'lai-blog-card__img', 'alt' => '']); ?>
            </a>
          <?php else : ?>
            <div class="lai-blog-card__img-placeholder" aria-hidden="true">
              <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#1A5FAB" stroke-width="1.5">
                <circle cx="12" cy="12" r="2.5" fill="#1A5FAB"/>
                <circle cx="12" cy="12" r="6" stroke="#1A5FAB" stroke-width="1.5" fill="none"/>
              </svg>
            </div>
          <?php endif; ?>
          <div class="lai-blog-card__body">
            <div class="lai-blog-card__meta">
              <?php $cats = get_the_category();
              if ($cats) :
                $colors = ['Podiums'=>'gold','Vie du club'=>'blue','Fédération'=>'navy','Événements'=>'green'];
                $color = $colors[$cats[0]->name] ?? 'blue'; ?>
                <span class="lai-blog-card__cat lai-blog-card__cat--<?php echo esc_attr($color); ?>">
                  <?php echo esc_html($cats[0]->name); ?>
                </span>
              <?php endif; ?>
              <time datetime="<?php echo get_the_date('c'); ?>" class="lai-blog-card__date">
                <?php echo get_the_date('j F Y'); ?>
              </time>
            </div>
            <h3 class="lai-blog-card__title">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
            <p class="lai-blog-card__excerpt">
              <?php echo wp_trim_words(get_the_excerpt(), 18, '…'); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="lai-blog-card__link">Lire la suite →</a>
          </div>
        </article>
      <?php endwhile; wp_reset_postdata(); ?>
    </div>

  </div>
</section>

<?php endif; ?>

<!-- ═══ PARTENAIRES ══════════════════════════════════════════ -->
<section class="lai-partners" aria-label="Partenaires et soutiens">
  <div class="lai-partners__inner">
    <p class="lai-partners__label">Partenaires & soutiens</p>
    <div class="lai-partners__logos">

      <a href="https://www.saintjeandillac.fr" target="_blank" rel="noopener" class="lai-partner" aria-label="Commune de Saint Jean d'Illac">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-stjean.png" alt="Saint Jean d'Illac" height="52">
      </a>

      <a href="https://www.gironde.fr" target="_blank" rel="noopener" class="lai-partner" aria-label="Département de la Gironde">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-gironde.jpg" alt="Gironde" height="52">
      </a>

      <a href="#" class="lai-partner" aria-label="Label Handisport">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-handisport.jpg" alt="Club labellisé Handisport" height="52">
      </a>

      <a href="https://www.heracles-archerie.fr" target="_blank" rel="noopener" class="lai-partner" aria-label="Héracles Archerie">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-heracles.webp" alt="Héracles Archerie — Sponsor" height="52">
      </a>

    </div>
  </div>
</section>

<!-- ═══ footer ══════════════════════════════════════════ -->

<?php get_template_part('template-parts/footer-site'); ?>

<?php wp_footer(); ?>

<script>
(function() {
  'use strict';
  let current = 0;
  const slides = document.querySelectorAll('.lai-slide');
  const dots   = document.querySelectorAll('.lai-dot');
  let timer;

  function showSlide(n) {
    slides[current].classList.remove('lai-slide--active');
    dots[current].classList.remove('lai-dot--active');
    dots[current].setAttribute('aria-selected', 'false');
    current = ((n % slides.length) + slides.length) % slides.length;
    slides[current].classList.add('lai-slide--active');
    dots[current].classList.add('lai-dot--active');
    dots[current].setAttribute('aria-selected', 'true');
  }

  window.goToSlide = function(n) { clearInterval(timer); showSlide(n); startTimer(); };

  document.querySelector('.lai-carousel__prev').addEventListener('click', function() {
    clearInterval(timer); showSlide(current - 1); startTimer();
  });
  document.querySelector('.lai-carousel__next').addEventListener('click', function() {
    clearInterval(timer); showSlide(current + 1); startTimer();
  });

  function startTimer() { timer = setInterval(function() { showSlide(current + 1); }, 7000); }
  startTimer();
})();
</script>

</body>
</html>