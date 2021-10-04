<?php
   $user= 'root';
   $pass= '123';
   $host = 'localhost';
   $base = '4k';    //tutaj nazwa twojej bazy
   $con= mysqli_connect($host,$user,$pass, $base);
   mysqli_select_db($con,$base);
  
    if(isset($_GET['sub']))
		 {
             $id = $_GET['id'];
             $imie = $_GET['im'];
             $nazwisko = $_GET['nazw'];
             $srednia = $_GET['sred'];
$query = "Insert into uczniowie(id, im, nazw, sred) values('$id', '$imie', '$nazwisko', '$srednia')";
$run =mysqli_query($con,$query) or die(mysqli_error());

if($run){
    echo "Formularz zatwierdzony";
}
else{
    echo "formularz jest błędny";
}
         }
?>

<form action="" method="get">
ID:<input type="text" name="id"><br>
Imie:<input type="text" name="im"><br>
Nazwisko:<input type="text" name="nazw"><br>
Srednia:<input type="text" name="sred"><br>
<input name="sub" type="submit" value="ok">
</form>