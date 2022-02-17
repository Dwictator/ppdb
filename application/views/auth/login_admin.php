<div class="card card-rounded mx-auto">
	<div class="card-header text-center py-4" style="background-color: #01AEF0;">
		<h4 class="text-white">Sign In</h4>
	</div>
	<?= $this->session->flashdata('message'); ?>
	<?= $this->session->flashdata('keluar'); ?>
	<form method="POST" action="<?= base_url('authentication/login_admin') ?>" class="m-4 p-4">
		<div class="form-group">
			<label for="username">username</label>
			<input name="username" type="username" class="form-control" id="username" value="<?= set_value('username'); ?>">
			<small class="form-text text-danger"><?= form_error('username') ?></small>
		</div>
		<div class="form-group mb-4">
			<label for="password_1">Password</label>
			<input name="password_1" type="password" class="form-control" id="password">
			<small class="form-text text-danger"><?= form_error('password_1') ?></small>
		</div>
		<div class="text-center">
			<button type="submit" class="btn btn-lg btn-block text-white" style="background-color: #01AEF0;">Submit</button>
		</div>
	</form>
</div>