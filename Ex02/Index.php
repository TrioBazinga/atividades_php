<!--
Data: 02/03/2026
Autor: Otávio Tarallo Squarizi e Pietro Barros dos Santos
Objetivo:

Exercício 2 - Conversão de Temperatura
Faça um programa que leia um caractere "F" ou "C", indicando se o valor informado está em Fahrenheit ou Celsius.  
Depois, o programa deve converter para a outra unidade.
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Temperatura em Celsius e Fahrenheit (POST)</title>
</head>
<body>
    <h1>Digitar e converter a temperatura</h1>
    <form action="calcula.php" method="post">
        <label>Digite a temperatura: </label>
        <input type="number" name="n" step="any" required>
        <br><br>
        <label>Qual a unidade da temperatura? <br>Escreva exatamente 'c' para Celsius ou 'f' para Fahrenheit: </label>
        <input type="text" name="t" step="any" required>
        <br><br>
        <input type="submit" value="Enviar">
</form>

</body>
</html>