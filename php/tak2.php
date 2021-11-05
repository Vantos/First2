

<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "cyklisci";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if(isset($_POST['save']))
{	 
	 $first_name = $_POST['first_name'];
	 $last_name = $_POST['last_name'];
	 $city_name = $_POST['city_name'];
	 $email = $_POST['email'];
	 $sql = "INSERT INTO rowerzysci_polscy (id, imie, nazwisko, marka)
	 VALUES ('$first_name','$last_name','$city_name','$email')";
	 if (mysqli_query($conn, $sql)) {
		echo "Utworzono nowy rekord";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
  <body>
	<form method="post" action="">
		ID<br>
		<input type="text" name="first_name">
		<br>
		Imie<br>
		<input type="text" name="last_name">
		<br>
		Nazwisko<br>
		<input type="text" name="city_name">
		<br>
		Marka<br>
		<input type="text" name="email">
		<br><br>
		<input type="submit" name="save" value="Zatwierdź"><br>
	</form>
  </body>
</html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cyklisci";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "</ul>";
$sql = "SELECT DISTINCT id, imie, nazwisko, marka
FROM rowerzysci_polscy";
echo '<br><div style="border: 5px solid red; width: 12%; color: red;">';
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "" . $row["id"]. " / " . $row["imie"]. " / " . $row["nazwisko"]. " / " . $row["marka"]. "<br>";
  }
} else {
  echo "0 results";
}
echo '</div>';

$conn->close();
?>