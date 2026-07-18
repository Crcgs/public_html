


    <section class="content">

        <div class="card card-primary">

            <div class="card-header">
                <h3 class="card-title">
                    <i class="fa fa-calendar"></i>
                    Event Information
                </h3>
            </div>

            <?php if(session()->getFlashdata('errors')): ?>
                <div class="alert alert-danger m-3">
                    <ul class="mb-0">
                        <?php foreach(session()->getFlashdata('errors') as $error): ?>
                            <li><?= esc($error); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>


            <form action="<?= adminUrl('save-event-data'); ?>"
                  method="post"
                  enctype="multipart/form-data">

                <?= csrf_field(); ?>

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-8">

                            <div class="form-group">

                                <label>
                                    Event Title
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    class="form-control"
                                    placeholder="Enter Event Title"
                                    value="<?= old('title'); ?>"
                                    required>

                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="form-group">

                                <label>Status</label>

                                <select
                                    name="status"
                                    class="form-control">

                                    <option value="1"
                                        <?= old('status')=='1'?'selected':''; ?>>
                                        Published
                                    </option>

                                    <option value="0"
                                        <?= old('status')=='0'?'selected':''; ?>>
                                        Draft
                                    </option>

                                </select>

                            </div>

                        </div>

                    </div>


                    <div class="form-group">

                        <label>
                            Short Description
                            <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="short_description"
                            rows="3"
                            class="form-control"
                            required><?= old('short_description'); ?></textarea>

                    </div>



                    <div class="form-group">

                        <label>
                            Description
                            <span class="text-danger">*</span>
                        </label>

                        <textarea
                            name="description"
                            rows="8"
                            class="form-control editor"
                            required><?= old('description'); ?></textarea>

                    </div>



                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>
                                    Event Image
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="file"
                                    name="image"
                                    class="form-control"
                                    accept="image/*"
                                    required>

                            </div>

                        </div>


                        <div class="col-md-6">

                            <div class="form-group">

                                <label>
                                    Banner Image
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="file"
                                    name="banner_image"
                                    class="form-control"
                                    accept="image/*"
                                    required>

                            </div>

                        </div>

                    </div>
                                        <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Event Date
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="date"
                                    name="event_date"
                                    class="form-control"
                                    value="<?= old('event_date'); ?>"
                                    required>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Start Time
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="time"
                                    name="start_time"
                                    class="form-control"
                                    value="<?= old('start_time'); ?>"
                                    required>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    End Time
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="time"
                                    name="end_time"
                                    class="form-control"
                                    value="<?= old('end_time'); ?>"
                                    required>

                            </div>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>
                                    Location
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="location"
                                    class="form-control"
                                    placeholder="Enter Event Location"
                                    value="<?= old('location'); ?>"
                                    required>

                            </div>

                        </div>

                        <div class="col-md-6">

                            <div class="form-group">

                                <label>
                                    Google Map Link
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="url"
                                    name="google_map"
                                    class="form-control"
                                    placeholder="https://maps.google.com/..."
                                    value="<?= old('google_map'); ?>"
                                    required>

                            </div>

                        </div>

                    </div>



                    <div class="row">

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Maximum Seats
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="number"
                                    name="max_seats"
                                    class="form-control"
                                    placeholder="100"
                                    min="1"
                                    value="<?= old('max_seats'); ?>"
                                    required>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Registration Fee
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="number"
                                    name="registration_fee"
                                    class="form-control"
                                    placeholder="500"
                                    min="0"
                                    step="0.01"
                                    value="<?= old('registration_fee'); ?>"
                                    required>

                            </div>

                        </div>

                        <div class="col-md-4">

                            <div class="form-group">

                                <label>Event Slug</label>

                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Auto Generated"
                                    readonly>

                                <small class="text-muted">
                                    Slug will be generated automatically from the Event Title.
                                </small>

                            </div>

                        </div>

                    </div>


                    <hr>

                    <h4 class="mb-3">
                        <i class="fa fa-user"></i>
                        Organizer Information
                    </h4>

                    <div class="row">
                                                <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Organizer Name
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="organizer_name"
                                    class="form-control"
                                    placeholder="Organizer Name"
                                    value="<?= old('organizer_name'); ?>"
                                    required>

                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Organizer Email
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="email"
                                    name="organizer_email"
                                    class="form-control"
                                    placeholder="example@gmail.com"
                                    value="<?= old('organizer_email'); ?>"
                                    required>

                            </div>

                        </div>


                        <div class="col-md-4">

                            <div class="form-group">

                                <label>
                                    Organizer Phone
                                    <span class="text-danger">*</span>
                                </label>

                                <input
                                    type="text"
                                    name="organizer_phone"
                                    class="form-control"
                                    placeholder="9876543210"
                                    value="<?= old('organizer_phone'); ?>"
                                    required>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-success">
                        <i class="fa fa-save"></i>
                        Save Event
                    </button>

                    <button type="reset" class="btn btn-warning">
                        <i class="fa fa-refresh"></i>
                        Reset
                    </button>

                    <a href="<?= adminUrl('event'); ?>" class="btn btn-secondary">
                        <i class="fa fa-times"></i>
                        Cancel
                    </a>

                </div>

            </form>

        </div>
    </section>


<script>
document.addEventListener("DOMContentLoaded", function () {

    const title = document.querySelector('input[name="title"]');

    if (title) {

        title.addEventListener("keyup", function () {

            let slug = this.value
                .toLowerCase()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/(^-|-$)/g, '');

            console.log("Slug:", slug);

        });

    }

});
</script>