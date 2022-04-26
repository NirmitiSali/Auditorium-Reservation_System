<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


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
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
  } else {
    
    echo '<script> ';  
     
    echo '  if (confirm("Enter the valid email address")) {';  
    echo "    document.location = 'http://localhost/first/MINI%20PROJECT/studentsignup.php';";  
    echo '  }';  
      
    echo '</script>';  
    
    
  }
}

/*
$name = $_POST['name'];
$class = $_POST['class'];
$roll_no = $_POST['rollnumber'];
$password = $_POST['password'];

$sql = "INSERT INTO signup (name, class_or_Dept,roll_no, email, password)
VALUES ('$name', '$class','$roll_no','$email','$password')";

if (mysqli_query($conn, $sql)) {
    header('location:signin.php');
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
  */
  mysqli_close($conn);
?>
  


 
