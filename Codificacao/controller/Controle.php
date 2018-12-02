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
            case 'telaLista':
            $this->telaLista();
            break;
            /*Nesse caso vai para a PÁGINA de lista de clientes*/
            case 'telaAvisos':
            $this->telaAvisos();
            break;
            /*Nesse caso vai para a FUNÇÃO de efetuar reserva*/
            case 'efetuarReserva':
            $this->efetuarReservar();
            break;
            /*Nesse caso vai para a FUNÇÃO de efetuar login*/
            case 'efetuarLogin':
            $this->efetuarLogin();
            break;
            /*Nesse caso vai para a FUNÇÃO de efetuar o cadastro do cliente*/
            case 'cadastrarCliente':
            $this->cadastrarCliente();
            break;
        }
    }

    /*Função que leva para a PÁGINA principal do hotel*/
    public function home(){
        require 'view/home.php';
    }

    /*Função que leva para a PÁGINA de reservar o quarto de suite casal*/
    public function telaReserva(){
        require 'view/reserva.php';       
    }

    /*Função que leva para a PÁGINA do cliente efetuar o login */
    public function telaLogin(){
        require 'view/login.php';
    }

    /*Função que leva para a PÁGINA de cadastrar cliente*/
    public function telaCadastroCliente(){
        require 'view/cadastroCliente.php';
    }
    /*Função que leva para a PÁGINA de listar clientes --APENAS PARA TESTE DO BANCO DE DADOS --*/
	public function telaLista() {
        $listaClientes = $this->factory->listarClientes();
        require 'view/lista.php';
    }
    /*Função que leva para a PÁGINA de avisos --APENAS PARA TESTE DO BANCO DE DADOS --*/
	public function telaAvisos() {
        require 'view/avisos.php';
    }
    /*FUNÇÃO que efetua o login do cliente */
    public function efetuarLogin(){
        if(isset($_POST['enviado'])){
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            $result = $this->factory->efetuarLogin($email,$senha);
            try{
                if(count($result) == 0) {
                    $msg = (count($result));
                    foreach ($result as $clientes) {
                        $msg = $clientes->getId();
                        
                    }
                    header("location: ?funcao=telaLogin&deucerto=".$deucerto."&msg=".$msg." ");
                    //header("location: ?funcao=telaReserva&idCliente=".$idCliente."");
                    //require 'view/reserva.php?idCliente='".$idCliente.";
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
            require 'view/avisos.php';
        }
    }

    /*Função que guarda os dados da reserva e cadastra o cliente*/
    public function efetuarReserva(){
        if (isset($_POST['reservado'])) {
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
            require 'view/avisos.php';
        }
    }
}