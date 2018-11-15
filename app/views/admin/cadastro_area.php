<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-10">
            <form action="<?php echo URL_BASE . "area/salvar" ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Descrição</label>
                        <input type="text" class="form-control" name="descricao" placeholder="Descrição">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="tipo">Responsável</label>
                        <select id="perfil" name="perfil" class="form-control">
                            <?php foreach ($viewData["perfil"] as $perfil) { ?>
                                <option><?php echo $perfil->descricao ?></option>
                            <?php } ?>
                        </select>
                    </div>


                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        <button type="reset" class="btn btn-danger">Cancelar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'lista_area.php';
?>




