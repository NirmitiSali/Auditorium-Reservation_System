<?php
$conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM seat_reservation where e_id = (SELECT max(e_id) FROM seat_reservation)";
$result1 = mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_array($result1);
$user_id = $row1[1];
$event_id = $row1[2];
$seat_no = $row1[3];

$sql2 = "SELECT * FROM signup WHERE user_id = '$user_id'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
$name = $row2[1];
$email = $row2[5];

$sql3 = "SELECT * FROM event_registration_table WHERE Event_id='$event_id'";
$result3 = mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_array($result3);
$event_name = $row3[6];
$date = $row3[7];
$start_time = $row3[8];
$end_time = $row3[9];

/*
echo "<center>";
echo "<b>Name: </b>", $name,"<br>";
echo "<b>Email: </b>", $email,"<br>";
echo "<b>Event: </b>", $event_name,"<br>";
echo "<b>Date: </b>", $date,"<br>";
echo "<b>Start Time: </b>", $start_time,"<br>";
echo "<b>End Time: </b>", $end_time,"<br>";
echo "<b>Seat Number: </b>", $seat_no,"<br>";
echo "</center>";
*/
mysqli_close($conn);


?>
<html>
<head>
	<title>Confirmation Page</title>
	<link rel="stylesheet" href="studentsu.css" />
</head>
<center>
<body>
	<br>
	<br>
	<br>
	<center>
<h1>Great, You're Booked!</h1>
	 
</center>

<div class="wrapper">
  <div class="title">
  	 </div>
  <div class="contact-form">
    <div class="input-fields">
    	<center>

<label style="color:white;">Name:</label> <?php echo "<label style='color:white;'>$name</label>"; ?><br><br>
<label  style="color:white;">Email:</label> <?php echo "<label style='color:white;'>$email</label>"; ?><br><br>
<label  style="color:white;">Event :</label> <?php echo "<label style='color:white;'>$event_name</label>"; ?><br><br>
<label  style="color:white;">Date:</label> <?php echo "<label style='color:white;'>$date</label>"; ?><br><br>
<label  style="color:white;">Start Time:</label><?php echo "<label style='color:white;'>$start_time</label>"; ?><br><br>
<label style="color:white;">End Time:</label><?php echo "<label style='color:white;'>$end_time</label>"; ?><br><br>
<label style="color:white;">Seat Number:</label><?php echo "<label style='color:white;'>$seat_no</label>"; ?><br><br>

<!--<a href="mailto:sushbiwalkar@gmail.com"<button>E-Mail me</a>-->

<div>

</div>

</form>

</center>
</div>
</div>
</div>


</body>
</center>
</html>
