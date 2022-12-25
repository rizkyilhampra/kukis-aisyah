<?= $this->extend($config->viewLayout) ?>
<?= $this->section('main') ?>
<style>
	body{
		padding-top: 9rem ;
	}
</style>
<div class="container ">
	<div class="row">
		<div class="col-sm-6 offset-sm-3">
			<div class="card shadow">
				<h4 class="card-header py-3 text-center">Login</h4> 
				<!-- <?= lang('Auth.loginTitle') ?> -->
				<div class="card-body py-4">

					<?= view('Myth\Auth\Views\_message_block') ?>

					<form action="<?= url_to('login') ?>" method="post">
						<?= csrf_field() ?>

						<?php if ($config->validFields === ['email']) : ?>
							<div class="form-group">
								<label for="login"  class="form-label "><?= lang('Auth.email') ?></label>
								<input type="email" class="form-control  <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php else : ?>
							<div class="form-group">
								<label for="login" class="form-label "><?= lang('Auth.emailOrUsername') ?></label>
								<input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
								<div class="invalid-feedback">
									<?= session('errors.login') ?>
								</div>
							</div>
						<?php endif; ?>

						<div class="form-group pt-3">
							<label for="password" class=" form-label"><?= lang('Auth.password') ?></label>
							<input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
							<div class="invalid-feedback">
								<?= session('errors.password') ?>
							</div>
						</div>

						<?php if ($config->allowRemembering) : ?>
							<div class="form-check pt-3">
								<label class="form-check-label">
									<input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
									<?= lang('Auth.rememberMe') ?>
								</label>
							</div>
						<?php endif; ?>

						<br>
						<div class="d-grid">
							<button type="submit" class="btn btn-primary">Login</button>
							<!-- <?= lang('Auth.loginAction') ?> -->
						</div>
					</form>
				</div>
				<div class="card-footer">
					<?php if ($config->allowRegistration) : ?>
						<a style="color: #0d6efd; text-decoration: underline;" href="<?= url_to('register') ?>">Register/Daftar Akun</a>
						<!-- <?= lang('Auth.needAnAccount') ?> -->
					<?php endif; ?>
					<?php if ($config->activeResetter) : ?>
						<a href="<?= url_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a>
					<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
</div>

<?= $this->endSection() ?>