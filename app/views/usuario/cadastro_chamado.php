<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 06/11/2018
 * Time: 13:22
 */
?>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="<?php echo URL_BASE . "" ?>" method="POST">
                <div  class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="login">Local</label>
                        <input type="text" class="form-control" name="login" placeholder="Local">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="problema">Prioridade</label>
                        <select class="form-control form-control-md" name="problema">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="problema">Área</label>
                        <select class="form-control form-control-md" name="problema">
                            <option>Selecione</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="dataAbertura">Data de abertura</label>
                            <input type="text" class="form-control" name="dataAbertura">
                        </fieldset>
                    </div>
                    <div class="form-group col-sm-3">
                        <fieldset disabled>
                            <label for="dataAtendimento">Data de atendimento </label>
                            <input type="text" class="form-control" name="dataAtendimento">
                        </fieldset>
                    </div>
                    <div class="form-group col-sm-10">
                        <label for="descProblema">Descrição problema</label>
                        <textarea class="form-control" id="descProblema" rows="5"></textarea>
                    </div>
                    <div class="form-group col-md-3">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>