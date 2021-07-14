<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "id16783605_root";
$password = "r2DD*]gE*8om[Y|w";
$dbname = "id16783605_shanu";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `name`, `email`, `text` FROM `shanu`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> name: ". $row["name"]. " - email: ". $row["email"]. " " . $row["text"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
