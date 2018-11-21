<div class="container my-2">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <div class="row">

                <div class="form-row col-lg-12">

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                      <form action="<?php echo URL_BASE . "relatorio" ?>" method="POST">

                            <label for="tipo">Relátorio por área</label>
                            <select id="perfil" name="area" class="form-control form-control-md">
                                <?php foreach ($viewData["areas"] as $area) { ?>

                                    <option><?php echo $area->descricaoArea ?></option>
                                <?php } ?>
                            </select>

                        <a >
                            <button class="btn btn-danger mt-3" type="submit">Gerar</button>
                        </a>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
