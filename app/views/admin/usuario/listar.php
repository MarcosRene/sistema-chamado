<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Usuários</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th width="1%" align="left">ID</th>
                        <th width="7%" align="left">Nome</th>
                        <th width="7%" align="left">Email</th>
                        <th width="5%" align="left">Login</th>
                        <th width="5%" align="left">Perfil</th>
                        <th width="10%" align="left">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($viewData["usuarios"] as $usuario) { ?>
                        <tr class="cor1">
                            <td><?php echo $usuario->id_usuario ?></td>
                            <td><?php echo $usuario->nome . " " . $usuario->sobrenome ?></td>
                            <td><?php echo $usuario->email ?></td>
                            <td><?php echo $usuario->login ?></td>
                            <td><?php echo $usuario->id_perfil ?></td>


                            <td class="text-center">
                                
                                <a href="<?php echo URL_BASE . "usuario/edite/" . $usuario->id_usuario  ?>" class="btn btn-primary mr-4">Editar</a>
                                <a href="<?php echo URL_BASE . "usuario/delete/" . $usuario->id_usuario  ?>" class="btn btn-danger">Excluir</a>
                      
                            </td>   

                        </tr>	
                    <?php } ?>		
                </tbody>
            </table>
        </div>
    </div>
</div>



<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Excluir</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>
    </div>
</div>
