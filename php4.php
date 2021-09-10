<!DOCTYPE html>
<html>
<body>

<form method="POST">
    <input type="text" name="login"/>
<input type="text" name="pass"/>
<input type="submit" name="POST"/>
</form>

<?php  

$tab_log = ["jacek","bartosz","wiktoria","klaudia","zygmunt"];
$tab_pass = ["owca","owca2","owca3","owca4","owca5"];
$login = $_POST["login"];
$pass = $_POST["pass"];

if($tab_log[$a] == $_POST['login'] && $tab_pass[$b] == $_POST['pass']){
    echo "Zalogowany!";
}
else{
    echo "Nie działa";
}
echo strlen($login);
echo strlen($pass);
?>  

</body>
</html>