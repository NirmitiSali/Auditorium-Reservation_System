<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <br>
	<title>Register for an event</title>
    <link rel="stylesheet" href="register.css" />
	<script type="text/javascript" src="hiddenemailshow.js"></script>
	<style>
	.error {color: #FF0000;}
	</style>
</head>


<!------------------------------------------------>
<?php
$nameErr = "";
$starttimeErr = "";
$endtimeErr = "";

function showname(){
	$conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   // Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT * FROM login_lists WHERE id = (SELECT max(id) FROM login_lists)";
    $result =  mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $email = $row[1];
	$sql2 = "SELECT * FROM signup WHERE email = '$email'";
	$result2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_array($result2);
	$name = $row2[1];
	mysqli_close($conn);
	return $name;
  }

  $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
  // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
  
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  
$dept = $_POST['dept'];
$mobile = $_POST['mobile'];
$event = $_POST['event'];
$date = $_POST['date'];
$stime = $_POST['stime'];
$etime = $_POST['etime'];
$resource = $_POST['resource'];
$allow = $_POST['allow'];

$sql3 = "SELECT * FROM event_registration_table WHERE Date = '$date'";
$result2 = mysqli_query($conn, $sql3);
$num = mysqli_num_rows($result2);
if ($num != 0) {
  
  $row3 = mysqli_fetch_array($result2);
  $start_time=$row3[8];
  $end_time=$row3[9];
  
  $sql5 = "SELECT SUBTIME('$start_time','00:30:00')";
  $result5 = mysqli_query($conn,$sql5);
  $row5 = mysqli_fetch_array($result5);
  $fk_start_time = $row5[0];
  $sql6 = "SELECT ADDTIME('$end_time','00:30:00')";
  $result6 = mysqli_query($conn,$sql6);
  $row6 = mysqli_fetch_array($result6);
  $fk_end_time= $row6[0];
  

  if ($stime>$fk_start_time and $stime<$fk_end_time){
  $starttimeErr = "*Start time is overlapping other event";
  }
  else if ($stime == $fk_start_time){
    $starttimeErr = "*Start time is overlapping other event";
  }
  else{
    if ($etime>$fk_start_time and $etime<$fk_end_time){
		$endtimeErr = "*End time is overlapping other event";
    }
    else{
        //*
        $sql4 = "SELECT * FROM login_lists WHERE id = (SELECT max(id) FROM login_lists)";
        $result3 =  mysqli_query($conn, $sql4);
        $row2 = mysqli_fetch_array($result3);
        $email = $row2[1];


        $sql = "SELECT * FROM signup WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);


        $sql2 = "INSERT INTO event_registration_table (user_id, name, Council_or_Dept, mobile_no, email, Event, Date, start_time, end_time, allow, resource_no)
        VALUES ('$row[0]', '$row[1]', '$dept','$mobile','$email','$event','$date','$stime','$etime','$allow','$resource')";



        if (mysqli_query($conn, $sql2)) {
            if ($resource == 0){
				echo '<script> ';  
				echo '  if (confirm("!!!Event Registered Successfully!!!")) {';  
				echo "    document.location = 'http://localhost/first/MINI%20PROJECT/first_page.php';";  
				echo '  }';  
				echo '</script>';
			  } 
			  if ($resource == 1) {
				header('location:resource_data1.php');
			  }
			  if ($resource == 2) {
				header('location:resource_data2.php');
			  }
			  if ($resource == 3) {
				header('location:resource_data3.php');
			  }
			  if ($resource == 4) {
				header('location:resource_data4.php');
			  }
			  if ($resource == 5) {
				header('location:resource_data5.php');
			  }
			  if ($resource == 6) {
				header('location:resource_data6.php');
			  }
          }
          else {
            $nameErr = "*Event Name is already used";
          }
//*
    }
  }
  

} 
else {
  //*
$sql4 = "SELECT * FROM login_lists WHERE id = (SELECT max(id) FROM login_lists)";
$result3 =  mysqli_query($conn, $sql4);
$row2 = mysqli_fetch_array($result3);
$email = $row2[1];


$sql = "SELECT * FROM signup WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

$sql2 = "INSERT INTO event_registration_table (user_id, name, Council_or_Dept, mobile_no, email, Event, Date, start_time, end_time, allow, resource_no)
VALUES ('$row[0]', '$row[1]', '$dept','$mobile','$email','$event','$date','$stime','$etime','$allow','$resource')";



if (mysqli_query($conn, $sql2)) {
    if ($resource == 0){
		echo '<script> ';  
		echo '  if (confirm("!!!Event Registered Successfully!!!")) {';  
		echo "    document.location = 'http://localhost/first/MINI%20PROJECT/first_page.php';";  
		echo '  }';  
		echo '</script>';
    } 
    if ($resource == 1) {
      header('location:resource_data1.php');
    }
    if ($resource == 2) {
      header('location:resource_data2.php');
    }
    if ($resource == 3) {
      header('location:resource_data3.php');
    }
    if ($resource == 4) {
      header('location:resource_data4.php');
    }
    if ($resource == 5) {
      header('location:resource_data5.php');
    }
    if ($resource == 6) {
      header('location:resource_data6.php');
    }
  }
   else {
    $nameErr = "*Event Name is already used";
  }
//*
}
  
mysqli_close($conn);
}

