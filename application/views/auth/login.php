<div class="card card-rounded mx-auto">
	<div class="card-header bg-success text-center py-4">
		<h4 class="text-white">Sign In</h4>
	</div>
	<?= $this->session->flashdata('message'); ?>
	<form method="POST" action="<?= base_url('authentication') ?>" class="m-4 p-4">
		<div class="form-group">
			<label for="email">Email</label>
			<input name="email" type="email" class="form-control" id="email" value="<?= set_value('email'); ?>">
			<small class="form-text text-danger"><?= form_error('email') ?></small>
		</div>
		<div class="form-group mb-4">
			<label for="password_1">Password</label>
			<input name="password_1" type="password" class="form-control" id="password">
			<small class="form-text text-danger"><?= form_error('password_1') ?></small>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-lg btn-success btn-block">Submit</button>
		</div>
	</form>
	<div class="card-footer text-center">
		<small>Belum mempunyai akun? <a href="<?= base_url('authentication/register') ?>">Daftar Sekarang</a></small>
	</div>
</div>