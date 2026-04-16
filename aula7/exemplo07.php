<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$produtos = [
    ['nome' => 'Produto A', 'preco' => 10.99],
    ['nome' => 'Produto B', 'preco' => 15.50],
    ['nome' => 'Produto C', 'preco' => 7.99]
];

echo "<table border='1'>";
echo "<tr><th>Nome</th><th>Preço</th></tr>";

foreach ($produtos as $produto) {
    echo "<tr>
            <td>{$produto['nome']}</td>
            <td>{$produto['preco']}</td>
          </tr>";
}

echo "</table>";
?>

</body>
</html>