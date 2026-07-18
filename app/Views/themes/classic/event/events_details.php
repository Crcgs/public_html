<?php defined('APPPATH') OR exit('No direct script access allowed'); ?>

<div class="container">

    

    <div class="row">

        <div class="col-md-8">

            <?php if (!empty($event->banner_image)): ?>

                <img src="<?= base_url($event->banner_image); ?>"
                     class="img-responsive img-thumbnail"
                     style="width:100%;margin-bottom:20px;">

            <?php elseif (!empty($event->image)): ?>

                <img src="<?= base_url($event->image); ?>"
                     class="img-responsive img-thumbnail"
                     style="width:100%;margin-bottom:20px;">

            <?php endif; ?>

            <h2><?= esc($event->title); ?></h2>

            <hr>

            <p>
                <?= $event->description; ?>
            </p>

        </div>

        <div class="col-md-4">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <strong>Event Information</strong>
                </div>

                <div class="panel-body">

                    <p>
                        <strong>Date:</strong><br>
                        <?= date('d M Y', strtotime($event->event_date)); ?>
                    </p>

                    <p>
                        <strong>Time:</strong><br>
                        <?= esc($event->start_time); ?>
                        -
                        <?= esc($event->end_time); ?>
                    </p>

                    <p>
                        <strong>Location:</strong><br>
                        <?= esc($event->location); ?>
                    </p>

                    <p>
                        <strong>Registration Fee:</strong><br>
                        ₹<?= esc($event->registration_fee); ?>
                    </p>

                    <p>
                        <strong>Maximum Seats:</strong><br>
                        <?= esc($event->max_seats); ?>
                    </p>

                    <hr>

                    <h4>Organizer</h4>

                    <p>
                        <strong><?= esc($event->organizer_name); ?></strong><br>
                        <?= esc($event->organizer_email); ?><br>
                        <?= esc($event->organizer_phone); ?>
                    </p>

                    <a href="<?= base_url('event/register/'.$event->id); ?>"
                       class="btn btn-success btn-block">

                        Register Now

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>