<header>
        <div class="DHeaderTop2 MobileHide">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 d-flex align-items-center">
                    <div class="DateTimeBn">
                            <p class="date"><i class="fa-solid fa-location-dot"></i> <?php echo esc_html(get_theme_mod('location', 'ঢাকা')); ?> <i class="fa-sharp fa-solid fa-calendar-days"></i> <?php echo strtr(strftime('%A, %d %B %Y'), ['Saturday'=>'শনিবার','Sunday'=>'রবিবার','Monday'=>'সোমবার','Tuesday'=>'মঙ্গলবার','Wednesday'=>'বুধবার','Thursday'=>'বৃহস্পতিবার','Friday'=>'শুক্রবার','January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ','April'=>'এপ্রিল','May'=>'মে','June'=>'জুন','July'=>'জুলাই','August'=>'আগস্ট','September'=>'সেপ্টেম্বর','October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর','0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']); ?>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-4 col-12 d-flex justify-content-center align-items-center">
                    <div class="DLogo">
                            <a href="<?php echo esc_url( home_url('/') ); ?>" class="DLogo" rel="home"><img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12 d-flex justify-content-end align-items-center">
                        <div class="row">
                            <div class="col-sm-12 m-auto">
                            <div class="SocialSearch">
                                    <div class="HeaderTopSocial">
                                        <div class="DSocialLink d-inline-block">
                                            <ul>
                                            <?php 
    $social_platforms = array(
        'facebook'  => 'fa-facebook-f',
        'twitter'   => 'fa-x-twitter',
        'linkedin'  => 'fa-linkedin-in',
        'youtube'   => 'fa-youtube',
        'instagram' => 'fa-instagram',
        'whatsapp'  => 'fa-whatsapp',
    );

    foreach ( $social_platforms as $platform => $icon_class ) :
        $url = get_theme_mod( "social_{$platform}_url" ); // get URL from customizer
        if ( $url ) : ?>
            <li>
                <a href="<?php echo esc_url( $url ); ?>" target="_blank">
                    <i class="fa-brands <?php echo esc_attr( $icon_class ); ?>"></i>
                </a>
            </li>
        <?php endif;
    endforeach;
    ?>
                                            </ul>
                                        </div>
                                        <div class="HeaderVersionBtn d-inline-block">
                                        <?php 
    $btn1_label = get_theme_mod( 'header_button_1_label', '' );
    $btn1_url   = get_theme_mod( 'header_button_1_url', '' );

    $btn2_label = get_theme_mod( 'header_button_2_label', '' );
    $btn2_url   = get_theme_mod( 'header_button_2_url', '' );

    if ( $btn1_label && $btn1_url ) : ?>
        <a href="<?php echo esc_url( $btn1_url ); ?>" target="_blank">
            <?php echo esc_html( $btn1_label ); ?>
        </a>
    <?php endif; ?>

    <?php if ( $btn2_label && $btn2_url ) : ?>
        <a href="<?php echo esc_url( $btn2_url ); ?>" target="_blank">
            <?php echo esc_html( $btn2_label ); ?>
        </a>
    <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="search_block Hide">
            <div class="container">
                <div class="col-lg p-0">
                    <form action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="form">
                        <div class="search_logo display-flex">
                            <input type="text" name="s" placeholder="এখানে খুঁজুন...">
                            <button><i class="fa-solid fa-magnifying-glass"></i></button>
                            <a href="" class="close-search"><i class="fa-solid fa-xmark"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="myHeader" class="MobileHide">
            <div class="DHeaderNav">
                <div class="container">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a href="<?php echo esc_url( home_url('/') ); ?>" class="StickyLogo" rel="home">
                        <img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100">
                    </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <?php
$menu_name = 'main_menu';
$locations = get_nav_menu_locations();

if ( isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menu_items = wp_get_nav_menu_items( $menu->term_id );

    // Organize items by parent
    $items_by_parent = array();
    foreach ( $menu_items as $item ) {
        $items_by_parent[ $item->menu_item_parent ][] = $item;
    }

    // Loop through top-level items
    if ( ! empty( $items_by_parent[0] ) ) {
        foreach ( $items_by_parent[0] as $parent_item ) {
            $children = isset( $items_by_parent[ $parent_item->ID ] ) ? $items_by_parent[ $parent_item->ID ] : array();

            if ( $children ) {
                echo '<li class="nav-item dropdown">';
                echo '<a class="nav-link dropdown-toggle" href="' . esc_url( $children[0]->url ) . '" id="navbarDropdown' . $parent_item->ID . '" role="button" data-hover="dropdown" aria-expanded="false">' . esc_html( $parent_item->title ) . '</a>';
                echo '<ul class="dropdown-menu" aria-labelledby="navbarDropdown' . $parent_item->ID . '">';
                foreach ( $children as $child ) {
                    echo '<li><a class="dropdown-item" href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li class="nav-item"><a class="nav-link" href="' . esc_url( $parent_item->url ) . '">' . esc_html( $parent_item->title ) . '</a></li>';
            }
        }
    }
}
?>
                                <li class="nav-item dropdown has-megamenu">
                                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">অন্যান্য</a>
                                    <?php
$menu_name = 'mega_menu';
$locations = get_nav_menu_locations();
$menu = wp_get_nav_menu_object($locations[$menu_name]);
$menu_items = wp_get_nav_menu_items($menu->term_id);

$columns = 5; // number of columns you want
$chunks = array_chunk($menu_items, ceil(count($menu_items)/$columns));
?>

<div class="dropdown-menu megamenu" role="menu">
    <div class="row w-100">
        <?php foreach ($chunks as $column): ?>
            <div class="col-md-3" style="flex: 0 0 20%; max-width: 20%;">
                <ul class="nav flex-column">
                    <?php foreach ($column as $item): ?>
                        <li>
                            <a class="dropdown-item" href="<?php echo esc_url($item->url); ?>">
                                <?php echo esc_html($item->title); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
</div>
                        </div>
                        </li>
                        <li class="nav-item menu-search">
                            <a class="nav-link nav-link-search" href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                        </li>
                        </ul>
                </div>
                </nav>
            </div>
        </div>
        <div id="myHeader2">
            <div id="mobile-nav" class="MobileMenu MobileShow">
                <div class="DMLogo d-flex h-100 align-items-center justify-content-center"><a href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo esc_url( ( function_exists('get_custom_logo') && has_custom_logo() ) ? wp_get_attachment_image_url( get_theme_mod('custom_logo'), 'full' ) : get_template_directory_uri() . '/images/logo.png' ); ?>" title="<?php the_title(); ?>" alt="<?php the_title(); ?>" class="img-fluid img100"></a></div>
                <div class="d-flex  align-items-center justify-content-start"><span onclick="if (!window.__cfRLUnblockHandlers) return false; myMenuBtnChng()" id="menu-button" class="menu-button fas fa-bars" data-cf-modified-308d0d4576f1f362b9bffb9b-=""></span></div>
                <div class=" d-flex h-100 align-items-center justify-content-end">
                    <div class="menu-search">
                        <a class="nav-link-search" href="">
                        <i class="fa fa-search"></i>
                    </a>
                    </div>
                </div>
                <div class="search_block Hide">
                    <div class="container">
                        <div class="col-xl p-0">
                            <form name="frmSearch" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
                                <div class="search_logo display-flex">
                                    <input type="text" name="s" id="search" class="form-control" value="" placeholder="অনুসন্ধান করুন">
                                    <button><i class="fa fa-search"></i></button>
                                    <a href="" class="close-search"><i class="fa fa-times"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <ul>
                    <li>
                        <div class="MobileDateArea">
                            <p class="date">
                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                <span><?php echo strtr(strftime('%A, %d %B %Y'), ['Saturday'=>'শনিবার','Sunday'=>'রবিবার','Monday'=>'সোমবার','Tuesday'=>'মঙ্গলবার','Wednesday'=>'বুধবার','Thursday'=>'বৃহস্পতিবার','Friday'=>'শুক্রবার','January'=>'জানুয়ারি','February'=>'ফেব্রুয়ারি','March'=>'মার্চ','April'=>'এপ্রিল','May'=>'মে','June'=>'জুন','July'=>'জুলাই','August'=>'আগস্ট','September'=>'সেপ্টেম্বর','October'=>'অক্টোবর','November'=>'নভেম্বর','December'=>'ডিসেম্বর','0'=>'০','1'=>'১','2'=>'২','3'=>'৩','4'=>'৪','5'=>'৫','6'=>'৬','7'=>'৭','8'=>'৮','9'=>'৯']); ?></span>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="MobileDateArea">
                            <div class="MobileTopBtn">
                           <?php if ( $btn1_label && $btn1_url ) : ?>
        <a href="<?php echo esc_url( $btn1_url ); ?>" target="_blank">
            <?php echo esc_html( $btn1_label ); ?>
        </a>
    <?php endif; ?>

    <?php if ( $btn2_label && $btn2_url ) : ?>
        <a href="<?php echo esc_url( $btn2_url ); ?>" target="_blank">
            <?php echo esc_html( $btn2_label ); ?>
        </a>
    <?php endif; ?>

<?php if ( $btn3_label && $btn3_url ) : ?>
    <a href="<?php echo esc_url( $btn3_url ); ?>" target="_blank">
        <?php echo esc_html( $btn3_label ); ?>
    </a>
<?php endif; ?>

                            </div>
                        </div>
                    </li>


                    <?php
$menu_name = 'main_menu';
$locations = get_nav_menu_locations();

if ( isset( $locations[ $menu_name ] ) ) {
    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
    $menu_items = wp_get_nav_menu_items( $menu->term_id );

    // Organize items by parent
    $items_by_parent = array();
    foreach ( $menu_items as $item ) {
        $items_by_parent[ $item->menu_item_parent ][] = $item;
    }

    // Loop through top-level items
    if ( ! empty( $items_by_parent[0] ) ) {
        foreach ( $items_by_parent[0] as $parent_item ) {
            $children = isset( $items_by_parent[ $parent_item->ID ] ) ? $items_by_parent[ $parent_item->ID ] : array();

            if ( $children ) {
                echo '<li class="parent">';
                echo '<a href="' . esc_url( $children[0]->url ) . '">' . esc_html( $parent_item->title ) . '</a>';
                echo '<ul class="SubMenuM">';
                foreach ( $children as $child ) {
                    echo '<li><a href="' . esc_url( $child->url ) . '">' . esc_html( $child->title ) . '</a></li>';
                }
                echo '</ul>';
                echo '</li>';
            } else {
                echo '<li><a href="' . esc_url( $parent_item->url ) . '">' . esc_html( $parent_item->title ) . '</a></li>';
            }
        }
    }
}
?>
                    <li class="parent">
                        <a href="#">অন্যান্য</a>
                        <ul class="SubMenuM">
                        <?php foreach ($menu_items as $item): ?>
                            <li><a href="<?php echo esc_url($item->url); ?>"><?php echo esc_html($item->title); ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <?php 
            $home_category_id = get_theme_mod('ticker');
            if ( $home_category_id ) :

            $home_category_query = new WP_Query( array(
                'cat'            => $home_category_id,
                'posts_per_page' => 10,
            ) );
            if ( $home_category_query->have_posts() ) : 
        ?>
        <div id="myHeader" style="margin-top: 10px;">
            <div class="DHeaderNav" style="border: none;">
                <div class="container">
                    <div style="display: flex; align-items: center; background: #f9f9f9; height: 40px; border: 1px solid #ddd; font-family: 'Star News', Arial, sans-serif; overflow: hidden; border-radius: 4px; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
                        <div style="background: #c2272d; color:rgb(82, 67, 67); padding: 0 20px; height: 100%; color: white; display: flex; align-items: center; font-weight: bold; font-size: 18px; z-index: 10; white-space: nowrap; position: relative; box-shadow: 2px 0 5px rgba(0,0,0,0.1);">
                            সর্বশেষ
                        </div>

                        <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="7" style="height: 100%; line-height: 40px;">
                            <span style="display: inline-flex; align-items: center;">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count < 11 ) : 
                                ?>
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: #333; font-size: 18px;"><?php the_title(); ?></a>
                                <?php if ( $count !== 10) : ?>
                                <img src="<?php echo esc_url(get_site_icon_url(32)); ?>" style="width: 16px; height: 16px; margin: 0 20px;" alt="icon">
                                <?php endif; endif; endwhile; wp_reset_postdata(); ?>
                            </span>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
        <?php endif; endif; ?>
    </header>