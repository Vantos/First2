<!DOCTYPE html>
<html>
<body>

<form method="GET">
    <input type="text" name="LOS" />
<input type="submit" value="FIBO"/>
</form>

<?php  

$m = $_GET["LOS"];

function fii($m){
if($m==0){
    return 0;
}
elseif($m==1){
    return 1;
}
else{
return fii($m - 1) + fii($m - 2);
}

}
echo (fii($m));

?>  

</body>
</html>