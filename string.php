<?php

echo '<h1>Exercício 1</h1>';
$nome = 'Orion Teles de Mesquita';
echo "A string <b>$nome</b> tem <b style='color: red;'>" . strlen($nome) . '</b> caracteres';

echo '<h1>Exercício 2</h1>';
$nome = 'Orion Teles de Mesquita';
echo substr($nome, 0, 5);

echo '<h1>Exercício 3</h1>';
$nome = 'orion teles de mesquita';
echo ucfirst($nome);

echo '<h1>Exercício 4</h1>';
$nome = 'orion teles de mesquita';
echo strtoupper($nome);

echo '<h1>Exercício 5</h1>';
$nome = 'ORION TELES DE MESQUITA';
echo strtolower($nome);

echo '<h1>Exercício 6</h1>';
$nome = 'Orion_Teles_de_Mesquita';
echo str_replace('_', ' ', $nome);

echo '<h1>Exercício 7</h1>';
$nome = 'XXXXXXXXXXXXXXXXXOrion Xavier de MesquitaXXXXXXXXXXXXXXXXXXXXXXXX';
echo trim($nome, 'X');

echo '<h1>Exercício 8</h1>';
$nome = 'Orion Teles de Mesquita';
echo strpos($nome, 'e');

echo '<h1>Exercício 9</h1>';
$nome = 'Orion Teles de Mesquita';
echo strrpos($nome, 'e');

echo '<h1>Exercício 10</h1>';
$numero = '123';
echo str_pad($numero, 7, '0', STR_PAD_LEFT);
