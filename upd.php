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
echo "<tr><th>ID</th><th>Customer Name</th><th>Customer Phone</th><th>From Date</th><th>Until Date</th><th>Plan</th><th>MI1N</th><th>MI1Q</th><th>MI2N</th><th>MI2Q</th><th>MI3N</th><th>MI3Q</th><th>MI4N</th><th>MI4Q</th><th>MI5N</th><th>MI5Q</th><th>MI6N</th><th>MI6Q</th><th>MI7N</th><th>MI7Q</th><th>MI8N</th><th>MI8Q</th><th>MI9N</th><th>MI9Q</th><th>MI10N</th><th>MI10Q</th><th>MI11N</th><th>MI11Q</th><th>MI12N</th><th>MI12Q</th><th>MI13N</th><th>MI13Q</th><th>MI14N</th><th>MI14Q</th><th>MI15N</th><th>MI15Q</th><th>MI16N</th><th>MI16Q</th><th>MI17N</th><th>MI17Q</th><th>MI18N</th><th>MI18Q</th><th>MI19N</th><th>MI19Q</th><th>MI20N</th><th>MI20Q</th><th>MI21N</th><th>MI21Q</th><th>MI22N</th><th>MI22Q</th><th>MI23N</th><th>MI23Q</th><th>MI24N</th><th>MI24Q</th><th>MP1</th><th>MP2</th><th>MP3</th><th>MP4</th><th>Total</th><th>Address</th><th>Comment</th></tr>";

if(isset($_GET['date'])) {
    $date = $_GET['date'];
    $sql = "SELECT * FROM booking WHERE date_added = '$date'";
   

    $result = $conn->query($sql);

    if ($result === false) {
        die('Error: ' . $conn->error);
    }

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td><b>" . $row["customer_name"] . "</b></td>";
            echo "<td><b>" . $row["customer_phone"] . "</b></td>";
            echo "<td>" . $row["from_date"] . "</td>";
            echo "<td>" . $row["until_date"] . "</td>";
            echo "<td>" . $row["plan"] . "</td>";
            echo "<td>" . $row["mi1n"] . "</td>";
            echo "<td>" . $row["mi1q"] . "</td>";
            echo "<td>" . $row["mi2n"] . "</td>";
            echo "<td>" . $row["mi2q"] . "</td>";
            echo "<td>" . $row["mi3n"] . "</td>";
            echo "<td>" . $row["mi3q"] . "</td>";
            echo "<td>" . $row["mi4n"] . "</td>";
            echo "<td>" . $row["mi4q"] . "</td>";
            echo "<td>" . $row["mi5n"] . "</td>";
            echo "<td>" . $row["mi5q"] . "</td>";
            echo "<td>" . $row["mi6n"] . "</td>";
            echo "<td>" . $row["mi6q"] . "</td>";
            echo "<td>" . $row["mi7n"] . "</td>";
            echo "<td>" . $row["mi7q"] . "</td>";
            echo "<td>" . $row["mi8n"] . "</td>";
            echo "<td>" . $row["mi8q"] . "</td>";
            echo "<td>" . $row["mi9n"] . "</td>";
            echo "<td>" . $row["mi9q"] . "</td>";
            echo "<td>" . $row["mi10n"] . "</td>";
            echo "<td>" . $row["mi10q"] . "</td>";
            echo "<td>" . $row["mi11n"] . "</td>";
            echo "<td>" . $row["mi11q"] . "</td>";
            echo "<td>" . $row["mi12n"] . "</td>";
            echo "<td>" . $row["mi12q"] . "</td>";
            echo "<td>" . $row["mi13n"] . "</td>";
            echo "<td>" . $row["mi13q"] . "</td>";
            echo "<td>" . $row["mi14n"] . "</td>";
            echo "<td>" . $row["mi14q"] . "</td>";
            echo "<td>" . $row["mi15n"] . "</td>";
            echo "<td>" . $row["mi15q"] . "</td>";
            echo "<td>" . $row["mi16n"] . "</td>";
            echo "<td>" . $row["mi16q"] . "</td>";
            echo "<td>" . $row["mi17n"] . "</td>";
            echo "<td>" . $row["mi17q"] . "</td>";
            echo "<td>" . $row["mi18n"] . "</td>";
            echo "<td>" . $row["mi18q"] . "</td>";
            echo "<td>" . $row["mi19n"] . "</td>";
            echo "<td>" . $row["mi19q"] . "</td>";
            echo "<td>" . $row["mi20n"] . "</td>";
            echo "<td>" . $row["mi20q"] . "</td>";
            echo "<td>" . $row["mi21n"] . "</td>";
            echo "<td>" . $row["mi21q"] . "</td>";
            echo "<td>" . $row["mi22n"] . "</td>";
            echo "<td>" . $row["mi22q"] . "</td>";
            echo "<td>" . $row["mi23n"] . "</td>";
            echo "<td>" . $row["mi23q"] . "</td>";
            echo "<td>" . $row["mi24n"] . "</td>";
            echo "<td>" . $row["mi24q"] . "</td>";
           
            // Add more columns as needed
            echo "<td>" . $row["mp1"] . "</td>";
            echo "<td>" . $row["mp2"] . "</td>";
            echo "<td>" . $row["mp3"] . "</td>";
            echo "<td>" . $row["mp4"] . "</td>";
            echo "<td>" . $row["total"] . "</td>";
            
            echo "<td>" . $row["address"] . "</td>";
            echo "<td>" . $row["comment"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='53'>No data available</td></tr>";
    }
} else {
    echo "<tr><td colspan='53'>Please enter a date</td></tr>";
}

echo "</table>";

$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Purches Details</title>
</head>
<style>
    body{
        background-color: #99FFFF;

    }
</style>
<body>
    
</body>
</html>
