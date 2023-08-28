<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - POO</title>
</head>
<body>
    <pre>
        <?php
            require_once 'Video.php';
            require_once 'Gafanhoto.php';
            require_once 'Visualizacao.php';

            $v[0] = new Video("Aula 1 de POO");
            $v[1] = new Video("Aula 12 de PHP");
            $v[2] = new Video("Aula 15 de HTML5");

            $g[0] = new Gafanhoto("Jubileu", 22, "M", "juba");
            $g[1] = new Gafanhoto("Creuza", 12, "F", "creuzita");

            $visualizacao[0] = new Visualizacao($g[0], $v[2]);
            $visualizacao[1] = new Visualizacao($g[0], $v[1]);

            $visualizacao[0]->avaliar();
            $visualizacao[1]->avaliarPorcentagem(85);
            print_r($visualizacao);
        ?>
    </pre>
</body>
</html>