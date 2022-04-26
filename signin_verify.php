<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];


$sql = "SELECT * FROM signup WHERE email = '$email' && password = '$password'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);

if ($num == 1) {
    //$url = "registration_table.php?email=".$email;
    //header(string: 'location:'. $url) ;
    if ($email == 'admin@admin.com') {
      header('location:admin_page.php');
    } else {
      $sql2 = "INSERT INTO login_lists (email)
      VALUES ('$email')";
      mysqli_query($conn, $sql2);
      header('location:i_want_to.php');
    }
  } else {
      echo '<script> ';  
      echo '  if (confirm("Incorrect Email Id or Password")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/signin.php';";  
      echo '  }';  
      echo '</script>';  
  }
  
  mysqli_close($conn);
?>
  


 
