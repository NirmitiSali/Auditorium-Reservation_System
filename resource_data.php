<?php
$conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM event_registration_table WHERE Event_id = (SELECT max(Event_id) FROM event_registration_table)";
$result =  mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$no_of_resource = $row[10];
$event_id = $row[5];

if ($no_of_resource == 0){
    echo "Event Registered Successfully!!!";
}
else if($no_of_resource == 1){
        $resource_name1 = test_input($_POST["name1"]);
        $information1 = test_input($_POST["info1"]);
        $sql2 = "INSERT INTO resource_person (event_id, resource_name, info)
        VALUES ('$event_id', '$resource_name1', '$information1') ";
        if (mysqli_query($conn, $sql2)) {
            echo "Event Registered Successfully!!!";
          }
           else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
      

}




mysqli_close($conn);
?>