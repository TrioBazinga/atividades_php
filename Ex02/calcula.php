<?php 
$resultado = "";
$final = "";

if (isset($_POST["n"]) && ($_POST["t"])) {
    $n = $_POST["n"];
    $t = $_POST["t"];

    if ($t == 'c') {
        $resultado = ($n * 1.8) + 32;
        $final = $resultado . "ºF";
    }
    else if ($t == 'f') {
        $resultado = 5/9 * ($n - 32);
        $final = $resultado . "ºC";
    }
}
else {
    $resultado = "A temperatura digitada é inválida. Tente novamente.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado (POST)</title>
</head>
<body>
<?php
if ($resultado != "") {
    echo "<h2>Resultado da conversão: </h2>";
    echo "<p>$final</p>";
}
?>
</body>
</html>