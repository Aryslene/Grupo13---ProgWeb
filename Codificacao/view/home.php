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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="view/css/style.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    </head>

    <body>
        <!--Título da página e uma explicação -->
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>ControlHotel</h1>
            <p>Hotel na cidade de Campo Grande - Mato Grosso do Sul</p> 
        </div>

        <!-- Carrossel de fotos do hotel-->
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="view/img/photos-hotel/hotel1.jpg" alt="Hotel-Foto1" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>ControlHotel</h3>
                        <p>Venha conhecer nosso maravilhoso hotel!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/img/photos-hotel/hotel2.jpg" alt="Hotel-Foto2" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>ControlHotel</h3>
                        <p>Venha conhecer nosso maravilhoso hotel!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="view/img/photos-hotel/hotel3.jpg" alt="Hotel-Foto3" width="1100" height="500">
                    <div class="carousel-caption">
                        <h3>ControlHotel</h3>
                        <p>Venha conhecer nosso maravilhoso hotel!</p>
                    </div>
                </div>                
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!--Fim do Carrossel de Fotos do Hotel-->

        <!--Quartos de Hotel e Informações-->
        <div class="container"> 
            <!--Tipos de quarto do hotel para reservar-->
            <div class="row mb-5 mt-5" >
                <!--Tipo 1 - Suíte de Casal-->
                <div class="card ml-4 mr-4" style="width:16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-casal.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Casal</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí uma cama de casal</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                            <li class="list-group-item">Ar-Condicionado</li>
                        </ul>
                        <a href="?funcao=reservar" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 2 - Suíte Dupla-->
                <div class="card mr-4" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-casal.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Dupla</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí duas camas de casal</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                            <li class="list-group-item">Ar-Condicionado</li>
                        </ul>
                        <a href="?funcao=reservar" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 3 - Suíte de Luxo-->
                <div class="card mr-4" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-casal.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Luxo</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí uma cama de casal</li>
                            <li class="list-group-item">Ar-Condicionado e banheira</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                        </ul>
                        <a href="?funcao=reservar" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 4 - Suíte de Família-->
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-casal.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Família</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí uma cama de casal e uma cama de solteiro</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                            <li class="list-group-item">Ar-Condicionado</li>
                        </ul>
                        <a href="?funcao=reservar" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
            </div>
            <!--Fim dos tipos de quartos para reservar-->

            <!--Detalhes sobre o hotel-->
            <div class="row">
                <div class="col-13 ml-4 mb-5">
                    <h3>O ControlHotel oferece:</h3>
                    <p><img src="view/img/icons/icon-seguro.png" alt="icon-seguro">Segurança</p>
                    <p><img src="view/img/icons/icon-car.png" alt="icon-car"> Estacionamento exclusivo para os hóspedes</p>
                    <p><img src="view/img/icons/icon-wifi.png" alt="icon-wifi"> Wi-Fi em todo o hotel</p>
                    <p><img src="view/img/icons/icon-sun.png" alt="icon-sun"> Área de piscina</p>
                    <p><img src="view/img/icons/icon-child.png" alt="icon-child"> Playground para crianças</p>
                    <p><img src="view/img/icons/icon-animals.png" alt="icon-animals"> Permite entrada de animais</p>
                    <p><img src="view/img/icons/icon-academia.png" alt="icon-academia"> Academia</p>
                </div>
            </div>
            <!--Fim dos Detalhes sobre o hotel-->
        </div>

        <!--Rodapé-->
        <footer class="page-footer font-small blue-grey lighten-5">
            <div style="background-color: #21d192;">
                <div class="container">
                    <div class="row py-4 d-flex align-items-center">
                        <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                            <h6 class="mb-0">Foco, Força e Férias!</h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container text-center text-md-left mt-5">
                <div class="row mt-3 dark-grey-text">
                    <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                        <h6 class="text-uppercase font-weight-bold">ControlHotel</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras in tellus nisi. Mauris at mauris imperdiet, efficitur turpis sit amet.</p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contato</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Campo Grande, MS 1000, BR</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> informacoes@controlhotel.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 55 67 9999 999</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 55 67 9999 999</p>
                    </div>
                </div>
            </div>

            <div class="footer-copyright text-center text-black-50 py-3">© 2018 Copyright:
                <a class="dark-grey-text" href="https://mdbootstrap.com/education/bootstrap/"> meninassuperpoderosas.com</a>
            </div>
       </footer>
       <!--Final do Rodapé -->
    </body>
</html>