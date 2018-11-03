<div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-5">
                <div class="card-header">
                    <i class="fa fa-table"></i>
                    Usuários</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="5%">Id</th>
                                    <th width="10%">Nome</th>
                                    <th width="20%">Email</th>
                                    <th width="10%">Login</th>

                                    <th width="20%" colspan="2" align="center">Alterar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($viewData["usuarios"] as $equipamento) { ?>
                                    <tr class="cor1">
                                        <td><?php echo $equipamento->id_usuario ?></td>
                                        <td><?php echo $equipamento->nome . " " . $equipamento->sobrenome ?></td>
                                        <td><?php echo $equipamento->email ?></td>
                                        <td><?php echo $equipamento->login ?></td>


                                        <td align="center">
                                            <a href="<?php echo URL_BASE . "cliente/edite/" . $equipamento->id_cliente ?>"  class="btn">Editar</a>
                                        </td>
                                        <td align="center">
                                            <a href="<?php echo URL_BASE . "cliente/delete/" . $equipamento->id_cliente ?>" class="btn excluir">excluir</a>
                                        </td>
                                    </tr>	
                                <?php } ?>							  
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>