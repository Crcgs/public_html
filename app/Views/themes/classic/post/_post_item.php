<div class="post-item<?= checkPostImg($post, 'class'); ?>">
   
    <?php if (checkPostImg($post)): ?>
        <div class="post-item-image">
            <a href="<?= generatePostURL($post); ?>"<?php postURLNewTab($post); ?>><?= loadView("post/_post_image", ["postItem" => $post, "type" => "medium"]); ?></a>
        </div>
    <?php endif; ?>
    <h3 class="title"><a href="<?= generatePostURL($post); ?>"<?php postURLNewTab($this, $post); ?>><?= esc(characterLimiter($post->title, 55, '...')); ?></a></h3>
    <!--old code-->
    <!--<p class="post-meta"><?= loadView("post/_post_meta", ["post" => $post]); ?></p>-->
    
    <!--new code-->
    <?php if (isset($post->author_slug)): ?>
    <p class="post-meta"><?= loadView("post/_post_meta", ["post" => $post]); ?></p>
<?php endif; ?>

    <p class="description"><?= esc(characterLimiter($post->summary, 80, '...')); ?></p>
</div>