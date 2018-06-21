<?php include_once './header.php'; ?>
<html>
<!--<head> 
	<title>Login Template</title> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> 
	<link rel="stylesheet" href="css/custom.css"> 
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
</head> -->
<body>
<div class="container">
	<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 loginbox"> 
		<!--<div class="panel panel-info" > 
			<div class="panel-heading"> 
				<div class="panel-title"> Sign In </div> 
				<div class="forgot-password"> <a href="#">Forgot password?</a> </div> 
			</div> -->
			<!--<div class="panel-body panel-pad"> 
				<div id="login-alert" class="alert alert-danger col-sm-12 login-alert"></div> 
					<form id="loginform" class="form-horizontal" role="form">
						<div class="form-group"> 
						<!-- Button -- 
							<div class="col-sm-12 controls"> 
								<a id="btn-fblogin" href="#" class="btn btn-facebook">Login with Facebook</a> 
								<a id="btn-googlelogin" href="#" class="btn btn-google">Login with Google+</a> 
								<a id="btn-twitterlogin" href="#" class="btn btn-twitter">Login with Twitter</a> <strong>OR</strong>
							</div> 
						</div>  
						<div class="input-group margT25"> 
							<span class="input-group-addon">
								<i class="glyphicon glyphicon-user"></i>
							</span> 
							<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email"> 
						</div> 
						<div class="input-group margT25"> 
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span> 
							<input id="login-password" type="password" class="form-control" name="password" placeholder="password"> 
						</div> 
						<div class="input-group"> 
							<div class="checkbox"> 
								<label> 
									<input id="login-remember" type="checkbox" name="remember" value="1"> Remember me 
								</label> 
							</div> 
						</div> 
						<div class="form-group margT10"> 
						<!-- Button -- 
							<div class="col-sm-12 controls"> 
								<a id="btn-login" href="#" class="btn btn-block btn-success">Login </a> 
							</div> 
						</div> 
						<div class="form-group"> 
							<div class="col-md-12 control"> 
								<div class="no-acc"> 
									Don't have an account! 
									<a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()"> Sign Up Here </a> 
									<div class="forgot-password"> <a href="#">The Computer Students</a> </div> 
								</div> 
							</div> 
						</div> 
					</form> 
				</div> -->
			</div> 
		</div> 
		<div id="signupbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 signup-box"> 
		<div class="panel panel-info"> 
			<div class="panel-heading"> 
				<div class="panel-title"> Sign Up </div> 
				<div class="signin"> 
                                    <a id="signinlink" href="login.php" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a> 
				</div> 
			</div> 
			<div class="panel-body"> 
				<form id="signupform" class="form-horizontal" role="form"> 
					<!--<div id="signupalert" class="alert alert-danger login-alert"> 
						<p> Error: </p> 
						<span></span> 
					</div> -->
					<div class="form-group"> 
						<label for="email" class="col-md-3 control-label">Email</label>
					 	<div class="col-md-9"> 
					 		<input type="text" class="form-control" name="email" placeholder="Email Address"> 
					 	</div> 
					 </div> 
					 <div class="form-group"> 
					 	<label for="firstname" class="col-md-3 control-label">First Name</label> 
					 	<div class="col-md-9"> 
					 		<input type="text" class="form-control" name="firstname" placeholder="First Name"> 
					 	</div> 
					 </div> 
					 <div class="form-group"> 
					 	<label for="lastname" class="col-md-3 control-label">Last Name</label> 
					 	<div class="col-md-9"> 
					 		<input type="text" class="form-control" name="lastname" placeholder="Last Name"> 
					 	</div> 
					 </div> 
					 <div class="form-group"> 
					 	<label for="password" class="col-md-3 control-label">Password</label> 
					 	<div class="col-md-9"> 
					 		<input type="password" class="form-control" name="passwd" placeholder="Password"> 
					 	</div> 
					 </div> 
					 
					 <div class="form-group"> 
					 <!-- Button --> 
					 	<div class="col-md-offset-3 col-md-9"> 
					 		<button id="btn-signup" type="button" class="btn btn-info"> <i class="icon-hand-right"></i> &nbsp; Sign Up </button>
					 	
					 	</div> 
					 </div> 
					  
				</form> 
			</div> 
		</div> 
	</div> 
</div> 
</body> 
</html>