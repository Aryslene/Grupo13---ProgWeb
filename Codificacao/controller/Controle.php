<?php
require_once("model/Reserva.php");
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
            case 'reservar':
            $this->reservarQuarto();
            break;
            default:
            $this->home();
            break;
        }
    }

    /*Função que leva para a página principal do hotel*/
    public function home(){
        require 'view/home.php';
    }

    /*Função que leva para a página de reservar o quarto*/
    public function reservarQuarto(){
        require 'view/reservaNova.php';
    }
}