<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Ocorrências</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descrição</th>
                        <th>Aberto a</th>
                        <th>Status</th>
                        <th>Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($viewData["usuarios"] as $usuario) { ?>
                        <tr class="cor1">
                            <td><?php echo $usuario->id_usuario ?></td>
                            <td><?php echo $usuario->nome . " " . $usuario->sobrenome ?></td>
                            <td><?php echo $usuario->email ?></td>
                            <td><?php echo $usuario->login ?></td>

  
                            
                            <td align="center">
    
                                <a href="<?php echo URL_BASE . "usuario/edite/" . $usuario->id_usuario ?>"  class="btn btn-primary mr-3">Editar</a>
                                <a href="<?php echo URL_BASE . "cliente/delete/" . $usuario->id_cliente ?>" class="btn btn-danger">Excluir</a>
                            </td>

                        </tr>	
                    <?php } ?>		
                </tbody>
            </table>
        </div>
    </div>
</div>