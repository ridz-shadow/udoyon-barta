<!doctype html>
<html lang="bn"> 

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php echo get_bloginfo("name"); ?> | The Largest and Best Bangla Online News Portal</title>
    <meta http-equiv="refresh" content="600">
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
    <meta name="description" content="<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS">
    <meta name="keywords" content="<?php echo get_bloginfo("name"); ?>, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, দুর্নীতি, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর">
    <meta property="og:site_name" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta property="og:title" content="<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS">
    <meta property="og:description" content="<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS">
    <meta property="og:url" content="<?php echo esc_url(home_url("/")); ?>">
    <meta property="og:type" content="article">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:domain" content="<?php echo esc_url(home_url("/")); ?>" />
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="<?php echo strtoupper(get_bloginfo("name")); ?> | <?php echo esc_html(get_theme_mod('site_title_bn')); ?>">
    <meta name="twitter:title" content="<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS">
    <meta name="twitter:description" content="<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS">
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

    <style>
        .DModalAddSec {
            margin-top: 5px;
        }

        .DModalAddSec img {
            border: 1px solid #555;
        }

        .CrossBtn {
            position: absolute;
            top: 0;
            right: 0;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #fff !important;
            background-color: #ff8c00;
            width: 30px;
            height: 30px;
            opacity: 1;
            border-radius: 0;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        /*sticky footer ads*/

        .T4Tutorials {
            position: fixed;
            bottom: 0px;
            height: auto;
            left: 0;
            right: 0;
            background: #f0f0f082;
            transition: opacity 500ms;
            visibility: visible;
            opacity: 1;
            z-index: 9999;
        }

        .T4Tutorials:target {
            visibility: hidden;
            opacity: 0;
            display: none
        }

        .T4Tutorials_UP {
            margin: 0 auto;
            padding: 0px;
            background: #fff;
            border-radius: 5px;
            width: 72%;
            position: relative;
        }

        .T4Tutorials_UP h2 {
            margin-top: 0;
            color: green;
            font-family: Tahoma, Arial, sans-serif;
        }

        .T4Tutorials_UP .Exit {
            position: absolute;
            top: -20px;
            right: -15px;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #fff;
            background-color: #e80000;
            width: 30px;
            height: 30px;
            opacity: 0.6;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            cursor: pointer;
        }

        .T4Tutorials_UP .Exit:hover {
            color: #fff;
            background-color: #e80000;
            opacity: 1;
        }

        .T4Tutorials_UP .Main_Content {
            max-height: 30%;
            overflow: auto;
        }

        /* Election Results Styling */

        .ElectionWrapper {
            margin-top: 20px;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
            border: 1px solid #e1e1e1;
            overflow: hidden;
        }

        .ElectionHeader {
            background-color: #f78022;
            padding: 15px 20px;
            text-align: center;
        }

        .ElectionHeader h2 {
            color: #111;
            margin: 0;
            font-size: 24px;
            font-weight: 700;
        }

        .ElectionSummaryBar {
            background-color: #fff9da;
            padding: 10px 20px;
            border-bottom: 1px solid #f78022;
            display: flex;
            justify-content: center;
            gap: 30px;
            align-items: center;
            flex-wrap: wrap;
        }

        .SummaryItem {
            font-size: 16px;
            color: #333;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .SummaryItem strong {
            font-size: 20px;
            color: #000;
        }

        .ElectionBody {
            padding: 20px;
        }

        .PartiesGrid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 15px;
            margin-bottom: 25px;
        }

        .PartyCard {
            background: #fff;
            border: 1px solid #eee;
            border-top: 3px solid #f78022;
            border-radius: 6px;
            padding: 10px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .PartyName {
            color: #333;
            font-size: 16px;
            font-weight: 700;
            margin-bottom: 5px;
            min-height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            line-height: 1.2;
        }

        .PartyCount {
            display: inline-block;
            background: transparent;
            color: #f78022;
            padding: 2px 12px;
            border-radius: 4px;
            font-size: 22px;
            font-weight: 700;
            line-height: 1.2;
        }

        .ReferendumSection {
            background: #fff;
            border-top: 1px solid #eee;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .ReferendumTitle {
            text-align: left;
            color: #111;
            font-size: 16px;
            font-weight: 700;
            margin: 0;
            white-space: nowrap;
        }

        .ReferendumGraphContainer {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            gap: 5px;
        }

        .ReferendumBarContainer {
            width: 100%;
            height: 12px;
            background: #e9ecef;
            border-radius: 6px;
            overflow: hidden;
            display: flex;
        }

        .ReferendumBarYes {
            background-color: #28a745;
            height: 100%;
        }

        .ReferendumBarNo {
            background-color: #dc3545;
            height: 100%;
        }

        .ReferendumLabels {
            display: flex;
            justify-content: space-between;
            font-size: 13px;
            font-weight: 600;
            color: #555;
            line-height: 1;
        }

        .RefLabelYes {
            color: #1f1f1f;
        }

        .RefLabelNo {
            color: #9b9b9b;
        }

        @media screen and (max-width: 768px) {
            .ReferendumSection {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            .ReferendumGraphContainer {
                width: 100%;
            }
        }

        @media screen and (max-width: 768px) {
            .PartiesGrid {
                grid-template-columns: repeat(3, 1fr);
            }
            .ElectionHeader h2 {
                font-size: 20px;
            }
        }

        @media screen and (max-width: 480px) {
            .PartiesGrid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        .DModalAddSec .modal-content {
            width: max-content;
        }

        @media (min-width: 992px) {
            .DModalAddSec .modal-lg,
            .modal-xl {
                max-width: max-content;
            }
        }

        @media (min-width: 320px) {
            .DModalAddSec .modal-dialog {
                max-width: max-content;
                margin: 5rem auto;
            }
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/SolaimanLipi.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/Kiron.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/starnews.css"); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/css/eMythMakers.css"); ?>">

    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "<?php echo esc_url(home_url("/")); ?>"
            }]
        }
    </script>
    <script type="application/ld+json" data-schema="Organization">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "<?php echo esc_html(get_theme_mod('site_title_bn')); ?>",
            "alternateName": "<?php bloginfo("name"); ?>",
            "url": "<?php echo esc_url(home_url("/")); ?>",
            "sameAs": [
                "<?php echo esc_attr(get_theme_mod(" social_facebook_url")); ?>", "<?php echo esc_attr(get_theme_mod(" social_twitter_url")); ?>", "<?php echo esc_attr(get_theme_mod(" social_youtube_url"));
                ?>", "<?php echo esc_attr(get_theme_mod(" social_linkedin_url")); ?>", "<?php echo esc_attr(get_theme_mod(" social_instagram_url")); ?>"
            ],
            "logo": {
                "@type": "ImageObject",
                "url": "<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>"
            },
            "image": "<?php echo esc_url(get_template_directory_uri() . "/frontend/media/common/logo-fb.png"); ?>",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "<?php echo esc_url( home_url('/') ); ?>?q={search_term_string}"
            },
        }
    </script>
    <script type="application/ld+json" data-schema="Organization">
        {
            "@type": "Website",
            "url": "<?php echo esc_url(home_url("/")); ?>",
            "interactivityType": "mixed",
            "name": "<?php echo esc_html(get_theme_mod('site_title_bn')); ?>",
            "headline": "<?php echo strtoupper(get_bloginfo("name")); ?> | GET THE LATEST ONLINE BANGLA NEWS!",
            "keywords": "<?php echo get_bloginfo("name"); ?>, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, bangladeshi newspaper, bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily news paper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা, বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, বাংলা গান, মঞ্চ, টেলিভিশন, কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, দুর্নীতি, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর",
            "copyrightHolder": {
                "@type": "NewsMediaOrganization",
                "name": "<?php echo esc_html(get_theme_mod('site_title_bn')); ?>"
            },
            "potentialAction": {
                "@type": "SearchAction",
                "target": ""<?php echo esc_url(home_url("/")); ?>"search?q={q}",
                "query-input": "required name=q"
            },
            "mainEntityOfPage": {
                "@type": "WebPage",
                "@id": "<?php echo esc_url(home_url("/")); ?>"
            },
            "@context": "http://schema.org"
        }
    </script>

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
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
            <div class="row MobileShow">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
            <div class="DTopNewsSection mt-5">
                <div class="row">
                    <div class="col-lg-9">
                        <?php 
                            $home_category_id = get_theme_mod('lead');
                            if ( $home_category_id ) :

                            $home_category_query = new WP_Query( array(
                                'cat'            => $home_category_id,
                                'posts_per_page' => 12,
                            ) );
                            if ( $home_category_query->have_posts() ) : 
                        ?>
                        <div class="row">

                            <div class="col-lg-8 col-12 border-right-inner mt-3">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count === 1 ) : 
                                ?>
                                <div class="DHomeTopLead">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div class="DImgZoomBlock">
                                                    <picture>
                                                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                            class="img-fluid img100">
                                                    </picture>

                                                </div>
                                            </div>
                                            <div class="col-lg-5 order-lg-first">
                                                <div class="Desc">
                                                    <h1 class="Title"><span class="subHeading fw-bold"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h1>
                                                    <div class="Brief">
                                                        <p><?php the_excerpt(); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                                <div class="DHomeLeadList3Sec">
                                    <div class="row">
                                        <?php 
                                            $count = 0;
                                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                            $count++;
                                            if ( $count > 1 && $count < 6 ) : 
                                        ?>
                                        <div class="col-lg-6 col-12 d-flex border-right-inner">
                                            <div class="DHomeLeadList3 align-self-stretch">
                                                <a href="<?php the_permalink(); ?>">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-5">
                                                            <div class="DImgZoomBlock">
                                                                <picture>
                                                                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                                </picture>

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7 col-7">
                                                            <div class="Desc">
                                                                <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <?php endif; endwhile; wp_reset_postdata(); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-12 mt-3 border-right-inner">
                                <div class="DTopLeadNews2">
                                    <?php 
                                        $count = 0;
                                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                        $count++;
                                        if ( $count > 5 && $count < 10 ) : 
                                    ?>
                                    <div class="DHomeLeadList3 align-self-stretch">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="row">
                                                <div class="col-lg-7 col-7">
                                                    <div class="Desc">
                                                        <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-5">
                                                    <div class="DImgZoomBlock">
                                                        <picture>
                                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                        </picture>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endif; endwhile; wp_reset_postdata(); ?>
                                </div>
                            </div>
                            <div class="col-12 MobileShow">
                                <div class="d-flex justify-content-center mt-3">
                                    <!-- Advertisement -->
                                </div>
                            </div>
                        </div>
                        <div class="leadTop3 mt-2">
                            <div class="row">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 9 && $count < 13 ) : 
                                ?>
                                <div class="col-lg-4 d-flex border-right-inner">
                                    <div class="leadTop3-wrap align-self-stretch">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="row">
                                                <div class="col-lg-12 col-5 medium-video-icon">
                                                    <picture>
                                                        <img class="img-fluid img100" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                    </picture>

                                                </div>
                                                <div class="col-lg-12 col-7">
                                                    <div class="Desc">
                                                        <h3 class="Title2"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <?php endif; endif; ?>
                    </div>
                    <div class="col-lg-3 col-12 mt-3">
                        <?php if (is_active_sidebar('beside-lead')) : ?>
                            <?php dynamic_sidebar('beside-lead'); ?>
                        <?php endif; ?>
                        <div class="DRightSideAdd MobileHide">
                            <!-- Advertisement -->
                        </div>
                        <div class="DRightSideAdd MobileShow">
                            <!-- Advertisement -->
                        </div>
                        <div class="position-relative w-100 mt-2">
                            <!-- Advertisement -->
                        </div>
                        <?php 
                            $home_category_id = get_theme_mod('lead_sidebar_category');
                            if ( $home_category_id ) :

                            $home_category_query = new WP_Query( array(
                                'cat'            => $home_category_id,
                                'posts_per_page' => 2,
                            ) );
                            if ( $home_category_query->have_posts() ) : 
                        ?>
                        <div class="DEditorsPicksSec mt-3">
                            <div class="DTitleStyle">
                                <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                                    <h3><i class="fa-solid fa-circle-half-stroke"></i><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                                </a>
                            </div>
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count < 3 ) : 
                            ?>
                            <div class="DEditorialListItem">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <p class="WriterName"><i class="fa fa-edit" aria-hidden="true"></i><?php echo esc_html(get_post_meta(get_the_ID(), 'post_reporter', true)); ?></p>
                                                <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-5 ">
                                            <picture>
                                                <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>"
                                                    src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>"
                                                    alt="<?php the_title(); ?>"
                                                    title="<?php the_title(); ?>"
                                                    class="img-fluid img100 ImgRatio">
                                            </picture>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                         <?php endif; endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-4 mb-2">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <section class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <?php 
                        $after_lead_id = get_theme_mod('after_lead');
                        if ( $after_lead_id ) :

                        $after_lead_query = new WP_Query( array(
                            'cat'            => $after_lead_id,
                            'posts_per_page' => 4,
                        ) );
                        if ( $after_lead_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $after_lead_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $after_lead_id ) ); ?></h2>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $after_lead_query->have_posts() ) : $after_lead_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="SpecialEventTop">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgZoomBlock .medium-video-icon">
                                        <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100">
                                        </picture>
                                        <div class="card-video-img"></div>
                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading fw-bold"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $after_lead_query->have_posts() ) : $after_lead_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 5 ) : 
                            ?>
                            <div class="SpecialEventList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                        class="img-fluid img100">
                                                </picture>
                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <div class="CatNameSP"><?php echo ($cats = get_the_category()) ? esc_html($cats[0]->name) : ''; ?></div>
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-12 MobileShow">
                    <div class="d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <?php 
                        $latest_query = new WP_Query( array(
                            'posts_per_page' => 15,
                            'orderby' => 'date',
                            'order' => 'desc',
                        ) );
                        if ( $latest_query->have_posts() ) : 
                    ?>
                    <div class="DLatestNewsSec">
                        <a href="/latest/news">
                            <div class="DTitleStyle">
                                <h3><i class="fa-solid fa-circle-half-stroke"></i>সর্বশেষ</h3>
                            </div>
                        </a>
                        <div class="DLatestNewsList">
                            <ul>
                                <?php 
                                    $count = 0;
                                    while ( $latest_query->have_posts() ) : $latest_query->the_post();
                                    $count++;
                                    if ( $count < 16 ) : 
                                ?>
                                <li>
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="d-flex  align-items-center">
                                            <div class="d-flex h-100 align-items-center"><span class="Counter"><?php echo str_replace(['0','1','2','3','4','5','6','7','8','9'], ['০','১','২','৩','৪','৫','৬','৭','৮','৯'], $count); ?>.</span></div>
                                            <p class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></p>
                                        </div>
                                    </a>
                                </li>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </ul>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="row MobileShow">
            <div class="col-12">
                <div class="d-flex justify-content-center mt-3">
                    <!-- Advertisement -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <section class="container MT-60">
            <div class="row">
                <div class="col-lg-6 col-12 Politics">
                    <?php 
                        $category_1_id = get_theme_mod('category_1');
                        if ( $category_1_id ) :

                        $category_1_query = new WP_Query( array(
                            'cat'            => $category_1_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $category_1_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $category_1_id ) ); ?>">
                        <h2 class="SectionName"> <?php echo esc_html( get_cat_name( $category_1_id ) ); ?> </h2>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $category_1_query->have_posts() ) : $category_1_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="DCategory4Top">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgZoomBlock ">
                                        <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"> </picture>

                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading fw-bold"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $category_1_query->have_posts() ) : $category_1_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 6 ) : 
                            ?>
                            <div class="DCategory5NewsList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>"
                                                        title="<?php the_title(); ?>" class="img-fluid img100"></picture>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="row MobileShow">
                    <div class="col-12">
                        <div class="d-flex justify-content-center mt-3">
                            <!-- Advertisement -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 Capital">
                    <?php 
                        $home_category_id = get_theme_mod('category_2');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <?php 
                        $count = 0;
                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                        $count++;
                        if ( $count === 1 ) : 
                    ?>
                    <div class="WritersSectionTop">
                        <a href="<?php the_permalink(); ?>">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="DImgZoomBlock ">
                                        <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"></picture>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif; endwhile; wp_reset_postdata(); ?>
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count > 1 && $count < 6 ) : 
                        ?>
                        <div class="col-lg-6 col-12 d-flex">
                            <div class="DCategory6NewsList MT-25">
                                <a href="<?php the_permalink(); ?>" class="align-self-stretch">
                                    <div class="row">
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                </picture>

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <?php endif; endif; ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-4">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <section class="container MT-60">
            <?php 
                $home_category_id = get_theme_mod('category_3');
                if ( $home_category_id ) :

                $home_category_query = new WP_Query( array(
                    'cat'            => $home_category_id,
                    'posts_per_page' => 7,
                ) );
                if ( $home_category_query->have_posts() ) : 
            ?>
            <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
            </a>
            <div class="row">
                <div class="col-lg-5 col-12">
                    <?php 
                        $count = 0;
                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                        $count++;
                        if ( $count === 1 ) : 
                    ?>
                    <div class="DSportsTopNews">
                        <a href="<?php the_permalink(); ?>">
                            <div class="DImgZoomBlock">
                                <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                        class="img-fluid img100"> </picture>
                            </div>
                            <div class="Desc">
                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                <div class="Brief">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endif; endwhile; wp_reset_postdata(); ?>
                </div>
                <div class="col-lg-7 col-12 order-lg-first">
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count > 1 && $count < 8 ) : 
                        ?>
                        <div class="col-lg-4 col-12 d-flex">
                            <div class="DSportsList align-self-stretch">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-12 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>"
                                                        title="<?php the_title(); ?>" class="img-fluid img100"></picture>

                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </div>
            <?php endif; endif; ?>
        </section>
        <div class="container">
            <div class="row MobileShow">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <div class="DVideoSecBG">
            <?php 
                $home_category_id = get_theme_mod('category_4');
                if ( $home_category_id ) :

                $home_category_query = new WP_Query( array(
                    'cat'            => $home_category_id,
                    'posts_per_page' => 11,
                ) );
                if ( $home_category_query->have_posts() ) : 
            ?>
            <div class="container">
                <div class="SectionTitle SpTitle">
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                    </a>
                </div>
                <div class="DVideoGallery">
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count < 4 ) : 
                        ?>
                        <div class="col-lg-4 col-12 d-flex">
                            <div class="DTopVideo2 align-self-stretch">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgBlock">
                                        <picture><img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"></picture>
                                        <div class="card-video-img transition"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="VideoSlider">
                        <div class="row">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 3 && $count < 12 ) : 
                            ?>
                            <div class="col-lg-3 col-6 mb-4">
                                <div class="DVideoGalleryTop3List">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="DImgBlock">
                                            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                            <div class="card-video-img transition"></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; endif; ?>
        </div>
        <div class="container">
            <div class="row MobileShow">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-3">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 border-right-inner1 MT-25">
                    <?php 
                        $home_category_id = get_theme_mod('category_5');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 3,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <div class="SectionTitle">
                        <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                            <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                        </a>
                    </div>
                    <div class="DBangladesh">
                        <div class="row">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count < 4 ) : 
                            ?>
                            <div class="col-lg-4 d-flex">
                                <div class="DBangladeshList align-self-stretch">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="row">
                                            <div class="col-lg-12 col-5">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" alt="<?php the_title(); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" title="<?php the_title(); ?>"
                                                        class="img-fluid">
                                                </picture>
                                            </div>
                                            <div class="col-lg-12 col-7">
                                                <div class="Desc">
                                                    <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-lg-3 MT-25">
                    <?php 
                        $home_category_id = get_theme_mod('category_6');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 3,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <div class="SectionTitle">
                        <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                            <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                        </a>
                    </div>
                    <div class="DInvestigation">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count < 4 ) : 
                        ?>
                        <div class="DInvestigationList">
                            <a href="<?php the_permalink(); ?>">
                                <div class="row">
                                    <div class="col-lg-5 col-5 ">
                                        <picture>
                                            <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid leadMedia">
                                        </picture>

                                    </div>
                                    <div class="col-lg-7 col-7">
                                        <h5 class="Title TitleSM"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <?php endif; endif; ?>
                </div>
            </div>
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <!-- Advertisement -->
                </div>
            </div>
        </div>
        <div class="row mt-5 MobileShow">
            <div class="col-12">
                <div class="d-flex justify-content-center">
                    <!-- Advertisement -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-12">
                    <?php 
                        $home_category_id = get_theme_mod('category_7');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 8,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <div class="PoliticsSection">
                        <div class="row mb-3">
                            <div class="col-lg-12">
                                <div class="SectionTitle">
                                    <h3><a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>"><span class="ColorBox"></span><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></a></h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-12 border-right-inner rowresize" style="flex:0 0 49%;max-width: 49%;">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count === 1 ) : 
                                ?>
                                <div class="DPoliticsTopNews">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="DImgZoomBlock">
                                            <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                    class="img-fluid img100"></picture>
                                        </div>
                                        <div class="Desc">
                                            <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                            <div class="Brief">
                                                <p><?php the_excerpt(); ?></p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                            <div class="col-lg-3 col-12 border-right-inner rowresize" style="flex:0 0 21%;max-width: 21%;">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 1 && $count < 4 ) : 
                                ?>
                                <div class="DPoliticsTop2News">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="DImgZoomBlock">
                                            <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>"
                                                     title="<?php the_title(); ?>" class="img-fluid img100"></picture>
                                        </div>
                                        <div class="Desc">
                                            <h4 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h4>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                            <div class="col-lg-4 col-12 rowresize" style="flex:0 0 30%;max-width: 30%;">
                                <div class="DPoliticsTop3News">
                                    <?php 
                                        $count = 0;
                                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                        $count++;
                                        if ( $count > 3 && $count < 9 ) : 
                                    ?>
                                    <div class="DPoliticsTop3List">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="Desc">
                                                <h4 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h4>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endif; endwhile; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-lg-3 col-12">
                    <?php 
                        $popular_query = new WP_Query( array(
                            'post_type'      => 'post',
                            'posts_per_page' => 4,
                            'meta_key'       => 'post_views_count',
                            'orderby'        => 'meta_value_num',
                            'order'          => 'DESC',
                            'date_query'     => array(
                                array(
                                    'after' => '7 days ago'
                                )
                            )                        
                        ) );
                        if ( $popular_query->have_posts() ) : 
                    ?>
                    <div class="DPopularSec">
                        <div class="SectionTitle">
                            <a href="">
                                <h3>সর্বাধিক পঠিত</h3>
                            </a>
                        </div>
                        <div class="DPopularNews">
                            <?php 
                                $count = 0;
                                while ( $popular_query->have_posts() ) : $popular_query->the_post();
                                $count++;
                                if ( $count < 5 ) : 
                            ?>
                            <div class="DPopularNewsList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-5 col-5 ">
                                            <picture>
                                                <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                    class="img-fluid leadMedia">
                                            </picture>

                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <h5 class="Title TitleSM"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h5>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-12">
                    <div class="DHomeAdd970X90 d-flex justify-content-center mt-4">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <section class="container MT-20">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <?php 
                        $home_category_id = get_theme_mod('category_8');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="DHealthCatStyle">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count === 1 ) : 
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="DImgZoomBlock ">
                                        <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"></picture>
                                    </div>

                                </div>
                                <div class="col-lg-6 order-lg-first">
                                    <div class="Desc">
                                        <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="DHealthCatStyleSec">
                        <div class="row">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 6 ) : 
                            ?>
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="DHealthCatList4 align-self-stretch">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="row">
                                            <div class="col-lg-5 col-5">
                                                <div class="DImgZoomBlock ">
                                                    <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>"
                                                            title="<?php the_title(); ?>" class="img-fluid img100"></picture>

                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="Desc">
                                                    <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-lg-6 col-12">
                    <?php 
                        $home_category_id = get_theme_mod('category_9');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="DHealthCatStyle">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count === 1 ) : 
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="DImgZoomBlock ">
                                        <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"></picture>

                                    </div>
                                </div>
                                <div class="col-lg-6 order-lg-first">
                                    <div class="Desc">
                                        <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="DHealthCatStyleSec">
                        <div class="row">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 6 ) : 
                            ?>
                            <div class="col-lg-6 col-12 d-flex">
                                <div class="DHealthCatList4 align-self-stretch">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="row">
                                            <div class="col-lg-5 col-5">
                                                <div class="DImgZoomBlock ">
                                                    <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                            class="img-fluid img100"></picture>

                                                </div>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="Desc">
                                                    <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
            </div>
        </section>
        <section class="SpecialSectionBG MT-60">
            <?php 
                $home_category_id = get_theme_mod('category_10');
                if ( $home_category_id ) :

                $home_category_query = new WP_Query( array(
                    'cat'            => $home_category_id,
                    'posts_per_page' => 5,
                ) );
                if ( $home_category_query->have_posts() ) : 
            ?>
            <div class="container">
                <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                    <h2 class="SectionName2"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                </a>
                <div class="SpecialSection2">
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count < 3 ) : 
                        ?>
                        <div class="col-lg-4 col-sm-12 border-right-inner2">
                            <div class="DEconomicsTop">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="Imgresize ">
                                        <picture><img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"></picture>

                                    </div>
                                    <div class="Desc">
                                        <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                        <div class="col-lg-4 col-sm-12">
                            <div class="DEconomicsList">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 2 && $count < 6 ) : 
                                ?>
                                <div class="DEconomicsListItem">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="DImgBlock">
                                            <div class="Imgresize ">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                        class="img-fluid img100">
                                                </picture>

                                            </div>
                                        </div>
                                        <div class="DetailsBlock">
                                            <div class="Desc">
                                                <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; endif; ?>
        </section>
        <div class="container">
            <div class="row MobileHide">
                <div class="col-lg-4">
                    <div class="DHomeAdd300X250 d-flex justify-content-center mt-5">
                        <!-- Advertisement -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="DHomeAdd300X250 d-flex justify-content-center mt-5">
                        <!-- Advertisement -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="DHomeAdd300X250 d-flex justify-content-center mt-5">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
        <div class="EntertainmentBG">
            <div class="container">
                <?php 
                    $home_category_id = get_theme_mod('category_11');
                    if ( $home_category_id ) :

                    $home_category_query = new WP_Query( array(
                        'cat'            => $home_category_id,
                        'posts_per_page' => 7,
                    ) );
                    if ( $home_category_query->have_posts() ) : 
                ?>
                <div class="SectionTitle">
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                    </a>
                </div>
                <div class="DEntertainment">
                    <div class="row">
                        <div class="col-lg-8 col-12 border-right-inner1">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="DEntertainmentTop">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-8 col-12">
                                            <picture>
                                                <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                    class="img-fluid">
                                            </picture>
                                        </div>
                                        <div class="col-lg-4 col-12">
                                            <div class="Desc">
                                                <h3 class="Title BGTitle FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                <div class="Brief">
                                                    <p><?php the_excerpt(); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                            <div class="DEnterTop2">
                                <div class="row">
                                    <?php 
                                        $count = 0;
                                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                        $count++;
                                        if ( $count > 1 && $count < 5 ) : 
                                    ?>
                                    <div class="col-lg-4 col-12 d-flex">
                                        <div class="DEnterList2 align-self-stretch">
                                            <a href="<?php the_permalink(); ?>">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                                </picture>
                                                <div class="Desc">
                                                    <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php endif; endwhile; wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="DEntertainmentList">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 4 && $count < 8 ) : 
                                ?>
                                <div class="DEntertainmentListItem">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="row">
                                            <div class="col-lg-5 col-5">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                        class="img-fluid">
                                                </picture>
                                            </div>
                                            <div class="col-lg-7 col-7">
                                                <div class="Desc">
                                                    <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                            <div class="DRightSideAdd mt-3 MobileHide">
                                <a href="">
                                    <!-- Advertisement -->
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; endif; ?>
                <?php 
                    $home_category_id = get_theme_mod('category_12');
                    if ( $home_category_id ) :

                    $home_category_query = new WP_Query( array(
                        'cat'            => $home_category_id,
                        'posts_per_page' => 4,
                    ) );
                    if ( $home_category_query->have_posts() ) : 
                ?>
                <div class="SectionTitle mt-3">
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                    </a>
                </div>
                <div class="PhotoSliderSec">
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count < 5 ) : 
                        ?>
                        <div class="col-lg-3 col-6 d-flex">
                            <div class="DPhotoSliderList align-self-stretch">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgBlock">
                                        <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                        <div class="video-icon"><i class="fas fa-image"></i></div>
                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
                <?php endif; endif; ?>
            </div>
        </div>
        <section class="container MT-60">
            <div class="row">
                <div class="col-lg-6 col-12 Politics">
                    <?php 
                        $home_category_id = get_theme_mod('category_13');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="DCategory4Top">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgZoomBlock ">
                                        <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                class="img-fluid img100"> </picture>

                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 6 ) : 
                            ?>
                            <div class="DCategory5NewsList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"
                                                        class="img-fluid img100"></picture>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-lg-6 col-12 Capital">
                    <?php 
                        $home_category_id = get_theme_mod('category_14');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 5,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="WritersSectionTop">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count === 1 ) : 
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="DImgZoomBlock ">
                                        <picture> <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100"></picture>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                        <div class="Brief">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="row">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count > 1 && $count < 6 ) : 
                        ?>
                        <div class="col-lg-6 col-12 d-flex">
                            <div class="DCategory6NewsList MT-25">
                                <a href="<?php the_permalink(); ?>" class="align-self-stretch">
                                    <div class="row">
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                </picture>

                                            </div>
                                        </div>
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <?php endif; endif; ?>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="DLifestyleSec">
                <div class="row">
                    <div class="col-lg-9 border-right-inner1">
                        <?php 
                            $home_category_id = get_theme_mod('category_15');
                            if ( $home_category_id ) :

                            $home_category_query = new WP_Query( array(
                                'cat'            => $home_category_id,
                                'posts_per_page' => 6,
                            ) );
                            if ( $home_category_query->have_posts() ) : 
                        ?>
                        <div class="SectionTitle">
                            <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                                <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                            </a>
                        </div>
                        <div class="DLifestyle">
                            <div class="row">
                                <div class="col-md-9">
                                    <?php 
                                        $count = 0;
                                        while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                        $count++;
                                        if ( $count === 1 ) : 
                                    ?>
                                    <div class="DLifestyleTop1">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="row">
                                                <div class="col-md-8 ">
                                                    <picture>
                                                        <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                                    </picture>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="Desc">
                                                        <h3 class="Title BGTitle FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                                        <div class="Brief">
                                                            <p><?php the_excerpt(); ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php endif; endwhile; wp_reset_postdata(); ?>
                                </div>
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 1 && $count < 7 ) : 
                                ?>
                                <div class="col-md-3 d-flex">
                                    <div class="DLifestyleTop2 align-self-stretch">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid">
                                                </picture>

                                            </div>
                                            <div class="Desc">
                                                <h3 class="Title"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <?php endif; endif; ?>
                    </div>
                    <div class="col-lg-3">
                        <?php if (is_active_sidebar('beside-lifestyle')) : ?>
                            <?php dynamic_sidebar('beside-lifestyle'); ?>
                        <?php endif; ?>
                        <div class="DPrayer skeleton">
                            <!-- Advertisement -->
                        </div>
                        <div class="DRightSideAdd mt-3">
                            <!-- Advertisement -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="container MT-60">
            <div class="row">
                <div class="col-lg-6 col-12 Politics">
                    <?php 
                        $home_category_id = get_theme_mod('category_16');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 4,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="DCategory4Top">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgZoomBlock ">
                                        <picture>
                                            <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                        </picture>
                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 5 ) : 
                            ?>
                            <div class="DCategory5NewsList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                </picture>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>

                    </div>
                    <?php endif; endif; ?>
                </div>
                <div class="col-lg-6 col-12 Politics">
                    <?php 
                        $home_category_id = get_theme_mod('category_17');
                        if ( $home_category_id ) :

                        $home_category_query = new WP_Query( array(
                            'cat'            => $home_category_id,
                            'posts_per_page' => 4,
                        ) );
                        if ( $home_category_query->have_posts() ) : 
                    ?>
                    <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                        <h2 class="SectionName"><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h2>
                    </a>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count === 1 ) : 
                            ?>
                            <div class="DCategory4Top">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="DImgZoomBlock ">
                                        <picture>
                                            <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-400x250.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                        </picture>

                                    </div>
                                    <div class="Desc">
                                        <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                        <div class="col-lg-6 col-12">
                            <?php 
                                $count = 0;
                                while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                $count++;
                                if ( $count > 1 && $count < 5 ) : 
                            ?>
                            <div class="DCategory5NewsList">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="row">
                                        <div class="col-lg-7 col-7">
                                            <div class="Desc">
                                                <h2 class="Title FW700"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h2>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-5">
                                            <div class="DImgZoomBlock ">
                                                <picture>
                                                    <img data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" class="img-fluid img100">
                                                </picture>

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php endif; endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <?php endif; endif; ?>
                </div>
            </div>
        </section>
        <section class="video-area">
            <div class="container">
                <?php 
                    $home_category_id = get_theme_mod('category_18');
                    if ( $home_category_id ) :

                    $home_category_query = new WP_Query( array(
                        'cat'            => $home_category_id,
                        'posts_per_page' => 5,
                    ) );
                    if ( $home_category_query->have_posts() ) : 
                ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="SectionTitle mb-3 mt-4">
                            <a href="<?php echo esc_url( get_category_link( $home_category_id ) ); ?>">
                                <h3><?php echo esc_html( get_cat_name( $home_category_id ) ); ?></h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <?php 
                            $count = 0;
                            while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                            $count++;
                            if ( $count === 1 ) : 
                        ?>
                        <div class="video-big">
                            <a href="<?php the_permalink(); ?>">
                                <div class="video-img-wrap">
                                    <div class="video-overlay"></div>
                                    <picture>
                                        <img class="img-fluid w-100 h-100" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                    </picture>
                                </div>
                                <div class="Desc">
                                    <h3 class="Title2"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                </div>
                                <div class="video-icon"><i class="fas fa-image"></i></div>
                            </a>
                        </div>
                        <?php endif; endwhile; wp_reset_postdata(); ?>
                    </div>
                    <div class="col-lg-6">
                        <div class="video-middel">
                            <div class="row gx-2">
                                <?php 
                                    $count = 0;
                                    while ( $home_category_query->have_posts() ) : $home_category_query->the_post();
                                    $count++;
                                    if ( $count > 1 && $count < 6 ) : 
                                ?>
                                <div class="col-lg-6">
                                    <div class="video-middel-items">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="video-img-wrap">
                                                <div class="video-overlay"></div>
                                                <picture>
                                                    <img class="img-fluid w-100 h-100" data-src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>" src="<?php echo esc_url(get_template_directory_uri() . "/media/common/img-300x169.jpg"); ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">
                                                </picture>
                                            </div>
                                            <div class="Desc">
                                                <h3 class="Title2"><span class="subHeading"><?php $shoulder = get_post_meta( get_the_ID(), '_post_shoulder', true ); if ( $shoulder ) { echo esc_html( $shoulder ) . ' / '; } ?></span><?php the_title(); ?></h3>
                                            </div>
                                            <div class="video-icon"><i class="fas fa-image"></i></div>
                                        </a>
                                    </div>
                                </div>
                                <?php endif; endwhile; wp_reset_postdata(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif; endif; ?>
            </div>
        </section>
        <div id="T4Tutorials_UP11" class="T4Tutorials">
            <div class="T4Tutorials_UP">
                <a class="Exit" id="T4Tutorials_UP11_Close">×</a>
                <div class="Main_Main_Content">
                    <!-- Desktop Ad -->
                    <div class="AdvertClass MobileHide text-center">
                        <!-- Advertisement -->
                    </div>
                    <!-- Mobile Ad -->
                    <div class="AdvertClass MobileShow text-center">
                        <!-- Advertisement -->
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- 14 Jan 26: Code is now more cleaner -->
    <!--Modal Code Welcome Advert-->

    <?php get_footer(); ?>
    
    <div id="back_to_top" class="back_to_top on"><span class="go_up"><i class="fa-solid fa-arrow-up"></i></span></div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $("main img").each(function(index) {
                $(this).attr('src', $(this).attr('data-src'))
            });
        });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri() . "/frontend/common/js/eMythMakers.js"); ?>"></script>
</body>

</html>