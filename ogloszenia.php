<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ogloszenia";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "Zad 1 <br><br>";

$sql = "SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) { 
      echo "id: " . $row["id"]. " - Tytuł: " .  $row["tytul"]. " Treść " . $row["tresc"]. "<br>";
    }
  } else {
    echo "0 results";
  }

  echo "<br><br>Zad 2 <br><br>";

  $sql = "SELECT DISTINCT `ogloszenie`.`uzytkownik_id`, `uzytkownik`.`telefon` FROM `ogloszenie` , `uzytkownik` WHERE `ogloszenie`.`uzytkownik_id`=1;";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) { 
      echo "ID: " . $row["uzytkownik_id"]. " - Telefon: " .  $row["telefon"]. "<br>";
    }

  echo "<br><br>Zad 3 <br><br>";

  $sql = "CREATE USER 'moderator'@'localhost' IDENTIFIED BY 'qwerty'";
  $result = $conn->query($sql);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      echo "Wykonano";
  }

  echo "<br><br>Zad 4 <br><br>";

  $sql = "GRANT SELECT, DELETE ON *.* TO 'moderator'@'localhost'";
  $result = $conn->query($sql);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }else{
      echo "Wykonano";
  }

$conn->close();
?>