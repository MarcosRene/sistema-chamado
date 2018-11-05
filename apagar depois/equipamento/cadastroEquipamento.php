<div class="container">

    <div class="row justify-content-center mb-5">

        <form action="<?php echo URL_BASE . "equipamento/salvar" ?> " method="POST"> 

            <div  class="form-row">
                <div class="form-group col-sm-6">
                    <label for="nome">Tombamento</label>
                    <input type="text" class="form-control"  name="tombamento" placeholder="Tombamento">
                </div>

                <div class="form-group col-sm-6">
                    <label for="sobrenome">Descrição</label>
                    <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                </div>

                <div class="form-group col-sm-6">
                    <label for="marca">Marca</label>
                    <input type="text" class="form-control" name="marca" placeholder="Marca">
                </div>

                <div class="form-group col-sm-12">
                    <button type="submit" class="btn btn-primary  ml-1" id="cadastrar">Cadastrar</button>                    
                    <button type="reset" class="btn btn-danger ml-1" id="limpar">Cancelar</button>                    
                </div>

            </div>
        </form>
    </div>
</div>