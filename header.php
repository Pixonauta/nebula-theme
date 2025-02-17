<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Nebula_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-52S32ZC');</script>
<!-- End Google Tag Manager -->
	<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '648476115697798');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=648476115697798&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#753BBD" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-52S32ZC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <!----WRAPPER----->
    <div class="main">

        <!----NAVBAR----->
        <header class="header">
            <nav class="navbar navbar-expand-lg navbar-dark bg-darkpink">
                <div class="container">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
						
					?>
                    <a class="navbar-brand" href="<?php echo get_home_url();?>"><?php echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="Pixonauta logo">'; ?></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

					<?php
						wp_nav_menu( array(
							'theme_location'    => 'primary',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'main-menu',
							'container_id'      => 'bs-example-navbar-collapse-1',
							'menu_class'        => 'nav navbar-nav',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
						?>

                    
                        <form class="form-inline d-flex" method="get" action="<?php bloginfo('url'); ?>"> <!-- echo home_url('/'); -->
                            <div class="input-group">
                                <input type="text" class="form-control nebula-search" name="s" placeholder="Buscar" value="<?php the_search_query(); ?>" aria-label="Buscar">
                                <!-- <div class="input-group-append d-flex"> -->
                                  <button class="btn btn-secondary nebula-search-button" aria-label="Center Align" type="submit">
                                      <i class="fas fa-search"></i>
                                  </button>
                               <!--  </div> -->
                              </div>
                        </form>
                        
                    </div>
                </div>
            </nav>
            <div class="line-gradient"></div>
        </header>
        <!----END NAVBAR----->