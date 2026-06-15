 <section class="home-banner-section-wrap">
        <div class="container">
            <div class="home-banner-slider-wrap">
                <!-- Swiper -->
                <div class="swiper home-banner-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide home-banner-item">
                            <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="" class="w-100">
                        </div>
                        <div class="swiper-slide home-banner-item">
                            <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="" class="w-100">
                        </div>
                    </div>
                    <!-- Navigation buttons -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </section>



    <section class="cgcrc-content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="cgcrc-content">
                        <h2 class="section-title">Welcome to CRCGS</h2>
                        <p>CRCGS is a growing global hub for risk and compliance professionals. We’re building a vibrant
                            community dedicated to advancing expertise, fostering collaboration, and fighting financial
                            crime. Through trusted content, practical tools, and future-ready certifications, we empower
                            you
                            to lead with confidence in a complex world.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head">

                        <h2>Latest News</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">

                               <?php $count = 1;
                        if (!empty($latestPosts)){
                            foreach ($latestPosts as $item) { 
                            ?>
                            <li class="dtq-post-list-child">
                                <a class="dtq-post-list-child-inner" href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                    <div class="dtq-post-list-thumb">
                                       <?= loadView("post/_post_image", ["postItem" => $item, "type" => "medium"]); ?>
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title"><?= esc(characterLimiter($item->title, 50, '...')); ?></h3> 
                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">
                                            <?= esc(characterLimiter($item->summary, 130, '...')); ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php } } ?>
                             
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head">
                        <h2>Knowledge-Hub</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">
                            <?php $count = 1;
                        if (!empty($featuredPosts)){
                            foreach ($featuredPosts as $item) { 
                            ?>
                            <li class="dtq-post-list-child">
                                <a class="dtq-post-list-child-inner" href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                    <div class="dtq-post-list-thumb">
                                       <?= loadView("post/_post_image", ["postItem" => $item, "type" => "medium"]); ?>
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title"><?= esc(characterLimiter($item->title, 50, '...')); ?></h3> 
                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">
                                            <?= esc(characterLimiter($item->summary, 130, '...')); ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php } } ?>
                             
                        </ul>
                    </div>

                </div>
                <div class="col-md-4 nwes-wrap">
                    <div class="news-title-head"> 
                        <h2>Notifications & Events</h2>
                    </div>
                    <div class="post-widget-item">
                        <ul class="dtq-post-list-parent">

                             <?php $count = 1;
                        if (!empty($sliderPosts)){
                            foreach ($sliderPosts as $item) { 
                            ?>
                            <li class="dtq-post-list-child">
                                <a class="dtq-post-list-child-inner" href="<?= generateCategoryURLById($item->category_id, $baseCategories); ?>">
                                    <div class="dtq-post-list-thumb">
                                       <?= loadView("post/_post_image", ["postItem" => $item, "type" => "medium"]); ?>
                                    </div>
                                    <div class="dtq-post-list-content">
                                        <h3 class="dtq-post-list-title"><?= esc(characterLimiter($item->title, 50, '...')); ?></h3> 
                                    </div>
                                    <div>
                                        <p class="dtq-post-list-excerpt">
                                            <?= esc(characterLimiter($item->summary, 130, '...')); ?>
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <?php } } ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section> 