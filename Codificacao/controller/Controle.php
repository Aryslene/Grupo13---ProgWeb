<?php
require_once("model/Reserva.php");
require_once("model/Cliente.php");
require_once("model/HotelFactory.php");
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

Página principal do hotel
-->Classe que define o fluxo do site
*/

class Controle{
    private $factory;
    private $cliente;

    /*Construtor da classe Controle, cria um objeto de HotelFactory */
    public function __construct(){
        $this->factory = new HotelFactory();
    }

    /*Essa função é responsável por direcionar o fluxo da aplicação,*/
    public function init(){
        if(isset($_GET['funcao'])){
            $f= $_GET['funcao'];
        }else{
            $f= "";
        }  
        $this->setCliente();
        switch($f){
            /*Nesse caso vai para a PÁGINA principal*/
            default:
            $this->home();
            break;
            /*Nesse caso vai para a PÁGINA de reservar quarto*/
            case 'telaReserva':
            $this->telaReserva();
            break;
            /*Nesse caso vai para a PÁGINA de efetuar login*/
            case 'telaLogin':
            $this->telaLogin();
            break;
            /*Nesse caso vai para a PÁGINA de cadastro de cliente*/
            case 'telaCadastroCliente':
            $this->telacadastroCliente();
            break;
            /*Nesse caso vai para a PÁGINA de lista de clientes*/
            case 'telaAvisos':
            $this->telaAvisos();
            break;
            /*Nesse caso vai para a PÁGINA de editar os dados da reserva*/
            case 'telaListaReservas':
            $this->telaListaReservas();
            break;  
            /*Nesse caso vai para a PÁGINA de editar a reserva*/
            case 'telaEditaReserva':
            $this->telaEditaReserva();
            break;             
            /*Nesse caso vai para a PÁGINA de com informações do hotel*/
            case 'telaSobreHotel':
            $this->telaSobreHotel();
            break;             
            /*Nesse caso vai para a FUNÇÃO de efetuar reserva*/
            case 'efetuarReserva':
            $this->efetuarReserva();
            break;
            /*Nesse caso vai para a FUNÇÃO de efetuar login*/
            case 'cancelarReserva':
            $this->cancelarReserva();
            break;            
            /*Nesse caso vai para a FUNÇÃO de efetuar login*/
            case 'efetuarLogin':
            $this->efetuarLogin();
            break;
            /*Nesse caso vai para a FUNÇÃO de efetuar o cadastro do cliente*/
            case 'cadastrarCliente':
            $this->cadastrarCliente();
            break;
            /*Nesse caso vai para a FUNÇÃO de editar a reserva do cliente*/
            case 'editarReserva':
            $this->editarReserva();
            break;
            /*Nesse caso vai para a FUNÇÃO de sair da sessão do cliente*/
            case 'sairLogin':
            $this->sairLogin();
            break;                       
        }
    }
    
    /*Função que set um cliente na sessão */ 
    public function setCliente(){
        session_start();
        if(isset($_SESSION["idCliente"])){
            $this->cliente = $this->factory->getCliente($_SESSION["idCliente"]);
        }else{
            $this->cliente = null;
        }
    }

    /*Função que leva para a PÁGINA principal do hotel*/
    public function home(){
        $cliente = $this->cliente;
        require 'view/home.php';
    }

    /*Função que leva para a PÁGINA principal do hotel*/
    public function telaSobreHotel(){
        $cliente = $this->cliente;
        require 'view/sobreHotel.php';
    }    

    /*Função que leva para a PÁGINA de reservar o quarto de suite casal*/
    public function telaReserva(){
        $cliente = $this->cliente;
        require 'view/cadastroReserva.php';       
    }

    /*Função que leva para a PÁGINA de editar a reserva do cliente*/
    public function telaEditaReserva(){
        $cliente = $this->cliente;
        require 'view/editaReserva.php';       
    }    

    /*Função que leva para a PÁGINA do cliente efetuar o login */
    public function telaLogin(){
        $cliente = $this->cliente;
        require 'view/login.php';
    }

    /*Função que leva para a PÁGINA de cadastrar cliente*/
    public function telaCadastroCliente(){
        $cliente = $this->cliente;
        require 'view/cadastroCliente.php';
    }

