<?php
/**
 * Template part for displaying a message that posts cannot be found
 */

?>

<!-- content-none -->
<section class="no-results not-found">

  <header class="page-header">
    <h1 class="page-title"><?php esc_html_e('Nothing Found', 'wpspock'); ?></h1>
  </header>

  <div class="page-content">
      <?php
      if (is_home() && current_user_can('publish_posts')) :

          printf(
              '<p>' . wp_kses(
                  __('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'wpspock'),
                  [
                      'a' => [
                          'href' => [],
                      ],
                  ]
              ) . '</p>',
              esc_url(admin_url('post-new.php'))
          );

      elseif (is_search()) :
          ?>

        <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'wpspock'); ?></p>
          <?php
          get_search_form();

      else :
          ?>

        <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'wpspock'); ?></p>
          <?php
          get_search_form();

      endif;
      ?>
  </div>
</section>
