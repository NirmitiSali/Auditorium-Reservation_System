<html>
<head>
	<title>Faculty sign up</title>
	<link rel="stylesheet" href="studentsu.css" />
	<style>
.error {color: #FF0000;}
</style>
</head>


<?php
$emailErr = "";
$emailerr2 = "";
$conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
 
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == true) {
	  //echo 'VALID EMAIL ADDRESS';
	  $email = $_POST['email'];
	  $name = $_POST['name'];
	  $department = $_POST['department'];
	  $designation = $_POST['designation'];
	  $password = $_POST['password'];
  
	  $sql = "INSERT INTO signup (name, class_or_Dept, Designation, email, password)
	  VALUES ('$name', '$department', '$designation','$email','$password')";
  
		if (mysqli_query($conn, $sql)) {
			header('location:signin.php');
		} else {
			$emailerr2 = "*Email Address Already used";
		}
  
	} else {
      $emailErr = "*Invalid email format";
      /*
      echo '<script> ';  
      echo '  if (confirm("Enter the valid email address")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/studentsignup.php';";  
      echo '  }';  
      echo '</script>';  
      */
      
    }
  }
}
mysqli_close($conn);

?>

<center>
<body>
	<br>
	<br>
	<br>
	<center>
<h1>Faculty sign up</h1>
	 <p>Please fill in this form to create an account.</p>
</center>

<div class="wrapper">
  <div class="title">
  	 </div>
  <div class="contact-form">
    <div class="input-fields">
    	<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="color:white;" id="simpleForm">
<label>Name:</label> <input type="text" name="name" required><br><br>
<label>Dept:</label> <input type="text" name="department" required><br><br>
<label>Designation:</label> <input type="text" name="designation" required><br><br>
<label>Email:</label> <input type="email" name="email" required>
<span class="error"><?php echo $emailerr2;?></span>
<br><br>
<label>Password:</label> <input type="text" name="password" required><br><br>
<div>
<input type="submit">
</div>

</form>

</center>
</div>
</div>
</div>


</body>
</center>
</html>