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

Página com informações sobre o hotel
-->
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>ControlHotel - Sobre o hotel</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/sobreoHotel.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="Apresentacao">
            <!-- botão Home -->
            <button type=button class=btn>Home</button>
            <!-- Imagem e texto sobre o hotel -->
            <div class="Apresentacao-titulo">
                <h2>Bem-vindo ao ControlHotel</h2>
                <img src="http://bonoahorro.es/wp-content/uploads/2017/04/Habitacion-hotel-de-lujo-1920x400.jpg">
                <p></p>
                <p class="text-muted">O Hotel ControHotel está localizado na cidade de Campo Grande - MS, uma cidade moderna em expansão que possui mais de 840 mil</p> 
                <p class="text-muted">habitantes e foi planejada em meio a uma vasta área verde, com ruas e avenidas largas. Campo Grande possui inúmeros pontos</p>
                <p class="text-muted">turísticos como: Monumento da Imigração Japonesa, Casa do Artesão, Parque das Nações Indígenas, Mercado Municipal Antônio</p>
                <p class="text-muted">Valente, entre outras opções, a cidade também conta com excelentes opções para compras.</p>
                <p class="text-muted">O Hotel coloca ao dispor dos seus clientes as seguintes funcionalidades:</p>
            </div>
        </div>
        <div class="how-section1">
            <!-- Área da piscina -->
            <div class="row">
                <div class="col-md-6 how-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/04/7d/dd/9b/piscina-hotel-tambau.jpg" class="img-rounded" alt=""/>
                </div>
                <div class="col-md-6">
                    <h4>Área de piscina</h4>
                    <p class="text-muted">Se veio com crianças, a primeira coisa que elas farão assim que chegarem será estrear as piscinas – até se for de noite. </p>
                    <p class="text-muted">São quatro piscinas, duas tropicais – a de adultos com cascata e bar molhado, e a infantil – e duas aquecidas e cobertas que estão à disposição das 09h00 às 21h00.</p>
                </div>
            </div>
            <!-- Playground para crianças -->
            <div class="row">
                <div class="col-md-6">
                    <h4>Playground para crianças</h4>
                    <p class="text-muted">Enquanto adultos pensam em paz e tranquilidade, a molecada quer mais é agito. Na verdade, crianças precisam mesmo de muita atividade, exercício e ações que estimulam o raciocínio todos os dias e na sua estadia em nosso hotel não vai ser diferente.</p>
                </div>
                <div class="col-md-6 how-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/08/6c/db/f8/bali-paragon-resort-hotel.jpg" class="img-rounded" alt=""/>
                </div>
            </div>
            <!-- Estacionamento -->
            <div class="row">
                <div class="col-md-6 how-img">
                    <img src="https://media-cdn.tripadvisor.com/media/photo-s/05/9e/0b/85/hotel-pousada-natural.jpg" class="img-rounded" alt=""/>
                </div>
                <div class="col-md-6">
                    <h4>Estacionamento</h4>
                        <p class="text-muted">Coberto e com seguro, o estacionamento do ControlHotel possui capacidade para 100 veículos e
                        serviço de valet, a um custo de R$ 15,00 a diária.</p>
                </div>
            </div>
            <!-- Academia -->
            <div class="row">
                <div class="col-md-6">
                    <h4>Academia</h4>
                    <p class="text-muted">Não prejudique sua rotina de treinos, durante sua viagem de negócios ou passeio. O ControlHotel 
                    dispõe de um centro fitness, totalmente climatizado, com pesos emborrachados e equipamentos modernos,
                    que possibilitam um ciclo de treino completo.
                    A academia fica localizada próximo a piscina.</p>
                </div>
                <div class="col-md-6 how-img">
                    <img src="https://www.etcemae.com.br/wp-content/uploads/2017/09/Academia-Hotel-Villa-Rossa.jpg" class="img-rounded" alt=""/>
                </div>
            </div>
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