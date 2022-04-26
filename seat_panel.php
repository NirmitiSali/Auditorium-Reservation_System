<html>
    <head>
        <link rel="stylesheet"  href="seat_panel.css"/>     
    </head>
<!------------------------------------->
<?php

function availability($seat){
  $conn = mysqli_connect('localhost', 'guest', 'guest123', 'audi_reservtion');
   // Check connection
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }
   
  $sql = "SELECT * FROM event_list WHERE id = (SELECT max(id) FROM event_list)";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  $event = $row[1];
  $sql2 = "SELECT * FROM event_registration_table WHERE Event = '$event'";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_array($result2);
  $event_id = $row2[5];
  $sql3 = "SELECT * from seat_reservation WHERE event_id ='$event_id' && seat_no = '$seat'";
  $result3 = mysqli_query($conn, $sql3);
  $num = mysqli_num_rows($result3);
  
  mysqli_close($conn);
  return $num;
}

?>


<!------------------------------------->
    <form action="seat.php" method="post">
<div class="plane">
    <div class="cockpit">
      <h1>Please select a seat</h1>
    </div>
    <div class="exit exit--front fuselage">
      
    </div>
    <ol class="cabin fuselage">
      <li class="row row--1">
        <ol class="seats" type="A">
          <li class="seat">
            
            <input type="checkbox" id="1A" name="seat" value="1A" <?php $number= availability("1A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="1A">1A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="1B" name="seat" value="1B" <?php $number= availability("1B"); if ($number == 1){ ?>disabled<?php } ?>  />
            <label for="1B">1B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="1C" name="seat" value="1C" <?php $number= availability("1C"); if ($number == 1){ ?>disabled<?php } ?>  />
            <label for="1C">1C</label>
          </li>
          <li class="seat">
            <input type="checkbox"  id="1D" name="seat" value="1D" <?php $number= availability("1D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="1D">1D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="1E" name="seat" value="1E" <?php $number= availability("1E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="1E">1E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="1F" name="seat" value="1F" <?php $number= availability("1F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="1F">1F</label>
          </li>
        </ol>
      </li>
      <li class="row row--2">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="2A" name="seat" value="2A" <?php $number= availability("2A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="2A">2A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2B" name="seat" value="2B" <?php $number= availability("2B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="2B">2B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2C" name="seat" value="2C" <?php $number= availability("2C"); if ($number == 1){ ?>disabled<?php } ?>  />
            <label for="2C">2C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2D" name="seat" value="2D" <?php $number= availability("2D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="2D">2D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2E" name="seat" value="2E" <?php $number= availability("2E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="2E">2E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="2F" name="seat" value="2F" <?php $number= availability("2F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="2F">2F</label>
          </li>
        </ol>
      </li>
      <li class="row row--3">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="3A" name="seat" value="3A" <?php $number= availability("3A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3A">3A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3B" name="seat" value="3B" <?php $number= availability("3B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3B">3B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3C" name="seat" value="3C" <?php $number= availability("3C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3C">3C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3D" name="seat" value="3D" <?php $number= availability("3D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3D">3D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3E" name="seat" value="3E" <?php $number= availability("3E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3E">3E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="3F" name="seat" value="3F" <?php $number= availability("3F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="3F">3F</label>
          </li>
        </ol>
      </li>
      <li class="row row--4">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="4A" name="seat" value="4A" <?php $number= availability("4A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4A">4A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4B" name="seat" value="4B" <?php $number= availability("4B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4B">4B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4C" name="seat" value="4C" <?php $number= availability("4C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4C">4C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4D" name="seat" value="4D" <?php $number= availability("4D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4D">4D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4E" name="seat" value="4E" <?php $number= availability("4E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4E">4E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="4F" name="seat" value="4F" <?php $number= availability("4F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="4F">4F</label>
          </li>
        </ol>
      </li>
      <li class="row row--5">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="5A" name="seat" value="5A" <?php $number= availability("5A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5A">5A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5B" name="seat" value="5B" <?php $number= availability("5B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5B">5B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5C" name="seat" value="5C" <?php $number= availability("5C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5C">5C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5D" name="seat" value="5D" <?php $number= availability("5D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5D">5D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5E" name="seat" value="5E" <?php $number= availability("5E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5E">5E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="5F" name="seat" value="5F" <?php $number= availability("5F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="5F">5F</label>
          </li>
        </ol>
      </li>
      <li class="row row--6">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="6A" name="seat" value="6A" <?php $number= availability("6A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6A">6A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="6B" name="seat" value="6B" <?php $number= availability("6B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6B">6B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="6C" name="seat" value="6C" <?php $number= availability("6C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6C">6C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="6D" name="seat" value="6D" <?php $number= availability("6D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6D">6D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="6E" name="seat" value="6E" <?php $number= availability("6E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6E">6E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="6F" name="seat" value="6F" <?php $number= availability("6F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="6F">6F</label>
          </li>
        </ol>
      </li>
      <li class="row row--7">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="7A" name="seat" value="7A" <?php $number= availability("7A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7A">7A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="7B" name="seat" value="7B" <?php $number= availability("7B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7B">7B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="7C" name="seat" value="7C" <?php $number= availability("7C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7C">7C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="7D" name="seat" value="7D" <?php $number= availability("7D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7D">7D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="7E" name="seat" value="7E" <?php $number= availability("7E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7E">7E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="7F" name="seat" value="7F" <?php $number= availability("7F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="7F">7F</label>
          </li>
        </ol>
      </li>
      <li class="row row--8">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="8A" name="seat" value="8A" <?php $number= availability("8A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8A">8A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="8B" name="seat" value="8B" <?php $number= availability("8B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8B">8B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="8C" name="seat" value="8C" <?php $number= availability("8C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8C">8C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="8D" name="seat" value="8D" <?php $number= availability("8D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8D">8D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="8E" name="seat" value="8E" <?php $number= availability("8E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8E">8E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="8F" name="seat" value="8F" <?php $number= availability("8F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="8F">8F</label>
          </li>
        </ol>
      </li>
      <li class="row row--9">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="9A" name="seat" value="9A" <?php $number= availability("9A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9A">9A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="9B" name="seat" value="9B" <?php $number= availability("9B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9B">9B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="9C" name="seat" value="9C" <?php $number= availability("9C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9C">9C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="9D" name="seat" value="9D" <?php $number= availability("9D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9D">9D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="9E" name="seat" value="9E" <?php $number= availability("9E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9E">9E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="9F" name="seat" value="9F" <?php $number= availability("9F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="9F">9F</label>
          </li>
        </ol>
      </li>
      <li class="row row--10">
        <ol class="seats" type="A">
          <li class="seat">
            <input type="checkbox" id="10A" name="seat" value="10A" <?php $number= availability("10A"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10A">10A</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="10B" name="seat" value="10B" <?php $number= availability("10B"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10B">10B</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="10C" name="seat" value="10C" <?php $number= availability("10C"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10C">10C</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="10D" name="seat" value="10D" <?php $number= availability("10D"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10D">10D</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="10E" name="seat" value="10E" <?php $number= availability("10E"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10E">10E</label>
          </li>
          <li class="seat">
            <input type="checkbox" id="10F" name="seat" value="10F" <?php $number= availability("10F"); if ($number == 1){ ?>disabled<?php } ?> />
            <label for="10F">10F</label>
          </li>
        </ol>
      </li>
    </ol>

    <div class="exit exit--back fuselage">
      
    </div>

  </div>
  <center>
  
  <input type="Submit" >              
</center>
  </html>