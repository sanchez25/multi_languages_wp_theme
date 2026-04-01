<!DOCTYPE html>
<html lang="<?php echo asl()->lang_attr; ?>">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name='viewport' content='width=device-width,initial-scale=1'/>
    <?php wp_head(); ?>
    <title><?php wp_title(); ?></title>
	<meta name="yandex-verification" content="3a4ebd5a51455286" />
</head>
<body>
    <?php if ( is_amp() ):?>
        <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
		<script async custom-element="amp-bind" src="https://cdn.ampproject.org/v0/amp-bind-0.1.js"></script>
        <amp-sidebar id="sidebar" class="sample-sidebar" layout="nodisplay" side="right">
            <div class="close">
                <button on="tap:sidebar.toggle" class="closeButton">
                    <img class="close__img" src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="close">
                </button>
            </div>
            <div class="menu_amp">
                <?php 
					if (has_nav_menu('main')) {
						do_action('custom_menu', 'top');
					} else {
						echo '';
					}
				?>
            </div>
        </amp-sidebar>
    <?php endif; ?>
    <div id="scroll"></div>
    <header>
        <?php if ( !is_amp() ):?>
            <div class="header header_desktop wrapper">
                <div class="overlay"></div>
                <div class="header__top">
                    <a class="logo" href="<?php echo asl()->get_slug_home_url();?>">
                        <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/logo.webp" width="120" height="53" alt="Glory Casino">
                    </a>
                    <div class="main_menu">
                        <?php 
                            if (has_nav_menu('main')){
                                do_action('custom_menu', 'top');
                            } else {
                                echo '';
                            }
                        ?>
                    </div>
                    <div class="header__right">
                        <?php
                            $offer_link = get_field('offer_link', 'option');
                        ?>
                        <div class="buttons">
                            <?php if (is_amp()): ?>
                                <button class="button log_button" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')" >
                            <?php else: ?>
                                <button class="button log_button"  onclick="location.href='<?php echo $offer_link; ?>'">
                            <?php endif; ?>
                                <?= asl()->translate('Giriş'); ?>
                            </button>
                            <?php if (is_amp()): ?>
                                <button class="button reg_button" on="tap:AMP.navigateTo(url='<?php echo $offer_link; ?>')" >
                            <?php else: ?>
                                <button class="button reg_button"  onclick="location.href='<?php echo $offer_link; ?>'">
                            <?php endif; ?>
                                <?= asl()->translate('Qeydiyyat'); ?>
                            </button>
                        </div>
						<div class="lang_choose">
							<?php do_action('custom_nav'); ?>
						</div>
						<?php 
							if (has_nav_menu('main')) { ?>
								<div class="burger">
									<img src="<?php echo get_template_directory_uri() ?>/img/burger.svg" alt="Burger">
								</div>
						<?php } ?>
                        <div class="menu_mobile">
                            <div class="close">
                                <img class="close__img" src="<?php echo get_template_directory_uri() ?>/img/close.svg" alt="Close">
                            </div>
                            <?php 
								if (has_nav_menu('main')){
									do_action('custom_menu', 'top');
								} else {
									echo '';
								}
							?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <div class="header content_amp wrapper">
                <a class="logo" href="<?php echo asl()->get_slug_home_url();?>">
                   <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2024/09/logo.webp" width="120" height="53" alt="Glory Casino">
                </a>
				<div class="lang_choose">
					<?php do_action('custom_nav'); ?>
				</div>
				<?php 
					if (has_nav_menu('main')) { ?>
						<button on="tap:sidebar.toggle" class="burger">
							<img src="<?php echo get_template_directory_uri() ?>/img/burger.svg" alt="Burger">
						</button>
				<?php } ?>
            </div>
        <?php endif; ?>
    </header>
