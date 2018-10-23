<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>chamado</title>

        <link href="assets/Sass/node_modules/bootstrap/compiler/bootstrap.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" real="stylesheet">
        <link href="assets/_css/estilo.css" rel="stylesheet">
        
    </head>

    <body>

        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="principal.html"><img src="assets/img/logo.png" height="35px" width="45px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="nav navbar-nav ml-auto">
                        <li><span class="fa fa-user"></span>Usuário: </li>
                        <li>
                            <a href="login.html">
                                <span class="fa fa-sign-out"></span>Sair
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

       
        <div class="jumbotron">
            <div class="container-fluid">
                <h2>Meus chamados</h2> 
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <a href="cadastro-chamado.html"><button class="btn btn-success" type="button">Novo Chamado</button></a>
                </div>
            <div class="col-md-4"></div>
            <div class="col-md-3">
                  <a href="chamados-encerrados.html"><button class="btn btn-dark" type="button">Visualizar Chamados encerrados</button></a>
            </div>
            <div class="col-md-1"></div>
            </div>
               
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Código</th>
                            <th scope="col">Descrição</th>
                            <th scope="col">Aberto a</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody id="tBody">
                        <tr>
                             <th scope="row"><a href="acompanhar-chamado.html"><span class="fa fa-search"></span></a></th>
                            <td>?</td>
                            <td>?</td>
                            <td>?</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>?</td>
                            <td>?</td>
                            <td>?</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>?</td>
                            <td>?</td>
                            <td>?</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>?</td>
                            <td>?</td>
                            <td>?</td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>?</td>
                          <td>?</td>
                          <td>?</td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                <div class="col-md-1"></div>
            </div>

            <nav id="paginacao">
                <ul class="pagination justify-content-center" >
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Anterior">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Anterior</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Próximo">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Próximo</span>
                        </a>
                    </li>
                </ul>
            </nav>  

        </div>
        
      
        <footer id="footer" class="py-5 bg-dark fixed mt-5">
            <div class="container-fluid">
                <p class="m-0 text-center text-white"></p>
            </div>
        </footer>

        <script src="assets/Sass/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="assets/Sass/node_modules/popper.js/dist/umd/popper.min.js"></script>
        <script src="assets/Sass/node_modules/bootstrap/dist/js/bootstrap.min.js"></script> 

    </body>

</html>
    