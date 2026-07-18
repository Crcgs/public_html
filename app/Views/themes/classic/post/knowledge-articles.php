<section id="wrapper">
<div >
    <div class="container">
        <div class="row">
            <div class="col-sm-12 page-breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= langBaseUrl(); ?>"><?= trans("home"); ?></a></li>
                    <li class="breadcrumb-item active"><?= trans("posts"); ?></li>
                </ol>
            </div>
            <div id="content" class="col-sm-8">
                <div class="row">
                    <div class="col-sm-12"><h1 class="page-title">Knowledge Articles</h1></div>
                   <?php
// Group posts by category
$groupedPosts = [];

foreach ($posts as $post) {

    $groupedPosts[$post->parent_category_name][] = $post;


}

foreach ($groupedPosts as $categoryName => $categoryPosts):
?>

    <div class="col-sm-12">
        <h2 class="category-title"><?= esc($categoryName); ?></h2>
        <hr>
    </div>

    <?php foreach ($categoryPosts as $post): ?>
        <div class="col-sm-6 col-xs-12">
            <?= loadView("post/_post_item", ["post" => $post, "showLabel" => false]); ?>
        </div>
    <?php endforeach; ?>

<?php endforeach; ?>
                    
                </div>
            </div>
            <div id="sidebar" class="col-sm-4">
                <?= loadView('partials/_sidebar'); ?>
            </div>
        </div>
    </div>
</div>
</section>