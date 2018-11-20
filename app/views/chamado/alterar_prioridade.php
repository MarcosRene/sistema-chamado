<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico'];
Helper::verificarAcesso($permissoes);
?>


<div class="container my-2">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <div class="row">
                <form action="<?php echo URL_BASE . "Chamado/alterarPrioridade" ?>" method="POST">
                    <div class="form-row col-lg-12">

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="codigo">Código</label>
                                <input class="form-control" type="text"  value="<?php echo $chamado->id_chamado ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="nome">Local</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->local ?>">
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="nome">Área</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->descricaoArea ?>">
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-4">
                            <label for="problema">Prioridade</label>
                            <select class="form-control form-control-md" name="prioridade" required>
                                <option>Urgente</option>
                                <option>Alta</option>
                                <option>Normal</option>
                                <option>Baixa</option>
                            </select>

                        </div>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="resposavel">Aberto por</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->login ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="data-abertura">Data Abertura</label>
                                <input type="text" class="form-control"
                                       value="<?php echo date('d/m/Y', strtotime($chamado->dataAbertura)) ?>">
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="data-abertura">Aberto a</label>

                                <input type="text" class="form-control"
                                       value="<?php echo Helper::calcularTempoAbertura($chamado->dataAbertura) ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="tombamento">Tombamento</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->tombamento ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="descricao-problema">Descrição problema</label>
                                <textarea class="form-control" value="<?php echo $chamado->problema ?>"
                                          rows="4"><?php echo $chamado->problema ?></textarea>
                            </fieldset>
                        </div>

                        <div class="form-group col-lg-5 col-md-10 col-sm-12">
                            <input type="hidden" name="id_chamado" value="<?php echo $chamado->id_chamado ?>">
                            <a href="<?php echo URL_BASE . 'chamado/atender/' . $chamado->id_chamado ?>">
                                <button class="btn btn-danger" type="button">Cancelar</button>
                            </a>
                            <button class="btn btn-primary" type="submit">Salvar</button>
                        </div>


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

