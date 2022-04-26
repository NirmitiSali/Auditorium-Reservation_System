
<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$seat = $_POST['seat'];

$sql = "SELECT * FROM login_lists WHERE id = (SELECT max(id) FROM login_lists)";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$email = $row[1];

$sql2 = "SELECT user_id FROM signup WHERE email = '$email'";
$result2 = mysqli_query($conn, $sql2);
$user_id = mysqli_fetch_array($result2);

$sql3 = "SELECT * FROM event_list WHERE id = (SELECT max(id) FROM event_list)";
$result3 = mysqli_query($conn, $sql3);
$row3 = mysqli_fetch_array($result3);
$event = $row3[1];

$sql4 = "SELECT * FROM event_registration_table WHERE Event = '$event'";
$result4 = mysqli_query($conn, $sql4);
$row4 = mysqli_fetch_array($result4);
$event_id = $row4[5];
$event = $row4[6];
$date = $row4[7];
$start_time = $row4[8];
$end_time = $row4[9];

$sql5 = "INSERT INTO seat_reservation (user_id, event_id, seat_no)
VALUES ('$user_id[0]', '$event_id', '$seat')";

$sql6 = "SELECT * from signup WHERE email = '$email'";
$result6 = mysqli_query($conn,$sql6);
$row6 = mysqli_fetch_array($result6);
$name = $row6[1];


/*--------------------------------------------------------------------------
function send_email(){

    $subject = "Great!You,re Booked!";
    $message = "<h1>Acknowlegdement</h1><br><br>
    <b>Name:</b>$name<br>
    <b>Event:</b>$event<br>
    <b>Date:</b>$date<br>
    <b>Start Time:</b>$start_time<br>
    <b>End Time:</b>$end_time<br>
    <b>Seat No:</b>$seat<br>
    ";
    $headers = 'From: pythonprojects9@gmail.com'. "\r\n".
    'MIME-Version: 1.0' . "\r\n" .
    'Content-type: text/html; charset=utf-8';

    ini_set("sendmail_from", "pythonprojects9@gmail.com");
    if(mail($email, $subject, $message, $headers)){
        echo "Mail Send Successfully";
    } else {
        echo "Cannot Send Mail";
}
}




---------------------------------------------------------------------------*/

if (mysqli_query($conn, $sql5)) {
  $subject = "Great!You,re Booked!";
  $message = "<h1>Acknowlegdement</h1><br><br>
  <b>Name:</b>$name<br>
  <b>Event:</b>$event<br>
  <b>Date:</b>$date<br>
  <b>Start Time:</b>$start_time<br>
  <b>End Time:</b>$end_time<br>
  <b>Seat No:</b>$seat<br>
  ";
  $headers = 'From: pythonprojects9@gmail.com'. "\r\n".
  'MIME-Version: 1.0' . "\r\n" .
  'Content-type: text/html; charset=utf-8';

  ini_set("sendmail_from", "pythonprojects9@gmail.com");
  if(mail($email, $subject, $message, $headers)){
      echo "Mail Send Successfully";
  } else {
      echo "Cannot Send Mail";
  }
    header('location:acknowledgement.php');
  } else {
      echo '<script> ';  
      echo '  if (confirm("You have already booked a seat for this event")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/event_name.php';";  
      echo '  }';  
      echo '</script>'; 
  }

  
  mysqli_close($conn);
?>
  


 
