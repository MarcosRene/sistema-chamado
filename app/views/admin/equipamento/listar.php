<div id="wrapper">
    <div id="content-wrapper">
        <div class="container-fluid">
            <div class="card mb-5">
                <div class="card-header">
                    <i class="fa fa-table"></i>
                    Equipamentos</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="80%" cellspacing="0">
                            <thead>
                                <tr>

                                    <th width="10%">Tombamento</th>
                                    <th width="20%">Descricao</th>
                                    <th width="10%">Marca</th>

                                    <th width="20%" colspan="2" align="center">Alterar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($viewData["equipamento"] as $equipamento) { ?>
                                    <tr class="cor1">
                                        <td><?php echo $equipamento->tombamento ?></td>
                                        <td><?php echo $equipamento->descricao  ?></td>
                                        <td><?php echo $equipamento->marca ?></td>
                              
                                        
                                        <td align="center">
                                            <a href="<?php echo URL_BASE . "equipamento/edite/" . $equipamento->id_equipamento ?>"  class="btn">Editar</a>
                                        </td>
                                        <td align="center">
                                            <a href="<?php echo URL_BASE . "equipamento/delete/" . $equipamento->id_equipamento ?>" class="btn excluir">excluir</a>
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