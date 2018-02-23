<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="curso-inserir.php"method="post">
    <label for="nome">Pesquisar por nome</label>
    <input type="text" id="nome" name="nome">
    <input type="submit" value="Pesquisar">

    <?php
    if ($_POST){
    include "../vendor/autoload.php";
    $c1 = new \App\Model\Curso();
    echo "<table style='border:1px solid black'><th><th>id</th><th>nome</th>th>Valor</th> </tr>"
    foreach ($c1DAO->pesquisar($c1) as $item){
        echo "<tr>";
        echo "<td> {$item->getId()}</td>";
        echo "<td> {$item->getNome()}</td>";
        echo "<td> {$item->getValor()}</td>";
        echo "</tr>";

}
    }
    echo"</table";
    }
    ?>

</form>
</body>
</html>