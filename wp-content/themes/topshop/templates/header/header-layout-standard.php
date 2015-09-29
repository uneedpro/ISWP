<?php global $woocommerce; ?>

<?php if( get_theme_mod( 'topshop-show-header-top-bar', false ) ) : ?>
    
    <div class="site-top-bar border-bottom">
        <div class="site-container">
            
            <div class="site-top-bar-left">
                
                <?php wp_nav_menu( array( 'theme_location' => 'top-bar', 'fallback_cb' => false, 'depth'  => 1 ) ); ?>
                
                
            </div>
            <div class="site-top-bar-right">
	            
                
                <?php if ( topshop_is_woocommerce_activated() ) : ?>
                    <div class="site-top-bar-left-text"><?php echo wp_kses_post( get_theme_mod( 'topshop-header-info-text', false ) ) ?></div>
                <?php endif; ?>
                
                <?php if( get_theme_mod( 'topshop-header-search', false ) ) : ?>
                    <i class="fa fa-search search-btn"></i>
                <?php endif; ?>
                 
            </div>
            <div class="clearboth"></div>
            
            <?php if( get_theme_mod( 'topshop-header-search', false ) ) : ?>
                <div class="search-block">
                    <?php get_search_form(); ?>
                </div>
            <?php endif; ?>
            
        </div>
        
    </div>

<?php endif; ?>

<div class="site-container">
    
    <div class="site-header-left">
        
        <?php if( get_header_image() ) : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><img src="<?php esc_url( header_image() ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ) ?>" /></a>
        <?php else : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
        <?php endif; ?>
        
    </div><!-- .site-branding -->
    
    <div class="site-header-right">
       
        <?php
        if ( topshop_is_woocommerce_activated() ) { ?>
        	<form class="isp_search_box_form" name="isp_search_box" action="/" style="width:10rem; float:none;">
<input type="text" name="s" class="isp_search_box_input" placeholder="Поиск" autocomplete="Off" autocorrect="off" autocapitalize="off" style="outline: none; width:10rem; height:2.3rem;" id="isp_search">
<input type="hidden" name="post_type" value="product">
<input type="image" src="/wp-content/plugins/instantsearch-for-woocommerce/widget/assets/images/magnifying_glass.png" class="isp_widget_btn" value="">
</form>
            
            <div class="header-cart">
                <a class="header-cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('Открыть корзину', 'topshop'); ?>">
                    <span class="header-cart-amount">
                        <?php echo sprintf(_n('%d item ', '%d items', $woocommerce->cart->cart_contents_count, 'topshop'), $woocommerce->cart->cart_contents_count);?> - <?php echo $woocommerce->cart->get_cart_total(); ?>
                    </span>
                    <span class="header-cart-checkout<?php echo ( $woocommerce->cart->cart_contents_count > 0 ) ? ' cart-has-items' : ''; ?>">
                        <span><?php _e('Оплатить', 'topshop'); ?></span> <i class="fa fa-shopping-cart"></i>
                    </span>
                </a>
            </div>
            
        <?php
        } else { ?>
            
            <div class="site-top-bar-left-text"><?php echo wp_kses_post( get_theme_mod( 'topshop-header-info-text', false ) ) ?></div>
            
        <?php
        } ?>
        <p style="font-family: 'Open Sans', sans-serif;font-weight: 100;font-size:20px;float:right;margin-right:15px;">+7(812) 958-18-78</p>
        
    </div>
    <div class="clearboth"></div>
    
</div>

<nav id="site-navigation" class="main-navigation <?php echo ( get_theme_mod( 'topshop-sticky-header', false ) ) ? ' header-stick' : ''; ?>" role="navigation">
    
    <div class="site-container">
        
        <button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'topshop' ); ?></button>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
        
    </div>
    
</nav><!-- #site-navigation -->