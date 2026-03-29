<?php
$resultado = "";

if (isset($_POST["n1"])) {
    $n1 = $_POST["n1"];

    if ($n1 >= 100 && $n1 <= 200) {
        $resultado = "O número $n1 está entre 100 e 200.";
    } else {
        $resultado = "O número $n1 não está entre 100 e 200.";
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
      <?php if ($resultado != ""): ?>
      <h2>Resultado:</h2>
      <p><?php echo $resultado; ?></p>
  <?php endif; ?>
</body>
</html>