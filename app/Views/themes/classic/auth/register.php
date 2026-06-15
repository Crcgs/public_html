<style type="text/css">
/* Input group toggle styles */
.input-group {
    width: 100%;
}

.input-group .form-control {
    padding-right: 45px; /* space for toggle button */
}

.input-group .toggle-password {
    position: absolute;
    right: 10px;
    top: 50%;
    transform: translateY(-50%);
    border: none;
    background: transparent;
    cursor: pointer;
    padding: 0;
    z-index: 10;
}

.input-group .toggle-password i {
    color: #888;
    font-size: 16px;
}

@media (max-width: 576px) {
    .input-group .form-control {
        padding-right: 40px;
    }
    .input-group .toggle-password {
        right: 8px;
    }
}
.form-group {
    position: relative;
}

.password-field {
    padding-right: 45px; /* eye button ke liye space */
}

.toggle-password {
    position: absolute;
    top: 50%;
    right: 14px;
    transform: translateY(-50%);
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    z-index: 10;
}

.toggle-password i {
    color: #888;
    font-size: 16px;
}

.toggle-password:hover i {
    color: #333;
}

</style>

<section id="wrapper" class="profile-page-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-10 login-box-cnt center-box">
                <div class="login-box">
                    <h1 class="auth-title font-1"><?= trans("register"); ?></h1>

                    <div class="social-login">
                        <?= view("common/_social_login", ['orText' => trans("or_register_with_email")]); ?>
                    </div>

                    <?= loadView('partials/_messages'); ?>

                    <form action="<?= base_url('register-post'); ?>" method="post" id="form_validate" class="validate_terms">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="sys_lang_id" value="<?= $activeLang->id; ?>">

                        <div class="form-group">
                            <input type="text" name="username" class="form-control form-input" placeholder="<?= trans("username"); ?>" value="<?= old("username"); ?>" required>
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-input" placeholder="<?= trans("email"); ?>" value="<?= old("email"); ?>" required>
                        </div>

                        <!-- Password -->
                        <div class="form-group position-relative">
                            <input type="password" id="password" name="password" class="form-control form-input" placeholder="<?= trans("password"); ?>" value="<?= old("password"); ?>" required>
                            <button type="button" class="toggle-password" data-target="#password">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>

                        <div class="form-group position-relative mt-2">
                            <input type="password" id="confirm_password" name="confirm_password" class="form-control form-input" placeholder="<?= trans("confirm_password"); ?>" value="<?= old("confirm_password"); ?>" required>
                            <button type="button" class="toggle-password" data-target="#confirm_password">
                                <i class="fa-solid fa-eye"></i>
                            </button>
                        </div>

                        <div class="form-group mt-3">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="terms_conditions" value="1" class="checkbox_terms_conditions" required>
                                <span class="checkbox-icon"><i class="icon-check"></i></span>
                                <?= trans("terms_conditions_exp"); ?>&nbsp;<a href="<?= getPageLinkByDefaultName('terms_conditions', $activeLang->id); ?>" class="link-terms" target="_blank"><strong><?= trans("terms_conditions"); ?></strong></a>
                            </label>
                        </div>

                        <div class="form-group">
                            <?php reCaptcha('generate', $generalSettings); ?>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <button type="submit" class="btn btn-md btn-custom btn-block"><?= trans("register"); ?></button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.toggle-password').on('click', function(){
        var input = $($(this).data('target'));
        var icon = $(this).find('i');

        if(input.attr('type') === 'password'){
            input.attr('type','text');
            icon.removeClass('fa-eye').addClass('fa-eye-slash');
        } else {
            input.attr('type','password');
            icon.removeClass('fa-eye-slash').addClass('fa-eye');
        }
    });
});
</script>
