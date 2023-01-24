<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>

<div class="container min-vh-100">
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            <div class="card shadow">
                <h4 class="card-header py-3 text-center"><?= lang('Auth.register') ?></h4>
                <div class="card-body">

                    <?= view('Myth\Auth\Views\_message_block') ?>

                    <form action="<?= url_to('register') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="form-group pb-3">
                            <label class="pb-2" for="email"><?= lang('Auth.email') ?></label>
                            <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                            <small id="emailHelp" class="form-text text-muted"><?= lang('Auth.weNeverShare') ?></small>
                        </div>

                        <div class="form-group pb-3">
                            <label class="pb-2" for="username"><?= lang('Auth.username') ?></label>
                            <input type="text" class="form-control <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                        </div>

                        <div class="form-group pb-3">
                            <label class="pb-2" for="password"><?= lang('Auth.password') ?></label>
                            <input type="password" name="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>" autocomplete="off">
                        </div>

                        <div class="form-group pb-4">
                            <label class="pb-2" for="pass_confirm"><?= lang('Auth.repeatPassword') ?></label>
                            <input type="password" name="pass_confirm" class="form-control <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off">
                        </div>

                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary btn-block"><?= lang('Auth.register') ?></button>
                        </div>
                    </form>
                    <hr>
                    <p><?= lang('Auth.alreadyRegistered') ?> <a style="color: #0d6efd; text-decoration: underline;" href="<?= url_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>