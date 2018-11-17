<div class="container my-2">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <div class="row">

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
                        <fieldset disabled>
                            <label for="prioridade">Prioridade</label>
                            <input type="text" class="form-control" value="<?php echo $chamado->prioridade ?>">
                        </fieldset>
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
                            <?php   use app\core\Helper; ?>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalAtender">Atender</button>

                        <a href="<?php echo URL_BASE . 'usuario' ?>">
                            <button class="btn btn-danger" type="button">Cancelar</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalAtender" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="label">Escolha uma das opções</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo URL_BASE . "chamado/atenderChamado/" . $chamado->id_chamado ?>" method="POST">

                <div   class="form-group col-sm-12">
                    <h6 class="modal-body" id="label">Escreva um parecer técnico para esse problema</h6>
                    <textarea  type="text"  class="form-control" name="parecer" rows="5" required></textarea>

                </div>

                <div class="modal-footer">
                        <input type="hidden" name="usuario" value="<?php echo $_SESSION['dados']->id_usuario ?>">
                        <button  name="encerrar" type="submit" class="btn btn-dark">Encerrar</button>
                        <button name="atender" type="submit" class="btn btn-success">Atender</button>
                        <button name="terceiros" type="submit" class="btn btn-warning text-white">Terceiros</button>
                </div>
            </form>         
        </div>
    </div>
</div>
