    <?php
    include 'vendor\autoload.php';
    $c1 = new App\Model\Curso();
    //$c1->setNome("Arduino em 2 horas");
    //$c1->setValor(100.00);

    $c1->setNome("");

        // echo $c1 ->getNome() . $c1->getValor();
    $c1DAO = new App\DAO\CursoDAO();
        // $c1DAO->inserir($c1);
        foreach ($c1DAO->pesquisar($c1) as $item){
            echo $item->getId() . $item->getNome() . $item->getValor() . "<br>";

        }
    // para rodar http://localhost:8080/app_cursos/view/curso-inserir.php

    // localhost:8080/testacurso.php
    // manter php rodando em projetos\app_cursos