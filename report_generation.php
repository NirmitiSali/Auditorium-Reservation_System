<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];


$sql = "SELECT * FROM event_registration_table WHERE Date BETWEEN '$date1' AND '$date2'";

echo '<table border="10" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial">User_id</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Council_or_Dept</font> </td> 
          <td> <font face="Arial">Mobie_No.</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Event_id</font> </td> 
          <td> <font face="Arial">Event_Name</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
          <td> <font face="Arial">Start Time</font> </td>
          <td> <font face="Arial">End Time</font> </td>  
          <td> <font face="Arial">No_of_Resource_person</font> </td> 
          <td> <font face="Arial">No. of Seats Booked</font> </td> 
      </tr>';

if ($result = mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["user_id"];
        $field2name = $row["name"];
        $field3name = $row["Council_or_Dept"];
        $field4name = $row["mobile_no"];
        $field5name = $row["email"];
        $field6name = $row["Event_id"];
        $field7name = $row["Event"];
        $field8name = $row["Date"];
        $field9name = $row["start_time"];
        $field10name = $row["end_time"];
        $field11name = $row["resource_no"]; 
        $sql2 = "SELECT * FROM seat_reservation WHERE event_id='$field6name'";
        $result2 = mysqli_query($conn, $sql2);
        $num = mysqli_num_rows($result2);
        $field12name = $num;

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
                  <td>'.$field7name.'</td> 
                  <td>'.$field8name.'</td> 
                  <td>'.$field9name.'</td> 
                  <td>'.$field10name.'</td>
                  <td>'.$field11name.'</td> 
                  <td>'.$field12name.'</td> 
              </tr>';
    }
    $result->free();
} 
  
  mysqli_close($conn);
?>
  


 
