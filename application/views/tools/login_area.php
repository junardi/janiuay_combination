<h3>EMPLOYEE <span class="log">LOGIN</span></h3>
<form id="login_form" action="<?php echo site_url(); ?>/login" method="post">
	<p class="login_error">Invalid username or password</p>
	<p>
		<label for="username">Username</label>
		<input type="text" name="username" id="username" />
	</p>
	<p>
		<label for="password">Password</label>
		<input type="password" name="password" id="password" />
	</p>
	<input type="submit" value="Login" />
	<img src="<?php echo base_url(); ?>images/login_loader.gif" alt="" />
</form>
<p><a href="#">Forgot Username or Password?</a></p>