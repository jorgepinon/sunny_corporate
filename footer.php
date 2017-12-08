		</div> <!-- #main -->

	</div> <!-- .container -->


	<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

		<div class="footer-content l-constrained l-max1024">
			
			<div class="row">
				<nav role="navigation">

					<div class="small-12 medium-4 column">
						<h4><a class="" href="#">Products</a></h4>
						<?php 
							$footer_menu_col1 = wp_get_nav_menu_items('Footer : column-1'); 
							if( $footer_menu_col1 ) {
								foreach ( $footer_menu_col1 as $navItem ) {
									echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
								}
							}
						?>
					</div>

					<div class="small-12 medium-4 column">
						<h4><a class="" href="#">Company</a></h4>
						<?php 
							$footer_menu_col2 = wp_get_nav_menu_items('Footer : column-2'); 
							if( $footer_menu_col2 ) {
								foreach ( $footer_menu_col2 as $navItem ) {
									echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
								}
							}
						?>
					</div>

					<div class="small-12 medium-4 column">
						<h4><a class="" href="#">Contact</a></h4>
						<?php 
							$footer_menu_col3 = wp_get_nav_menu_items('Footer : column-3'); 
							if( $footer_menu_col3 ) {
								foreach ( $footer_menu_col3 as $navItem ) {
									echo '<a href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
								}
							}
						?>
					</div>

				</nav>
			</div>

			<br>

			<div class="row">
				<div class="column">
					<p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>
				</div>
			</div>

		</div>

	</footer>


	<?php // find scripts in library/bones.php ?>
	<?php wp_footer(); ?>

</body>

</html> 
