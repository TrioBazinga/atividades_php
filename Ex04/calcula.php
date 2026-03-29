<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado (POST)</title>
</head>
<body>
<?php
$i = "";
$j = "";
if(isset($_POST["n"])) {
        $n = $_POST["n"];
    {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}
}
?>
</body>
</html>