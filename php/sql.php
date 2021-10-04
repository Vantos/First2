<?php
$servername = "localhost";
$database = "4K";
$username = "root";
$password = "123";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, imie, nazwisko, srednia FROM uczen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
      echo "id: " . $row["id"]. " - Imię: " .  $row["imie"]. " Nazwisko " . $row["nazwisko"]. " Średnia " . $row["srednia"] . "<br>";
    }
  } else {
    echo "0 results";
  }

mysqli_close($conn);

?>