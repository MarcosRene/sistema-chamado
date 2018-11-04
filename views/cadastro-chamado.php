<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Chamado</title>

        <link href="../assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">

        <link href="../assets/font-awesome/css/font-awesome.min.css" real="stylesheet">
        <link href="../assets/_css/estilo.css" rel="stylesheet">

    </head>

    <body>
       
        <?php require_once('includes/cabecalho.php')?>
       
       <div class="jumbotron">
           <div class="container-fluid">
               <h2>Cadastrar chamados</h2> 
           </div>
       </div>
  
       <div class="container col-lg-8">
           <form>
               <div class="form-row">
                   <div class="col">
                       <div class="form-group">
                           <label for="setor">Setor</label>
                           <select class="form-control form-control-sm" id="setor">
                               <option>Selecione</option>
                               <option>Telematica</option>
                           </select>
                       </div>
                   </div>
               <div class="col">
                   <div class="form-group">
                       <label for="problema">Problema com</label>
                       <select class="form-control form-control-sm" id="problema">
                           <option>Selecione</option>
                           <option>Computador</option>
                       </select>
                   </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="equipamento">Equipamento</label>
                        <input type="text" class="form-control form-control-sm" id="equipamento" placeholder="Tombamento">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="tipo">Tipo</label>
                        <select class="form-control form-control-sm">
                            <option>Selecione</option>
                            <option>Computador</option>
                        </select> 
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                            <input type="text" class="form-control form-control-sm" id="descricao" placeholder="Ex: Computador">
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col">
                        <div class="form-group">
                            <label for="descProblema">Descrição problema</label>
                            <textarea class="form-control" id="descProblema" rows="3"></textarea>
                        </div>
                    </div>
                    <div>
                    <div class="col"> 
                        <label>Urgência</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="radio1" value="option1" checked>
                                <label class="form-check-label" for="radio">Alta</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="radio2" value="option2">
                                <label class="form-check-label" for="radio2">Normal</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="radio3" value="option3">
                                <label class="form-check-label" for="radio3">Baixa</label>        
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div> 
      
        <div class="container col-lg-8">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#confirmacao">Finalizar</button>
                </div>
                <div class="col-md-3">
                    <a href="principal.html"><button class="btn btn-danger" type="button">Cancelar</button></a>
                </div>
            </div>
        </div>
      
        <div class="modal fade" id="confirmacao" tabindex="-1" role="dialog">
            <div class="modal-dialog">     
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 id="titulo-modal">Realizado com sucesso, código : ??</h4>
                        <button class="close" type="button" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Aguarde seu atendimento e acompanhe o status na tela inicial.</h5>
                    </div>
                    <div class="modal-footer">
                        <button id="btnNovo" class="btn btn-success" type="button">Novo chamado</button>
                        <button id="btnInicio" class="btn btn-primary" type="button">Inicio</button> 
                    </div>
                </div>
            </div>
        </div>
        
        <?php require_once('includes/rodape.php')?>
    
        <script src="../assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="../assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="..assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 
    
    </body>

</html>