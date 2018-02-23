<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro em php </title>
</head>
<body>

<?php
    if ($_POST) {
        include '../vendor/autoload.php';
        $curso = new \App\Model\Curso();
        $curso->setNome($_POST['nome']);
        $curso->setValor($_POST['valor']);

        $cd = new App\DAO\CursoDAO();
        if ($cd->inserir($curso))
            echo "Cadastrado com sucesso";
    }
?>
<form action="curso-inserir.php" method="post">

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome">
<br><br>

    <label for="valor">Valor:</label>
    <input type="text" id="valor" name="valor">

    <br><br>

    <label for="valor">Valor:</label>
    <input type="submit" value ="Cadastrar">


</form>
</body>
</html>
