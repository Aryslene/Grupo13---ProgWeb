<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

-->Classe Cliente
*/
class Cliente{
    private $idCliente;
    private $nome;
    private $genero;
    private $telefone;
    private $dataNasc;
    private $pais;
    private $estado;
    private $cidade;
    private $endereco;
    private $email;
    private $senha;
    
    public function __construct(string $id="",string $nome, string $genero, string $telefone, string $dataNasc,string $pais, string $estado, string $cidade, string $endereco, string $email, string $senha){
        $this->id = $id;
        $this->nome = $nome;
        $this->genero = $genero;
        $this->telefone = $telefone;
        $this->dataNasc = $dataNasc;
        $this->pais = $pais;
        $this->estado = $estado;
        $this->cidade = $cidade;
        $this->endereco = $endereco;
        $this->email = $email;
        $this->senha = $senha;
    }

    /*Getters e Setters*/
    public function getId():string{
        return $this->id;
    }

    public function getNome():string{
        return $this->nome;
    }
        
    public function setNome(string $nome){
        $this->nome= $nome;
    }

    public function getGenero():string{
        return $this->genero;
    }
        
    public function setGenero(string $genero){
        $this->genero= $genero;
    }

    public function getTelefone():string{
        return $this->telefone;
    }
        
    public function setTelefone(string $telefone){
       $this->telefone = $telefone;
    }

    public function getDataNasc():string{
        return $this->dataNasc;
    }
        
    public function setDataNasc(string $dataNasc){
       $this->dataNasc = $dataNasc;
    }

    public function getPais():string{
        return $this->pais;
    }
        
    public function setPais(string $pais){
       $this->pais = $pais;
    }

    public function getEstado():string{
        return $this->estado;
    }
        
    public function setEstado(string $estado){
       $this->estado = $estado;
    }

    public function getCidade():string{
        return $this->cidade;
    }
        
    public function setCidade(string $cidade){
       $this->cidade = $cidade;
    }

    public function getEndereco():string{
        return $this->endereco;
    }
        
    public function setEndereco(string $endereco){
       $this->endereco = $endereco;
    }

    public function getEmail():string{
        return $this->email;
    }
        
    public function setEmail(string $email){
       $this->email = $email;
    }

    public function getSenha():string{
        return $this->senha;
    }
        
    public function setSenha(string $senha){
       $this->senha = $senha;
    }

}
?>