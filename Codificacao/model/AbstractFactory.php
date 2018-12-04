<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

Classe abstrata que define o padrão das fábricas
*/
abstract class AbstractFactory{
    protected $db;
    /*protected $senhadb;
    protected $servidor;
    protected $usariodb;*/

    public function __construct() {
        try {
            $this->db = new PDO("sqlite:model/bd/ControlHotel.sqlite");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    /*  try {
            $usariodb = "root";
            $senhadb = "";
            $servidor = "localhost";
            $db = "controlhotel";
            $conexao = mysqli_connect($servidor,$usariodb,$senhadb);   
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }*/

    }
    abstract public function reservarQuarto();
    abstract public function listarClientes(): array;
    abstract public function salvarCliente($obj);
    abstract public function efetuarLogin($email,$senha): array;
    /*abstract public function buscarIdCliente($param): array;*/
    
    protected function queryRowsToListOfObjects(PDOStatement $result, $nameObject): array {
        $list = array();
        $r = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($r as $row) {
            //unset($row[0]); essa linha foi comentada pois ignorava o id do objeto
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }
}

?>