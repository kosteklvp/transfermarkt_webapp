<div class="view_container">
  <br>

<?php echo form_open('users/login'); ?>
	<div class="row" style="margin:0 auto;">
		<div style="margin:0 auto;">
			<h2 class="text-center"><?= $title; ?></h2><br>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Login" required autofocus>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Hasło" required>
			</div>
			<?php echo validation_errors(); ?>
			<button type="submit" class="btn btn-primary btn-block" style="margin:0 auto;">Zaloguj</button>
		</div>
	</div>
<?php echo form_close(); ?>
</div>