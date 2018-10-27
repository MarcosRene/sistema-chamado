<div id="wrapper">
    
     <ul class="sidebar navbar-nav">
         <li class="nav-item">
            <a class="nav-link" href="adm.html">
            <i class="fa fa-fw fa-dashboard"></i>
                <span>Dashboard</span></a>
        </li>  
        <li class="nav-item">
            <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-clock-o"></i>
                <span>Atender</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-bar-chart"></i>
            <span>Relatório</span></a>
        </li>
     </ul>     
     
     <div id="content-wrapper">

         <div class="container-fluid">
                
            <div class="card mb-5">
            <div class="card-header">
            <i class="fa fa-table"></i>
            Usuários</div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Descrição</th>
                                <th>Aberto a</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>San Francisco</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
        
        <div class="container">
            
            <form>
                
                <div class="form-row">
                    
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" id="sobrenome" placeholder="Sorbenome">
                    </div>
                    
                    
                    <div class="form-group col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" placeholder="E-mail">
                    </div>
                    
                    <div class="form-group col-sm-6">
                            
                        <label for="tipo">Tipo</label>
                        <select class="form-control form-control-md">
                            <option>Selecione</option>
                            <option>Comum</option>
                            <option>Técnico</option>
                        </select> 

                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" placeholder="Login">
                    </div>
                    
                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="text" class="form-control" id="senha" placeholder="Senha">
                    </div>
                
                    <div class="form-group mb-3">
                        <button type="button" class="btn btn-primary  ml-1" id="teste">Cadastrar</button>                    
                        <button type="button" class="btn btn-danger ml-1" id="teste">Cancelar</button>                    
                    </div>
                
                </div>
                
            </form>
    
        </div>

     </div>

</div>