<?php
class Caneta{
    var $cor;
    var $tampada;
    var $ponta;
    var $marca;

    function rabiscar(){
        if ($this->tampada === true) {
            echo "ERRO:: Caneta Tampada!";
        }else {
            echo "Estou Rabiscandoooo";
        }
    }

    function tampar(){
        $this->tampada = true;
    }

    function destampar(){
        $this->tampada = false;
    }

    function texto(){
        if ($this->tampada === true) {
            $this->tampada = "tampada";
        }else {
            $this->tampada = "destampada";
        }
        echo "<p>A caneta de cor ".$this->cor." e marca ".$this->marca." com ponta ".$this->ponta." está ".$this->tampada."</p>";
    }

}


?>