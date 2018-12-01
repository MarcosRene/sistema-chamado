<div class="container my-2">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <div class="row">

                <div class="form-row col-lg-12">

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <form action="<?php echo URL_BASE . "relatorio/relatorioArea" ?>" method="POST" target="_blank">


                            <label for="problema">Prioridade</label>
                            <select class="form-control form-control-md" name="prioridade">
                                <option></option>
                                <option>Urgente</option>
                                <option>Alta</option>
                                <option>Media</option>
                                <option>Baixa</option>
                            </select>


                            <label for="problema">Status</label>
                            <select class="form-control form-control-md" name="status" >
                                <option></option>
                                <option>Não atendido</option>
                                <option>Em atendimento</option>
                                <option>Encerrado</option>
                                <option>Aguardando terceiros</option>
                            </select>

                            <a>
                                <button class="btn btn-danger mt-3" type="submit">Gerar</button>



                            </a>
                        </form>
                        <div><br>
                        
                        <a class="btn btn-info" target="_blank" href="<?php echo URL_BASE . "relatorio/tempoDeAtendimento" ?>">
                            Tempo de atendimento
                        </a>

                    </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
