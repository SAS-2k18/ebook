<!DOCTYPE html>
<html >


<head>
 
  <title>Login form</title>
  <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$pass = mysqli_real_escape_string($mysqli, $_POST['password']);

	if($email == "" || $pass == "") {
		echo "Either username or password field is empty.";
		echo "<br/>";
		echo "<a href='login.php'>Go back</a>";
	} else {
		$result = mysqli_query($mysqli, "SELECT * FROM login WHERE email='$email' AND password=md5('$pass')")
					or die("Could not execute the select query.");
		
		$row = mysqli_fetch_assoc($result);
		
		if(is_array($row) && !empty($row)) {
			$validuser = $row['email'];
			$_SESSION['valid'] = $validuser;
			$_SESSION['fname'] = $row['fname'];
			$_SESSION['lname'] = $row['lname'];
			$_SESSION['id'] = $row['id'];
		} else {
			echo "Invalid username or password.";
			echo "<br/>";
			echo "<a href='index.php'>Go back</a>";
		}

		if(isset($_SESSION['valid'])) {
			header('Location: fiction_final.php');			
		}
	}
} else {
?>
 
<div class="container">
	<section id="content">
		<form name="myForm" action="" onsubmit="return validateForm()" method="post" >
			<h1>Login Form</h1>
			
			<div>
				<input type="text" placeholder="Email" required="" name="email" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			<div>
				<input type="submit" name="submit" value="Log in" />
				
			</div>
		</form>
<?php
}
?>
		
	</section>


</body>

 </div> 

</html>
