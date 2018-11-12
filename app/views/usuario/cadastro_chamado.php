
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-8">
            <form action="<?php echo URL_BASE . "" ?>" method="POST">
                <div  class="form-row">

                    <div class="form-group col-sm-6">
                        <label for="problema">Local</label>
                        <select class="form-control form-control-md" name="local">
                            <option>Selecione</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="problema">Área</label>
                        <select class="form-control form-control-md" name="problema">
                            <option>Selecione</option>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="problema">Prioridade</label>
                        <select class="form-control form-control-md" name="problema">
                            <option>Selecione</option>
                            <option>Alta</option>
                            <option>Normal</option>
                            <option>Baixa</option>
                        </select>
                    </div>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-fw fa-bullhorn"></i>
                            <span>Equipamento</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                                
                            <div class="form-group col-sm-6">
                                <label for="email">Tombamento</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="email">Nome</label>
                                <input type="email" class="form-control" name="email" placeholder="E-mail">
                            </div>

                        </div>
                    </li>


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