<?php

    use app\core\Helper;

    $permissoes = ['admin'];
    Helper::verificarAcesso($permissoes);

?>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-10 col-lg-10">
            <form action="<?php echo URL_BASE . "usuario/salvar" ?>" method="POST">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" placeholder="Nome" required="">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome" required="">
                    </div>


                    <div class="form-group col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required="">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="tipo">Perfil</label>
                        <select id="perfil" name="perfil" class="form-control form-control-md">
                            <?php foreach ($viewData["perfil"] as $perfil) { ?>
                                <option><?php echo $perfil->descricao ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" placeholder="Login" required="">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha" required="">
                    </div>

                    <div class="form-group col-lg-5 col-md-10 col-sm-12">
                        <a class="btn btn-danger" href="<?php echo URL_BASE . 'usuario' ?>">
                            Cancelar
                        </a>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

