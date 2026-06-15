<?php $title = 'Add New Plan'; ?>

<?= view('admin/includes/_header', ['title' => $title]); ?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Add New Plan</h3>
        <div class="box-tools pull-right">
            <a href="<?= adminUrl('plans') ?>" class="btn btn-default btn-sm">
                <i class="fa fa-arrow-left"></i> Back to Plans
            </a>
        </div>
    </div>
    <div class="box-body">
        <?= view('admin/includes/_messages'); ?>

        <form action="<?= adminUrl('store') ?>" method="post">
            <?= csrf_field() ?>
            
            <div class="form-group">
                <label>Plan Name</label>
                <input type="text" class="form-control" name="plan_name" value="<?= old('plan_name') ?>" required>
            </div>

            <div class="form-group">
                <label>Plan Price</label>
                <input type="number" class="form-control" name="plan_price" value="<?= old('plan_price') ?>" step="0.01" required>
            </div>

            <div class="form-group">
                <label>Plan Duration (Days)</label>
                <input type="number" class="form-control" name="plan_duration" value="<?= old('plan_duration') ?>" required>
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control" name="description" rows="4"><?= old('description') ?></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option value="1" <?= old('status') == '1' ? 'selected' : '' ?>>Active</option>
                    <option value="0" <?= old('status') == '0' ? 'selected' : '' ?>>Inactive</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Plan</button>
            </div>
        </form>
    </div>
</div>

<?= view('admin/includes/_footer'); ?> 