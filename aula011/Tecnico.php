<?php 
require_once 'Aluno.php';
class Tecnico extends Aluno {
    private $registroProfissional;

    public function praticar() {
        echo "<p>O aluno está praticando</p>";
    }

    function getRegistroProfissional() {
        return $this->registroProfissional;
    }

    function setRegistroProfissional($registroProfissional) {
        $this->registroProfissional = $registroProfissional;
    }
}