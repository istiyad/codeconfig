<footer>
	<div class="footer-top">
		<div class="footer-top-wrap" style="background-image: url(<?php echo get_theme_file_uri('/assets/images/footer-top-bg.jpg'); ?>);">
			<div class="container d-flex space-between">
				<div class="image-side d-flex">
					<img src="<?php echo get_theme_file_uri('/assets/images/footer-top-img.png'); ?>" alt="">
				</div>
				<div class="content-side">
					<?php if(is_active_sidebar( 'footertop' )){dynamic_sidebar( 'footertop' );} ?>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="d-flex space-between flex-wrap">
				<div class="left-side">
					<a href="<?php echo site_url( ); ?>" class="footer-logo"><img src="<?php echo get_theme_file_uri('/assets/images/footer-logo.png'); ?>" alt=""></a>
					<h4 class="subscribe-title"><strong><?php echo __('Subscribe', 'codeconfig'); ?> </strong><?php echo __('to our newslatter', 'codeconfig'); ?></h4>
					<div class="subscribe-form">
						<form action="" method="post" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate" data-status="init">

						<?php echo do_shortcode( '[contact-form-7 id="1b514fa" title="Footer Subscribe form"]' ); ?>

						</form>
					</div>
					<div class="social-icons">
					<ul class="unstyle d-flex">
						<li><a class="flex-center transition" href="#"><img src="<?php echo get_theme_file_uri('/assets/images/facebook-icon.svg') ?>" alt=""></a></li>
						<li><a class="flex-center transition" href="#"><img src="<?php echo get_theme_file_uri('/assets/images/brands_x-twitter-icon.svg') ?>" alt=""></a></li>
						<li><a class="flex-center transition" href="#"><img src="<?php echo get_theme_file_uri('/assets/images/youtube-icon.svg') ?>" alt=""></a></li>
						<li><a class="flex-center transition" href="#"><img src="<?php echo get_theme_file_uri('/assets/images/linkedin-icon.svg') ?>" alt=""></a></li>
					</ul>
					</div>
				</div>
				<div class="right-side d-flex space-between">
					
					<div class="footer-menu company">
						<h4><?php echo __('Company', 'codeconfig'); ?></h4>
							<?php
							wp_nav_menu( [
							'theme_location' => 'company-menu',
							'menu_class' => 'company-menu',
							'container'      => false,
							// 'walker' => new Walker_Nav_Menu_Edit_Custom(), // Use the custom Walker
							] );
							?>
					</div>

					<div class="footer-menu resources">
						<h4><?php echo __('Resources', 'codeconfig'); ?></h4>
							<?php
							wp_nav_menu( [
							'theme_location' => 'resources-menu',
							'menu_class' => 'resources-menu',
							'container'      => false,
							// 'walker' => new Walker_Nav_Menu_Edit_Custom(), // Use the custom Walker
							] );
							?>
					</div>
					<div class="footer-menu products">
						<h4><?php echo __('Products', 'codeconfig'); ?></h4>
						<ul>
							<li><a href="#"><span><img src="<?php echo get_theme_file_uri('assets/images/ddm-footer.svg'); ?>" alt=""></span>Dusky Dark Mode</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		<?php if(is_active_sidebar( 'copyright' )){dynamic_sidebar( 'copyright' ); } ?>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
