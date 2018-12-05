<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

-->Classe Reserva
*/

require_once("Quarto.php");


class Reserva{
    private $idReserva;
    private $dataEntrada;
    private $dataSaida;
    private $codCliente;
    private $codQuarto;
    private $objQuarto;
    
    public function __construct(string $idReserva="",string $dataEntrada,
    string $dataSaida, int $codCliente, int $codQuarto){
        $this->idReserva = $idReserva;
        $this->dataEntrada = $dataEntrada;
        $this->dataSaida = $dataSaida;
        $this->codCliente = $codCliente;
        $this->codQuarto = $codQuarto;
    }

    /*Getters e Setters*/
    public function getIdReserva():string{
        return $this->idReserva;
    }

    public function getDataEntrada():string{
        return $this->dataEntrada;
    }
        
    public function setDataEntrada(string $dataEntrada){
        $this->dataEntrada= $dataEntrada;
    }

    public function getDataSaida():string{
        return $this->dataSaida;
    }
        
    public function setDataSaida(string $dataSaida){
        $this->dataSaida= $dataSaida;
    }

    public function getCodCliente():int{
        return $this->codCliente;
    }
        
    public function setCodCliente(int $codCliente){
       $this->codCliente = $codCliente;
    }

    public function getCodQuarto():int{
        return $this->codQuarto;
    }
        
    public function setCodQuarto(int $codQuarto){
       $this->codQuarto = $codQuarto;
    }

    public function setObjQuarto(Quarto $quarto){
        $this->objQuarto = $quarto;
    }

    public function getObjQuarto():Quarto{
        return $this->objQuarto;
    }
}
?>