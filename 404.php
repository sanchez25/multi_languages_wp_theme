<!DOCTYPE html>
<html lang="az">
    <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name='viewport' content='width=device-width,initial-scale=1'/>
		<?php wp_head(); ?>
		<title><?php wp_title(); ?></title>
    </head>
    <body class="error">
		<div class="error__block">
			<div class="error__block-content">
				<img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/error-img.webp" alt="404">
				<p>Page not found</p>
				<a class="button error-btn" href="/">Main page</a>
			</div>
		</div>
    </body>
</html>