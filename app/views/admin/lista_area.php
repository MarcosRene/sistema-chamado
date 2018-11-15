<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Áreas
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th width="1%" align="left">ID</th>
                    <th align="left">Descrição</th>
                    <th align="left">Responsável</th>
                    <th width="20%" align="left">Alterar</th>
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
    <div class="card-footer">
        <nav aria-label="pageUsuario">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>
