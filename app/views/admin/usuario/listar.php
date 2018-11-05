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
                    <?php foreach ($viewData["usuarios"] as $equipamento) { ?>
                        <tr class="cor1">
                            <td><?php echo $equipamento->id_usuario ?></td>
                            <td><?php echo $equipamento->nome . " " . $equipamento->sobrenome ?></td>
                            <td><?php echo $equipamento->email ?></td>
                            <td><?php echo $equipamento->login ?></td>


                            <td class="text-center">
                                <button type="button" href="<?php echo URL_BASE . "cliente/edite/" . $equipamento->id_cliente ?>"  class="btn btn-primary mr-4" data-toggle="modal" data-target="#modalEditar">Editar</button>
                                <button type="button" href="<?php echo URL_BASE . "cliente/delete/" . $equipamento->id_cliente ?>" class="btn btn-danger" data-toggle="modal" data-target="#modalExcluir">Excluir</button>
                            </td>   

                        </tr>	
                    <?php } ?>		
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente editar ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Editar</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
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
