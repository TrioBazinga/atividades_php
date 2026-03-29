<?php
$resultado = "";

if (isset($_POST["n1"]) && ($_POST["n2"]) && ($_POST["t"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $t = $_POST["t"];

    if ($t == '+') {
        $resultado = $n1 + $n2;
    }
    else if ($t == '-') {
        $resultado = $n1 - $n2;
    }
    else if ($t == '*') {
        $resultado = $n1*$n2;
    }
    else if ($t == '/') {
        $resultado = $n1/$n2;
    }
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
    echo "<h2>Resultado</h2>";
    echo "<p>$resultado</p>";
}
else {
    $resultado = "Algum dos valores digitados é inválido. Tente novamente.";
}
?>
</body>
</html>
