 <!-- jquery----->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <style>
 	.form-error{
 		color: red;
 		display: flex;
 		font-size: 25px;
 		position: relative;
 		align-items: center;
 	}
 	.input-error{
 		box-shadow: 0 0 5px red;
 	}
 	.form-success{
 		color: green;
 		font-size: 25px;
 		position: relative;
 		left: 0;
 		text-align: center;
 		display: flex;
 	}
 </style>

<?php
session_start();
include 'header.php';
include 'database/new_database.php';
error_reporting(0);
if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	$errorEmpty = false;
	$errorEmail = false;

	if (empty($username) || empty($email) || empty($password) || empty($cpassword)) {
		echo "<span class = 'form-error'>Fill in all Fields</span>";
		$errorEmpty = true;
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "<span class = 'form-error'>valid Email address is required!</span>";
		$errorEmail = true;
	}
	elseif ($password == $cpassword) {
		$duplicate = "SELECT * FROM user WHERE email='$email'";
		$dresult = mysqli_query($con, $duplicate);
		if (!$dresult->num_rows > 0) {
			$sql = "INSERT INTO user (username,email,password,registered_date)
					VALUES ('$username','$email','$password',CURRENT_TIMESTAMP())";
			$result = mysqli_query($con, $sql);
			if ($result) {
				echo "<span class = 'form-success'>Registration successful!</span>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<span class = 'form-error'>valid Email address already exist!</span>";;
		}
		
	} else {
		echo "<span class = 'form-error'>password didn't match!</span>";;
	}

	
}

?>


	<link rel="stylesheet" type="text/css" href="css/main.css">

	<section class="container">
		<form action="register.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group col-md-10">
				<input id="register-name" type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group col-md-10">
				<input id="register-email" type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group col-md-10">
				<input id="register-pass" type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group col-md-10">
				<input id="register-cpass" type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group col-md-6">
				<button name="submit" id="register-submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
			<p class ="form-message"></p>
		</form>
	</section>

	<?php include 'footer.php'; ?>
