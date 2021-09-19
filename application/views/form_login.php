<div class="sidebar-space">
	<h2 class="text-light">Bimbingan Belajar Online Villa Merah</h2>
	<h6 class="text-light">Bimbingan Online FSRD Pertama di Indonesia</h6>
</div>

<div class="container text-center btn-separator">

	<h3 class="text-light text-separator">Masuk</h3>
	<?php echo form_open("user/login_process"); ?>
	<?php echo $this->session->flashdata('result_login');?>

	<div class="form-group has-feedback">
		<input type="text" class="form-control" placeholder="Username atau Email" name="username">
		<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<input type="password" class="form-control" placeholder="Password" name="password">
		<span class="glyphicon glyphicon-lock form-control-feedback"></span>
	</div>
	<div class="form-group has-feedback">
		<button type="submit" class="btn btn-success btn-block btn-flat">Masuk</button>
	</div>
	<div class="form-group has-feedback">
		<a href="#">Lupa kata sandi?</a>
	</div>
	<div class="form-group has-feedback text-light">
		Belum punya akun? <a href="<?php echo site_url('user/register')?>">Daftar disini...</a>
	</div>

	<?php echo form_close(); ?>
</div>


