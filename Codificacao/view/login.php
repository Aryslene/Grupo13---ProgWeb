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
-->


<html>
  <meta charset="utf-8" />
  <title>ControlHotel</title>
  <head>

  <link href="login.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

  </head>
<body id="LoginForm">
<div class="container">
<h1 class="form-heading">Control Hotel Login</h1>
<div class="login-form">
<div class="main-div">
  <!-- Aqui encontra-se os locais para entrada de login e senha -->
    <div class="panel">
   <h2>Seja bem-vindo.</h2>
   <p>Por favor, entre com seu email e senha</p>
   </div>
  <!-- Formulário do login e senha -->
    <form id="Login">

        <div class="form-group">


            <input type="email" class="form-control" id="inputEmail" placeholder="Email">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="inputPassword" placeholder="Senha">

        </div>

        <button type="submit" class="btn btn-primary">Login</button>
        <div ckass="naopossuicadastro"><p>Não possui cadastro?</p></div>
        <button type="submit" class="btn btn-primary">Novo Cadastro</button>

    </form>
    </div>

</div></div>
            <div class="footer-copyright">© 2018 Copyright:
                <a class="linkPoderosas" href="https://mdbootstrap.com/education/bootstrap/"> meninassuperpoderosas.com</a>
            </div>

</body>
</html>
