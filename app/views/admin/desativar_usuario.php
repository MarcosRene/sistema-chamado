<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="<?php echo URL_BASE . "usuario/excluir" ?>" method="POST">

                <div class="form-row">

                    <div class="form-group col-sm-2">
                        <fieldset disabled>
                            <label for="nome">Código</label>
                            <input type="text" class="form-control"
                                   value="<?php echo $usuario->id_usuario ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-2">
                        <fieldset disabled>
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->nome ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="sobrenome">Sobrenome</label>
                            <input type="text" class="form-control"
                                   value="<?php echo $usuario->sobrenome ?>">
                        </fieldset>

                    </div>

                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="login">Login</label>
                            <input type="text" class="form-control"  value="<?php echo $usuario->login ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-4">
                        <fieldset disabled>
                            <label for="tipo">Perfil</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->descricao ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="email">Responsável por</label>
                            <input type="text" class="form-control" value="<?php echo $usuario->descricaoArea ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="nome">Data cadastro</label>
                            <input type="text" class="form-control" 
                                   value="<?php echo date('d/m/Y', strtotime($usuario->dataCadastro)) ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="nome">Situação</label>
                            <input type="text" class="form-control" name="nome"
                                   value="<?php echo $usuario->ativo ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-7">
                        <fieldset disabled>
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $usuario->email ?>">
                        </fieldset>
                    </div>

                    <div class="form-group col-sm-12"></div>

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario ?>">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDesativar">
                            Desativar
                        </button>

                        <a class="btn btn-danger" href="<?php echo URL_BASE . "usuario/mostrarUsuarios" ?>">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalDesativar" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label">Deseja realmente desativar esse usuário?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                <a class="btn btn-info col-lg-4 col-md-5 col-sm-5" href="<?php echo URL_BASE . "usuario/desativarUsuario/". $usuario->id_usuario ?>">
                    Desativar
                </a>
            </div
        </div>
    </div>
</div>