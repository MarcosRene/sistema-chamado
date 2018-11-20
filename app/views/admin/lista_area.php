<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Áreas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered cell-border" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Responsável</th>
                    <th>Alterar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($viewData["areas"] as $area) { ?>
                    <tr class="cor1">
                        <td><?php echo $area->id_area ?></td>
                        <td><?php echo $area->descricao ?></td>
                        <td></td>


                        <td class="text-center">

                            <a href="<?php echo URL_BASE . "area/edite/" . $area->id_area ?>">
                                <button class="btn btn-primary mr-3">Editar</button>
                            </a>
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                    data-target="#modalExcluir">Excluir
                            </button>

                        </td>

                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

