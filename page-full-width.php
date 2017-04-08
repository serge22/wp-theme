<?php /* Template Name: Full Width */ ?>
<?php
get_header();

echo '<div class="container-fluid">';
if (have_posts()) {
	while (have_posts()) {
		the_post();
		is_single() ? get_template_part('post-details'): get_template_part('post-short', get_post_format());
	}
	the_posts_pagination();
}

echo '</div>';
get_footer();
