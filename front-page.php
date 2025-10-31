<?php
/**
 * Template de la page d’accueil (front-page)
 * Thème enfant Planty
 */

get_header(); ?>

<main id="site-content" class="site-main" role="main">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php
      /**
       * On affiche le contenu créé dans Gutenberg.
       * (Les blocs que tu as déjà posés : hero, colonnes, témoignages, CTA, etc.)
       */
      the_content();
    ?>

  <?php endwhile; else : ?>

    <section class="planty-hero">
      <h1>Bienvenue chez Planty 🌿</h1>
      <p>Ajoute ton contenu d’accueil dans l’éditeur Gutenberg.</p>
      <p><a href="<?php echo esc_url( admin_url( 'post.php?post=' . get_option('page_on_front') . '&action=edit' ) ); ?>">
        Modifier la page d’accueil
      </a></p>
    </section>

  <?php endif; ?>

</main>

<?php get_footer(); ?>
