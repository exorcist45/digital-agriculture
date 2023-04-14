<?php 
include('class/User.php');
$user = new User();
$errorMessage = '';
if(!empty($_POST['forgetpassword']) && $_POST['forgetpassword']) {
	$errorMessage =  $user->resetPassword();
}
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
	<div class="form-container forget-container">
    <?php if ($errorMessage != '') { ?>
		<div id="login-alert" class="alert alert-danger col-sm-12"><?php echo $errorMessage; ?></div>                            
	<?php } ?>
		<form id="forgetform" class="form-horizontal" role="form" method="POST" action="">
			<h1>Forgot Password</h1>
			<!-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> -->
			<input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
			<button id="btn-forget" type="submit" name="forgetpassword" value="Submit">Submit</button>
		</form>
	</div>
	
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Forgot Password!</h1>
				<p>No Problem...</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>New User?</h1>
				<p>Already have an account</p>
				<button class="ghost" id="signUp">Sign Up/
				Sign in</button>
			</div>
		</div>
	</div> 
</div>
<script>
    const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	location.href = "signin.php";
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
   
</body>
</html>