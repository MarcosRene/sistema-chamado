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
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Local</th>
                        <th>Aberto a</th>
                        <th>Prioridade</th>
                        <th>Status</th>
                        <th>Atender</th>
                    </tr>
                </thead>
                <tbody>


                    <?php foreach ($viewData["naoAtendidos"] as $chamado) { ?>
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                            <td><?php echo $chamado->prioridade ?></td>
                            <td id="<?php echo \app\core\Helper::verificarCorStatus($chamado->status)
                        ?>"><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    </tr>

                    <?php foreach ($viewData["emAtendimento"] as $chamado) { ?>
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                            <td><?php echo $chamado->prioridade ?></td>
                            <td id="<?php echo \app\core\Helper::verificarCorStatus($chamado->status)
                        ?>"><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    </tr>

                    <?php foreach ($viewData['aguardandoTerceiros'] as $chamado) { ?>
                        <tr>
                            <td><?php echo $chamado->id_chamado ?></td>
                            <td><?php echo $chamado->local ?></td>
                            <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                            <td><?php echo $chamado->prioridade ?></td>
                            <td id="<?php echo \app\core\Helper::verificarCorStatus($chamado->status)
                        ?>"><?php echo $chamado->status ?></td>

                            <td>
                                <a href="<?php echo URL_BASE . "chamado/visualizarChamado/" . $chamado->id_chamado ?>">
                                    <button class="btn btn-primary btn-sm">Visualizar</button>
                                </a>
                            </td>
                        <?php } ?>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
</div>
