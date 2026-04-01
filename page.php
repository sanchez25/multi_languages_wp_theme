<?php get_header(); ?>
<?php if (is_amp()):
	$amp_class = 'content_amp';
endif; ?>

<div class="content-block <?php echo $amp_class; ?>" itemid="/<?php echo get_page_uri(); ?>" itemscope itemtype="https://schema.org/Article">
    <?php
        get_template_part('templates/banner');
        
        get_template_part('content');
    ?>
</div>

<?php get_footer(); ?>





