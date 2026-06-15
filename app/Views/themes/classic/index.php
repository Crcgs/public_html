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
    
    <section class="about-premium">
    <div class="container">
        <div class="row align-items-center">
            <!-- LEFT CONTENT -->
            <div class="col-md-6">
                <span class="section-tag">Who We Are</span>
                <h2>
                    Trusted Global Platform for<br>
                    Risk & Compliance
                </h2>
                <p class="intro-text">
                    CRCGS connects professionals, institutions, and experts to strengthen
                    compliance frameworks and combat financial crime through knowledge,
                    collaboration, and innovation.
                </p>
            </div>
            <!-- RIGHT IMAGE -->
            <div class="col-lg-6">
                <div class="about-image-wrap">
                    <img src="<?= base_url('assets/new'); ?>/images/slider-1.074f49a0.jpg" alt="Risk & Compliance">
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.about-premium {
    padding: 49px 0;
    background: #ffffff;
}
.section-tag {
    text-transform: uppercase;
    font-size: 12px;
    letter-spacing: 2px;
    color: #2563eb;
    font-weight: 600;
}
.about-premium h2 {
    font-size: 38px;
    font-weight: 700;
    color: #0f172a;
    margin: 15px 0 20px;
    line-height: 1.3;
}
.intro-text {
    font-size: 16px;
    color: #475569;
    margin-bottom: 35px;
    max-width: 520px;
}
.about-image-wrap img {
    width: 100%;
    object-fit: cover;
    border-radius: 14px;
}

/* Responsive */
@media (max-width: 991px) {
    .about-image-wrap img {
        height: 235px;
        margin-top: 30px;
    }
}

</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<style>
  #team{
    width:100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.auth .heading{
    text-align: center;
    margin: 20px;
    font-size: 38px;
    font-weight: 700;
    color: #0f172a;
}
.auth .box{
    width:100%;
    height: 340px;
    background-color: #ffffff;
    box-shadow: 2px 2px 30px rgba(0,0,0,0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 20px;
    border-radius: 10px;
    position: relative;
    margin: 0px;
}

.auth .top-bar{
    width:50%;
    height: 4px;
    position: absolute;
    left: 50%;
    top: 0px;
    transform: translateX(-50%);
    background-color: #2B466A;
    border-radius: 0px 0px 10px 10px;
}
.auth .verify{
    color:#17b667;
}
.auth .nav{
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
}
.auth .details{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.auth .details img{
    width:100px;
    height: 100px;
    border-radius: 50%;
    overflow: hidden;
    object-fit: cover;
    object-position: center;
}
.auth .details strong{
       font-size: 17px;
       font-weight: 700;
    color: #141414;
    letter-spacing: 1px;
    margin-top: 26px;
    text-align: center;
}
.auth .btn{
   text-align: center;
    background-color: #2B466A;
     font-size: 15px;
     box-shadow: 2px 5px 15px rgba(80,123,252,0.5);
}
.authorSwiper .btn{
    width:100%;
}
.auth .btn a {
   color: #fff;
}
.auth .btn a i{
    margin-right: 10px;
}

.auth .btn:hover {
    color: #fff !important;
    background-color: #2B466A !important;
}
.auth .box:hover{
    box-shadow: 2px 2px 30px rgba(4,15,49,0.1);
    transform: scale(1.01);
    transition: all ease 0.1s;
}

@media(max-width:712px){
   .auth .box{
        flex-grow: 0.7;
    }
.about-premium h2 {
    font-size: 27px;
    font-weight: 700;
}
.auth .box {
    width: 130px;
    height: 229px;
    background-color: #ffffff;
    box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.05);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    padding: 14px;
    border-radius: 10px;
    margin: 0px;
    position: relative;
}
.auth .details img {
    width: 82px;
    height: 82px;
}
    .btn {
        padding: 6px 0.3rem !important;
            font-size: 9px !important;
    }
    .auth .btn a i {
    margin-right: 5px;
}
}

.authorSwiper {
    width: 100%;
    padding: 20px 40px;
    position: relative;
       overflow: hidden;
}
.swiper-slide {
    display: flex;
    justify-content: center;
}
.authorSwiper .swiper-button-next,
.authorSwiper .swiper-button-prev {
    color: #2B466A !important;   /* tumhara theme color */
    font-weight: bold;
}

.authorSwiper .swiper-button-next::after,
.authorSwiper .swiper-button-prev::after{
    font-size: 28px;
    font-weight: bold;
}

.view-more-wrap {
   width: 100%;
    margin: 30px 0 15px;
}

.view-more-btn {
    width: 15%;
    min-width: 180px;
    display: block;        /* 👈 IMPORTANT */
    margin: 0 auto;        /* 👈 CENTER FIX */
    text-align: center;
}


/* 🔹 Mobile responsive */
@media (max-width: 768px) {
    .view-more-btn {
        width: 70%;
    }
}
</style>
<script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>

  
<?php if (!empty($authors)): ?>
   <section id="team" class="auth"> 
        <h1 class="heading">Our Authors
            
        </h1>
    <!--container---------------->
   <div class="swiper authorSwiper">
    <div class="swiper-wrapper ">

        <?php foreach ($authors as $author): ?>
            <div class="swiper-slide">
                <!-- 🔹 TUMHARA BOX – NO CHANGE -->
                <div class="box">
                    <div class="top-bar"></div>

                    <div class="details">
                        <img src="<?= !empty($author->avatar)
                            ? site_url($author->avatar)
                            : site_url('assets/img/user.png'); ?>" 
                            alt="<?= esc($author->username); ?>" />

                        <strong><?= esc($author->username); ?></strong>
                    </div>

                    <div class="btn">
                        <a href="<?= site_url('profile/' . $author->slug); ?>">
                            <i class="fas fa-eye"></i>Check This Profile
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

<div class="view-more-wrap">
    <a href="<?= site_url('our-author'); ?>" class="btn btn-primary view-more-btn">
        View More Authors
    </a>
</div>
    </section>

                                
<?php endif; ?>

<script>
new Swiper(".authorSwiper", {
    loop: true,
    spaceBetween: 15,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".authorSwiper .swiper-button-next",
        prevEl: ".authorSwiper .swiper-button-prev",
    },
    breakpoints: {
        0: {
            slidesPerView: 1
        },
        576: {
            slidesPerView: 2
        },
        768: {
            slidesPerView: 3
        },
        1024: {
            slidesPerView: 4   // 👈 yahan 4 hi rakho
        }
    }
});

</script>

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