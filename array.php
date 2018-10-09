<?php
$aPessoas = [
    'Orion Teles',
    'João da Silva',
    'Maria das Couves',
    'Aloísio Chulapa',
    'Jonas da Silva',
];

echo '<pre>';
print_r($aPessoas);
echo '</pre>';
?>
<h3>Select</h3>
<select name="" id="">
    <option value="">Selecione</option>
    <?php foreach ($aPessoas as $pessoas) {
        echo "<option value=''>{$pessoas}</option>";
    } ?>
</select>

<h3>Table</h3>
<table width="100%" border="1">
    <thead>
        <tr>
            <th>Ação</th>
            <th>Nome</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($aPessoas as $pessoas) {
            echo "<tr>
                <td>Alterar</td>
                <td>{$pessoas}</td>
            </tr>";
            } ?>
        </tr>
    </tbody>
</table>

<h3>Checkbox</h3>
<?php foreach ($aPessoas as $pessoas) {
    echo "<input type='checkbox'>{$pessoas} <br>";
} ?>

<h3>Radio</h3>
<?php foreach ($aPessoas as $pessoas) {
    echo "<input type='radio' name='pessoa'>{$pessoas} <br>";
} ?>