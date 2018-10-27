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
                <h2>Chamado cód: 65</h2> 
            </div>
        </div>
     

        <div class="container col-lg-8">
            <div class="row">
                <form class="col-md-8">
                    <div class="form-row">
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="codigo">Codigo</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>  
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="setor">Setor</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col">
                           <fieldset disabled>
                                <div class="form-group">
                                   <label for="urgencia">Urgência</label>
                                   <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col">
                            <fieldset disabled>
                               <div class="form-group">
                                   <label for="problemaCom">Problema com</label>
                                   <input type="text" class="form-control form-control-sm">
                                    </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                   <label for="tombamento">Tombamento</label>
                                   <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                   <label for="tipo">Tipo</label>
                                   <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="descricao">Descrição</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="marca">Marca</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="descricaoProblema">Descrição problema</label>
                                    <textarea class="form-control" id="descProblema" rows="3"></textarea>
                                </div>
                            </fieldset>
                        </div>
                        <div>
                        <div class="col"> 
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="aberto">Aberto a </label>
                                    <input type="text" class="form-control form-control-sm">   
                                </div>
                            </fieldset>
                        </div>
                        </div>
                    </div>
                </form>   
                <div class="form-row col-md-4">
                    <div class="col-md-12">
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="codigo">Status</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </fieldset>
                      </div>  
		              <div class="col">
		                  <fieldset disabled>
                              <div class="form-group">
                                  <label for="codigo">Técnico</label>
		                          <input type="text" class="form-control form-control-sm">
		                      </div>
		                  </fieldset>
		              </div>      
            	   </div>
                   <div class="col-md-12">
                        <div class="col">
                            <fieldset disabled>
                                <div class="form-group">
                                    <label for="codigo">Parecer</label>
                                    <textarea class="form-control" id="descProblema" rows="4"></textarea>
                               </div>
                            </fieldset>
                        </div>
		           </div>
                </div>
            </div>
        </div>
        
        <div class="container col-lg-8">
            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-3">
                    <a href="principal.html"><button class="btn btn-primary" type="button">Inicio</button></a>
                </div>
                 <div class="col-md-3">
                    <a href="chamados-encerrados.html"><button class="btn btn-dark" type="button">Voltar</button></a>
                </div>
            </div>
        </div>
           
    
        <?php require_once('includes/rodape.php')?>
        
        <script src="assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>  
      
    </body>

</html>