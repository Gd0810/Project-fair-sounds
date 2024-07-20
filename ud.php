<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "project";

// Create connection
$conn = new mysqli($server, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display the data in a table format
echo "<table border='1'>";
echo "<tr><th>ID</th><th>USERNAME</th><th>EMAIL</th><th>PASSWORD</th><th>PHONE_NUMBER</th></tr>"; // Added closing quote and semicolon

$sql = "SELECT * FROM signup";
$result = $conn->query($sql);

if ($result === false) {
    die('Error: ' . $conn->error);
}

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td><b>" . $row["username"] . "</b></td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["password"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "</tr>"; 
}
}
 else {
    echo "<tr><td colspan='5'>No data available</td></tr>"; // Changed colspan to 5 since there are 5 columns
}

echo "</table>";

$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User details</title>
</head>
<style>
    body{
         display: flex;
         align-items: center;
         justify-content: center;
         background-color: #99FFFF;
    }
</style>
<body>
    
</body>
</html>