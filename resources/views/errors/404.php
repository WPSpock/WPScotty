<?php
/**
 * Default header content.
 *
 * You can override this file just adding `resources/view/404.php` in your theme.
 *
 */
get_header() ?>

  <section id="primary"
           class="content-area">
    <main id="main"
          class="site-main">

      <div class="error-404 not-found">
        <header class="page-header">
          <h1 class="page-title"><?php _e('Oops! That page can&rsquo;t be found.', 'twentynineteen'); ?></h1>
        </header>

        <div class="page-content">
          <p><?php _e('It looks like nothing was found at this location. Maybe try a search?', 'twentynineteen'); ?></p>
            <?php get_search_form(); ?>
        </div>
      </div>

    </main>
  </section>

<?php get_footer();
