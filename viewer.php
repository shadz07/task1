<?php

  $conn =  mysqli_connect("robot", "root", "", "robot", 3306 );













$sql = "SELECT dir FROM direction_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Direction:   " . $row["dir"];
  }
} else {
  echo "0 results";
}
$conn->close();

  
?>
