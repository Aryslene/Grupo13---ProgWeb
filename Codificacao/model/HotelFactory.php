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
    require_once("Quarto.php");
    require_once("Cliente.php");
    require_once("AbstractFactory.php");

class HotelFactory extends AbstractFactory{
    /*Construtor da classe HotelFactory, chamando o construtor da classe pai */
    public function __contruct(){
        parent::__contruct();
    }

    /*Função que veio da classe AbstractFactory utilizada para realizar a reserva do quarto*/
    public function reservarQuarto($novaReserva){   
        $reserva = $novaReserva;
        try {
            $sql = "INSERT INTO Reserva (dataEntrada, dataSaida,codCliente,codQuarto)
             VALUES ('"
                . $novaReserva->getDataEntrada() . "', '"
                . $novaReserva->getDataSaida() . "', '"
                . $novaReserva->getCodCliente() . "', '"
                . $novaReserva->getCodQuarto(). "')";
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
    
    /*Função que veio da classe AbstractFactory utilizada para listar os quartos*/
    public function listarQuartos($idQuarto): array {
		$sql = "SELECT * FROM Quarto WHERE idQuarto='".$idQuarto."' ";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Quarto");
			return $resultObject;
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}
    }   
    
    /*Função para listar quartos de cada cliente*/
    public function listarQuartosDeCliente($idCliente): array {
		$sql = "SELECT * FROM Quarto WHERE idCliente='".$idCliente."' ";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Quarto");
			return $resultObject;
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}
    }   

    /*Função que veio da classe AbstractFactory utilizada para listar as reservas feitas pelo cliente*/
    public function listarReservas($codigoCliente): array{
        $codCliente =$codigoCliente;
		$sql = "SELECT * FROM Reserva WHERE codCliente='".$codCliente."'";
		try {
			$resultRows = $this->db->query($sql);
			if (!($resultRows instanceof PDOStatement)) {
				throw new Exception("Tem erro no seu SQL!<br> '" . $sql . "'");
			}
			$resultObject = $this->queryRowsToListOfObjects($resultRows, "Reserva");
			return $resultObject;
		} catch (Exception $exc) {
			echo $exc->getMessage();
			$resultObject = array();
		}        
    }

    /*Função que veio da classe AbstractFactory utilizada para salvar o cliente no banco de dados*/
    public function salvarCliente($client) {
        $cliente = $client;
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

    /* Função utilizada para...*/
    public function getCliente($param): Cliente {
        $sql = "SELECT * FROM Cliente WHERE idCliente='" . $param . "'";
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
		return $resultObject[0];
    }
    
    /*Função utilizada para buscar id do cliente */
    public function buscarQuarto($tipoQuarto): array{
        $sql = "SELECT * FROM Quarto WHERE tipoQuarto='". $tipoQuarto. "'";
        try{
            $resultRows = $this->db->query($sql);
            if(!$resultRows instanceof PDOStatement){
                throw new Exception("SQL COM ERRO!'".$sql."'");
            }
            $resultObject = $this->queryRowsToListOfObjects($resultRows,"Quarto");
            return $resultObject;
        }catch(Exception $exc){
            echo $exc->getMessage();
            $resultObject = array();
        }
    }

    /*Função que veio da classe AbstractFactory utilizada para listar os quartos*/
    public function buscarQuartoPorId(int $idQuarto): array{
        $sql = "SELECT * FROM Quarto WHERE idQuarto ='". $idQuarto. "'";
        try{
            $resultRows = $this->db->query($sql);
            if(!$resultRows instanceof PDOStatement){
                throw new Exception("SQL COM ERRO!'".$sql."'");
            }
            $resultObject = $this->queryRowsToListOfObjects($resultRows,"Quarto");
            return $resultObject;
        }catch(Exception $exc){
            echo $exc->getMessage();
            $resultObject = array();
        }
    }

    /*Função que veio da classe AbstractFactory utilizada para listar as reservas*/
    public function buscarReserva($idReserva): array{
        $sql = "SELECT * FROM Reserva WHERE idReserva='".$idReserva."'";
        try{
            $resultRows = $this->db->query($sql);
            if(!$resultRows instanceof PDOStatement){
                throw new Exception("SQL COM ERRO!'".$sql."'");
            }
            $resultObject = $this->queryRowsToListOfObjects($resultRows,"Reserva");
            return $resultObject;
        }catch(Exception $exc){
            echo $exc->getMessage();
            $resultObject = array();
        }
    }
    
    /*Função que veio da classe AbstractFactory utilizada para efetuar login do cliente*/
    public function efetuarLogin($email,$senha): array {
        $sql = "SELECT * FROM Cliente WHERE email= '". $email. "' AND senha = '".$senha."' " ;
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

    /*Função que veio da classe AbstractFactory utilizada para excluir a reserva*/
	public function excluirReserva($reserv) {
		$reserva = $reserv;
		try {
			$sql = "DELETE FROM Reserva WHERE idReserva='"
				. $reserva->getIdReserva() . "' ";
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
    
    /*Função que veio da classe AbstractFactory utilizada para atualizar os dados da reserva no banco de dados*/
    public function atualizarReserva($reserva){
        $reservaAtualizada = $reserva;
        try {
            $sql = "UPDATE Reserva SET
				dataEntrada='". $reservaAtualizada->getDataEntrada() . "',
				dataSaida='". $reservaAtualizada->getDataSaida() . "',
                codQuarto='".$reservaAtualizada->getCodQuarto()."'
                WHERE idReserva='". $reservaAtualizada->getIdReserva() . "' AND codCliente='".$reservaAtualizada->getCodCliente()."' ";
                

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
   
}

?>