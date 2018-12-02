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

Página para cadastrar cliente
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

        <!--Formulário para cadastrar cliente -->
        <div class="container"> 
            <!--Essa linha deixa tudo alinhado dentro do container, usar isso smp <3 -->
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form action="?funcao=cadastrarCliente" method="post">
                        <!--Nome do Cliente -->
                        <div class="form-group">
                                <label for="labelNome">Nome Completo</label>
                                <input type="text" class="form-control" name="nome" id="inputNome" placeholder="Nome" required>
                        </div>
                        <!--Data de Nascimento e Gênero-->
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="labelDataNascimento">Data de Nascimento</label>
                                <input type="date" class="form-control" name="dataNasc" id="inputDataNasc" data-date-format="DD MMMM YYYY" placeholder="Calendario" required  pattern=“[0-9]{2}\/[0-9]{2}\/[0-9]{4}$” min=“1918-01-01” max=“2040-01-01”  maxlength=“10”>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="labelGenero">Gênero</label>
                                <select name="genero" id="selectGenero" class="form-control" required>
                                    <option value="">Gênero</option>
                                    <option value="agenero">Agênero</option>
                                    <option value="androgino">Andrógino</option>
                                    <option value="bigenero">Bigênero</option>
                                    <option value="duploespirito">Duplo-espírito</option>
                                    <option value="genderqueer">Genderqueer</option>
                                    <option value="generoemduvida">Gênero em Dúvida</option>
                                    <option value="generofluido">Gênero Fluido</option>
                                    <option value="generonaoconformista">Gênero Não-conformista</option>
                                    <option value="generovariante">Gênero Variante</option>
                                    <option value="mulhercis">Mulher Cis</option>
                                    <option value="homemcis">Homem Cis</option>
                                    <option value="mulhertrans">Mulher Trans</option>
                                    <option value="homemtrans">Homem Trans</option>
                                    <option value="intersex">Intersex</option>
                                    <option value="homemparamulher">Homem para Mulher - HTM</option>
                                    <option value="mulherparahomem">Mulher para homem - TMH</option>
                                    <option value="naobinario">Não-binário</option>
                                    <option value="neutrois">Neutrois</option>
                                    <option value="pangenero">Pangênero</option>
                                    <option value="transfeminino">Transfeminino</option>
                                    <option value="transmasculino">Transmasculino</option>
                                    <option value="nenhum">Nenhum</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                        </div>      
                        <!--Endereço -->  
                        <div class="form-row mt-3">
                            <div class="form-group col-md-3">
                                <label for="labelPais">País</label>
                                <input type="text" class="form-control" name="pais" id="inputPais" placeholder="País" required>
                            </div>
                            <div class="form-group col-md-2">
                                <label for="labelEstado">Estado</label>
                                <input type="text" class="form-control" name="estado" id="inputEstado" placeholder="Estado" maxlength="2" minlength="2" required>
                            </div>
                            <div class="form-group col-md-7">
                                <label for="labelCidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="inputCidade" placeholder="Cidade" required>
                            </div>
                        </div> 
                        <!--Endereço -->  
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="labelEndereco">Endereço</label>
                                <input type="text" class="form-control" name="endereco" id="inputEndereco" placeholder="Endereço" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="labelTelefone">Telefone</label>
                                <input type="text" class="form-control" name="telefone" id="inputTelefone" placeholder="Telefone" required pattern="(\+\d{1,3})?\s?([\(]?\d{2,3}[\)]?)?\s?\d{4,5}\s?-?\d{4}">
                        </div>     
                        <!--Email e Senha-->  
                        <div class="form-row mt-3">
                            <div class="form-group col-md-6">
                                <label for="labelEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="labelSenha">Senha</label>
                                <input type="password" class="form-control" name="senha" id="inputSenha" placeholder="Senha" maxlength="8" minlength="4" required>
                        </div>            
                        <button type="submit" class="btn btn-primary" name="cadastrado">Cadastrar</button>
                    </form>                      
                </div>
            </div>              
        </div>
        <!--Fim do formulário para reservar quarto -->
    </body>
</html>