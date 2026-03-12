<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processa de Dados</title>
</head>
<body>
    
    <?php
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        $idade = $_GET['idade'];

        $ano_atual = date('Y');
        $mes_atual = date('M');
        $dia_atual = date('d');
        $ano_nasc = $ano_atual - $idade;
    ?>

    <p>O dia atual é: <?php echo $dia_atual ?> </p>
    <p>O mes atual é: <?php echo $mes_atual ?> </p>
    <p>O ano atual é: <?php echo $ano_atual ?></p>
    <p>O nome digitado é: <?php echo $nome ?> </p>
    <p>>O email digitado é: <?php echo $email ?></p>
    <p>>A idade digitada é: <?php echo $idade ?></p>
    <p>>O ano de nascimento do usuario é: <?php echo $ano_nasc ?></p>
</body>
</html>