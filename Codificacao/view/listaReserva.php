<?php
/*
*Esse documento faz parte de uma aplicação desenvolvida na matéria de ProgWeb-2018/2 na FACOM, 
*disciplina lecionada pela Profª Jane Eleutério
*Seu uso é permitido para fins acadêmicos, todavia mantendo a referência de autoria.
*@author Aryslene S. Bitencourt - Acadêmica de Engenharia de Software
*@author Bruna Luzia A. Rodrigues - Acadêmica de Engenharia de Software
*@author Danielle L. M. G. Benites - Acadêmica de Engenharia de Software
*@author Walquiria L. Lopes - Acadêmica de Engenharia de Software

Página principal do hotel
-->Classe que apresenta os dados da reserva do cliente logado na sessão
*/
if(!isset($_SESSION["idCliente"]) and !isset($_SESSION["email"]) ) {
    //Destrói
    session_destroy();
    //Limpa
    unset ($_SESSION["idCliente"]);
    unset ($_SESSION["email"]);  
    unset ($_SESSION["senha"])   ;
    //Redireciona para a página de autenticação
    header('location:?funcao=telaLogin');
}else{
    $idCliente = $_SESSION["idCliente"];
    $nome = $_SESSION["email"];
} 
/*Essa função chama o header da página*/
require("header.php");
?>
<!--Mensagem de Aviso-->
<div class="container" >
			<div class="row justify-content-center mb-5 mt-5">
            <?php if(isset($editado) && $editado == true){ ?>
				<?php if ($sucesso) { ?>
					<div class="alert alert-success">
						<strong>Muito bem meu jovem! </strong> <?= $msg; ?>
					</div>
				<?php } else { ?>
					<div class="alert alert-danger">
						<strong>Algo Deu Errado!</strong> <?= $msg; ?>
					</div>
                <?php }
                } ?>
			</div>
		</div>
        
<?php   if (isset($listaReserva) && count($listaReserva) >= 1) {
           // if (isset($listaQuartos) && count($listaQuartos) >= 1) {
               ?>
                <div class="container"> 
                    <!--Quartos que você reservou-->
                    <div class="row justify-content-center mb-5 mt-5">
                        <div class="col-md-12 justify-content-center mb-12 mt-12">
                <?php    foreach($listaReserva as $reserva){
                        $q = $reserva->getObjQuarto();
                        ?>
                            <div class="card col-md-5" style="float:left;  margin-left: 10px; margin-bottom: 10px;;">
                                <div class="card-body">
                                    <h5 class="card-title">Reserva #<?php echo $reserva->getIdReserva(); ?> - Informações do Quarto</h5>
                                    <p class="card-text">Tipo de Quarto: <?php 
                                    $tipoQuarto = $q->getTipoQuarto();
                                    switch($tipoQuarto){
                                        case "suitedupla":
                                            echo "Suite dupla";
                                            break;
                                        case "suitecasal":
                                            echo "Suite de casal";
                                            break;
                                        case "suiteluxo":
                                            echo "Suite de luxo";
                                            break;
                                        case "suitefamilia":
                                            echo "Suite família";
                                            break;
                                        case "solteiroduplo":
                                            echo "Solteiro duplo";
                                            break;
                                        default:
                                            echo "Não definido";
                                            break;
                                    }
                                    
                                    ?></p>
                                    <p class="card-text">Quantidade de camas: <?php echo $q->getQtdOcupacao() ?></p>
                                    <p class="card-text">Valor da Diária: <?php echo $q->getValorDiaria()?></p>
                                    <p class="card-text">Taxa de Cancelamento:<?php echo $q->getTaxaCancelamento()?></p>
                                    <p class="card-text"> 
                                    <a class="btn btn-primary" <?php echo "href=\"?funcao=editarReserva&idReserva=".$reserva->getIdReserva()."&codQuarto=".$q->getIdQuarto()."\"" ?>>Editar</a>
                                    <a class="btn btn-primary" <?php echo "href=\"?funcao=cancelarReserva&idReserva=".$reserva->getIdReserva()."\"" ?>>Cancelar Reserva</a>
                                    </p>  
                                               
                                </div>
                            </div> 
                        <?php } ?>
                        </div>
                    </div>                              
                </div>
<?php       //}
        }else{ ?>
            <div class="container"> 
                <!--Quartos que você reservou-->
                <div class="row justify-content-center mb-5 mt-5">
                    <div class="col-sm-12 col-md-10 col-lg-8">
                        <div class="card" >
                            <div class="card-body">
                                <h5 class="card-title" style="text-align:center">Não Existem Reservas Feitas Ainda!</h5>
                            </div>
                        </div>
                    </div>
                </div>                              
            </div>            
    <?php } ?>
    </body>
</html>