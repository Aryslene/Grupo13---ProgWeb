<?php
/*Verifica se o usuário está logado no sistema, para evitar que tente entrar na página*/
if ( !isset($_SESSION["idCliente"]) and !isset($_SESSION["email"]) ) {
    session_destroy();
    unset ($_SESSION["idCliente"]);
    unset ($_SESSION["email"]);  
    unset ($_SESSION["senha"])   ;
    header('location:?funcao=telaLogin');
}else{
    $codCliente = $_SESSION["idCliente"];
}       
/*Função utilizada para chamar o cabeçalho da página de editar reserva*/
require("header.php");
?>
        <!--Formulário para reservar quarto -->
        <div class="container"> 
            <!--Tipos de quarto do hotel para reservar-->
            <!--Essa linha deixa tudo alinhado dentro do container, usar isso smp <3 -->
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
                    <form action="?funcao=editarReserva" method="post">
                        <input type="hidden" id="codCliente" name="codCliente" value="<?php echo $codCliente; ?>">
                        <input type="hidden" id="idReserva" name="idReserva" value="<?php echo $reserva->getIdReserva(); ?>">
                        <!--Escolher o tipo do quarto-->
                        <div class="form-group">
                            <label for="inputState">Tipo de Suíte</label>
                            <select name="tipoQuarto" id="inputTipoQuarto" class="form-control" required>
                               
                                <option value="suitecasal"<?php if($reserva->getCodQuarto() == 1){echo " selected"; } ?>>Suíte Casal</option>
                                <option value="suitedupla"<?php if($reserva->getCodQuarto() == 2){echo " selected"; } ?>>Suíte Dupla</option>
                                <option value="suiteluxo"<?php if($reserva->getCodQuarto() == 3){echo " selected"; } ?>>Suíte Luxo</option>
                                <option value="suitefamilia"<?php if($reserva->getCodQuarto() == 4){echo " selected"; } ?>>Suíte Família</option>
                                <option value="solteiroduplo"<?php if($reserva->getCodQuarto() == 5){echo " selected"; } ?>>Suíte Solteiro Duplo</option>
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
                                <input name="dataEntrada" type="date" class="form-control" id="inputDataEntrada" placeholder="Calendario" required<?php if(!empty($reserva->getDataEntrada())){echo " value=\"".$reserva->getDataEntrada()."\""; } ?>>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="labelDataSaida">Data de Saída</label>
                                <input name="dataSaida" type="date" class="form-control" id="inputDataSaida" placeholder="Calendario" required<?php if(!empty($reserva->getDataSaida())){echo " value=\"".$reserva->getDataSaida()."\""; } ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="editado">Alterar reserva</button>
                    </form>                      
                </div>
            </div>              
        </div>
        <!--Fim do formulário para reservar quarto -->
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
    </body>
</html>