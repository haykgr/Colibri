<?php include('header.php') ?>
	<h1>Hello <?php echo isset($login) ? $login : "user" ?></h1>
	<form action="user/link">
		<input type="text" name="link" class="form-control" placeholder="Enter your link"><br/>
		<input type="submit" value="Submit" class="btn btn-success">
	</form>
<?php include('footer.php') ?>