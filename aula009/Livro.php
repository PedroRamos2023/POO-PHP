<?php
require_once 'Pessoa.php';
require_once 'Publicacao.php';

class Livro implements Publicacao {
    private $titulo;
    private $autor;
    private $totalPaginas;
    private $paginaAtual;
    private $aberto;
    private $leitor;

    function __construct($titulo, $autor, $totalPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totalPaginas = $totalPaginas;
        $this->leitor = $leitor;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getAutor() {
        return $this->autor;
    }

    function getTotalPaginas() {
        return $this->totalPaginas;
    }

    function getPaginaAtual() {
        return $this->paginaAtual;
    }

    function getAberto() {
        return $this->aberto;
    }

    function getLeitor() {
        return $this->leitor;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setAutor($autor) {
        $this->autor = $autor;
    }

    function setTotalPaginas($totalPaginas) {
        $this->totalPaginas = $totalPaginas;
    }

    function setPaginaAtual($paginaAtual) {
        $this->paginaAtual = $paginaAtual;
    }

    function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function detalhes() {
        echo "<hr>Livro " . $this->titulo . " escrito por " . $this->autor;
        echo "<br>Páginas: " . $this->totalPaginas . " atual " . $this->paginaAtual;
        echo "<br>Sendo lido por " . $this->leitor->getNome();
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($p) {
        if ($p > $this->totalPaginas) {
            $this->paginaAtual = 0;
        } else {
            $this->paginaAtual = $p;
        }
    }

    public function avancarPagina() {
        $this->paginaAtual ++;
    }

    public function voltarPagina() {
        $this->paginaAtual --;
    }
}