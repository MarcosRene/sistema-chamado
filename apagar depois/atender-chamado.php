<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Chamado</title>

        <link href="assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">

        <link href="assets/font-awesome/css/font-awesome.min.css" real="stylesheet">
        <link href="assets/_css/estilo.css" rel="stylesheet">
        
    </head>

    <body>
        <?php require_once('includes/cabecalho.php')?>
       
       <div class="jumbotron">
           <div class="container-fluid">
               <h2>Atender Chamados</h2> 
           </div>
       </div>
  
       <div class="container col-lg-8">
           <form>
               <div class="form-row">
                   <div class="col">
                       <fieldset disabled>
                           <div class="form-group">
                               <label for="codigo">Código</label>
                               <input class="form-control">
                           </div>
                        </fieldset>
                   </div>
               <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                           <label for="setor">Setor</label>
                           <input class="form-control">
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                           <label for="problema">Problema com</label>
                           <input class="form-control">
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="urgencia">Urgência</label>
                            <input class="form-control">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="tombamento">Tombamento</label>
                            <input class="form-control">
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                     <fieldset disabled>
                        <div class="form-group">
                           <label for="tipo">Tipo</label>
                           <input class="form-control">
                        </div>
                    </fieldset>
                </div>
                <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                           <label for="desricao">Descricao</label>
                           <input class="form-control">
                        </div>
                    </fieldset>
                </div> 
                <div class="col">
                    <fieldset disabled>
                        <div class="form-group">
                           <label for="marca">Marca</label>
                           <input class="form-control">
                        </div>
                    </fieldset>
                </div>
            </div>
            <div class="form-row">
                <div class="col-lg-10">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="descProblema">Descrição problema</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </fieldset>
                </div> 
                <div class="col-lg-2">
                    <fieldset disabled>
                        <div class="form-group">
                            <label for="aberto">Aberto a </label>
                            <input class="form-control">
                        </div>
                    </fieldset>
                </div>
            </div>
            </form>
        </div> 
      
        <div class="container col-lg-8">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <button id="btnDepende" class="btn" type="button" data-toggle="modal" data-target="#depende">Depende de tereciros</button>
                </div>   
                <div class="col-md-3">
                    <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#encerrar">Encerrar</button>
                </div>
                <div class="col-md-3">
                    <button class="btn btn-success" type="button" data-toggle="modal" data-target="#atender">Atender</button>
                </div>
            </div>  
        </div>
      
        <div class="modal fade" id="depende" tabindex="-1" role="dialog">
            <div class="modal-dialog">     
                <div class="modal-content">
                    <div class="modal-header" id="modal-depende">
                        <h4 id="titulo-modal">Depende de terceiros</h4>
                        <button class="close" type="button" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="informe">Informe sobre o atendimento</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnAguarda" class="btn" type="button">Aguardar</button>
                        <button id="btnCancelar" class="btn" type="button">Cancelar</button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="encerrar" tabindex="-1" role="dialog">
            <div class="modal-dialog">     
                <div class="modal-content">
                    <div class="modal-header" id="modal-encerra">
                        <h4 id="titulo-modal">Encerrar chamado</h4>
                        <button class="close" type="button" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="informe">Descreva como solucionou o problema</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnEncerra" class="btn btn-dark" type="button">Encerrar</button>
                        <button id="btnCancelar" class="btn" type="button">Cancelar</button> 
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="atender" tabindex="-1" role="dialog">
            <div class="modal-dialog">     
                <div class="modal-content">
                    <div class="modal-header" id="modal-atende">
                        <h4 id="titulo-modal">Atender chamado</h4>
                        <button class="close" type="button" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="informe">Informe sobre o atendimento</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnAtender" class="btn btn-success" type="button">Atender</button>
                        <button id="btnCancelar" class="btn" type="button">Cancelar</button> 
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once('includes/rodape.php')?>
    
        <script src="assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
    
    </body>

</html>