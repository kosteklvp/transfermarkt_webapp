<div class="view_container">
  <br>


<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
	<div class="row" style="margin:0 auto;">
		<div style="margin:0 auto;">
			<h2 class="text-center"><?= $title; ?></h2><br>
			<div class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Nazwa użytkownika" required autofocus>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Email" name="email" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name="username" placeholder="Login" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password" placeholder="Hasło" required>
			</div>
			<div class="form-group">
				<input type="password" class="form-control" name="password2" placeholder="Potwierdź hasło" required>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Rejestruj</button>
		</div>
	</div>
<?php echo form_close(); ?>
</div>