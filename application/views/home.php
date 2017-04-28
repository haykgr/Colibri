<?php include('header.php') ?>
	<h1>Hello <?php echo isset($login) ? $login : "user" ?></h1>
	<div id="main">
		<form action="user/link">
			<input type="text" name="link" class="form-control" placeholder="Enter your link"><br/>
			<input type="submit" value="Submit" class="btn btn-success">
		</form>
	</div>
<?php include('footer.php') ?>