<div class="titulo">"Desafio conversor"</div>


<form action="#" method="post">
    <input type="text" name="parametro">
    <select name="conversao" id="conversao">
        <option value="" type="hidden"></option>
        <option value="km-milha">km > milha</option>
        <option value="milha-km"> milha > km</option>
        <option value="metros-km">metros > km</option>
        <option value="km-metros">km > metros</option>
        <option value="fh-ceu">fh > ceucios</option>
        <option value="ceu-fh">ceucios > fh</option>
    </select>
    <button>calcular</button>
</form>

<?php
if (isset($_POST['parametro'])) {
    $valor = $_POST['parametro'];
    $conversao = $_POST['conversao'];

    switch ($conversao) {
        case 'km-milha':
            $calKm_Milha = $valor * 0.621;
            echo $calKm_Milha;
            break;
        case 'milha-km':
            $calMilha_Km = $valor * 1.609;
            echo $calMilha_Km;
            break;
        case 'metros-km':
            $calMetros_Km = $valor * 0.001;
            echo $calMetros_Km;
            break;
        case 'km-metros':
            $calKm_Metros = $valor * 1000;
            echo $calKm_Metros;
            break;
        case 'fh-ceu':
            $calFH_Ceu = ($valor - 32) * 5 / 9;
            echo "{$calFH_Ceu}º";
            break;
        case 'ceu-fh':
            $calCeu_FH = ($valor * 9 / 5) + 32;
            echo "{$calCeu_FH}º";
            break;
        default:
            echo "invalido";
    }
} else {
    echo "digite o valor a ser convertido";
}


// const FATOR_KM_MILHA = 0.621371;
// const FATOR_METRO_KM = 1000;

// if (isset($_POST['conversao'])) {

// $parametro = $_POST['parametro'] ?? 0;
// switch ($_POST['conversao']) {
//     case 'km-milha':
//         $distancia = $parametro * FATOR_KM_MILHA;
//         $mensagem = "$parametro km = $distancia milhas"; 
//         break;
//     case 'milha-km':
//         $distancia = $parametro / FATOR_KM_MILHA;
//         $mensagem = "$parametro milhas = $distancia km";
//         break;
//     case 'metros-km':
//         $distancia = $parametro / FATOR_KM_MILHA;
//         $mensagem = "$parametro metros = $distancia km";
//         break;
//     case 'km-metros':
//         $distancia = $parametro * FATOR_KM_MILHA;
//         $mensagem = "$parametro km = $distancia metros";
//         break;
//     default:
//         echo "invalido";
// }
// }
