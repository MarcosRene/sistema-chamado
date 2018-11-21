<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico'];
Helper::verificarAcesso($permissoes);

?>


<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'chamado/listarChamados/Não atendido' ?>">
            <div class="card text-white o-hidden h-100" id="danger">
                <div class="card-body">
                    <div class="mr-5">Não atendidos</div>
                </div>
                <a class="card-footer text-white text-right p-auto">
                    <h3><?php echo count($viewData['naoAtendidos']) ?></h3>
                </a>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'chamado/listarChamados/Em atendimento' ?>">
            <div class="card text-white o-hidden h-100" id="success">
                <div class="card-body">
                    <div class="mr-5">Em atendimento</div>
                </div>
                <a class="card-footer text-white text-right p-auto">
                    <h3><?php echo count($viewData['emAtendimento']) ?></h3>
                </a>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'chamado/listarChamados/Aguardando terceiros' ?>">
            <div class="card text-white o-hidden h-100" id="primary">
                <div class="card-body">
                    <div class="mr-5">Aguardando terceiros</div>
                </div>
                <a class="card-footer text-white text-right p-auto">
                    <h3><?php echo count($viewData['aguardandoTerceiros']) ?></h3>
                </a>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'chamado/listarChamados/Encerrado' ?>">
            <div class="card text-white o-hidden h-100" id="dark">
                <div class="card-body">
                    <div class="mr-5">Encerrados</div>
                </div>
                <a class="card-footer text-white text-right p-auto">
                    <h3><?php echo count($viewData['encerrados']) ?></h3>
                </a>
            </div>
        </a>
    </div>
</div>
