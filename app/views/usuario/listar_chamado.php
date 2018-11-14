<?php
/**
 * Created by PhpStorm.
 * User: marco
 * Date: 06/11/2018
 * Time: 13:01
 */
?>

<div class="card">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Ocorrências</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Código</th>
                    <th>Aberto a</th>
                    <th>Descrição</th>
                    <th>Status</th>
                    <th>Lista</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer">
        <nav aria-label="pageUsuario">
            <ul class="pagination justify-content-center">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

<div class="modal fade" id="modalAtender" tabindex="-1" role="dialog" aria-labelledby="modalAlterar" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Deseja realmente excluir ?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Excluir</button>
                <button type="button" class="btn btn-secondary">Cancelar</button>
            </div>
        </div>
    </div>
</div>

