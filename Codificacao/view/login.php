<?php
/*Verifica se o usuário está logado no sistema, para evitar que tente entrar na página*/
if(isset($_SESSION["idCliente"]) && isset($_SESSION["email"]) ) {
    $idCliente = $_SESSION["idCliente"];
    $nome = $_SESSION["email"];
    header('location:?funcao=home');
}
?>
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

Página principal do hotel
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>ControlHotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="view/css/stylelogin.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>        
    </head>
        
    <body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <div class="fadeIn first">
            <img src="view/img/logoHotel.png" id="icon" alt="User Icon" />
            </div>
            <h3>ControlHotel</h3>
            <form id="Login" action="?funcao=efetuarLogin<?php if(isset($_GET["tipoQuarto"])){ echo "&tipoQuarto=".$_GET["tipoQuarto"].""; } ?>" method="post">
                <?php
                    if(isset($_GET['deucerto'])){
                        $deucerto = $_GET['deucerto'];
                            if($deucerto == 'a'){
                                $msg = $_GET['msg'];
                                echo "<p>".$msg."</p>";
                            }
                        }
                ?> 
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
                </div>                
                <input type="submit" class="fadeIn fourth" name="logado" value="Login">
            </form>
            <!--Não possui Cadastro-->
            <div id="formFooter">
                <a href="?funcao=telaCadastroCliente" class="underlineHover">Novo Cadastro</a> 
            </div>
        </div>
    </div>    
    </body>
</html>