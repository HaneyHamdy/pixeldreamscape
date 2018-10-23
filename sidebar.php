<div class="col s3 offset-s1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset grey lighten-3">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
	<div class="sidebar-module sidebar-module-inset grey lighten-3">
		<h4>Archives</h4>
		<ol class="list-unstyled">
			<?php wp_get_archives('type=monthly'); ?>
		</ol>
	</div>
	<div class="sidebar-module sidebar-module-inset grey lighten-3">
		<h4>Elsewhere</h4>
		<ol class="list-unstyled">
			<li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			<li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
			<li><a href="<?php echo get_option('facebook'); ?>">Facebook</a></li>
		</ol>
	</div>
</div><!-- /.blog-sidebar -->


