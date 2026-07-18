

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Events</h1>
            </div>

            <div class="col-sm-6 text-right">
                <a href="<?= adminUrl('/add_event'); ?>" class="btn btn-success">
                    <i class="fa fa-plus"></i> Add New Event
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content">

    <div class="card">

        <div class="card-header">

            <form action="<?= adminUrl('event'); ?>" method="get">

                <div class="row">

                    <div class="col-md-4">
                        <input type="text"
                               name="search"
                               class="form-control"
                               placeholder="Search Event">
                    </div>

                    <div class="col-md-3">

                        <select class="form-control" name="status">
                            <option value="">All Status</option>
                            <option value="1">Active</option>
                            <option value="0">Draft</option>
                        </select>

                    </div>

                    <div class="col-md-3">
                        <input type="date"
                               class="form-control"
                               name="event_date">
                    </div>

                    <div class="col-md-2">

                        <button class="btn btn-primary btn-block">
                            <i class="fa fa-search"></i> Search
                        </button>

                    </div>

                </div>

            </form>

        </div>


        <div class="card-body table-responsive p-0">

            <table class="table table-bordered table-hover">

                <thead class="thead-dark">

                <tr>

                    <th width="60">#</th>

                    <th width="90">Image</th>

                    <th>Title</th>

                    <th>Date</th>

                    <th>Location</th>

                    <th>Seats</th>

                    <th>Registered</th>

                    <th>Status</th>

                    <th width="220">Action</th>

                </tr>

                </thead>

                <tbody>

                <?php if (!empty($events)): ?>

                    <?php foreach($events as $item): ?>

                        <tr>

                            <td><?= $item->id; ?></td>

                            <td>

                                <img src="<?= base_url($item->image); ?>"
                                     width="70"
                                     class="img-thumbnail">

                            </td>

                            <td>

                                <strong><?= esc($item->title); ?></strong>

                            </td>

                            <td>

                                <?= date('d M Y',strtotime($item->event_date)); ?>

                            </td>

                            <td>

                                <?= esc($item->location); ?>

                            </td>

                            <td>

                                <?= $item->max_seats; ?>

                            </td>

                            <td>

                                <?= $item->registered_users; ?>

                            </td>

                            <td>

                                <?php if($item->status==1): ?>

                                    <span class="badge badge-success">
                                        Active
                                    </span>

                                <?php else: ?>

                                    <span class="badge badge-secondary">
                                        Draft
                                    </span>

                                <?php endif; ?>

                            </td>

                            <td>

                                <a href="<?= adminUrl('event/view/'.$item->id); ?>"
                                   class="btn btn-info btn-sm">

                                    <i class="fa fa-eye"></i>

                                </a>

                                <a href="<?= adminUrl('event/edit/'.$item->id); ?>"
                                   class="btn btn-primary btn-sm">

                                    <i class="fa fa-edit"></i>

                                </a>

                                <a href="<?= adminUrl('event/registrations/'.$item->id); ?>"
                                   class="btn btn-success btn-sm">

                                    <i class="fa fa-users"></i>

                                </a>

                                <a href="<?= adminUrl('event/delete/'.$item->id); ?>"
                                   onclick="return confirm('Delete this event?')"
                                   class="btn btn-danger btn-sm">

                                    <i class="fa fa-trash"></i>

                                </a>

                            </td>

                        </tr>

                    <?php endforeach; ?>

                <?php else: ?>

                    <tr>

                        <td colspan="9" class="text-center">

                            No Events Found

                        </td>

                    </tr>

                <?php endif; ?>

                </tbody>

            </table>

        </div>

    </div>

</section>

