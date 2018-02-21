<?php
/**
 * Created by PhpStorm.
 * User: 34987932253
 * Date: 20/02/2018
 * Time: 21:47
 */

namespace App\DAO;


class CursoDAO
{
public funcition public function __construct()
{
    $this->conexao = new \PDO("mysql:dbname=db_cursos; host=localhost", "root", "Suporte99");
    $this->conexao->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

}
public function inserir($curso)
{
    $sql="insert into cursos (nome,valor) VALUES (:nome, :valor)";
    try{
        $insercao = $this->conexao->prepare($sql);
        $insercao->bindValue(":nome",
        $aluno->getNome());
        $insercao->execute();

    }catch (\PDOException $erro){
        echo $erro -> getMessage();

    }
}
}