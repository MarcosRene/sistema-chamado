
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="<?php echo URL_BASE . "" ?>" method="POST">
                <div class="form-row">

                    <div class="form-group col-sm-4">
                        <label for="problema">Local</label>
                        <select class="form-control form-control-md" name="local">
                            <option>Selecione</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="problema">Área</label>
                        <select class="form-control form-control-md" name="problema">
                            <option>Selecione</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-4">
                        <label for="problema">Prioridade</label>
                        <select class="form-control form-control-md" name="prioridade">
                            <option>Selecione</option>
                            <option>Alta</option>
                            <option>Normal</option>
                            <option>Baixa</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-12">
                        <div class="card">
                            <div class="card-header" id="heading">
                                <h5 class="m-auto text-right">
                                    <button class="btn btn-outline-info btn-sm" type="button" data-toggle="collapse" data-target="#collapse" aria-expanded="true" aria-controls="collapse">
                                        Equipamento
                                    </button>
                                </h5>
                            </div>
                            <div id="collapse" class="collapse" aria-labelledby="heading">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <label for="nome" class="sr-only" >Tombamento</label>
                                            <input type="text" class="form-control"  name="nome" placeholder="Tombamento">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <label for="nome" class="sr-only">Nome</label>
                                            <input type="text" class="form-control"  name="nome" placeholder="Nome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        <label for="descProblema">Descrição problema</label>
                        <textarea class="form-control" id="descProblema" rows="5"></textarea>
                    </div>

                    <div class="form-group col-lg-6 col-md-10 col-sm-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>