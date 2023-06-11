<?php
  $conn = mysqli_connect("localhost", "root", "", "supermarket");
  $result = mysqli_query($conn, "SELECT * FROM items");
  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['item_name'] . "</td>";
    echo "<td>" . $row['item_code'] . "</td>";
    echo "<td>" . $row['quantity'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" . $row['expiry'] . "</td>";
    echo "<td><a href='delete.php?id=" . $row['id'] . "'>DELETE</a></td>";
    echo "</tr>";
  }
  mysqli_close($conn);
?>
