<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nebula_Theme
 */

?>
</div>


<!----END WRAPPER----->
<footer>
		
		<?php get_template_part( 'template-parts/newsletter-partial' ); ?>
		
        <div class="row w-100 copyright-section" >
            <!-- Grid column -->
            <div class="col-md-4">

                <nav class="navbar navbar-expand-lg navbar-light bg-light text-primary">
                    
                    <div class="w-100">
					<?php
				wp_nav_menu( array(
					'menu'            => 'politicas',
					'theme_location'  => 'primary',
					'depth'           => 2,                     
					'menu_class'      => 'navbar-nav mr-auto m-0 menu-footer',
					'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
					'walker'          => new WP_Bootstrap_Navwalker()
				) );
				?>
                      
                    </div>
                  </nav>


               
            </div>
            <!-- Grid column -->
            <div class="col-md-4">
			<nav class="navbar navbar-expand-lg navbar-light bg-light text-primary">
                    
                    <div class="w-100 text-center">
					<ul class="navbar-nav d-inline-block m-0">
                        <!-- <li class="nav-item active">
                          <a class="nav-link text-primary" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-primary" href="#">Artículos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-primary" href="#">Newsletter</a>
                        </li> -->
                        <li class="nav-item">
                           <!-- Facebook -->
                            <a class="rs-ic fb-ic nav-link text-primary" rel="noreferrer" href="https://www.facebook.com/pixonauta/" target="_blank">
                                <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="rs-ic tw-ic nav-link text-primary" target="_blank" rel="noreferrer" href="https://twitter.com/pixonauta">
                                <i class="fab fa-x-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                            </a>
                            <a class="rs-ic ins-ic nav-link text-primary" target="_blank" rel="noreferrer" href="https://www.instagram.com/pixonauta/">
                                <i class="fab fa-instagram fa-lg white-text fa-2x"> </i>
                            </a>
                
                        </li>
                        
                      </ul>
                      
					</div>
			</nav>
			</div>
            <div class="col-md-4">
                <nav class="navbar navbar-expand-lg navbar-light bg-light right-footer-nav">
                    
                    <div >
                      <ul class="navbar-nav ml-auto m-0">
                        <li class="nav-item active">
                            <span class="navbar-text text-primary">
                                Hecho con <i class="fa-solid fa-heart"></i> por <a href="<?php echo get_home_url();?>" class="fw-bold text-primary text-decoration-none" >Pixonauta Team</a>
                            </span>
                        </li>
                        
                      </ul>
                      
                    </div>
                  </nav>
            </div>
        </div>
        <div class="row w-100 line-gradient-footer">

        </div>

    </footer>

    <!---Scripts--->
	<?php wp_footer(); ?>
</body>


</html>
