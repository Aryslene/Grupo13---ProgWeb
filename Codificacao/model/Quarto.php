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
    private $id;
    private $valorDiaria;
    private $taxaCancelamento;
    private $qtdOcupacao;
    private $tipoQuarto;
    
    public function __construct(string $id="",double $valorDiaria,
    double $taxaCancelamento,int $qtdOcupacao, string $tipoQuarto){
        $this->id = $id;
        $this->valorDiaria = $valorDiaria;
        $this->taxaCancelamento = $taxaCancelamento;
        $this->qtdOcupacao = $qtdOcupacao;
        $this->tipoQuarto = $tipoQuarto;
    }

    /*Getters e Setters*/
    public function getId():string{
        return $this->id;
    }

    public function getValorDiaria():double{
        return $this->dataEntrada;
    }
        
    public function setValorDiaria(double $valorDiaria){
        $this->valorDiaria = $valorDiaria;
    }

    public function getTaxaCancelamento():double{
        return $this->taxaCancelamento;
    }
        
    public function setTaxaCancelamento(double $taxaCancelamento){
        $this->taxaCancelamento= $taxaCancelamento;
    }

    public function getqtdOcupacao():int{
        return $this->qtdOcupacao;
    }
        
    public function setqtdOcupacao(int $qtdOcupacao){
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