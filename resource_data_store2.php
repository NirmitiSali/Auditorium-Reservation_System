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

$sql = "SELECT * FROM event_registration_table WHERE Event_id = (SELECT max(Event_id) FROM event_registration_table)";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$no_of_resource = $row[10];
$event_id = $row[5];

$sql1 = "INSERT INTO resource_person VALUES('$event_id','$name1','$info1')";
$sql2 = "INSERT INTO resource_person VALUES('$event_id','$name2','$info2')";

if (mysqli_query($conn,$sql1) && mysqli_query($conn,$sql2)){
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
