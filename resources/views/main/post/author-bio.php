<?php
/**
 * The template for displaying Author info
 */

if ((bool) get_the_author_meta('description')) : ?>
  <div class="author-bio">
    <h2 class="author-title">
		<span class="author-heading">
			<?php
      printf(
          __('Published by %s', 'wpspock'),
          esc_html(get_the_author())
      );
      ?>
		</span>
    </h2>
    <p class="author-description">
        <?php the_author_meta('description'); ?>
      <a class="author-link"
         href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"
         rel="author">
          <?php _e('View more posts', 'wpspock'); ?>
      </a>
    </p>
  </div>
<?php endif; ?>
