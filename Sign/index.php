<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

<div class="container white z-depth-2">
	<ul class="tabs teal">
		<li class="tab col s3"><a class="white-text active" href="#login">login</a></li>
		<li class="tab col s3"><a class="white-text" href="#register">register</a></li>
	</ul>
	<div id="login" class="col s12">
	<form action="login.php" method="POST">
		<form class="col s12">
			<div class="form-container">
					<h3 class="teal-text">Hello</h3>
					<div class="row">
						<div class="input-field col s12">
							<input name="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<br>
					<center>
						<button class="btn waves-effect waves-light teal" type="submit" name="action">Connect</button>
						<br>
						<br>
					</center>
				</form>
			</div>
		</form>
	</div>
	<div id="register" class="col s12">
		<form action="register.php" method="POST">
			<form class="col s12">
				<div class="form-container">
					<h3 class="teal-text">Welcome</h3>
					<div class="row">
						<div class="input-field col s12">
							<input name="lname" type="text" class="validate">
							<label for="last_name">Name</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="email" type="email" class="validate">
							<label for="email">Email</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input name="password" type="password" class="validate">
							<label for="password">Password</label>
						</div>
					</div>
					<center>
						<button class="btn waves-effect waves-light teal" type="submit" name="action">Submit</button>
					</center>
				</div>
			</form>
		</form>
	</div>
</div>
<!-- partial -->
<script src='https://code.jquery.com/jquery-2.1.1.min.js'></script>  <!-- scripts for menu -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js'></script><script  src="./script.js"></script>

</body>
</html>
