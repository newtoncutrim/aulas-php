<div class="titulo">integraçao CSS</div>

<h1 center>
    <?php
    echo "ola";
    echo "<strong>";
    echo " mundo ";
    echo "</strong>";
    ?>
</h1>

<?= "<div>outra forma de me 'expressar'!</div>"?>
<br>

<div><button><?= "legal" ?></button></div>

<style>
    button {
        padding: <?= 2 * 10?>px; /*gera 20px em php com interaçao apenas exemplo*/
        background-color: blue;
        border-radius: 5px;
    }
    button:hover {
        background-color: green;
    }

    [center] {
        display: flex;
        justify-content: center;
        margin: 0;
    }
</style>