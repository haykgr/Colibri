<?php include('header.php') ?>
	<h2>Welcome to our page</h2>
	<h3>Sign in</h3>
	<form action="user/home" method="post" class="form-group">
		<input type="text" name="login" placeholder="Your login" class="form-control"><br/>
		<input type="password" name="password" placeholder="Your password" class="form-control"><br/>
		<input type="submit" name="submit" value="Sing in" class="btn btn-primary">
	</form>
<?php include('footer.php') ?>