<html>
<head>
	<title>Student sign up</title>
	<link rel="stylesheet" href="studentsu.css" />
  <style>
.error {color: #FF0000;}
</style>
</head>
<!---------------------------------------------->
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
      $class = $_POST['class'];
      $roll_no = $_POST['rollnumber'];
      $password = $_POST['password'];
  
      $sql = "INSERT INTO signup (name, class_or_Dept,roll_no, email, password)
      VALUES ('$name', '$class','$roll_no','$email','$password')";
  
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
<!------------------------------------------>
<center>
<body>
	<br>
	<br>
	<br>

<h1>Student sign up</h1>
	 <p>Please fill in this form to create an account.</p>


<div class="wrapper">
  <div class="title">
  	 </div>
  <div class="contact-form">
    <div class="input-fields">
    
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="color:white" id="simpleForm">

<tr>
  <td>
<label>Name:</label> 
</td>
<td>
<input type="text" name="name" required><br><br>
</td>
</tr>
<tr>
  <td>
<label>Class:</label> 
</td>
<td>
			<select name="class" required>
                    <option selected hidden value="">Select</option>
                    <option value="D1">D1</option>
                    <option value="D2A">D2A</option>
                    <option value="D2B">D2B</option>
                    <option value="D2C">D2C</option>
                    <option value="D3">D3</option>
                    <option value="D4A">D4A</option>
                    <option value="D4B">D4B</option>
                    <option value="D5A">D5A</option>
                    <option value="D5B">D5B</option>
                    <option value="D6">D6</option>
                    <option value="D7A">D7A</option>
                    <option value="D7B">D7B</option>
                    <option value="D7C">D7C</option>
                    <option value="D8">D8</option>
                    <option value="D9A">D9A</option>
                    <option value="D9B">D9B</option>
                    <option value="D10">D10</option>
                    <option value="D11">D11</option>
                    <option value="D12A">D12A</option>
                    <option value="D12B">D12B</option>
                    <option value="D12C">D12C</option>
                    <option value="D13">D13</option>
                    <option value="D14A">D14A</option>
                    <option value="D14B">D14B</option>
                    <option value="D15A">D15A</option>
                    <option value="D15B">D15B</option>
                    <option value="D16">D16</option>
                    <option value="D17A">D17A</option>
                    <option value="D17B">D17B</option>
                    <option value="D17C">D17C</option>
                    <option value="D18">D18</option>
                    <option value="D19A">D19A</option>
                    <option value="D19B">D19B</option>
                    <option value="D20">D20</option>
    			</select>
</td>
</tr>

                <br><br>
<tr>
  <td>
<label>Roll No:</label>
</td>
<td>
   <input type="text" name="rollnumber" required>
</td>
</tr>
<br><br>
<tr>
  <td>
<label>Email:</label>
</td>
<td>
   <input type="email" name="email" required> 
</td>
<td>
<span class="error"><?php echo $emailerr2;?></span>
</td>
</tr>
<br><br>
<tr>
  <td>
<label>Password:</label>
</td>
<td> <input type="text" name="password" required>
</td>
</tr>
<br><br>
<tr>
<div>
<input type="submit">
</div>
</tr>
</form>

</div>
</div>
</div>

</body>

</html>