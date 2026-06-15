
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Plans</h3>
        <div class="box-tools pull-right">
            <a href="<?= adminUrl('add-plan') ?>" class="btn btn-primary btn-sm">
                <i class="fa fa-plus"></i> Add New Plan
            </a>
        </div>
    </div>
    <div class="box-body">
        <?= view('admin/includes/_messages'); ?>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Plan Name</th>
                        <th>Price</th>
                        <th>Duration (Days)</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($plans)): ?>
                        <?php foreach ($plans as $plan): ?>
                            <tr>
                                <td><?= $plan['id'] ?></td>
                                <td><?= esc($plan['plan_name']) ?></td>
                                <td><?= number_format($plan['plan_price'], 2) ?></td>
                                <td><?= $plan['plan_duration'] ?></td>
                                <td>
                                    <div class="btn-group">
                                        <button type="button" 
                                                class="btn btn-<?= $plan['status'] == 1 ? 'success' : 'danger' ?> btn-sm status-toggle"
                                                data-id="<?= $plan['id'] ?>"
                                                data-status="<?= $plan['status'] ?>">
                                            <?= $plan['status'] == 1 ? 'Active' : 'Inactive' ?>
                                        </button>
                                    </div>
                                </td>
                                <td><?= date('Y-m-d H:i', strtotime($plan['created_at'])) ?></td>
                                <td>
                                    <a href="<?= adminUrl('edit-plan/' . $plan['id']) ?>" class="btn btn-primary btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <button type="button" class="btn btn-danger btn-sm delete-plan" data-id="<?= $plan['id'] ?>">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Handle status toggle
    $('.status-toggle').on('click', function() {
        var btn = $(this);
        var id = btn.data('id');
        
        $.ajax({
            url: '<?= adminUrl('plans/toggle-status/') ?>' + id,
            type: 'POST',
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    if (response.newStatus == 1) {
                        btn.removeClass('btn-danger').addClass('btn-success').text('Active');
                    } else {
                        btn.removeClass('btn-success').addClass('btn-danger').text('Inactive');
                    }
                    btn.data('status', response.newStatus);
                }
            }
        });
    });

    // Handle delete
    $('.delete-plan').on('click', function() {
        var id = $(this).data('id');
        
        if (confirm('Are you sure you want to delete this plan?')) {
            window.location.href = '<?= adminUrl('plans/delete/') ?>' + id;
        }
    });
});
</script> 