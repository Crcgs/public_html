<?php defined('APPPATH') OR exit('No direct script access allowed'); ?>

<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-primary">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        Register for Event
                    </h3>
                </div>

                <div class="panel-body">

                    <h3><?= esc($event->title); ?></h3>

                    <p>
                        <strong>Date :</strong>
                        <?= date('d M Y', strtotime($event->event_date)); ?>
                    </p>

                    <p>
                        <strong>Location :</strong>
                        <?= esc($event->location); ?>
                    </p>

                    <hr>

                    <?php if(session()->getFlashdata('success')): ?>
                        <div class="alert alert-success">
                            <?= session()->getFlashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <?php if(session()->getFlashdata('errors')): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach(session()->getFlashdata('errors') as $error): ?>
                                    <li><?= esc($error); ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('event/register-post'); ?>" method="post">

                        <?= csrf_field(); ?>

                        <input type="hidden"
                               name="event_id"
                               value="<?= $event->id; ?>">

                        <div class="form-group">
                            <label>Full Name <span class="text-danger">*</span></label>

                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Email <span class="text-danger">*</span></label>

                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Mobile Number <span class="text-danger">*</span></label>

                            <input type="text"
                                   name="mobile"
                                   class="form-control"
                                   maxlength="10"
                                   required>
                        </div>

                        <div class="form-group">
                            <label>Address <span class="text-danger">*</span></label>

                            <textarea name="address"
                                      rows="3"
                                      class="form-control"
                                      required></textarea>
                        </div>

                        <div class="form-group">
                            <label>Message</label>

                            <textarea name="message"
                                      rows="4"
                                      class="form-control"></textarea>
                        </div>

                        <button type="submit"
                                class="btn btn-success btn-lg">

                            Register Now

                        </button>

                        <a href="<?= base_url('events'); ?>"
                           class="btn btn-default">

                            Back

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>