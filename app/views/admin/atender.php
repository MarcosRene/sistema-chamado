
<div class="container">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="" method="POST">

                <div class="row">

                    <div class="form-row col-lg-7" id=form_row>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="codigo">Código</label>
                                <input class="form-control" type="text" name="codigo" value="<?php echo $chamado->id_chamado ?>" >
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="nome">Local</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->local ?>" >
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="nome">Área</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->area ?>" >
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="prioridade">Prioridade</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->prioridade ?>" >
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="resposavel">Aberto por</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->abertoPor ?>" >
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-4">
                            <fieldset disabled>
                                <label for="data-abertura">Data Abertura</label>
                                <input type="text" class="form-control" value="<?php echo date('d/m/Y', strtotime($chamado->dataAbertura))?>" >
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="data-abertura">Aberto a</label>
                                <?php

                                use app\core\Data ?>
                                <input type="text" class="form-control" value="<?php echo Data::calcularTempoAbertura($chamado->dataAbertura) ?>" >
                            </fieldset>
                        </div>

                        <div class="form-group col-sm-6">
                            <fieldset disabled>
                                <label for="tombamento">Tombamento</label>
                                <input type="text" class="form-control" value="<?php echo $chamado->tombamento ?>" >
                            </fieldset>
                        </div>


                        <div class="form-group col-sm-12">
                            <fieldset disabled>
                                <label for="descricao-problema">Descrição problema</label>
                                <input class="form-control" type="text" value="<?php echo $chamado->problema ?>" rows="5"></input>
                            </fieldset>
                        </div>

                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
