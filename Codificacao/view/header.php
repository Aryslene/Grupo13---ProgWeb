<!DOCTYPE html>
<!--
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software
*Framework Bootstrap 4
Esse arquivo tem como objetivo gerenciar a header do usuário
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>ControlHotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="view/css/style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
    </head>

    <body>
        <!--Título da página e uma explicação -->
        <!--Navbar com os links para a home -->
        <div class="text-center" style="margin-bottom:0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container">
                <a class="navbar-brand" href="?funcao=home">ControlHotel</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <!--Esse link vai para a página principal do hotel -->
                                <a class="nav-link" href="?funcao=home">Home</a>
                            </li>
                            <li class="nav-item active">
                                <!--Esse link vai para a página principal do hotel -->
                                <a class="nav-link" href="?funcao=telaSobreHotel">Informações</a>
                            </li>                            
                        </ul>
                        <ul class="nav navbar-nav flex-row justify-content-between ml-auto">
                            <li class="dropdown order-1">
                                <?php if($cliente == null){  ?>
                                <a href="?funcao=telaLogin&amp;tipoQuarto=1" class="btn btn-outline-primary mt-3">Entrar</a>
                                <?php
                                    }else{
                                ?>
                                <button type="button" id="dropdownMenu1" data-toggle="dropdown" class="btn btn-outline-secondary dropdown-toggle">
                                <?php
                                    echo explode(' ',trim($cliente->getNome()))[0];
                                ?><span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right mt-2">                                
                                    <li class="px-3 py-2">
                                        <a href="?funcao=telaListaReservas">Minhas Reservas</a>
                                    </li>                                
                                    <li class="px-3 py-2">
                                        <a href="?funcao=sairLogin">Sair</a>
                                    </li>
                                    <?php
                                        }
                                    ?>
                                </ul>
                            </li>
                        </ul>                                      
                    </div>
                </div>
            </nav>  
            <!--Fim da navbar --> 
            <h1>ControlHotel</h1>
                <p>Hotel na cidade de Campo Grande - Mato Grosso do Sul</p> 
            </div>