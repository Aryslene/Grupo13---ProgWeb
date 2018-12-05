<?php
/*Função utilizada para chamar o cabeçalho da página de aviso*/
require("header.php");
?>
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
                        <a href="?funcao=telaReserva&tipoQuarto=1" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 2 - Suíte Dupla-->
                <div class="card mr-4" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-dupla.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Dupla</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí duas camas de casal</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                            <li class="list-group-item">Ar-Condicionado</li>
                        </ul>
                        <a href="?funcao=telaReserva&tipoQuarto=2" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 3 - Suíte de Luxo-->
                <div class="card mr-4" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-luxo.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Luxo</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí uma cama de casal</li>
                            <li class="list-group-item">Ar-Condicionado e banheira</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                        </ul>
                        <a href="?funcao=telaReserva&tipoQuarto=3" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
                <!--Tipo 4 - Suíte de Família-->
                <div class="card" style="width: 16rem;">
                    <img class="card-img-top" src="view/img/icons/suite-familia.png" alt="cama-casal">
                    <div class="card-body">
                        <h5 class="card-title">Suíte Família</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Possuí uma cama de casal e uma cama de solteiro</li>
                            <li class="list-group-item">Café da manhã incluso</li>
                            <li class="list-group-item">Ar-Condicionado</li>
                        </ul>
                        <a href="?funcao=telaReserva&tipoQuarto=4" class="btn btn-outline-primary mt-3">Reservar</a> 
                    </div>
                </div>
            </div>
            <!--Fim dos tipos de quartos para reservar-->

            <!--Detalhes sobre o hotel-->
            <div class="row justify-content-center mb-5 mt-5">
                <h3>Benefícios do ControlHotel</h3>
            </div>
            <!--Informações sobre o hotel-->
            <div class="row ml-5">
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Segurança</h5>
                            <p class="card-text">Vigilante 24 horas, câmeras de segurança.</p>
                        </div>
                    </div>
                </div>     
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Estacionamento</h5>
                            <p class="card-text">Estacionamento exclusivo para os clientes.</p>
                        </div>
                    </div>
                </div>            
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Piscina</h5>
                            <p class="card-text">Possuindo piscina interna e externa.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row ml-5">
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Animais</h5>
                            <p class="card-text">Permitida a entrada de animais.</p>
                        </div>
                    </div>
                </div>
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                       <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Academia</h5>
                            <p class="card-text">Disponibiliza de aparelhos para exercício físico.</p>
                        </div>
                    </div>
                </div> 
                <div class="col-13 ml-4 mb-5">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center">Playground</h5>
                            <p class="card-text">Lugar para as crianças brincarem.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--Fim dos Detalhes sobre o hotel-->
    </div>

        <!--Footer-->
        <footer class="page-footer font-small blue-grey lighten-5">
            <div style="background-color: #0099ff;">
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
                        <p>O Hotel ControHotel está localizado na cidade de Campo Grande - MS, 
                        hotel que está a 30 anos no mercado de hotelaria</p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase font-weight-bold">Contato</h6>
                        <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                        <p>
                            <i class="fa fa-home mr-3"></i>Campo Grande, MS 1000, BR</p>
                        <p>
                            <i class="fa fa-envelope mr-3"></i> informacoes@controlhotel.com</p>
                        <p>
                            <i class="fa fa-phone mr-3"></i> + 55 67 9 9699 7867</p>
                        <p>
                            <i class="fa fa-print mr-3"></i> + 55 67 9 9275 4425</p>
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