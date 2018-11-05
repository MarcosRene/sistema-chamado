 <div id="wrapper">
    
      <ul class="sidebar navbar-nav">
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
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-user"></i>
            <span>Usuários</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <div class="card-body">
                  <div class="mr-5">Não atendidos</div>
                </div>
                <a class="card-footer text-white p-3">
                  
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="mr-5">Atendidos</div>
                </div>
                <a class="card-footer text-white p-3">
                 
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <div class="card-body"> 
                  <div class="mr-5">Aguardando terceiros</div>
                </div>
                <a class="card-footer text-white p-3">
                    
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-dark o-hidden h-100">
                <div class="card-body">
                  <div class="mr-5">Encerrados</div>
                </div>
                  <a class="card-footer text-white p-3">
                    
                </a>
              </div>
            </div>
          </div>
            
            <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-table"></i>
              Chamados</div>
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
                      <td>61</td>
                    
                    </tr>
                    <tr>
                      <td>Garrett Winters</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>63</td>
                     
                    </tr>
                    <tr>
                      <td>Ashton Cox</td>
                      <td>Junior Technical Author</td>
                      <td>San Francisco</td>
                      <td>66</td>
                      
                    </tr>
                    <tr>
                      <td>Cedric Kelly</td>
                      <td>Senior Javascript Developer</td>
                      <td>Edinburgh</td>
                      <td>22</td>
                     
                    </tr>
                    <tr>
                      <td>Airi Satou</td>
                      <td>Accountant</td>
                      <td>Tokyo</td>
                      <td>33</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            </div>
 
      </div>
          
          <?php require_once('rodape_admin.php')?>
          
     </div>
    
    </div>
      