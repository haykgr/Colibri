<?php include('header.php') ?>
	<div id="main" class="fullscreen_bg"/>
	<div id="container" class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="panel panel-login">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Login</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Register</a>
              </div>
            </div>
            <hr>
          </div>
			<div class="panel-body">
			<div class="row">
				<div class="col-lg-12">
					<form id="login-form" action="user/home" method="post" class="form-group" style="display:block">
					<div class="form-group">
						<label for="login">Username</label>
						<input type="text" name="login" tabindex="1" placeholder="Your login" class="form-control">
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" name="password" tabindex="2" placeholder="Your password" class="form-control">
					</div>
					<div class="form-group text-center">
						<input type="checkbox" tabindex="3" name="remember" class="">
						<label for="remember">Remember</label>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6 col-sm-offset-3">
								<input type="submit" name="submit" value="Sing in" class="form-control btn btn-primary">
							</div>
						</div>
					</div>	
					</form>
					 <form id="register-form" action="#" method="post" role="form" style="display: none;">
		                  <div class="form-group">
		                    	<label for="username">Username</label>
		                    	<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
		                  </div>
		                  <div class="form-group">
		                    	<label for="password">Password</label>
		                    	<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
		                  </div>
		                  <div class="form-group">
		                    	<label for="confirm-password">Confirm password</label>
		                   	 	<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
		                  </div>
		                  <div class="form-group">
	                    	<div class="row">
                      		<div class="col-sm-6 col-sm-offset-3">
                       			<input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now">
                     		 </div>
                    		</div>
                  		</div>
            		</form>
				</div>
			</div>
			</div>
			</div>
		</div>	
	</div>
</div>
</div>
	
<?php include('footer.php') ?>