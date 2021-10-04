<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="text" name="LICZBA" />
<input type="submit" value="LOSUJ"/>
</form>

<?php  

$a = $_POST["LICZBA"];

    for($p = 0; $p < $a; $p++){
        $c = rand(1,100); 
        if($c %3==0){
            echo "$c <br>"; 
        }
    }
    
?>   

</body>
</html>
