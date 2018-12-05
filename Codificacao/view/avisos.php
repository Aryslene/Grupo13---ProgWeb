<?php
/*Função utilizada para chamar o cabeçalho da página de aviso*/
require("header.php");
?>
        <div class="container"> 
            <!--Avisos-->
            <div class="row justify-content-center mb-5 mt-5">
                <div class="col-sm-12 col-md-10 col-lg-8">
					<div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Aviso!</h5>
                                <p class="card-text">				
									<?php if ($sucesso) { ?>
									<div class="alert alert-success">
										<strong>Show! </strong> <?= $msg; ?>
									</div>
								<?php } else { ?>				
								<div class="alert alert-danger">
									<strong>Iiih..Deu problemas!</strong> <?= $msg; ?>
								</div>
								<?php } ?>	
								<a href="?funcao=telaListaReservas" class="btn btn-primary mt-3">Minhas Reservas</a> 
								</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>