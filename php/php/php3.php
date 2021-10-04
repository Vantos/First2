<!DOCTYPE html>
<html>
<body>

<form method="GET">
    <input type="text" name="LOS" />
<input type="submit" value="FIBO"/>
</form>

<?php  

$m = $_GET["LOS"];

rand($m);
echo (fii($m));

?>  

</body>
</html>