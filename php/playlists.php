
<?php


require 'info.php';
$dbname = "music";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SHOW TABLES";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {

        if (isset($_GET['playlist'])) {
            $param1 = $_GET['playlist'];
        } else {
            // Handle the case where the parameter is not set
            $param1 = "Select a Playlist";
        }

            

        echo "<a href='index.php?playlist=" . $row['Tables_in_music'] . "&current=" . "'>" . $row['Tables_in_music'] . " </a>";
    }
} else {
    echo "0 results";
}        

$conn->close();

?>



