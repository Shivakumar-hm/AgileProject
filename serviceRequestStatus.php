<?php

include 'config.php';

session_start();

error_reporting(0);

$sql = "SELECT * FROM servicerequeststatus where Username = 'Shiva'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
echo "<h2>Request Status</h2> <table border='1'>

<tr>

<th>Project Name</th>

<th>Status</th>

</tr>";

 

while($row = $result->fetch_assoc())

  {

  echo "<tr>";

  echo "<td>" . $row['ProjectName'] . "</td>";

  echo "<td>" . $row['Status'] . "</td>";

  echo "</tr>";

  }

echo "</table>";
}
else{
    echo "<h2>Request Status</h2> <p>No results found.</p>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="statusstyle.css" />
  <title>Sign in & Sign up Form </title>
</head>

<body>
</body>

</html>
