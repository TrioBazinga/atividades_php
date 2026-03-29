<!--
Data: 02/03/2026
Autor: Otávio Tarallo Squarizi e Pietro Barros dos Santos
Objetivo:

Exercício 1 - Intervalo entre 100 e 200
Faça um programa que receba um número e diga se este número está no intervalo entre 100 e 200.
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Número entre 100 e 200 (POST)</title>
</head>
<body>

  <h1>Verifique se o número está entre 100 e 200</h1>

  <form action="calcula.php" method="post">
    <label>Digite um número: </label>
    <input type="number" name="n1" step="any" required>
    <br><br>

    <input type="submit" value="Verificar intervalo">
  </form>

</body>
</html>