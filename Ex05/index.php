<!--
Data: 02/03/2026
Autor: Otávio Tarallo Squarizi e Pietro Barros dos Santos
Objetivo:

Exercício 5 - Somatório de Fatoriais
Leia 5 números inteiros e mostre a soma dos fatoriais desses números
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UFT-8">
        <title>Somatória de fatoriais (POST)</title>
    </head>
    <body>
        <form action="calcula.php" method="post">
        <h1>Somatória de fatoriais</h1>
        <label>Digite o primeiro número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="n2" step="any" required>
        <br><br>
        <label>Digite o terceiro número: </label>
        <input type="number" name="n3" step="any" required>
        <br><br>
        <label>Digite o quarto número: </label>
        <input type="number" name="n4" step="any" required>
        <br><br>
        <label>Digite o quinto número: </label>
        <input type="number" name="n5" step="any" required>
        <br><br>
        <input type="submit" value="Enviar">
</form>
    </body>
    </html>