<?php 
include('class/User.php');
$user = new User();
$user->loginStatus();
$message = '';
if(!empty($_POST["update"]) && $_POST["update"]) {
	$message = $user->editAccount();
}
$userDetail = $user->userDetails();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keuwords" content="agriculture , crops , farming , seeds , cultivation , harvest">
  <title>Digital Agriculture</title>

  <link rel="stylesheet" href="../Home.css">

  <link rel="apple-touch-icon" sizes="180x180" href="../images/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../images/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../images/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="../images/favicon_io/site.webmanifest">


<title>Digital Farming</title>
<?php include('include/container.php');?>
<div class="container contact">	
		
				

	<div class="table-responsive">		
		<div><span style="font-size:20px; margin-left: 100px;">Edit User Details:</span>
		<table class="styled-table">	
			<form class="form-horizontal" role="form" method="POST" action="">	
				<tr>
					<td><label for="firstname">First Name*</label></td>
					<td><input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $userDetail['first_name'];?>" required></td>
				</tr>
				<tr>
					<td><label for="lastname">Last Name</label></td>
					<td><input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $userDetail['last_name'];?>" ></td>
				</tr>
				<tr>
					<td><label for="email">Email*</label></td>
					<td><input type="email" class="form-control" name="email" placeholder="Email Address" value="<?php echo $userDetail['email'];?>" required></td>
				</tr>
				<tr>
					<td><label for="email">Mobile</label></td>
					<td><input type="text" class="form-control" name="mobile" placeholder="Mobile" value="<?php echo $userDetail['mobile'];?>" ></td>
				</tr>
				<tr>
					<td><label for="lastname">Designation</label></td>
					<td><input type="text" class="form-control" name="designation" placeholder="Designation" value="<?php echo $userDetail['designation'];?>" ></td>
				</tr>
				<tr>
					<td><label for="gender">Gender</label></td>
					<td><label class="radio-inline">
							<input type="radio" name="gender" value="male" <?php if($userDetail['gender'] == 'male') { echo 'checked'; } ?> required>Male
						</label>;
						<label class="radio-inline">
							<input type="radio" name="gender" value="female" <?php if($userDetail['gender'] == 'female') { echo 'checked'; } ?> required>Female
						</label></td>
				</tr>
				<tr>
					<td><label for="password">Password</label></td>
					<td><input type="password" class="form-control" name="passwd" placeholder="Password" value=""></td>
				</tr>	
				<tr>
					<td><label for="password" class="col-md-3 control-label">Confirm Password</label></td>
					<td><input type="password" class="form-control" name="cpasswd" placeholder="Confirm Password" value=""></td>
				</tr>	
				<tr>
					<td><button id="btn-signup" type="submit" name="update" value="update_account" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Save Changes</button></td>	
				</tr>
		</table>

		<style>
			.styled-table {
    			border-collapse: collapse;
   				margin: 10px 100px;
    			font-size: 0.9em;
    			font-family: sans-serif;
    			min-width: 400px;
    			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
			}
			
			.styled-table tr {
    			border-bottom: 1px solid #dddddd;
			}

			.styled-table tr:nth-of-type(even) {
    			background-color: #f3f3f3;
			}

			.styled-table tr:last-of-type {
    			border-bottom: 2px solid #009879;
			}
			.styled-table th,
			.styled-table td {
    			padding: 12px 15px;
			}
		</style>
	</div>	

		
	</div>	
	<section class="footer">
  <div class="social" id="social-icons">
    <a href="#"><i class="fab fa-mail"><img src="../images/email.png" alt="loading..." width="25px"></i></a>
    <a href="#"><i class="fab fa-instagram"><img src="../images/instagram.png" alt="loading..." width="25px"></i></a>
    <a href="#"><i class="fab fa-twitter"><img src="../images/twitter.png" alt="loading..." width="25px"></i></a>
    <a href="#"><i class="fab fa-facebook-f"><img src="../images/facebook2.png" alt="loading..." width="25px"></i></a>
  </div>

  <ul class="footer-list">
    <li>
      <a href="index.php" id="">Home</a>
    </li>
     <li>  <a href="../About.html">About</a>
     </li>
     <li> <a href="../contact/contact.html">Contact Us</a>
     </li> 
     <li>  <a href=" ">Terms And Conditions</a>
     </li>
     <li> <a href=" ">Privacy Policy </a>
    </li>
  </ul>
  <p class="copyright" id="copyright-text">
<br>
   Copyright &copy;	2021 Digital Agriculture
  </p>


  <style>
    .footer{
      margin-top: 0px;
      padding: 20px;
      text-align: center;
      background-color: rgb(205, 205, 205);
      border-top: 1px solid black;
      border-bottom: 1px solid black;



       
    }
    .footer-list li{
      list-style: none;
      display: inline-block;
      padding: 15px;
 
    }
  .footer-list li a{
    text-decoration: none;
    color: black;
    }
  .social a{

    padding: 15px;

  }
  
  </style>
 
 
</section>


 
 
</body>
</html>