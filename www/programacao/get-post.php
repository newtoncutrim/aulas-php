<div class="titulo">"GET / POST"</div>

<form action="#" method="POST">
    <div>
        <label for="t1">trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">executado</option>
            <option value="0">nao executado</option>]
        
        </select>
    </div>
    <div>
        <label for="t2">trabalho 2 (sexta)</label>
        <select name="t2" id="t2">
            <option value="1">executado</option>
            <option value="0">nao executado</option>
        
        </select>
    </div>

    <button>executar</button>
</form>

<?php
if(isset($_POST['t1']) && isset($_POST['t2'])) {
    $t1 = $_POST['t1'] === '1';
    $t2 = !!$_POST['t2'];
    $tv = '';
    $sorvete = false;

    if ($t1 && $t2) {
        $tv = "50";
    } elseif ($t1 or $t2) {
        $tv = '32';
    }

    if ($t1 || $t2) {
        $sorvete = true;
    }

    if ($tv) {
        $resultado = "vamos comprar uma tv de $tv";
    } else {
        $resultado = "sem tv dessa vez :( ";
    }

    $sorvete = !$sorvete;
    if ($sorvete) {
        $resultado .= "estamos mais saldaveis";
    } else {
        $resultado .= "<br> sorvete liberado";
    }

    echo $resultado;
}

?>

<!-- dois trabalhos terca e sexta 
se od dois forem executados tv 50 e sorvete
se apenas um for executado tv 32 e sorvete
se nehum for executados fica em casa mais saldavel -->


<!-- <form action="#" method="GET">
    <div>
        <label for="t1">trabalho 1 (terça)</label>
        <select name="t1" id="t1">
            <option value="1">executado</option>
            <option value="0">nao executado</option>
        </select>
    </div>
    <div>
        <label for="t2">trabalho 2 (sexta)</label>
        <select name="t2" id="t2">
            <option value="1">executado</option>
            <option value="0">nao executado</option>
        </select>
    </div>

    <button>executar</button>
</form> -->