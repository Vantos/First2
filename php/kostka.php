<!DOCTYPE html>
<html>
<body>

<form>
<input type="submit" value="LOSOWANIE"/>
</form>

<?php  

    $rand = rand(1,6); 
    echo "<br>";

    switch ($rand){
        case 1:
            echo "Wypadło 1 oczko";
            break;
        case 2:
            echo "Wypadło 2 oczka";
            break;
        case 3:
            echo "Wypadło 3 oczka";
            break;
        case 4:
            echo "Wypadło 4 oczka";
            break;
        case 5:
            echo "Wypadło 5 oczek";
            break;
        case 6:
            echo "Wypadło 6 oczek";
            break;
    }

?>  

</body>
</html>