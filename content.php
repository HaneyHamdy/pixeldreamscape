<div class="row">
    <div class="col s12 m7">
      <div class="card large grey lighten-3">
        <div class="card-image">
          <?php if ( has_post_thumbnail() ) {?>
	<div class="row">
		<div class="col s4">
			<?php	the_post_thumbnail('thumbnail'); ?>
		</div>
		<div class="col s6">
			<?php the_excerpt(); ?>
		</div>
	</div>
	<?php } else { ?>
	<?php the_excerpt(); ?>
	<?php } ?>
          <span class="card-title"><?php the_title(); ?></a>
        </div>
        <div class="card-content">
         <p class="blog-post-meta">
		<?php the_date(); ?> by
			<a href="#">
				<?php the_author(); ?>
			</a> &bull;
			<a href="<?php comments_link(); ?>">
				<?php
		printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( 						get_comments_number() ) ); ?>
			</a>
	</p>
        </div>
        <div class="card-action">
          <a href="<?php the_permalink(); ?>">
        </div>
      </div>
    </div>
  </div>
<!-- /.blog-post -->
