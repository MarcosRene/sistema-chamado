<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico', 'usuario'];
Helper::verificarAcesso($permissoes);

?>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="<?php echo URL_BASE . "Chamado/Salvar" ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col-sm-4">
                        <label for="local">Local</label>
                        <input type="text" class="form-control" name="local" placeholder="Local">
                    </div>


                    <div class="form-group col-sm-4">
                        <label for="problema">Área</label>
                        <select id="area" name="area" class="form-control form-control-md">
                            <?php foreach ($viewData["areas"] as $area) { ?>
                                <option><?php echo $area->descricaoArea ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-3">
                        <label for="problema">Prioridade</label>
                        <select class="form-control form-control-md" name="prioridade" required>
                            <option>Urgente</option>
                            <option>Alta</option>
                            <option>Media</option>
                            <option>Baixa</option>
                        </select>

                    </div>

                    <div class="form-group col-sm-1">
                        <a data-toggle="modal" data-target="#modalInfo"
                           class="fas fa-info-circle ml-3 mt-5" title="Informações">
                        </a>
                    </div>

                    <div class="form-group col-sm-12">
                        <div class="card">
                            <div class="card-header" id="heading">
                                <h5 class="m-auto text-right">
                                    <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse"
                                            data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                                        Equipamento
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse" class="collapse" aria-labelledby="heading">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <label for="nome" class="sr-only">Tombamento</label>
                                            <input type="number" class="form-control" name="tombamento"
                                                   placeholder="Tombamento">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <label for="nome" class="sr-only">Nome</label>
                                            <input type="text" class="form-control" name="nomeEquip" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="problema">Descrição problema</label>
                        <textarea class="form-control" name="problema" rows="5" required    ></textarea>
                    </div>

                    <div class="form-group col-lg-6 col-md-10 col-sm-12">
                        <a class="btn btn-danger" href="<?php echo URL_BASE . 'usuario' ?>">
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="modalAlterar"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label">Classificação de prioridade</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                        <tbody>
                        <tr class="text-center">
                            <td id="Urgente"><br>Incidente que causa parada</td>
                            <td id="Alta"><br>Incidente que não causa parada</td>
                            <td id="Media"><br>Solicitação de instalações e configurações</td>
                            <td id="Baixa"><br>Dúvidas de usuários</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>