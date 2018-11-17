<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="" method="POST">

                <div class="row">

                    <div class="form-row col-lg-7">

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="codigo">Código</label>
                                <input class="form-control" type="text" value="<?php echo $chamado->id_chamado ?>" >
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

                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="tombamento">Tombamento</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->tombamento ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="resposavel">Aberto por</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->login ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="data-abertura">Data Abertura</label>
                                <input type="text" class="form-control" value="<?php echo date('d/m/Y  h:m ', strtotime($chamado->dataAbertura)) ?>">
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="data-abertura">Data Encerramento</label>
                                <input type="text" class="form-control"value=" <?php echo $chamado->id_chamado ?>">
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="descricao-problema">Descrição problema</label>
                                <textarea class="form-control" id="descricao-problema" rows="5"><?php echo $chamado->problema ?></textarea>
                            </fieldset>
                        </div>

                    </div>

                    <div class="form-row col-lg-4">
                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="resposavel">Status</label>
                                <input type="text" id="encerrado" class="form-control" value="<?php echo $chamado->status ?>" >
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="data-abertura">Data Atendimento</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->dataAtendimento ?>">
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="resposavel">Responsável</label>
                                <input type="text" class="form-control" value="<?php echo "" ?>">
                                  
                                
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="parecer">Parecer</label>
                                <textarea class="form-control" id="parecer" rows="5"><?php echo $chamado->parecer?></textarea>
                            </fieldset>
                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
