<?php
/**
 * The template for displaying the footer
 * Contains the closing of the body tag and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @since Business Gravity 1.0.0
 */
?>	
</div> <!-- end content -->

		
		<?php 
		
		//get_template_part( 'template-parts/footer/postcarousel', '' );
		get_template_part('template-parts/footer/contactinfo', ''); 
		get_template_part('template-parts/footer/contactmap', ''); 
		get_template_part('template-parts/front-page/footer', 'callback'); // rmorales added call to footer callback ?>
		<?php if( !business_gravity_get_option( 'disable_footer_widget') ){
				if( business_gravity_is_active_footer_sidebar() ):
			?>
				<section class="wrapper block-top-footer">
					<div class="container">
						<div class="row">
						<?php 
							$count = 0;
							for( $i = 1; $i <= 4; $i++ ){
								?>
									<?php if ( is_active_sidebar( 'business-gravity-footer-sidebar-'.$i  ) ) : ?>
										<div class="col-lg-3 col-md-6 col-12 footer-widget-item">
										<?php dynamic_sidebar( 'business-gravity-footer-sidebar-'.$i  ); ?>
										</div>
									<?php endif; ?>
								<?php
							}
							if( $count > 0 ){
								$return = true;
							}else{
								$return = false;
							}
						?>
						</div>
					</div>
				</section>
			<?php
				endif;
				}
			?>
	
		<?php
			if( business_gravity_get_option( 'footer_layout' ) == 'footer_one' ):
		?>
		<footer class="wrapper site-footer" role="contentinfo">
			<?php 
				if ( has_nav_menu( 'social' ) ) { ?>
					<div class="footer-social">
						<div class="socialgroup">
							<?php business_gravity_get_menu( 'social' ); ?>
						</div>
					</div>
				
			 <?php } ?>
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-12 col-md-6">
							<?php get_template_part('template-parts/footer/site', 'info'); ?>							<div class = "footer-mail">									<span class="kfi kfi-mail-alt"></span>									<a href="mailto:<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?>">										<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?>									</a>								 <!-- Footer email added by RMorales -->								 </div>
						</div>
						<div class="col-12 col-md-6">
							<div class="footer-menu">
								<?php business_gravity_get_menu( 'footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Footer one -->
		<?php endif; ?>

		<?php
			if( business_gravity_get_option( 'footer_layout' ) == 'footer_two' ):
		?>
		<footer class="wrapper site-footer site-footer-two" role="contentinfo">
			<?php 
				if ( has_nav_menu( 'social' ) ) { ?>
					<div class="footer-social">
						<div class="socialgroup">
							<?php business_gravity_get_menu( 'social' ); ?>
						</div>
					</div>
				
			 <?php } ?>
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-12">
							<?php get_template_part('template-parts/footer/site', 'info'); ?>							<div class = "footer-mail">									<span class="kfi kfi-mail-alt"></span>									<a href="mailto:<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?>">										<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?>									</a>								 <!-- Footer email added by RMorales -->								 </div>
							<div class="footer-menu">
								<?php business_gravity_get_menu( 'footer' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Footer two -->
		<?php endif; ?>

		<?php
			if( business_gravity_get_option( 'footer_layout' ) == 'footer_three' ):
		?>
		<footer class="wrapper site-footer site-footer-three" role="contentinfo">
			<div class="container">				<div class="footer-inner">					<div class="row">						<div class="col-12">													<div class="footer-menu">								<?php business_gravity_get_menu( 'footer' ); ?>							</div>							<?php get_template_part('template-parts/footer/site', 'info'); ?>																		</div>					</div>				</div>			</div>
		</footer><!-- Footer three -->
		
		<?php endif; ?>						
		<?php			if( business_gravity_get_option( 'footer_layout' ) == 'footer_four' ):		?>		
		<footer class="wrapper site-footer" style="padding-top:0px;" role="contentinfo">
		
		<?php 
		
		?>
			<?php 
				if ( has_nav_menu( 'social' ) ) { ?>
					<div class="footer-social">
						<div class="socialgroup">
							<?php business_gravity_get_menu( 'social' ); ?>
						</div>
					</div>
				
			 <?php } ?>
			<div class="container">
				<div class="footer-inner">
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="footer-menu" >
								<?php business_gravity_get_menu( 'footer' ); ?>
							</div>
						</div>
					
						<div class="col-12 col-md-6">	
							<?php get_template_part('template-parts/footer/site', 'info'); ?>								
							<div class = "footer-mail" style="right:0px; position:absolute;">									
							<span class="kfi kfi-mail-alt"></span>									
							<a href="mailto:<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?>">									<?php echo wp_kses_post(  business_gravity_get_option( 'footer_email' ) ); ?></a>								 
							<!-- Footer email added by RMorales -->								 
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer><!-- Footer four added by RMorales -->		<?php endif; ?>

		<?php wp_footer(); ?>
	</body>
</html>