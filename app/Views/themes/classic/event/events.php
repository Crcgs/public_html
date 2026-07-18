<?php defined('APPPATH') OR exit('No direct script access allowed'); ?>

<div class="container">
    <div class="row">

        <div class="col-sm-12">
            <div class="page-breadcrumb">
                <ol class="breadcrumb">
                    <li><a href="<?= langBaseUrl(); ?>">Home</a></li>
                    <li class="active">Events</li>
                </ol>
            </div>

            <h1 class="page-title">Upcoming Events</h1>
        </div>

    </div>

    <div class="row">

        <?php if (!empty($events)): ?>

            <?php foreach ($events as $item): ?>

                <div class="col-md-4 col-sm-6">

                    <div class="panel panel-default">

                        <div class="panel-body">

                            <?php if (!empty($item->image)): ?>

                                <img src="<?= base_url($item->image); ?>"
                                     class="img-responsive"
                                     style="width:100%;height:220px;object-fit:cover;">

                            <?php endif; ?>

                            <h3 style="margin-top:15px;">
                                <?= esc($item->title); ?>
                            </h3>

                            <p>
                                <strong>Date :</strong>
                                <?= date('d M Y', strtotime($item->event_date)); ?>
                            </p>

                            <p>
                                <strong>Time :</strong>
                                <?= esc($item->start_time); ?>
                                -
                                <?= esc($item->end_time); ?>
                            </p>

                            <p>
                                <strong>Location :</strong>
                                <?= esc($item->location); ?>
                            </p>

                            <p>
                                <?= character_limiter(strip_tags($item->short_description),120); ?>
                            </p>

                            <a href="<?= base_url('event/'.$item->slug); ?>"
                               class="btn btn-primary">

                                View Details

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <div class="col-md-12">

                <div class="alert alert-warning">

                    No events available.

                </div>

            </div>

        <?php endif; ?>

    </div>
</div>