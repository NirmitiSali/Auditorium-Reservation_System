<?php
$conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$name1 = $_POST['name1'];
$info1 = $_POST['info1'];
$name2 = $_POST['name2'];
$info2 = $_POST['info2'];
$name3 = $_POST['name3'];
$info3 = $_POST['info3'];
$name4 = $_POST['name4'];
$info4 = $_POST['info4'];
$name5 = $_POST['name5'];
$info5 = $_POST['info5'];
$name6 = $_POST['name6'];
$info6 = $_POST['info6'];

$sql = "SELECT * FROM event_registration_table WHERE Event_id = (SELECT max(Event_id) FROM event_registration_table)";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$no_of_resource = $row[10];
$event_id = $row[5];

$sql1 = "INSERT INTO resource_person VALUES('$event_id','$name1','$info1')";
$sql2 = "INSERT INTO resource_person VALUES('$event_id','$name2','$info2')";
$sql3 = "INSERT INTO resource_person VALUES('$event_id','$name3','$info3')";
$sql4 = "INSERT INTO resource_person VALUES('$event_id','$name4','$info4')";
$sql5 = "INSERT INTO resource_person VALUES('$event_id','$name5','$info5')";
$sql6 = "INSERT INTO resource_person VALUES('$event_id','$name6','$info6')";


if (mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2) && mysqli_query($conn,$sql3) && mysqli_query($conn,$sql4) && mysqli_query($conn,$sql5) && mysqli_query($conn,$sql6)){
  echo '<script> ';  
  echo '  if (confirm("!!!Event Registered Successfully!!!")) {';  
  echo "    document.location = 'http://localhost/first/MINI%20PROJECT/first_page.php';";  
  echo '  }';  
  echo '</script>';
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
