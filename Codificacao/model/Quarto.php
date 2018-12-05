<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

-->Classe Quarto
*/
class Quarto{
    private $idQuarto;
    private $valorDiaria;
    private $taxaCancelamento;
    private $qtdOcupacao;
    private $tipoQuarto;
    
    public function __construct(string $idQuarto="",  string $tipoQuarto,
    float $valorDiaria,int $qtdOcupacao, float $taxaCancelamento){
        $this->idQuarto = $idQuarto;
        $this->tipoQuarto = $tipoQuarto;
        $this->valorDiaria = $valorDiaria;
        $this->qtdOcupacao = $qtdOcupacao;
        $this->taxaCancelamento = $taxaCancelamento;
    }

    /*Getters e Setters*/
    public function getIdQuarto():string{
        return $this->idQuarto;
    }

    public function getValorDiaria():float{
        return $this->valorDiaria;
    }
        
    public function setValorDiaria(float $valorDiaria){
        $this->valorDiaria = $valorDiaria;
    }

    public function getTaxaCancelamento():float{
        return $this->taxaCancelamento;
    }
        
    public function setTaxaCancelamento(float $taxaCancelamento){
        $this->taxaCancelamento= $taxaCancelamento;
    }

    public function getQtdOcupacao():int{
        return $this->qtdOcupacao;
    }
        
    public function setQtdOcupacao(int $qtdOcupacao){
        $this->qtdOcupacao = $qtdOcupacao;
    }

    public function getTipoQuarto():string{
        return $this->tipoQuarto;
    }
        
    public function setTipoQuarto(string $tipoQuarto){
       $this->tipoQuarto = $tipoQuarto;
    }
}
?>