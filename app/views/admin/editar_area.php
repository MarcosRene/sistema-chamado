<?php

    use app\core\Helper;

    $permissoes = ['admin'];
    Helper::verificarAcesso($permissoes);

?>


<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="<?php echo URL_BASE . "area/salvar" ?>" method="POST">

                <div class="form-row">

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="nome">Código</label>
                            <input type="text" class="form-control" name="nome" value="<?php echo $area->id_usuario ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-4">

                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" value="<?php echo $area->descricao ?>">

                    </div>

                    <div class="form-group col-sm-12"></div>

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <input type="hidden" name="id_area" value="<?php echo $area->id_area ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEditar">
                            Salvar
                        </button>

                        <a class="btn btn-danger" href="<?php echo URL_BASE . "usuario/mostrarUsuarios" ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label">Deseja salvar as alterações ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <a class="btn btn-info " href="<?php echo URL_BASE . "area/salvar" ?>">
                    Salvar
                </a>
            </div
        </div>
    </div>
</div>