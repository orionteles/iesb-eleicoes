<?php

$aPessoas = [
    'Douglas Santana',
    'Maria das Dores',
    'João Maria José',
    'Kleber Machado',
    'Galvão Bueno'
];

echo '<pre>';
print_r($aPessoas); ?>
<html>
<head>
    <style>

        table {
            width: 100%;
        }

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        table#t01 tr:nth-child(even) {
            background-color: #eee;
        }

        table#t01 tr:nth-child(odd) {
            background-color: #fff;
        }

        table#t01 th {
            background-color: black;
            color: white;
        }
    </style>

</head>
<body>

<div id="container">
    <h1>Select</h1>
    <select name="" id="">
        <?php foreach ($aPessoas as $key => $nome) { ?>
            <option value=""><?= $nome ?></option>
        <?php } ?>
    </select>

    <h1>Tabela</h1>
    <table style="width:100%">
        <thead>
        <tr>
            <th style="width: 10em; text-align: center">Ação</th>
            <th>Nome</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($aPessoas as $key => $nome) { ?>
            <tr>
                <td>
                    <a href="#">Alterar</a>
                    <a href="#">Excluir</a>
                </td>
                <td><?= $nome ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <h1>Checkbox</h1>
    <?php foreach ($aPessoas as $key => $nome) { ?>
        <input type="checkbox" name="<?= $key ?>" value=""><?= $nome ?><br>
    <?php } ?>

    <h1>Rádio</h1>
    <?php foreach ($aPessoas as $key => $nome) { ?>
        <input type="radio" name="teste" value="<?= $key ?>"><?= $nome ?><br>
    <?php } ?>
</div>

</body>
</html>
