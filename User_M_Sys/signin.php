<?php 
include('class/User.php');
$user = new User();
$errorMessage =  $user->login();
$message =  $user->register();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

    <link rel="stylesheet" href="../signin.css">
</head>

<body>

 <div class="container" id="container">
	<div class="form-container sign-up-container">
		<form id="signupform" class="form-horizontal" role="form" method="POST" action="">
        <?php if ($message != '') { ?>
			<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $message; ?></div>                            
		<?php } ?>	
			<h1>Create Account</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> -->
			<input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php if(!empty($_POST["firstname"])) { echo $_POST["firstname"]; } ?>" required >
			<input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php if(!empty($_POST["lastname"])) { echo $_POST["lastname"]; } ?>" >
			<input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php if(!empty($_POST["email"])) { echo $_POST["email"]; } ?>" required >
			<input type="password" class="form-control" name="passwd" placeholder="Password" required >
			<button id="btn-signup" type="submit" name="register" value="register" class="btn btn-info">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form id="loginform" class="form-horizontal" role="form" method="POST" action="">
			<h1>Sign In</h1>
			<!-- <div class="social-container">
				<a href="/images/facebook.png" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="/images/google.png" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="/images/linkedin.png" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div> -->
			<!-- <span>or use your account</span> -->
			<input type="email" class="form-control" id="loginId" name="loginId"  value="<?php if(isset($_COOKIE["loginId"])) { echo $_COOKIE["loginId"]; } ?>" placeholder="Email" >
			<input type="password" class="form-control" id="loginPass" name="loginPass" value="<?php if(isset($_COOKIE["loginPass"])) { echo $_COOKIE["loginPass"]; } ?>" placeholder="Password" >
			<a href="forget_pass.php">Forgot your password?</a>
			<button id="btn-signin" type="submit" name="login" value="login" class="btn btn-info">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>Already have an account?</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>New User?</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>   
</body>
</html>