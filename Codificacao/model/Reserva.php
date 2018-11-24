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
class Reserva{
    private $dataEntrada;
    private $dataSaida;
    private $valorReserva;
    private $id;
    
    public function __construct(string $id="",date $dataEntrada,date $dataSaida,float $valorReserva){
        $this->id = $id;
        $this->dataEntrada = $dataEntrada;
        $this->dataSaida = $dataSaida;
        $this->valorReserva = $valorReserva;
    }

    /*Getters e Setters*/
    public function getId():string{
        return $this->id;
    }

    public function getDataEntrada():date{
        return $this->dataEntrada;
    }
        
    public function setDataEntrada(date $dataEntrada){
        $this->dataEntrada= $dataEntrada;
    }

    public function getDataSaida():date{
        return $this->dataSaida;
    }
        
    public function setDataSaida(date $dataSaida){
        $this->dataSaida= $dataSaida;
    }

    public function getValorReserva():float{
        return $this->valorReserva;
    }
        
    public function setValorReserva(float $valorReserva){
       $this->valorReserva = $valorReserva;
    }
}
?>