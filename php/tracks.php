<?php
require 'info.php';

$dbname = "music";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['playlist'])) {
  $playlistname = $_GET['playlist'];
  $sql = "SELECT id, Link,Image,Title, Artist FROM $playlistname";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
      echo
      "<li>" . "<a href='index.php?playlist=" . $_GET["playlist"] . "&current=" . $row["Link"] . "'>" .  "<div class='horizontal'>"  .  "<img src='" . $row["Image"] .  "'>" . "</div>" .
        "<div class='horizontal'>" .
        $row["Title"] . "<br>" .
        "" . $row["Artist"] . "<br>" .

        "</div>" .
        "</a></li>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();
} else {
  // Handle the case where the parameter is not set
  echo "selcet  playlist";
}
