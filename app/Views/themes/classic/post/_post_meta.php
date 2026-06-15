
<?php
// AUTHOR
if (
    $generalSettings->show_post_author == 1 &&
    isset($post->author_slug, $post->author_username)
): ?>
    <a href="<?= generateProfileURL($post->author_slug); ?>">
        <?= esc($post->author_username); ?>
    </a>
<?php endif; ?>

<?php
// DATE
if (
    $generalSettings->show_post_date == 1 &&
    isset($post->created_at)
): ?>
    <span><?= formatDateFront($post->created_at); ?></span>
<?php endif; ?>

<?php
// COMMENTS
if (
    $generalSettings->comment_system == 1 &&
    isset($post->comment_count)
): ?>
    <span>
        <i class="icon-comment"></i><?= $post->comment_count; ?>
    </span>
<?php endif; ?>

<?php
// VIEWS
if (
    $generalSettings->show_hits &&
    (isset($post->pageviews_count) || isset($post->pageviews))
): ?>
    <span class="m-r-0">
        <i class="icon-eye"></i>
        <?= $post->pageviews_count ?? $post->pageviews; ?>
    </span>
<?php endif; ?>
