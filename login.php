
<?php include 'header.php'; 
//login authentication
session_start();

error_reporting(0);

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email= '$email' AND password= '$password'";
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result)) {
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Login successful!";
		header("Location: index.php");
	}
	else{
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>


	<link rel="stylesheet" type="text/css" href="css/main.css">

	

	<section class="container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800; text-align: center;">Login</p>
			<div class="input-group col-md-10">
				<input type="email" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group col-md-10">
				<input type="password" placeholder="Enter Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group col-md-6">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</section>


<?php include 'footer.php'; ?>