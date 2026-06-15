<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style type="text/css">
    .password-wrapper {
  position: relative; 
}

.password-wrapper input {
  width: 100%;
  padding: 10px 35px 10px 10px;
  font-size: 14px;
}

.password-wrapper i {
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  color: #888;
}
</style>

<div class="row">
    <div class="col-sm-12">
        <?= view('admin/includes/_messages'); ?>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="left">
                    <h3 class="box-title"><?= trans("add_user"); ?></h3>
                </div>
                <div class="right">
                    <a href="<?= adminUrl('users'); ?>" class="btn btn-success btn-add-new">
                        <i class="fa fa-bars"></i>
                        <?= trans("users"); ?>
                    </a>
                </div>
            </div>
            <form action="<?= base_url('AdminController/addUserPost'); ?>" method="post">
                <?= csrf_field(); ?>
                <div class="box-body">
                    <div class="form-group">
                        <label><?= trans("username"); ?></label>
                        <input type="text" name="username" class="form-control auth-form-input" placeholder="<?= trans("username"); ?>" value="<?= old("username"); ?>" required>
                    </div>
                    <div class="form-group">
                        <label><?= trans("email"); ?></label>
                        <input type="email" name="email" class="form-control auth-form-input" placeholder="<?= trans("email"); ?>" value="<?= old("email"); ?>" required>
                    </div>
                    <div class="form-group password-wrapper">
                        <label><?= trans("password"); ?></label> 
                    </div>

                    <div class="password-wrapper">
                      <input type="password" id="password" class="form-control auth-form-input" placeholder="<?= trans("password"); ?>" value="<?= old("password"); ?>" required>
                      <i class="fa-solid fa-eye" id="togglePassword"></i>
                    </div>
 

                    <div class="form-group">
                        <label><?= trans("role"); ?></label>
                        <select name="role" class="form-control">
                            <?php if (!empty($roles)):
                                foreach ($roles as $role):
                                    $roleName = parseSerializedNameArray($role->role_name, $activeLang->id); ?>
                                    <option value="<?= $role->role; ?>"><?= esc($roleName); ?></option>
                                <?php endforeach;
                            endif; ?>
                        </select>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary pull-right"><?= trans('add_user'); ?></button>
                </div>
            </form>
        </div>
    </div>
</div> 


<script type="text/javascript">
    $('#togglePassword').on('click', function() {
      const input = $('#password'); 
      const type = input.attr('type') === 'password' ? 'text' : 'password'; 
      input.attr('type', type);
      $(this).toggleClass('fa-eye fa-eye-slash');
    });

</script>