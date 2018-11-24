<?php
    require_once("Reserva.php");
    require_once("AbstractFactory.php");
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
class HotelFactory extends AbstractFactory{
    /*Construtor da classe HotelFactory, chamando o construtor da classe pai */
    public function __contruct(){
        parent::__contruct();
    }

    /*Função que veio da classe AbstractFactory utilizada para realizar a reserva do quarto*/
    public function reservar(){
            
    }
}

?>