<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= esc($title); ?> - <?= trans("admin"); ?>&nbsp;<?= esc($baseSettings->site_title); ?></title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png" href="<?= getFavicon(); ?>"/>

    <!-- Bootstrap 3 -->
    <link rel="stylesheet" href="<?= base_url('assets/vendor/bootstrap-v3/css/bootstrap.min.css'); ?>">

    <!-- Font Awesome (for eye icon) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="<?= base_url('assets/admin/css/AdminLTE.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/_all-skins.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/admin/css/custom.css'); ?>">

    <style>
        .alert button, .alert i { display: none; }
        .alert h4 { font-size: 14px; margin-bottom: 0; }

        /* Eye icon styling */
        .toggle-password {
            position: absolute;
            top: 10px;
            right: 35px;
            cursor: pointer;
            color: #777;
            z-index: 2;
        }
        .form-group.has-feedback { position: relative; }
    </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="<?= adminUrl('login'); ?>"><b><?= esc($baseSettings->application_name); ?></b>&nbsp;<?= trans("panel"); ?></a>
    </div>

    <div class="login-box-body">
        <h4 class="login-box-msg"><?= trans("login"); ?></h4>
        <?= view('admin/includes/_messages'); ?>

        <form action="<?= adminUrl('login-post'); ?>" method="post">
            <?= csrf_field(); ?>

            <!-- Email -->
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control form-input"
                       placeholder="<?= trans('email'); ?>" value="<?= old('email'); ?>" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>

            <!-- Password with Eye Icon -->
            <div class="form-group has-feedback">
                <input type="password" id="password" name="password" class="form-control form-input"
                       placeholder="<?= trans('password'); ?>" value="<?= old('password'); ?>" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                <!-- Eye Icon -->
                <i class="fa fa-eye toggle-password" id="togglePassword"></i>
            </div>

            

            <div class="row">
                <div class="col-sm-8 col-xs-12"></div>
                <div class="col-sm-4 col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat"><?= trans("login"); ?></button>
                </div>
            </div>
        </form>
    </div>
    

    <div class="text-center m-t-15">
        <a class="btn btn-md" href="<?= langBaseUrl(); ?>"><?= trans("btn_goto_home"); ?></a>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
$('#togglePassword').on('click', function() {
    var input = $('#password');
    var type = input.attr('type') === 'password' ? 'text' : 'password';
    input.attr('type', type);

    // Toggle between fa-eye and fa-eye-slash
    $(this).toggleClass('fa-eye fa-eye-slash');
});
</script>
</body>
</html>
