<!DOCTYPE html>
<html>
<body>

<form method="POST">
    Min  <input type="text" name="MIN" /><br>
    Max  <input type="text" name="MAX" /><br>
    Liczba losowań  <input type="text" name="LICZBA" /><br>
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