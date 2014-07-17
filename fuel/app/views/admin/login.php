<div class="container" id="login">
	<div>
		<form class="form-signin" action="login" method="post">
			<input type="hidden" name=<?php echo \Config::get('security.csrf_token_key'); ?> value=<?php echo \Security::fetch_token(); ?> />
			<p class="text-error"><?php echo $errmsg ?></p>
			<h2 class="form-signin-heading">Please sign in</h2>
			<input name="username" type="text" class="input-block-level" placeholder="Email address">
			<input name="password" type="password" class="input-block-level" placeholder="Password">
			<label class="checkbox">
				<input type="checkbox" value="remember-me"> Remember me
			</label>
			<button class="btn btn-large btn-primary" type="submit">Sign in</button>
		</form>
	</div>
</div>