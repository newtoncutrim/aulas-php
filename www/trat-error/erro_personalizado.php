<div class="titulo">erros personalizados</div>

<?php
class FaixaEtariaExepition extends Exception {
    public function __construct($mensage, $code = 0, $previus = null)
    {
        parent::__construct($mensage, $code, $previus);
    }
}

//exeçoes previstas
function CalcularTempoAposentadoria($idade) {
    if ($idade < 18) {
        throw new FaixaEtariaExepition("muito novo(a)<br>");
    }

    if ($idade > 70) {
        throw new FaixaEtariaExepition("ja deveria estar aposentado(a)<br>");
    }
    return 70 - $idade;
}

$idades = [15, 30, 45, 60, 80];

foreach ($idades as $idade) {
    try {
        $tempoRestante = CalcularTempoAposentadoria($idade);
        echo "idade : $idade , falta: $tempoRestante<br>";
    } catch(FaixaEtariaExepition $e) {
        echo "nao deu certo $idade<br>";
        echo "motivo: {$e->getMessage()}<br>";
    }
}

echo "<br>fim !";
?>