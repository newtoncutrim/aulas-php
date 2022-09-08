<div class="titulo">desafio tabela 2</div>

<form action="#" method="POST">
    <div>
        <label for="linhas">linhas</label>
        <input type="number" name="linhas" value="0" id="linhas">
    </div>
    <div>
        <label for="colunas">colunas</label>
        <input type="number" name="colunas" value="0" id="colunas">
    </div>
    <button>produzir</button>
</form>
<table border="1">
    <?php
        $linhas = $_POST['linhas'] ?? 0;
        $colunas = $_POST['linhas'] ?? 0;

        // if (!$linhas) $linhas = 10;
        // if (!$colunas) $colunas = 10;


        $num = 1;
        for ($i = 0; $i < $linhas; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $colunas; $j++) {
                echo "<td>$num</td>";
                $num++;
                
            }
            echo "</tr>";
        }


    ?>
</table>