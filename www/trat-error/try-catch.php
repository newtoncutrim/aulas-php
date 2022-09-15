<div class="titulo">tratamento de error</div>

<?php

// echo intdiv(7, 0);

try {
    echo intdiv(7, 0);
} catch(Error $e) {
    echo "erro encontrado";
}

try {
    throw new Exception(' : erro estranho');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e) {
    echo "divisao por zero";
} catch(Throwable $e) {
    echo "erro encontrado" . $e->getMessage() . '<br>';
} finally {
    echo "sempre executado <br>";
}

echo "execuçao normal do codigo";

