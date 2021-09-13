<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="text" name="MIN" />
    <input type="text" name="MAX" />
    <input type="text" name="LICZBA" />
<input type="submit" value="LOSUJ"/>
</form>

<?php  

$m = $_POST["MIN"];
$n = $_POST["MAX"];
$o = $_POST["LICZBA"];

    for($p = 0; $p < $o; $p++){
        $a = rand($m,$n); 
    echo "$a <br>";
    }
    
?>  

</body>
</html>