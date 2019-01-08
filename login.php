<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
  
  
      <link rel="stylesheet" href="logstyle.css">

  
</head>

<body>
  <body>
  <form action="logcheck.php" method="POST">
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>

			<div class="login-form">
			
				<div class="control-group">
				<input type="text" class="login-field" name="name" value="" placeholder="username" id="login-name">
				<label class="login-field-icon fui-user" for="login-name"></label>
				</div>

				<div class="control-group">
				<input type="password" class="login-field" name="password" value="" placeholder="password" id="login-pass">
				<label class="login-field-icon fui-lock" for="login-pass"></label>
				</div>

				<input type="submit" name="submit" value="Log in" >
				<a class="login-link" href="Register.php">Not Registered yet?</a>
			</div>
		</div>
	</div>
	</form>
	
</body>
  
  
</body>
</html>
