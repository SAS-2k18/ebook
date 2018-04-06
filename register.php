<!DOCTYPE html>
<html >
<head>
 
  <title>Register form</title>
  <link rel="stylesheet" href="css/style.css"> 
</head>

<body>
<?php
include("connection.php");

if(isset($_POST['submit'])) {
	$fname = $_POST['fname'];
	$lname= $_POST['lname'];
	$email = $_POST['email'];
	$pass = $_POST['password'];

	if($pass == "" || $fname == "" || $lname == "" || $email == "") {
		echo "All fields should be filled. Either one or many fields are empty.";
		echo "<br/>";
		echo "<a href='register.php'>Go back</a>";
	} else {
		mysqli_query($mysqli, "INSERT INTO login(fname, lname, email, password) VALUES('$fname','$lname','$email', md5('$pass'))")
			or die("Could not execute the insert query.");
			
		echo "Registration successfully";
		echo "<br/>";
		echo "<a href='index.php'>Login</a>";
	}
} else {
?>

 
<div class="container">
	<section id="content">
		<form name="myForm" action="" method="post" >
			<h1>Register Form</h1>
			<div>
				<input type="text" placeholder="First Name" required="" name="fname" />
			</div>
			<div>
				<input type="text" placeholder="Last Name" required="" name="lname" />
			</div>
			<div>
				<input type="text" placeholder="Email" required="" name="email" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password" />
			</div>
			<div>
				<input type="submit" name="submit" value="Register" />
				
			</div>
		</form>
		<?php
}
?>
	</section>


</body>

 </div> 

</html>
