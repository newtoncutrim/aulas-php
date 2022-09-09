<div class="titulo">traits2</div>

<?php


trait validacao {
    public function validasrt($str) {
        return isset($str) && $str != " ";
    }
}

trait validamelhor
{
    public function validasrt($str)
    {
        return isset($str) && trim($str);
    }
}

class resultado {
    use validacao, Validamelhor {
        // validacao::validasrt insteadOf validamelhor;
        validamelhor::validasrt insteadOf validacao;
        
        validamelhor::validasrt as validasimples;// mudando o nome da funcao 
    }// use esse com essa funcao ao inves desse !

}

$resultado = new resultado();
var_dump( $resultado->validasimples(' '));
?>