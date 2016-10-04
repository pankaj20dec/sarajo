
		</div><!-- .site-content -->

		<footer id="footer" class="site-footer" role="contentinfo">
			<div class="container">
				<div class="row"> 
					<div class="col-sm-2 border">
						<div class="footer-heading">&copy; <?php echo date('Y'); ?> <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></div>
						<p>All rights reserved. </p>
					</div>
					<div class="col-sm-2 border">
						<div class="footer-heading">NAVIGATE</div>
						<?php if ( has_nav_menu( 'secondry' ) ) : ?>
							<nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer secondry Menu', 'sarajo' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'secondry',
										'menu_class'     => 'secondry-menu',
									 ) );
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>
					</div>
					<div class="col-sm-2 border">
						<div class="footer-heading">categories</div>
						<ul class="footer-categories">
							<li><a href="javascript:void(0)">textiles</a></li>
							<li><a href="javascript:void(0)">costumes</a></li>
							<li><a href="javascript:void(0)">furniture</a></li>
							<li><a href="javascript:void(0)">jewellry</a></li>
							<li><a href="javascript:void(0)">art</a></li>
						</ul>
					</div>
					<div class="col-sm-2 border">
						<div class="footer-heading">info</div>
						<div class="footer-info">
							<p>Sarajo Inc.</p>
							<p>31 Howard Street</p>
							<p>New York, NY</p>
							<p>10031</p>
						</div>
					</div>
					<div class="col-sm-4 border">
						<div class="footer-heading">subscribe to our newsletter</div>
						<div class="subscribe-form">
							<p>Get the latest updates on new products and sales</p>
							<form class="form-inline">
							  <div class="form-group">
								<input type="email" class="form-control" id="email-field" placeholder="">
							  </div>
							  <button type="submit" class="btn btn-primary">Sign Up</button>
							</form>
						</div>						
					</div>
				</div>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
