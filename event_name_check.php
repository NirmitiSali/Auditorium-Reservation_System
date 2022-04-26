<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$event = $_POST['event'];

$sql = "SELECT * FROM event_registration_table WHERE Event='$event'";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);
if ($num != 1) {
  echo '<script> ';  
  echo '  if (confirm("You entered wrong event name")) {';  
  echo "    document.location = 'http://localhost/first/MINI%20PROJECT/event_name.php';";  
  echo '  }';  
  echo '</script>';  
  } 
else{
    $sql2 = "INSERT INTO event_list (event)
    VALUES ('$event')";
    mysqli_query($conn, $sql2);
    header('location:seat_panel.php');
}
mysqli_close($conn);
?>