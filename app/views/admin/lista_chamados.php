<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico', 'usuario'];
Helper::verificarAcesso($permissoes);


include 'home.php';
?>


<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        <span>Ocorrências</span>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="tabelaPrioridade" width="100%" cellspacing="0">
                <thead class="bg-blue-grey-100">
                    <tr>
                        <th>Id</th>
                        <th>Local</th>
                        <th>Aberto por</th>
                        <th>Aberto a</th>
                        <th>Prioridade</th>
                        <th>Oculta</th>
                        <th>Status</th>
                        <th>Atender</th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($viewData["chamados"] as $chamado) {


                        if ($chamado->prioridade === 'Urgente') {
                            ?>
                            <tr>
                                <td><?php echo $chamado->id_chamado ?></td>
                                <td><?php echo $chamado->local ?></td>
                                <td><?php echo $chamado->login ?></td>
                                <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                                <td id="<?php echo $chamado->prioridade ?>"></td>
                                <td>1</td>
                                <td><?php echo $chamado->status ?></td>

                                <td>
                                    <a href="<?php echo URL_BASE . "chamado/Atender/" . $chamado->id_chamado ?>">
                                        <button class="btn btn-primary btn-sm">Atender</button>
                                    </a>
                                </td>
                            <?php } ?>

                            <?php } ?>


                        <?php
                        foreach ($viewData["chamados"] as $chamado) {


                            if ($chamado->prioridade === 'Alta') {
                                ?>
                            <tr>
                                <td><?php echo $chamado->id_chamado ?></td>
                                <td><?php echo $chamado->local ?></td>
                                <td><?php echo $chamado->login ?></td>
                                <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                                <td id="<?php echo $chamado->prioridade ?>"></td>
                                 <td>2</td>
                                <td><?php echo $chamado->status ?></td>

                                <td>
                                    <a href="<?php echo URL_BASE . "chamado/Atender/" . $chamado->id_chamado ?>">
                                        <button class="btn btn-primary btn-sm">Atender</button>
                                    </a>
                                </td>
                            <?php } ?>

                        <?php } ?>            


                        <?php
                        foreach ($viewData["chamados"] as $chamado) {
                          
                            if ($chamado->prioridade === 'Media') {
                                ?>
                            <tr>
                                <td><?php echo $chamado->id_chamado ?></td>
                                <td><?php echo $chamado->local ?></td>
                                <td><?php echo $chamado->login ?></td>
                                <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                                <td id="<?php echo $chamado->prioridade ?>"></td>
                                <td>3</td>
                                <td><?php echo $chamado->status ?></td>

                                <td>
                                    <a href="<?php echo URL_BASE . "chamado/Atender/" . $chamado->id_chamado ?>">
                                        <button class="btn btn-primary btn-sm">Atender</button>
                                    </a>
                                </td>
                            <?php } ?>

                        <?php } ?>            

                        <?php
                        foreach ($viewData["chamados"] as $chamado) {
                          
                            if ($chamado->prioridade === 'Baixa') {
                                ?>
                            <tr>
                                <td><?php echo $chamado->id_chamado ?></td>
                                <td><?php echo $chamado->local ?></td>
                                <td><?php echo $chamado->login ?></td>
                                <td><?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?></td>
                                <td id="<?php echo $chamado->prioridade ?>"></td>
                                  <td>4</td>
                                <td><?php echo $chamado->status ?></td>

                                <td>
                                    <a href="<?php echo URL_BASE . "chamado/Atender/" . $chamado->id_chamado ?>">
                                        <button class="btn btn-primary btn-sm">Atender</button>
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
