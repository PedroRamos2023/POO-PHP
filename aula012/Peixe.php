<?php 
require_once 'Animal.php';
class Peixe {
    private $corEscama;

    public function locomover() {
        echo "<p>Nadando</p>";
    }

    public function alimentar() {
        echo "<p>Comendo Substâncias</p>";
    }

    public function emitirSom() {
        echo "<p>Peixe não faz som</p>";
    }

    function soltarBolha() {
        echo "<p>Soltou uma Bolha</p>";
    }

    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }
}