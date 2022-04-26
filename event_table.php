<?php
   $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
   // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM event_registration_table  WHERE Date>=(SELECT CURDATE())";

echo '<table border="10" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial">Event_Code</font> </td> 
          <td> <font face="Arial">Event_Name</font> </td> 
          <td> <font face="Arial">Date</font> </td> 
          <td> <font face="Arial">Start_Time</font> </td> 
          <td> <font face="Arial">End_Time</font> </td> 
          <td> <font face="Arial">Available_Seats</font> </td> 
      </tr>';

if ($result = mysqli_query($conn, $sql)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Event_id"];
        $field2name = $row["Event"];
        $field3name = $row["Date"];
        $field4name = $row["start_time"];
        $field5name = $row["end_time"];
        
        $sql2 = "SELECT * FROM seat_reservation WHERE event_id='$field1name'";
        $result2 = mysqli_query($conn, $sql2);
        $num = mysqli_num_rows($result2);
        $field6name = 60-$num;

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td> 
              </tr>';
    }
    $result->free();
} 
  
  mysqli_close($conn);
?>
  


 
