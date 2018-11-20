<?php

    use app\core\Helper;

    $permissoes = ['admin'];
    Helper::verificarAcesso($permissoes);

?>


<div class="container my-5">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="<?php echo URL_BASE . "usuario/alterarResponsabilidade" ?>" method="POST">

                <div class="form-row">

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="nome">Código</label>
                            <input type="text" class="form-control"
                                   value="<?php echo $usuario->id_usuario ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->nome ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control"
                                   value="<?php echo $usuario->sobrenome ?>">
                        </fieldset>

                    </div>
                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="tipo">Perfil</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->descricao ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="login">Login</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->login ?>">
                        </fieldset>
                    </div>

         
                    <div class="form-group col-sm-4">
                        <label for="tipo">Responsável por</label>
                        <select id="perfil" name="area" class="form-control form-control-md">
                            <?php foreach ($viewData["areas"] as $area) { ?>
                                <option><?php echo $area->descricaoArea ?></option>
                            <?php } ?>
                        </select>
                    </div>


         
                    <div class="form-group col-sm-12"></div>

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDesativar">
                            Desativar
                        </button>

                        <a class="btn btn-danger" href="<?php echo URL_BASE . "usuario/listarTecnico" ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

