<script type="text/javascript" src="/bubbaLyrics/scripts/loginScript.js"></script>
<div class="col-md-4 col-md-offset-4">
<div id="login" class="container" style="float:left;">
	<h2><strong>Login</strong></h2>
	<form role="form" id="loginForm" action="#" name="loginForm">
	
		<div class="form-group">
		  <label for="username">Email:</label>
		  <input type="text" class="form-control" id="email" name="email" placeholder="Enter email...">
		</div>

		<div class="form-group">
		  <label for="loginPwd">Password:</label>
		  <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter password...">
		</div>
		
		<div class="checkbox">
		  <label><input type="checkbox"> Remember me</label>
		</div>
		
		<input type="hidden" id="hidden" name="hidden" value="logIn">
		
		<input type="submit" name="loginSubmit" id="loginSubmit" value="Login" class="btn btn-primary" />
	</form>
</div>
</div>

<div id="loginFeedback" style="float:left;"></div>


