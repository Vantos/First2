<!DOCTYPE html>
<html>
<body>

<form>
<input type="submit" value="LOSOWANIE"/>
</form>

<?php  

for($a=0;$a < 12;$a++){
    $b = rand(1,6);
    $c = rand(1,6);
    $d = rand(1,6);
    $e = rand(1,6);
    $f = rand(1,6);

    
    $srednia = $srednia + $b + $c + $d + $e + $f;

    echo("<br> $b,$c,$d,$e,$f,");
    
}

echo("<br><br> ŚREDNIA = $srednia");
?>  

</body>
</html>