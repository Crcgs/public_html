<footer class="footer">
        <div class="footer-logo">
            <a href="#"><img src="<?= getLogoFooter(); ?>" alt="Footer Logo" width="150" height="150"></a>
        </div>
        
        <div class="footer-links-under-logo">
    <style>
        .footer-links-under-logo {
            margin-top: 15px;
            text-align: center;
        }

        .footer-links-under-logo ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;              /* make items in one row */
            justify-content: center;    /* center horizontally */
            gap: 20px;                  /* space between links */
        }

        .footer-links-under-logo ul li {
            margin: 0;                  /* remove vertical spacing */
        }

        .footer-links-under-logo ul li a {
            color: #000;
            font-size: 14px;
            text-decoration: none;
            font-weight: bold;
        }

        .footer-links-under-logo ul li a:hover {
            color: #19bc9c;
        }
    </style>

    <ul>
        <li><a href="<?= base_url('about-us'); ?>">About Us</a></li>
        <li><a href="<?= base_url('our-mission'); ?>">Our Mission</a></li>
        <li><a href="<?= base_url('our-vision'); ?>">Our Vision</a></li>
    </ul>
</div>


        <div class="footer-content">
            <div class="newsletter">  
                <h3><?= trans("join_newsletter"); ?></h3>
                <form id="form_newsletter_footer" class="form-newsletter">

                    <div class="form-newsletter-main">
                        <input type="email" name="email" class="newsletter-input" maxlength="199" placeholder="<?= trans("email"); ?>">
                        <button type="submit" name="submit" value="form" class="newsletter-button"><?= trans("subscribe"); ?></button>
                    </div>
                    <div id="form_newsletter_response"></div>
                </form>
                <div class="privacy-content-main">
                     <p><?= esc($baseSettings->copyright); ?></p>

                </div>
            </div> 

        </div>

        <div class="footer-bottom"></div>
    </footer>

 
<?php if (empty(helperGetCookie('cks_warning')) && $baseSettings->cookies_warning): ?>
    <div class="cookies-warning">
        <button type="button" aria-label="close" class="close" onclick="closeCookiesWarning();">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
            </svg>
        </button>
        <div class="text">
            <?= $baseSettings->cookies_warning_text; ?>
        </div>
        <button type="button" class="btn btn-md btn-block btn-custom" aria-label="close" onclick="closeCookiesWarning();"><?= trans("accept_cookies"); ?></button>
    </div>
<?php endif; ?>

<script src="<?= base_url('assets/new/js/jquery-3.6.0.min.js'); ?>"></script>
    <!-- Swiper JS -->
    <script src="<?= base_url('assets/new/js/swiper-bundle.min.js'); ?>"></script>
    <script src="<?= base_url('assets/new/js/bootstrap.bundle.min.js'); ?>"></script>

    <script>
        $('.search-option').hide();
        $(".main-search").on('click', function () {
            $('.search-option').animate({
                height: 'toggle',
            });
        });
    </script>
    <script>
        const bannerSwiper = new Swiper('.home-banner-slider', {
            loop: true,
            autoplay: {
                delay: 6000,
                disableOnInteraction: false,
            },
            //   pagination: {
            //       el: '.swiper-pagination',
            //      clickable: true,
            //   },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            // speed: 600,
            effect: 'slide' // You can also try 'fade'
        });
    </script>
    <script>
document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll('section');

    const observer = new IntersectionObserver(entries => {
        
        entries.forEach(entry => {
            if (entry.isIntersecting) {
               
                entry.target.classList.add('show');
                observer.unobserve(entry.target);
            }
        
        });
    }, {
        threshold: 0.3
    });

    sections.forEach(sec => observer.observe(sec));
});
</script>

    <script>
        const swiper = new Swiper('.et-slider', {
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            speed: 700,
            effect: 'slide' // You can also use 'fade'
        });
    </script>
    <script>
        $(document).ready(function () {
            $("#mbmenu-trigger").click(function () {
                $("#mbmenu").slideToggle("slow");
            });
        });
    </script>

<script src="<?= base_url($assetsPath. '/js/jquery-1.12.4.min.js'); ?>"></script>
<script src="<?= base_url($assetsPath. '/js/plugins-2.2.js'); ?>"></script>
<script>$("form[method='post']").append("<input type='hidden' name='sys_lang_id' value='<?= $activeLang->id; ?>'>");</script>
<script src="<?= base_url($assetsPath. '/js/script-2.2.min.js'); ?>"></script>
<?= loadView('partials/_js_footer'); ?>
<?php if ($generalSettings->pwa_status == 1): ?>
<script>if ('serviceWorker' in navigator) {window.addEventListener('load', function () {navigator.serviceWorker.register('<?= base_url('pwa-sw.js');?>').then(function (registration) {}, function (err) {console.log('ServiceWorker registration failed: ', err);}).catch(function (err) {console.log(err);});});} else {console.log('service worker is not supported');}</script>
<?php endif; ?>
<?= $generalSettings->adsense_activation_code; ?>
<?= $generalSettings->google_analytics; ?>
<?= $generalSettings->custom_footer_codes; ?>
</body>
</html>
<?php if(!empty($isPage404)): exit(); endif; ?>