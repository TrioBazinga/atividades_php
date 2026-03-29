<!--
Data: 02/03/2026
Autor: Otávio Tarallo Squarizi e Pietro Barros dos Santos
Objetivo:

Exercício 3 - Calculadora Aritmética
Faça um programa que leia dois números e um operador ("+", "-", "*" ou "/").  
O programa deve mostrar o resultado da operação.
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Operação entre dois valores (POST)</title>
</head>
<body>
    <h1>Operação entre dois valores</h1>
    <form action="calcula.php" method="post">
        <label>Digite o primeiro número: </label>
        <input type="number" name="n1" step="any" required>
        <br><br>
        <label>Digite o segundo número: </label>
        <input type="number" name="n2" step="any" required>
        <br><br>
        <label>Qual operação você deseja efetuar? <br>Digite exatamente '+', ou '-', ou '*' ou '/"</label>
        <input type="text" name="t" required>
        <input type="submit" value="Enviar">
</form>

</body>
</head>