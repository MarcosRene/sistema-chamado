<?php

use app\core\Helper;

$permissoes = ['admin', 'tecnico','usuario'];
Helper::verificarAcesso($permissoes);

?>

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'usuario/meusChamados/Não atendido' ?>">
            <div class="card text-white o-hidden h-100" id="danger">
                <div class="card-body">
                    <div class="mr-5">Não atendidos</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'usuario/meusChamados/Em atendimento' ?>">
            <div class="card text-white o-hidden h-100" id="success">
                <div class="card-body">
                    <div class="mr-5">Em atendimento</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'usuario/meusChamados/Aguardando terceiros' ?>">
            <div class="card text-white o-hidden h-100" id="primary">
                <div class="card-body">
                    <div class="mr-5">Aguardando terceiros</div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 mb-3">
        <a class="a" href="<?php echo URL_BASE . 'usuario/meusChamados/Encerrado' ?>">
            <div class="card text-white o-hidden h-100" id="dark">
                <div class="card-body">
                    <div class="mr-5">Encerrados</div>
                </div>
            </div>
        </a>
    </div>
</div>
