<?php if ( get_header_image() ) : ?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="custom-header" rel="home">
		<img src="<?php esc_url(header_image()); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr(get_bloginfo( 'title' )); ?>">
	</a>	
<?php endif;  ?>
<!-- Header Area -->

	<?php 
		$topheader_stickycolor = get_theme_mod('topheader_stickycolor','#509e39');

		$stickyheader = esc_attr(chargingstation_sticky_menu());
	?>

    <header class="main-header <?php echo esc_attr(chargingstation_sticky_menu()); ?>">
    	<div class="container">
    		<?php
			$chargingstation_site_desc = get_bloginfo( 'description');
			if ($chargingstation_site_desc) : ?>
				<p class="site-description"><?php echo esc_html($chargingstation_site_desc); ?></p>
		<?php endif; ?>

		<?php if ( function_exists( 'peccular_companion_activated' ) ) { ?>
			<button class="top-header-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".top-header"><i class="fa fa-ellipsis-v"></i></button>
		<?php } ?>	


			<?php 
				$topheader_btntxt = get_theme_mod('topheader_btntxt','Contact Us');
				$topheader_btnlink = get_theme_mod('topheader_btnlink','#');

				$topheader_btnlinkcolor = get_theme_mod('topheader_btnlinkcolor','#ffbb3c');
				$topheader_btnlinktextcolor = get_theme_mod('topheader_btnlinktextcolor','#f6f7f4');
				$topheader_btngradientcolor1 = get_theme_mod('topheader_btngradientcolor1','#509e39');
				$topheader_btngradientcolor2 = get_theme_mod('topheader_btngradientcolor2','#283524');



			?>
		

			
           <!-- Header -->
            <nav class="navbar navbar-expand-lg navbaroffcanvase">
            	<div class="row">
            		<div class="col-md-2 col-lg-2 col-sm-6">
						<div class="logo">
							<?php
							if(has_custom_logo())
								{	
									the_custom_logo();
								}
								else { 
								?>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<h4 class="site-title">
										<?php 
											echo esc_html(bloginfo('name'));
										?>
									</h4>
								</a>	
							<?php 						
								}
							?>
							
						</div>
					</div>

					<div class="col-md-6 col-lg-6 col-sm-6 head_menu">
						<div class="navbar-menubar">
		                    <!-- Small Divice Menu-->
		                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','charging-station'); ?>"> 
		                        <i class="fa fa-bars"></i>
		                    </button>
		                    <div class="collapse navbar-collapse navbar-menu">
			                    <button class="navbar-toggler navbar-toggler-close" type="button" data-bs-toggle="collapse" data-bs-target=".navbar-menu"  aria-label="<?php echo esc_attr_e('Toggle navigation','charging-station'); ?>"> 
			                        <i class="fa fa-times"></i>
			                    </button> 
								<?php 
									wp_nav_menu( 
										array(  
											'theme_location' => 'primary_menu',
											'container'  => '',
											'container_id'    => '',
											'menu_class' => 'navbar-nav main-nav',
											'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
											'walker' => new WP_Bootstrap_Navwalker()
											 ) 
										);
								?>
		                    </div>
		                </div>
	                </div>

					<div class="col-md-4 col-lg-4 col-sm-6 padding-0 head_button">
					<?php if(!$topheader_btntxt == "") { ?>

	                    <a style="background-image: radial-gradient( circle farthest-corner at 10% 20%,<?php echo apply_filters('chargingstation_topheader', $topheader_btngradientcolor1); ?> 0%,<?php echo apply_filters('chargingstation_topheader', $topheader_btngradientcolor2); ?> 100.3% );
 color: <?php echo apply_filters('chargingstation_topheader', $topheader_btnlinktextcolor); ?>" class="button create_btn" href="<?php echo apply_filters('chargingstation_topheader', $topheader_btnlink); ?>"><?php echo apply_filters('chargingstation_topheader', $topheader_btntxt); ?></a>
						
						
						
						<?php if(is_user_logged_in()){ ?>
						<a style="background-image: radial-gradient( circle farthest-corner at 10% 20%" class="button contact_btn" href="<?php echo wp_logout_url(site_url()."/login"); ?>">Logout</a>
						<?php
						}else{ ?>
						<a style="background-image: radial-gradient( circle farthest-corner at 10% 20%" class="button contact_btn" href="<?php echo site_url()."/login";?>">Login</a>
						<?php
                 	} ?>
	                
					<?php } ?>							

				</div>			

            	</div>
            </nav>
        </div>
    </header>