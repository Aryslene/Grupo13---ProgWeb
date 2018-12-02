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

Página para realizar reserva de quarto
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>ControlHotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/css/style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script language = "javascript">
            $(document).ready(function() {
                $('#caixaInfSuiteCasal').hide();
                $('#caixaInfSuiteDupla').hide();
                $('#caixaInfSuiteLuxo').hide();
                $('#caixaInfSuiteFamilia').hide();
                $('#caixaInfSolteiroDuplo').hide();
                $('#inputTipoQuarto').change(function() {
                if ($('#inputTipoQuarto').val() == 'suiteluxo') {
                    $('#caixaInfSuiteLuxo').show();
                } else {
                    $('#caixaInfSuiteLuxo').hide();
                }
                if ($('#inputTipoQuarto').val() == 'suitecasal') {
                    $('#caixaInfSuiteCasal').show();
                } else {
                    $('#caixaInfSuiteCasal').hide();
                }
                if ($('#inputTipoQuarto').val() == 'suitedupla') {
                    $('#caixaInfSuiteDupla').show();
                } else {
                    $('#caixaInfSuiteDupla').hide();
                }
                if ($('#inputTipoQuarto').val() == 'suitefamilia') {
                    $('#caixaInfSuiteFamilia').show();
                } else {
                    $('#caixaInfSuiteFamilia').hide();
                }
                if ($('#inputTipoQuarto').val() == 'solteiroduplo') {
                    $('#caixaInfSolteiroDuplo').show();
                } else {
                    $('#caixaInfSolteiroDuplo').hide();
                }
                });
            });         
        </script>
    </head>

    <body>
        <!--Navbar e título -->
        <div class="jumbotron text-center" style="margin-bottom:0">
            <!--Navbar com os links para a home -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
                <a class="navbar-brand" href="#">ControlHotel</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <!--Esse link vai para a página principal do hotel -->
                            <a class="nav-link" href="?funcao=home">Home <span class="sr-only">(current)</span></a> 
                        </li>
                    </ul>
                </div>
            </nav>  
            <!--Fim da navbar -->   

            <!--Título da página e uma explicação -->
            <h1>Reservar Quarto</h1>
                <p>Hotel na cidade de Campo Grande - Mato Grosso do Sul</p> 
            <!--Final do título -->
        </div>
        <!--Final da Navbar e título -->

        <!--Formulário para reservar quarto -->
        <div class="container"> 
            <!--Tipos de quarto do hotel para reservar-->
            <!--Essa linha deixa tudo alinhado dentro do container, usar isso smp <3 -->
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form action="?funcao=realizarReserva" method="post">

                        <input type="text" id="idCiente" name="idCliente" value="<?= $idCliente; ?>" placeholder="<?= $idCliente; ?>">
                        <!--Escolher o tipo do quarto-->
                        <div class="form-group">
                            <label for="inputState">Tipo de Suíte</label>
                            <select id="inputTipoQuarto" class="form-control" required>
                                <option value="">Escolha um Quarto...</option>
                                <option value="suitecasal">Suíte Casal</option>
                                <option value="suitedupla">Suíte Dupla</option>
                                <option value="suiteluxo">Suíte Luxo</option>
                                <option value="suitefamilia">Suíte Família</option>
                                <option value="solteiroduplo">Suíte Solteiro Duplo</option>
                            </select>
                        </div>
                        <!--Informações sobre os quartos, aparecem ao selecionar no input o tipo do quarto -->
                        <!--Informações do Quarto de Suíte de Casal-->
                        <div id ="caixaInfSuiteCasal" class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Informações do Quarto</h5>
                                <p class="card-text">Quantidade de camas: 1 cama de casal</p>
                                <p class="card-text">Valor da Diária: R$80,00</p>
                            </div>
                        </div>  
                        <!--Informações do Quarto de Suíte de Dupla-->
                        <div id ="caixaInfSuiteDupla" class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Informações do Quarto</h5>
                                <p class="card-text">Quantidade de camas: 2 camas de casal</p>
                                <p class="card-text">Valor da Diária: R$130,00</p>
                            </div>
                        </div>        
                        <!--Informações do Quarto de Suíte de Luxo-->
                        <div id ="caixaInfSuiteLuxo" class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Informações do Quarto</h5>
                                <p class="card-text">Quantidade de camas: 1 cama de casal</p>
                                <p class="card-text">Banheira de Hidromassagem</p>
                                <p class="card-text">Valor da Diária: R$220,00</p>
                            </div>
                        </div>       
                        <!--Informações do Quarto de Suíte de Família-->
                        <div id ="caixaInfSuiteFamilia" class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Informações do Quarto</h5>
                                <p class="card-text">Quantidade de camas: 1 cama de casal e 1 cama de solteiro</p>
                                <p class="card-text">Valor da Diária: R$100,00</p>
                            </div>
                        </div>     
                        <!--Informações do Quarto de Solteiro Duplo-->
                        <div id ="caixaInfSolteiroDuplo" class="card" >
                            <div class="card-body">
                                <h5 class="card-title">Informações do Quarto</h5>
                                <p class="card-text">Quantidade de camas: 2 camas de solteiro</p>
                                <p class="card-text">Valor da Diária: R$85,00</p>
                            </div>
                        </div>  
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="inputNome">Data de Entrada</label>
                                <input type="date" class="form-control" id="inputDataEntrada" placeholder="Calendario" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="labelDataSaida">Data de Saída</label>
                                <input type="date" class="form-control" id="inputDataSaida" placeholder="Calendario" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="reservado">Reservar</button>
                    </form>                      
                </div>
            </div>              
        </div>
        <!--Fim do formulário para reservar quarto -->
    </body>
</html>