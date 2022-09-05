<div class="titulo">array</div>

<?php

$carros = [
    [
        "nome" => "corola",
        "quantidade" => 30
    ],
    [
        "nome" => "celta",
        "quantidade" => 50
    ],
    [
        "nome" => "cronos",
        "quantidade" => 500,
    ]

];
$carros[0]["placa"] = 2;
$carros[1]["placa"] = 2;
$carros[2]["placa"] = 2;
var_dump($carros);
?>
<table border="1">
    <thead>
        <tr>
            <th>nome</th>
            <th>quantidade</th>
            <th>placa</th>
        </tr>
    </thead>
    <?php foreach ($carros as $carro) {
    ?>
        <tbody>
            <tr>
                <td><?= $carro["nome"]; ?></td>
                <td><?= $carro["quantidade"]; ?></td>
                <td><?= $carro["placa"]; ?></td>
            </tr>
        </tbody>
    <?php } ?>
</table>