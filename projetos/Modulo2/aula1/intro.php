<?php

include 'Aluno.php';
include 'Professor.php';
include 'Curso.php';

$a1 = new Aluno("Renato", "111.222.333-50");
// $a1 ->nome = "Renato";
// $a1 ->cpf = "111.222.333-50" ;

$cursoPHP = new Curso('Intrudução ao PHP', 88);  //Objeto Curso
// $cursoPHP ->nome = 'Introdução ao PHP';
// $cursoPHP ->cargaHoraria = 88;
// $cursoPHP ->descricao = 'Aprender o basico e intermediario de PHP';

$p1 = new Professor("Alessandro", "999.888.777-10", 1000);
// $p1 ->nome = 'Alessandro';
// $p1 ->cpf = '11122233322';
// $p1 ->salario = 1000;


var_dump($a1);
var_dump($cursoPHP);
var_dump($p1);
