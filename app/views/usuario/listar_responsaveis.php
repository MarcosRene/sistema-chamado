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
            <table class="table table-striped" id="minhaTabela" width="99%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Login</th>
                        <th>Perfil</th>
                        <th>Responsável por</th>

                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($viewData["admin"] as $usuario) { ?>
                        <tr>
                            <td><?php echo $usuario->id_usuario ?></td>
                            <td><?php echo $usuario->nome . " " . $usuario->sobrenome ?></td>
                            <td ><?php echo $usuario->login ?></td>
                            <td><?php echo $usuario->descricao ?></td>
                            <td><?php echo $usuario->descricaoArea ?></td>


                            <td>
                                <div class="row justify-content-center">
                                    <a class="btn btn-primary btn-sm mr-2" href="<?php echo URL_BASE . "usuario/adicionarResponsabilidade/" . $usuario->id_usuario ?>">
                                        Visualizar
                                    </a>


                                </div>
                            </td>

                        </tr>
                    <?php } ?>

                    <?php foreach ($viewData["tecnico"] as $usuario) { ?>
                        <tr>
                            <td><?php echo $usuario->id_usuario ?></td>
                            <td><?php echo $usuario->nome . " " . $usuario->sobrenome ?></td>
                            <td><?php echo $usuario->login ?></td>
                            <td><?php echo $usuario->descricao ?></td>
                            <td><?php echo $usuario->descricaoArea ?></td>


                            <td>
                                <div class="row justify-content-center">
                                    <a class="btn btn-primary btn-sm mr-2" href="<?php echo URL_BASE . "usuario/adicionarResponsabilidade/" . $usuario->id_usuario ?>">
                                        Visualizar
                                    </a>


                                </div>
                            </td>

                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

