<?php if (is_amp()):
	$amp_class = 'content_amp';
endif; ?>

<div class="content_page wrapper <?php echo $amp_class; ?>">
	<meta itemprop="author" content="<?php the_author(); ?>">
	<meta itemprop="datePublished" content="<?php echo get_the_date('Y-n-j'); ?>">
	<meta itemprop="dateModified" content="<?php echo get_the_modified_date('Y-n-j'); ?>">
	<meta itemprop="image" content="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/logo.webp">
	<?php if( !(is_front_page() || trim($_SERVER['REQUEST_URI'], '/') === 'tr' || trim($_SERVER['REQUEST_URI'], '/') === 'bd') ) { ?>
		<nav aria-label="breadcrumbs" class="breadcrumbs">
			<a href="/"><?= asl()->translate('Ev'); ?></a>
			<span class="separator"> » </span>
			<span class="last"><?php the_title(); ?></span>
		</nav>
<?php }?>
	<h1 itemprop="headline"><?php the_title(); ?></h1>
	<?php the_content();?>
</div>
<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
	<meta itemprop="name" content="<?php echo get_bloginfo(); ?>">
	<meta itemprop="description" content="<?php echo get_bloginfo(); ?>">
	<div itemprop="logo" itemscope="" itemtype="https://www.schema.org/ImageObject">
		<link itemprop="url" href="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/logo.webp">
		<link itemprop="contentUrl" href="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/logo.webp">
	</div>
</div>