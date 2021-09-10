<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="text" name="LOS" />
<input type="submit" value="LOSOWANIE"/>
</form>

<?php  

$n = $_POST["LOS"];
for($i=1; $i<=$n; $i++){
    echo "<br>";
    echo rand(1,1000);
    

}

?>  

</body>
</html>