    /*Função que leva para a PÁGINA de avisos*/
	public function telaAvisos() {
        $cliente = $this->cliente;
        require 'view/avisos.php';
    }

    /*Função que leva para a PÁGINA de listar as reservas do cliente*/
    public function telaListaReservas(){
        $cliente = $this->cliente;
        $idCliente = $cliente->getIdCliente();
        try{
            $listaReserva = $this->factory->listarReservas($idCliente);
            if(count($listaReserva) > 0){
                foreach ($listaReserva as $reserva) {
                    //$idQuarto = $lr->getCodQuarto();
                    $objQuartoTemp = $this->factory->buscarQuartoPorId($reserva->getCodQuarto())[0];
                    $reserva->setObjQuarto($objQuartoTemp);
                    
                }
            }else{
                throw new Exception("Não existem reservas feitas ainda!");
                require 'view/listaReserva.php';
            }
            //$listaQuartos = $this->factory->listarQuartos($idQuarto);
            require 'view/listaReserva.php';
            unset($listaQuartos);
            unset($listaReserva);
        }catch(Exception $e){
            $msg = $e->getMessage();
            require 'view/listaReserva.php';
        }
        
    }

    /*FUNÇÃO que efetua o login do cliente */
    public function efetuarLogin(){
        if(isset($_POST['logado'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $result = $this->factory->efetuarLogin($email,$senha);
            try{
                if(count($result) > 0) {
                    foreach ($result as $clientes) {
                        $idCliente = $clientes->getIdCliente();
                        $nomeCliente = $clientes->getNome();
                    }
                    session_start(); 
                    $_SESSION["idCliente"]= $idCliente;
                    $_SESSION["email"] = $nomeCliente;
                    $_SESSION["senha"]= $senha;

                    if(!isset($_GET["tipoQuarto"])){
                        header("Location:?funcao=telaHome");
                    }else{
                        header("Location:?funcao=telaReserva&tipoQuarto=".$_GET["tipoQuarto"]);
                    } 
                    exit; 
                }else{
                    throw new Exception("O email ou a senha estão incorretos");
                } 
                unset($email);
                unset($senha);
                unset($idCliente);
            }catch (Exception $e) {
                $deucerto = 'a';
                $msg = $e->getMessage();
                header("location: ?funcao=telaLogin&deucerto=".$deucerto."&msg=".$msg." ");
            }
        }
    }

    /*FUNÇÃO que efetua a saída do cliente*/
    public function sairLogin(){
        session_start();
        if ( isset($_SESSION["idCliente"]) and isset($_SESSION["email"]) ) {
            session_destroy();
            unset ($_SESSION["idCliente"]);
            unset ($_SESSION["email"]);  
            unset ($_SESSION["senha"])   ;
            header('location:?funcao=telaHome');
        }else{
            header('location:?funcao=telaHome');
        }
    }

    /*FUNÇÃO que efetua o cadastro do cliente*/
    public function cadastrarCliente(){
        if (isset($_POST['cadastrado'])) {
            $nome = $_POST['nome'];
            $genero = $_POST['genero'];
            $telefone= $_POST['telefone'];
            $dataNasc= $_POST['dataNasc'];
            $pais = $_POST['pais'];
            $estado = $_POST['estado'];
            $cidade = $_POST['cidade'];
            $endereco= $_POST['endereco'];
            $email = $_POST['email'];
            $senha= $_POST['senha'];
            try {
                if ($nome == "" ) {
                    throw new Exception("O campo <strong>Nome</strong> deve ser preenchido!");
                } elseif ($email == "") {
                    throw new Exception("O campo <strong>e-mail</strong> deve ser preenchido!");
                }
                $result = $this->factory->buscarPorEmail($email);
                if (count($result) == 0) {
                    $cliente = new Cliente("", $nome, $genero, $telefone, $dataNasc, $pais, $estado, $cidade, $endereco, $email, $senha);
                    $sucesso = $this->factory->salvarCliente($cliente);
                    $msg = "O contato <em>" . $nome . "</em> - <em>" . $email . "</em> foi cadastrado com sucesso!";   
                }
                else {
                    throw new Exception("O contato n&atilde;o foi adicionado. E-mail j&aacute; existente na agenda!");
                }
                unset($nome);
                unset($genero);
                unset($telefone);
                unset($cpf);
                unset($dataNasc);
                unset($nacionalidade);
                unset($endereco);
                unset($numPassaporte);
                unset($email);
                unset($senha);
            }catch (Exception $e) {
                $sucesso = false;
                $msg = $e->getMessage();
            }
            require 'view/login.php';
        }
    }

    /*FUNÇÃO que guarda os dados da reserva e cadastra o cliente*/
    public function efetuarReserva(){
        $cliente = $this->cliente;
        if (isset($_POST['reservado'])) {
            $codCliente = $_POST['idCliente'];
            $nomeCliente = $_POST['nomeCliente'];
            $tipoQuarto = $_POST['tipoQuarto'];
            $dataEntrada= $_POST['dataEntrada'];
            $dataSaida= $_POST['dataSaida'];
            $result= $this->factory->buscarQuarto($tipoQuarto);
            try{
                if(count($result)>0){
                    foreach ($result as $quartos) {
                        $codQuarto = $quartos->getIdQuarto();
                    }
                    $reserva = $this->factory->buscarReserva($dataEntrada);
                    if(count($reserva)==0){
                        $reserva = new Reserva("",$dataEntrada,$dataSaida,$codCliente,$codQuarto);
                        $sucesso = $this->factory->reservarQuarto($reserva);
                        $msg = "A reserva foi efetuada com sucesso ".$nomeCliente."!";
                    }else{
                        throw new Exception ("A reserva para esse quarto já foi realizada!");
                    }
                    unset ($idCliente);
                    unset ($nomeCliente);
                    unset ($tipoQuarto);
                    unset ($dataEntrada);
                    unset ($dataSaida);
                }
            }catch (Exception $e) {
                $sucesso = false;
                $msg = $e->getMessage();
            }
            require 'view/avisos.php';
        }
    }

    /*FUNÇÃO que edita os dados da reserva do cliente*/
    public function editarReserva(){
        $cliente = $this->cliente;
        if (!isset($_POST['editado'])) {
            $editado = false;
            $idReserva = $_GET['idReserva'];
            $resultado = $this->factory->buscarReserva($idReserva);
            if(count($resultado)==0){
                throw new Exception("A reserva não foi encontrada");
            }else{
                $reserva = current($resultado);
                require 'view/editaReserva.php';
            }            
        }else{
            $idReserva = $_POST['idReserva'];
            $dataEntrada = $_POST['dataEntrada'];
            $dataSaida = $_POST['dataSaida'];
            $codCliente = $_POST['codCliente'];
            $tipoQuarto = $_POST['tipoQuarto'];
            try {
                $editado = true;
                $resultado = $this->factory->buscarReserva($idReserva);
                if (count($resultado) == 0) {
                    throw new Exception("A reserva não foi econtrada!");
                }
                else{
                    $codQuarto = $this->factory->buscarQuarto($tipoQuarto)[0]->getIdQuarto();
                    $reserva = current($resultado);
                    $reserva->setDataEntrada($dataEntrada);
                    $reserva->setDataSaida($dataSaida);

                    $reserva->setCodQuarto($codQuarto);
                    $sucesso = $this->factory->atualizarReserva($reserva);
                    
                    if ($sucesso){					
                        $msg = "A sua reserva foi editada com sucesso!";
                    }else{
                        throw new Exception("Sua reserva não foi editada!");
                    }
                    
                }
            } catch (Exception $e) {
                $sucesso = false;
                $msg = $e->getMessage();
    
            }
            require 'view/avisos.php';            
        }
    }     
    
    /*Função que exclui a reserva do cliente*/
    public function cancelarReserva(){
        $cliente = $this->cliente;
		try{
			$idReserva = $_GET['idReserva'];
			$resultado = $this->factory->buscarReserva($idReserva);
			if (count($resultado) == 0) {
				throw new Exception("A reserva não foi encontrada!");
			}
			else {
				$reserva = current($resultado);
				$sucesso = $this->factory->excluirReserva($reserva);
				if ($sucesso){					
					$msg = "A reserva foi cancelada com sucesso!";
				}else{
					throw new Exception("A reserva não foi cancelada");
				}
			}
		} catch (Exception $e) {
            $sucesso = false;
            $msg = $e->getMessage();
            }
        require 'view/avisos.php';       
    }
}