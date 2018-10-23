<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>
		<?php wp_title( '|', true, 'right' ); ?>
	</title>

	<?php wp_head();?>
</head>

<body>
	<nav>
		<div class="nav-wrapper blue-grey darken-1">
			<class="brand-logo"><a href="<?php bloginfo('wpurl');?>"><?php echo get_bloginfo( 'name' ); ?></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php wp_list_pages( '&title_li='); ?>
			</ul>
		</div>
	</nav>


	<div class="container">
