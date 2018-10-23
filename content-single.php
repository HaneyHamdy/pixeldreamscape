<div class="card grey lighten-3">
	<class="card-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>
	<?php the_content(); ?>

</div><!-- /.blog-post -->