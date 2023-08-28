<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 11 - POO</title>
</head>
<body>
    <pre>
        <?php 
            require_once 'Visitante.php';
            require_once 'Aluno.php';
            require_once 'Professor.php';
            require_once 'Bolsista.php';
            require_once 'Tecnico.php';

            $v1 = new Visitante();
            $v1->setNome("Luiz");
            $v1->setIdade(19);
            $v1->setSexo("M");
            print_r($v1);

            $a1 = new Aluno();
            $a1->setNome("Pedro");
            $a1->setMatricula(1111);
            $a1->setIdade(16);
            $a1->setCurso("Informática");
            $a1->pagarMensalidade();
            print_r($a1);

            $p1 = new Professor();
            $p1->setNome("Fábio");
            $p1->setIdade(60);
            $p1->setSexo("M");
            $p1->setEspecialidade("COBOL");
            $p1->setSalario(2500);
            $p1->receberAumento(100);
            print_r($p1);

            $b1 = new Bolsista();
            $b1->setNome("Jubileu");
            $b1->setMatricula(1112);
            $b1->setBolsa(12.5);
            $b1->setCurso("Administração");
            $b1->setIdade(17);
            $b1->pagarMensalidade();
            print_r($b1);

            $t1 = new Tecnico();
            $t1->setNome("Felipe");
            $t1->setIdade(22);
            $t1->setSexo("M");
            $t1->setMatricula(1113);
            $t1->setCurso("Ciência da Computação");
            $t1->pagarMensalidade();
            $t1->setRegistroProfissional(1);
            $t1->praticar();
            print_r($t1);
        ?>
    </pre>
</body>
</html>