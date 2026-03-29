<?php
$f1 = 1;
$f2 = 1;
$f3 = 1;
$f4 = 1;
$f5 = 1;
$soma = "";
$i1 = "";
$i2 = "";
$i3 = "";
$i4 = "";
$i5 = "";

if(isset($_POST["n1"]) && ($_POST["n2"]) && ($_POST["n3"]) && ($_POST["n4"]) && ($_POST["n5"])) {
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

    for ($i1 = 1; $i1 <= $n1; $i1++) {
        $f1 *= $i1;
    }
    for ($i2 = 1; $i2 <= $n2; $i2++) {
        $f2 *= $i2;
    }
    for ($i3 = 1; $i3 <= $n3; $i3++) {
        $f3 *= $i3;
    }
    for ($i4 = 1; $i4 <= $n4; $i4++) {
        $f4 *= $i4;
    }
    for ($i5 = 1; $i5 <= $n5; $i5++) {
        $f5 *= $i5;
    }

    $soma = $f1 + $f2 + $f3 + $f4 + $f5;
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
if ($soma != "") {
echo "A soma do fatorial dos números é $soma";
}
else if ($soma == 0) {
    echo "Algum dos números digitados é inválido. Tente novamente.";
}
?>
</body>
</html>