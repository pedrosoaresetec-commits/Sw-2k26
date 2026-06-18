<?php

$nota= [8.5, 6.0, 4.5, 9.0, 7.2, 5.5, 3.8, 10.0, 6.8, 4.9];
$aprovados = 0;
$recuperacao = 0;
$reprovados = 0;
$somaNotas = 0;

function classificarAluno($notas) 
    
    if ($nota >= 7) {
        return "Aprovado";
    }
    elseif ($notas >= 5 && $notas < 7) {
        return "Recuperação";
    }
    else {
        return "Reprovado";
    }

foreach ($notas as $aluno => $nota) {
    # code...
}





?>