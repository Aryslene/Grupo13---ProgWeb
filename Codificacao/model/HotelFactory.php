<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

-->Classe que herda de AbstractFactory, implementando o padrão do projeto
*/
    require_once("Reserva.php");
    require_once("AbstractFactory.php");

class HotelFactory extends AbstractFactory{
    /*Construtor da classe HotelFactory, chamando o construtor da classe pai */
    public function __contruct(){
        parent::__contruct();
    }

    /*Função que veio da classe AbstractFactory utilizada para realizar a reserva do quarto*/
    public function reservarQuarto(){   
    }

    /*Função que veio da classe AbstractFactory utilizada para realizar a listagem dos clientes */
    public function listarClientes(): array {
		$sql = "SELECT * FROM Cliente";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
			return $resultObject;
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}
    }

    /*Função que veio da classe AbstractFactory utilizada para salvar o cliente no banco de dados*/
    public function salvarCliente($obj) {
        $cliente = $obj;
        try {
            $sql = "INSERT INTO Cliente (nome,genero,telefone,dataNasc,pais,estado,
            cidade,endereco,email,senha) VALUES ('"
                . $cliente->getNome() . "', '"
                . $cliente->getGenero() . "', '"
                . $cliente->getTelefone() . "', '"
                . $cliente->getDataNasc() . "', '"
                . $cliente->getPais() . "', '"
                . $cliente->getEstado() . "', '"
                . $cliente->getCidade() . "', '"
                . $cliente->getEndereco() . "', '"
                . $cliente->getEmail() . "', '"
                . $cliente->getSenha() . "' )";
            if ($this->db->exec($sql)) {
                $result = true;
            } else {
                $result = false;
            }
        } catch (PDOException $exc) {
            echo $exc->getMessage();
            $result = false;
        }
        return $result;
    }

    /*Função utilizada para buscar cliente por email tanto no login quanto durante o cadastro */
	public function buscarPorEmail($param): array {
        $sql = "SELECT * FROM Cliente WHERE email='" . $param . "'";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
		} catch (Exception $exc) {

			echo $exc->getMessage();
			$resultObject = null;
		}
		return $resultObject;
    }
    
    /*Função utilizada para buscar id do cliente */
	/*public function buscarIdCliente($param): array {
		$sql = "SELECT idCliente FROM Cliente WHERE email='" . $param . "'";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array;
		}
		return $resultObject;
    }*/
    
    /*Função utilizada para efetuar login do cliente*/
    public function efetuarLogin($email,$senha): array {
        $sql = "SELECT idCliente FROM Cliente WHERE email= ' ". $email. " ' AND senha=' ".$senha."' " ;
		try {
			$resultRows = $this->db->query($sql);

			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Cliente");
			return $resultObject;
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}
    }
}

?>