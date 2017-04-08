<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title('<h1 class="entry-title">', '</h1>') ?>

	<?php if ('' !== get_the_post_thumbnail()): ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		</div>
	<?php endif ?>

	<div class="entry-content"><?php the_content() ?></div>
</article>
