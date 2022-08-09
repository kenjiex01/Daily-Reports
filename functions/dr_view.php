<?php 
include("connection.php");
$sql = "SELECT * FROM dr_customer";
$result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['c_name']."</td>";
        echo "<td>".$row['c_address']."</td>";
        echo "<td>".$row['c_address']."</td>";
        echo "</tr>";
      }
    }else{
        
    }

?>