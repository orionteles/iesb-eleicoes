<meta charset="utf-8" />
<?php
$pessoas = array(
    array(
        'Nome'=>'Maria',
        'Telefone'=>'(61) 12346-5798',
        'Endereco'=>'ABC',
        'Contas'=>array(
            array(
                'Banco'=>'Banco do Brasil',
                'Agencia'=>'3454-5',
                'Conta'=>'123456',
                'Saldo'=>array(
                    '2015-01-01'=>100,
                    '2015-02-01'=>250.59,
                    '2015-03-01'=>30.99,
                    '2015-04-01'=>-1000,
                    '2015-05-01'=>40,
                    '2015-06-01'=>2500.98,
                    '2015-07-01'=>500,
                    '2015-08-01'=>906.34,
                ),
            ),
            array(
                'Banco'=>'Caixa Econômica',
                'Agencia'=>'007008',
                'Conta'=>'0504',
                'Saldo'=>array(
                    '2015-04-01'=>900,
                    '2015-05-01'=>400,
                    '2015-06-01'=>200.80,
                    '2015-07-01'=>5000,
                    '2015-08-01'=>1906.05,
                ),
            ),
        ),
    ),
    array(
        'Nome'=>'José',
        'Telefone'=>'',
        'Endereco'=>'abcdef',
        'Contas'=>array(
            array(
                'Banco'=>'Banco do Brasil',
                'Agencia'=>'3454-5',
                'Conta'=>'123456',
                'Saldo'=>array(
                    '2015-01-01'=>900,
                    '2015-02-01'=>50.45,
                    '2015-03-01'=>-500,
                    '2015-04-01'=>10.19,
                ),
            ),
        ),
    ),
    array(
        'Nome'=>'João',
        'Telefone'=>'(61) 8765-4321',
        'Endereco'=>'DEF',
        'Contas'=>array(
            array(
                'Banco'=>'Banco do Brasil',
                'Agencia'=>'3454-5',
                'Conta'=>'6548',
                'Saldo'=>array(
                    '2015-01-01'=>1100,
                    '2015-02-01'=>50.90,
                    '2015-03-01'=>530.91,
                    '2015-04-01'=>-500,
                    '2015-05-01'=>-40,
                    '2015-06-01'=>200.28,
                    '2015-07-01'=>5005,
                    '2015-08-01'=>90.71,
                ),
            ),
            array(
                'Banco'=>'Bradesco',
                'Agencia'=>'789',
                'Conta'=>'0050',
                'Saldo'=>array(
                    '2015-02-01'=>9500,
                    '2015-03-01'=>800,
                    '2015-04-01'=>-100,
                    '2015-05-01'=>540,
                    '2015-06-01'=>20.80,
                    '2015-07-01'=>9510,
                ),
            ),
        ),
    ),
);
echo '<pre>';
print_r($pessoas);
echo '</pre>';


foreach($pessoas as $pessoa){
    echo "<p>Nome: {$pessoa['Nome']}</p>";
    echo "<p>Telefone: {$pessoa['Telefone']}</p>";
    echo "<p>Endereço: {$pessoa['Endereco']}</p>";

    echo '<h4>Contas</h4>';
    foreach ($pessoa['Contas'] as $conta) {
        echo "<p>Banco: {$conta['Banco']}</p>";
        echo "<p>Agência: {$conta['Agencia']}</p>";
        echo "<p>Conta: {$conta['Conta']}</p>";

        echo '<h5>Saldos</h5>';
        foreach ($conta['Saldo'] as $data => $saldo) {

            $data = date('d/m/Y', strtotime($data));
            $saldo = number_format($saldo, 2, ',', '.');

            echo "<p>{$data}: R$ {$saldo}</p>";

        }
    }

    echo '<hr />';
}