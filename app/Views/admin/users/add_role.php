<div class="row">
    <div class="col-sm-12">
        <?= view('admin/includes/_messages'); ?>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 col-md-8">

        <div class="box box-primary">

            <div class="box-header with-border">
                <h3 class="box-title">Add New Role</h3>
            </div>

            <form action="<?= adminUrl('add-role-post'); ?>" method="post">
                <?= csrf_field(); ?>

                <div class="box-body">

                    <?php foreach ($activeLanguages as $language): ?>

                        <div class="form-group">
                            <label>
                                <?= trans("role_name"); ?>
                                (<?= esc($language->name); ?>)
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                name="role_name_<?= $language->id; ?>"
                                placeholder="<?= trans("role_name"); ?>"
                                required>
                        </div>

                    <?php endforeach; ?>


                    <?php
                    $permissions = [
                        'admin_panel' => trans('admin_panel'),
                        'add_post' => trans('add_post'),
                        'manage_all_posts' => trans('manage_all_posts'),
                        'navigation' => trans('navigation'),
                        'pages' => trans('pages'),
                        'rss_feeds' => trans('rss_feeds'),
                        'categories' => trans('categories'),
                        'widgets' => trans('widgets'),
                        'polls' => trans('polls'),
                        'gallery' => trans('gallery'),
                        'comments_contact' => trans('comments') . " / " . trans('contact_messages'),
                        'newsletter' => trans('newsletter'),
                        'ad_spaces' => trans('ad_spaces'),
                        'users' => trans('users'),
                        'plans' => 'Plans',
                        'add_plan' => 'Add Plan',
                        'seo_tools' => trans('seo_tools'),
                        'settings' => trans('settings'),
                    ];
                    ?>

                    <?php foreach ($permissions as $name => $label): ?>

                        <div class="form-group">
                            <div class="row">

                                <div class="col-md-1 col-sm-2 col-xs-2">
                                    <input
                                        type="checkbox"
                                        name="<?= $name; ?>"
                                        value="1"
                                        id="<?= $name; ?>"
                                        class="square-purple">
                                </div>

                                <div class="col-md-11 col-sm-10 col-xs-10">
                                    <label for="<?= $name; ?>" class="control-label cursor-pointer">
                                        <?= $label; ?>
                                    </label>
                                </div>

                            </div>
                        </div>

                    <?php endforeach; ?>

                </div>

                <div class="box-footer">
                    <button type="submit" class="btn btn-success pull-right">
                        Save Role
                    </button>
                </div>

            </form>

        </div>

    </div>
</div>

<style>
.form-group .col-sm-2{
    max-width:40px;
    padding-right:0!important;
}
</style>