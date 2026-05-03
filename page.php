<!doctype html>
<html lang="bn">

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?></title>
    <meta http-equiv="refresh" content="">
    <meta name="author" content="<?php bloginfo("name"); ?>">
    <meta name="Developer" content="<?php echo esc_attr(wp_get_theme()->get("Author")); ?>">
    <meta name="resource-type" content="document">
    <meta name="contact" content="<?php echo esc_attr(get_option("admin_email")); ?>">
    <meta name="copyright" content="Copyright (c) <?php echo date("Y"); ?>. All Rights &reg; Reserved by <?php echo esc_url(home_url("/")); ?>">
    <meta name="google-site-verification" content="<?php echo esc_attr(get_theme_mod("google_site_verification")); ?>" />
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="googlebot-news" content="index, follow">
    <meta name="msnbot" content="index, follow">
    <meta property="fb:app_id" content="<?php echo esc_attr(get_theme_mod("fb_app_id")); ?>">
    <meta property="fb:pages" content="<?php echo esc_attr(get_theme_mod("fb_pages")); ?>">
    <meta name="description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="keywords" content="<?php echo get_bloginfo("name"); ?>, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, দুর্নীতি, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর">
    <meta property="og:site_name" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta property="og:title" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta property="og:description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta property="og:url" content="<?php echo get_permalink(); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <meta property="og:locale" content="en_US">

    <meta name="twitter:domain" content="<?php echo esc_url(home_url("/")); ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta name="twitter:title" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="twitter:description" content="<?php echo get_the_title( get_the_ID() ); ?> - <?php bloginfo("name"); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <meta name="twitter:site" content="<?php echo esc_attr(get_theme_mod("social_twitter_url")); ?>" />

    <link rel="image_src" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <link rel="canonical" href="<?php echo esc_url(home_url("/")); ?>">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
    <link type="image/x-icon" rel="icon" href="<?php echo esc_url(get_site_icon_url()); ?>">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo esc_url(get_site_icon_url(57)); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo esc_url(get_site_icon_url(60)); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url(get_site_icon_url(72)); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo esc_url(get_site_icon_url(76)); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url(get_site_icon_url(114)); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo esc_url(get_site_icon_url(120)); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo esc_url(get_site_icon_url(144)); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo esc_url(get_site_icon_url(152)); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_site_icon_url(180)); ?>">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo esc_url(get_site_icon_url(192)); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo esc_url(get_site_icon_url(32)); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo esc_url(get_site_icon_url(96)); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo esc_url(get_site_icon_url(16)); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">


    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/SolaimanLipi.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/Kiron.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/starnews.css"); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/eMythMakers.css"); ?>">


    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr(get_theme_mod(" ga4_id")); ?>" type="text/javascript"></script>
    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', '<?php echo esc_attr(get_theme_mod(" ga4_id")); ?>');
    </script>


    <!-- Facebook Pixel Code -->
    <script type="text/javascript">
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '<?php echo esc_attr(get_theme_mod("fb_pixel_id")); ?>');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=<?php echo esc_attr(get_theme_mod("fb_pixel_id")); ?>&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <?php wp_head(); ?>
</head>

<body>
    <?php get_header(); ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="DSinglePageT">
                        <h1><?php echo get_the_title( get_the_ID() ); ?></h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="DSinglePageSec">
                        <?php echo apply_filters('the_content', get_post_field('post_content', get_the_ID())); ?>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php get_footer(); ?>
    
    <div id="back_to_top" class="back_to_top on"><span class="go_up"><i class="fa-solid fa-arrow-up"></i></span></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/js/eMythMakers.js"); ?>"></script>
</body>

</html>