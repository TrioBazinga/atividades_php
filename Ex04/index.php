<!--
Data: 02/03/2026
Autor: Otávio Tarallo Squarizi e Pietro Barros dos Santos
Objetivo:

Exercício 4 - Triângulo Numérico
Leia um número n e imprima n linhas no seguinte formato (exemplo para n = 6):

1  
1 2  
1 2 3  
1 2 3 4  
1 2 3 4 5  
1 2 3 4 5 6  
-->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Triângulo numérico (POST)</title>
</head>
<body>
    <h1>Triângulo numérico</h1>
    <form action="calcula.php" method="post">
        <label>Digite o número: </label>
        <input type="number" name="n" step="any" required>
        <input type="submit" value="Enviar">
</form>

</body>
</html>