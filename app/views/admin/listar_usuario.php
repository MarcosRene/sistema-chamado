<?php

    use app\core\Helper;

    $permissoes = ['admin'];
    Helper::verificarAcesso($permissoes);

?>



<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Usuários
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Login</th>
                    <th>Perfil</th>
                    <th>Alterar</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($viewData["usuarios"] as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario->id_usuario ?></td>
                        <td><?php echo $usuario->nome . " " . $usuario->sobrenome ?></td>
                        <td><?php echo $usuario->email ?></td>
                        <td><?php echo $usuario->login ?></td>
                        <td><?php echo $usuario->descricao ?></td>


                        <td>
                            <div class="row justify-content-center">
                                <a class="btn btn-primary btn-sm mr-2" href="<?php echo URL_BASE . "usuario/edite/" . $usuario->id_usuario ?>">
                                   Editar
                                </a>
                                
                                <a class="btn btn-primary btn-danger btn-sm" href="<?php echo URL_BASE . "usuario/desativar/" . $usuario->id_usuario ?>">
                                    Desativar
                                </a>
                               
                            </div>
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

<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vai realmente excluir esse usuário?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php echo 'ID ' . $usuario->id_usuario . ' Nome' . $usuario->login . " " . $usuario->sobrenome ?>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info col-lg-4 col-md-5 col-sm-5" data-dismiss="modal">Excluir
                </button>
                <button type="button" class="btn btn-secondary col-lg-4 col-md-5 col-sm-5">Cancelar</button>
            </div>
        </div>
    </div>
</div>