?>
<!------------------------------------------------>
<body>
    <center>
	<h1>Register for an event!</h1>
	
    <div class="wrapper">
    <div class="title">
    </div>
    <div class="contact-form">
    <div class="input-fields">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" style="color: white" id="myform">
        <table align="center">
    	<tr>
    		<td>
    			<label>Name:</label>
    		</td>
    		<td>
    			<!input type="text" name="name">
				<?php $name2 = showname(); echo $name2; ?>
    		</td>
    	</tr>
   
 
        <tr>
            <td>
                <label>Council/Dept:</label>
            </td>
            <td>
                <input type="text" name="dept" required>
            </td>
        </tr>
        
         <tr>
            <td>
                <label>Mobile no:</label>
            </td>
            <td>
                <input type="text" name="mobile" required>
            </td>
        </tr>
       
    	<tr>
    		<td>
    			<label>Ves id:</label>
    		</td>
    		<td>
			<!input type="text" name="email" id="hemail">
			<span id="hemail">
    		</td>
    	</tr>
    	<br>
    	 <tr>
            <td>
                <label>Event:</label>
            </td>
            <td>
                <input type="text" name="event" required>
            </td>
			<tr>
			<td>
			<span class="error"><?php echo $nameErr;?></span> 
			</td>
			</tr>
        </tr>
        
    	<tr>
    		<td>
    			<label>Date:</label>
    		</td>
    		<td>
    			<input type="date" name="date" required>
    		</td>
    	</tr>
        
         <tr>
            <td>
                <label>Start Time:</label>
            </td>
            <td>
                <input type="time" name="stime" required>
            </td>
			<tr>
			<td>
			<span class="error"><?php echo $starttimeErr;?></span>
			</td>
			</tr>
        </tr>
        <br>
		<tr>
            <td>
                <label>End Time:</label>
            </td>
            <td>
                <input type="time" name="etime" required>
            </td>
		</tr>

			<tr>
				<td>
			<span class="error"><?php echo $endtimeErr;?></span> 
			</td>
        </tr>
        <tr>
		<td>
    			No. of resource person:
    	</td>
    		<td>
    			<select name="resource" required>
				<!select name="resource" id="resource" >
				<option selected hidden value="">Select </option>
    				<option value="0">0</option>
    				<option value="1">1</option>
    				<option value="2">2</option>
    				<option value="3">3</option>
    				<option value="4">4</option>
    				<option value="5">5</option>
    				<option value="6">6</option>
    			</select>
    		</td>
    	</tr>
		

		<br>
		<tr>
    		<td>
    			Do you want the attendees to choose the seats?
    		</td>
    		<td>
    			<input  type="radio" id="YES" name="allow" value="YES">Yes
    			<input  type="radio" id="NO" name="allow" value="NO">No
    		</td>
    	</tr>
        <tr>
            <td>
                <input type="Submit" >
            </td>
        </tr>
</body>
</html>