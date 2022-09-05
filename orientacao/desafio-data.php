<div class="titulo">desafio data oo</div>

<?php
class Data {
   public $dia;
   public $mes;
   public $ano;

   public function exibirData() {
        return "{$this->dia}/{$this->mes}/{$this->ano}";
   }
}

$data = new Data();
$data->dia = 12;
$data->mes = 05;
$data->ano = 1998;

echo $data->exibirData();
?>