<?php 
include('class/User.php');
$user = new User();
$isVerified =  $user->verifyRegister();
include('include/header.php');
?>
<title>Digital Farming</title>
<?php include('include/container.php');?>
<div class="container contact">	
	<h2>Digital Farming</h2>	
	<div class="alert alert-success col-sm-12" >
		<?php if ($isVerified) { ?>
			Your registration verified successfuly. You can <a href="signin.php">login</a> to access your account.
		<?php } else { ?>
			Invalid request.
		<?php } ?>
	</div>	
</div>
<?php include('include/footer.php');?>