<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico', 'usuario'];
Helper::verificarAcesso($permissoes);
?>


<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        <span>Ocorrências</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered cell-border" id="minhaTabela" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Local</th>
                        <th>Encerrado por</th>
                        <th>Data encerrado</th>
                        <th>Prioridade</th>
                        <th>Status</th>
                        <th>Atender</th>
                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($viewData["encerrados"] as $chamado) { 
                        
                        if($chamado->prioridade === 'Urgente'){?>
                  
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo $chamado->login ?></td>
                            <td><?php echo date('d/m/Y  H:i ', strtotime($chamado->dataEncerrado)) ?></td>
                            
                            <td id="<?php echo $chamado->prioridade ?>"></td>
                            <td><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        
                        <?php } ?>
                    <?php } ?>
                  
                    <?php foreach ($viewData["encerrados"] as $chamado) { 
                        
                        if($chamado->prioridade === 'Alta'){?>
                  
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo $chamado->login ?></td>
                            <td><?php echo date('d/m/Y  H:i ', strtotime($chamado->dataEncerrado)) ?></td>
                            
                            <td id="<?php echo $chamado->prioridade ?>"></td>
                            <td><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    <?php } ?>
                        
                    <?php foreach ($viewData["encerrados"] as $chamado) { 
                        
                        if($chamado->prioridade === 'Media'){?>
                  
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo $chamado->login ?></td>
                            <td><?php echo date('d/m/Y  H:i ', strtotime($chamado->dataEncerrado)) ?></td>
                            
                            <td id="<?php echo $chamado->prioridade ?>"></td>
                            <td><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    <?php } ?>
                            
                    <?php foreach ($viewData["encerrados"] as $chamado) { 
                        
                        if($chamado->prioridade === 'Baixa'){?>
                  
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo $chamado->login ?></td>
                            <td><?php echo date('d/m/Y  H:i ', strtotime($chamado->dataEncerrado)) ?></td>
                            
                            <td id="<?php echo $chamado->prioridade ?>"></td>
                            <td><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    <?php } ?>
                            
                            
                        </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
