<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



//$name = $_POST['name'];
$dept = $_POST['dept'];
$mobile = $_POST['mobile'];
//$email = $_GET['email'];
//$email = $_POST['email'];
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
  /*---------------------------------------------------------*/
  $row3 = mysqli_fetch_array($result2);
  $start_time=$row3[8];
  $end_time=$row3[9];
  if ($stime>$start_time and $stime<$end_time){
      echo '<script> ';  
      echo '  if (confirm("Start time is overlapping with other event")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/register.php';";  
      echo '  }';  
      echo '</script>';
  }
  else if ($stime == $start_time){
    echo '<script> ';  
      echo '  if (confirm("Start time is overlapping with other event")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/register.php';";  
      echo '  }';  
      echo '</script>';
  }
  else{
    if ($etime>$start_time and $etime<$end_time){
      echo '<script> ';  
      echo '  if (confirm("End time is overlapping with other event")) {';  
      echo "    document.location = 'http://localhost/first/MINI%20PROJECT/register.php';";  
      echo '  }';  
      echo '</script>';
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
            echo "Event Registered Successfully!!!";
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
            echo '<script> ';  
            echo '  if (confirm("Event Name is already used")) {';  
            echo "    document.location = 'http://localhost/first/MINI%20PROJECT/register.php';";  
            echo '  }';  
            echo '</script>';
          }
//*
    }
  }
  /*----------------------------------------------------------------------*/
/*----------------------------------------------------------------------
  $flag = TRUE
  while ($row4 = $result2->fetch_assoc()){
    if($stime>$row4["start_time"] and $stime<$row4["end_time"]){
      echo "!!The date and time slot you selected is already booked!!";
      $flag = FALSE;
      continue;
    }
    else if($stime == $row4["start_time"]){
      echo "!!The date and time slot you selected is already booked!!";
      $flag = FALSE;
      continue;
    }
    else{
      if ($etime>$row4["start_time"] and $etime<$row4["end_time"]){
        echo "!!The date and time slot you selected is already booked!!";
        $flag = FALSE;
        continue;
    }
  }
}
if($flag == TRUE){
  //*
  $sql4 = "SELECT * FROM login_lists WHERE id = (SELECT max(id) FROM login_lists)";
  $result3 =  mysqli_query($conn, $sql4);
  $row2 = mysqli_fetch_array($result3);
  $email = $row2[1];


  $sql = "SELECT user_id FROM signup WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);

  $sql2 = "INSERT INTO event_registration_table (user_id, name, Council_or_Dept, mobile_no, email, Event, Date, start_time, end_time, allow, resource_no)
  VALUES ('$row[0]', '$name', '$dept','$mobile','$email','$event','$date','$stime','$etime','$allow','$resource')";



  if (mysqli_query($conn, $sql2)) {
      echo "Event Registered Successfully!!!";
      //header('location:resource_data.php');
    }
    else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
//*

}



-----------------------------------------*/












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
      echo "Event Registered Successfully!!!";
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
    echo '<script> ';  
            echo '  if (confirm("Event Name is already used")) {';  
            echo "    document.location = 'http://localhost/first/MINI%20PROJECT/register.php';";  
            echo '  }';  
            echo '</script>';
  }
//*
}
  
mysqli_close($conn);
?>
  


 
