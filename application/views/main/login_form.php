<div id="wrapper">

<form id="login_form" action="<?php echo site_url().'/admin/personal'; ?>" method="post">
	<span class="error">
		<?php echo validation_errors(); ?>
		<?php echo $error3; ?>
	</span>
	<br>
	<label for="username">Username:</label>
	<input type="text" name="username" id="username" maxlength="12" required>
	<br>
	<label for="password">Password:</label>
	<input type="password" name="password" id="password" maxlength="15" required>
	<br>
	<button type="submit" name="btnLogin" id="btnLogin">Login</button>
</form>

</div>