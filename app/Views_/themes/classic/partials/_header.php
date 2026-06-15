<!DOCTYPE html>
<html lang="<?= $activeLang->short_form ?>">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?></title>
      <meta name="description" content="<?= escSls($description); ?>"/>
      <meta name="keywords" content="<?= escSls($keywords); ?>"/>
      <meta name="author" content="<?= escSls($baseSettings->application_name); ?>"/>
      <meta property="og:locale" content="en_US"/>
      <meta property="og:site_name" content="<?= escSls($baseSettings->application_name); ?>"/>
      <?= csrf_meta(); ?>
      <?php if (isset($postType)): ?>
      <meta property="og:type" content="<?= $ogType; ?>"/>
      <meta property="og:title" content="<?= $ogTitle; ?>"/>
      <meta property="og:description" content="<?= escSls($description); ?>"/>
      <meta property="og:url" content="<?= currentFullURL(); ?>"/>
      <meta property="og:image" content="<?= $ogImage; ?>"/>
      <meta property="og:image:width" content="<?= $ogWidth; ?>"/>
      <meta property="og:image:height" content="<?= $ogHeight; ?>"/>
      <meta property="article:author" content="<?= $ogAuthor; ?>"/>
      <meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
      <?php foreach ($ogTags as $tag): ?>
      <meta property="article:tag" content="<?= escSls($tag->tag); ?>"/>
      <?php endforeach; ?>
      <meta property="article:published_time" content="<?= $ogPublishedTime; ?>"/>
      <meta property="article:modified_time" content="<?= $ogModifiedTime; ?>"/>
      <meta name="twitter:card" content="summary_large_image"/>
      <meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
      <meta name="twitter:creator" content="@<?= escSls($ogCreator); ?>"/>
      <meta name="twitter:title" content="<?= escSls($post->title); ?>"/>
      <meta name="twitter:description" content="<?= escSls($description); ?>"/>
      <meta name="twitter:image" content="<?= $ogImage; ?>"/>
      <?php else: ?>
      <meta property="og:image" content="<?= getLogo(); ?>"/>
      <meta property="og:image:width" content="240"/>
      <meta property="og:image:height" content="90"/>
      <meta property="og:type" content="website"/>
      <meta property="og:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
      <meta property="og:description" content="<?= escSls($description); ?>"/>
      <meta property="og:url" content="<?= currentFullURL(); ?>"/>
      <meta property="fb:app_id" content="<?= $generalSettings->facebook_app_id; ?>"/>
      <meta name="twitter:card" content="summary_large_image"/>
      <meta name="twitter:site" content="@<?= escSls($baseSettings->application_name); ?>"/>
      <meta name="twitter:title" content="<?= escSls($title); ?> - <?= escSls($baseSettings->site_title); ?>"/>
      <meta name="twitter:description" content="<?= escSls($description); ?>"/>
      <?php endif;
         if ($generalSettings->pwa_status == 1): ?>
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-status-bar-style" content="black">
      <meta name="apple-mobile-web-app-title" content="<?= escSls($baseSettings->application_name); ?>">
      <meta name="msapplication-TileImage" content="<?= base_url('assets/img/pwa/144x144.png'); ?>">
      <meta name="msapplication-TileColor" content="#2F3BA2">
      <link rel="manifest" href="<?= base_url('manifest.json'); ?>">
      <link rel="apple-touch-icon" href="<?= base_url('assets/img/pwa/144x144.png'); ?>">
      <?php endif; ?>
      <link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>
      <link rel="canonical" href="<?= currentFullURL(); ?>"/>
      <link rel="alternate" href="<?= currentFullURL(); ?>" hreflang="<?= $activeLang->language_code; ?>"/>
      <?= view('common/_fonts'); ?>
      <link href="<?= base_url('assets/vendor/bootstrap-v3/css/bootstrap.min.css'); ?>" rel="stylesheet"/>
      <link href="<?= base_url('assets/vendor/font-icons/css/font-icons-2.2.min.css'); ?>" rel="stylesheet">
      <link href="<?= base_url($assetsPath . '/css/style-2.2.min.css'); ?>" rel="stylesheet"/>
      <link href="<?= base_url($assetsPath . '/css/plugins-2.2.css'); ?>" rel="stylesheet"/>
      <?php if ($darkMode == true) : ?>
      <link href="<?= base_url($assetsPath . '/css/dark-2.2.min.css'); ?>" rel="stylesheet"/>
      <?php endif; ?>
      <?php if ($activeLang->text_direction == "rtl"): ?>
      <link href="<?= base_url($assetsPath . '/css/rtl-2.2.min.css'); ?>" rel="stylesheet"/>
      <script>var rtl = true;</script>
      <?php else: ?>
      <script>var rtl = false;</script>
      <?php endif; ?>
      <?= loadView('partials/_css_js_header'); ?>
      <?= $generalSettings->custom_header_codes; ?>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
      <link rel="stylesheet" href="<?= base_url('assets/new/css/swiper-bundle.min.css'); ?>" />
      <link rel="stylesheet" href="<?= base_url('assets/new/css/style.css'); ?>">
      <style>
   @media all and (min-width: 992px) {
    .navbar {
        padding-top: 0;
        padding-bottom: 0;
    }
    .navbar .has-megamenu {
        position: static !important;
    }
    .navbar .dropdown-menu {
        margin-top: 0;
    }
    .navbar .megamenu {
        left: 0;
        right: 0;
        width: 100%;
        padding: 20px;
    }
    .navbar .megasubmenu {
        left: 100%;
        top: 0;
        min-height: 100%;
        min-width: 500px;
    }
    .navbar .dropdown-large {
        min-width: 500px;
    }
    .navbar .nav-link {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }
    .dropdown-menu .dropdown-menu,
    .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }
    .dropdown-menu .dropdown-menu.submenu-left,
    .submenu.submenu-left {
        right: 100%;
        left: auto;
    }
    .navbar-hover .dropdown.has-dimmer:hover .nav-link {
        position: relative;
        z-index: 12;
    }
    .navbar-hover .dropdown.has-dimmer:hover:after {
        z-index: 10;
        opacity: 1;
        visibility: visible;
        position: fixed;
    }
    .navbar-hover.navbar-dark .nav-item:hover .nav-link {
        color: #fff;
    }
    .navbar-hover.navbar-light .nav-item:hover .nav-link {
        color: #000;
    }
    .navbar-hover .dropdown-menu:not(.animate) {
        display: none;
    }
    .navbar-hover .animate {
        display: block;
        opacity: 0;
        visibility: hidden;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        margin-top: 0;
    }
    .navbar-hover .dropdown-menu .animate {
        -webkit-transition: 0.1s;
        transition: 0.1s;
    }
    .navbar-hover .fade-down {
        top: 90%;
        -webkit-transform: rotateX(-80deg);
        transform: rotateX(-80deg);
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0;
    }
    .navbar-hover .fade-up {
        top: 100px;
    }
    .navbar-hover .dropdown-menu .fade-down {
        top: 0;
    }
    .navbar-hover .dropdown:hover > .dropdown-menu,
    .navbar-hover .nav-item:hover > .dropdown-menu {
        display: block;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        opacity: 1;
        visibility: visible;
        top: 100%;
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
    }
    .dropdown-menu > li:hover {
        background-color: #f1f1f1;
    }
    .dropdown-menu li {
        position: relative;
    }
    .dropdown-menu li.has-megasubmenu {
        position: static;
    }
    .dropdown-menu li:hover > .dropdown-menu,
    .dropdown-menu li:hover > .submenu {
        display: block;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        opacity: 1;
        visibility: visible;
        top: 0;
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
    }
    .dropdown-menu li:hover > .megasubmenu {
        display: block;
        -webkit-transition: 0.4s;
        transition: 0.4s;
        opacity: 1;
        visibility: visible;
        top: 0;
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
    }
}
.navigation-wrap .navbar-nav .nav-item .dropdown-menu .dropdown-item {
    border-bottom: 1px solid #ddd;
    padding: 10px 15px !important;
}
.navbar .icon-arrow:after {
    content: "\276F";
    line-height: 1;
    display: inline-block;
    vertical-align: middle;
    margin-left: 7px;
    margin-top: -2px;
    opacity: 0.3;
    font-size: 80%;
}
.navbar-right li{
   display: flex;
   align-items: center;
   height: 69px;
}
.navbar-right li .dropdown-menu li{
   height: auto !important; 
}
</style>
   </head>
   <body>
      <header id="header">
         <?= loadView('nav/_nav_top'); ?>
          
         <?= loadView('nav/_nav_main'); ?>
         <div class="mobile-nav-container">
            <div class="nav-mobile-header">
               <div class="container-fluid">
                  <div class="row">
                     <div class="nav-mobile-header-container">
                        <div class="menu-icon">
                           <a href="javascript:void(0)" class="btn-open-mobile-nav"><i class="icon-menu"></i></a>
                        </div>
                        <div class="mobile-logo">
                           <a href="<?= langBaseUrl(); ?>">
                           <img src="<?= $darkMode == 1 ? getLogoFooter() : getLogo(); ?>" alt="logo" class="logo" width="150" height="50">
                           </a>
                        </div>
                        <div class="mobile-search">
                           <a class="search-icon"><i class="icon-search"></i></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div id="overlay_bg" class="overlay-bg"></div>
      <div class="mobile-nav-search">
         <div class="search-form">
            <form action="<?= generateURL('search'); ?>" method="get">
               <input type="text" name="q" maxlength="300" pattern=".*\S+.*" class="form-control form-input" placeholder="<?= trans("placeholder_search"); ?>" required>
               <button class="btn btn-default"><i class="icon-search"></i></button>
            </form>
         </div>
      </div>
      <?= loadView('nav/_nav_mobile'); ?>
      <?= loadView('partials/_modals'); ?>