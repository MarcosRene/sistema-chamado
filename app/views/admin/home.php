<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Não atendidos</div>
            </div>
            <a class="card-footer text-white text-right p-auto">
                <span><?php echo count($viewData['naoatendidos']) ?></span>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Em atendimento</div>
            </div>
            <a class="card-footer text-white text-right p-auto">
                <span><?php echo count($viewData['ematendimento']) ?></span>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card text-white bg-warning o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Aguardando terceiros</div>
            </div>
            <a class="card-footer text-white text-right p-auto">
                <span><?php echo count($viewData['aguardando']) ?></span>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <div class="card text-white bg-dark o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">Encerrados</div>
            </div>
            <a class="card-footer text-white text-right p-auto">
                <span><?php echo count($viewData['encerrados']) ?></span>
            </a>
        </div>
    </div>
</div>

<?php

include 'lista_home.php';

?>
