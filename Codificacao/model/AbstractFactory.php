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
            $this->db = new PDO("sqlite:model/bd/controlhotel.sqlite");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }
    /*Funções abstratas*/
    /*Listas*/
    abstract public function listarReservas($codigoCliente): array;
    abstract public function listarQuartos($idQuarto): array;
    //abstract public function listarClientes(): array;
    /*Buscas*/
    abstract public function buscarQuartoPorId(int $idQuarto): array;
    abstract public function buscarReserva($idReserva): array;
    /*Salvar no bd*/
    abstract public function reservarQuarto($novaReserva);
    abstract public function salvarCliente($client);
    abstract public function efetuarLogin($email,$senha): array;
    /*Atualizar dados*/
    abstract public function atualizarReserva($reserva);
    /*Excluir reserva*/
    abstract public function excluirReserva($reserv);

    /*Função que pega o resultado de qualquer pesquisa no banco de dados e transforma em uma classe abstrada
    instanciando então um objeto daquele tipo---Função retirada dos exercícios em sala de aula*/    
    protected function queryRowsToListOfObjects(PDOStatement $result, $nameObject): array {
        $list = array();
        $r = $result->fetchAll(PDO::FETCH_NUM);
        foreach ($r as $row) {
            $ref = new ReflectionClass($nameObject);
            $list[] = $ref->newInstanceArgs($row);
        }
        return $list;
    }
}

?>