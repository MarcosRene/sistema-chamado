
<div class="container">

    <div class="row justify-content-center mb-5">

        <div class="col-sm-12 col-md-10 col-lg-8">

            <form action="<?php echo URL_BASE . "usuario/salvar" ?>" method="POST"> 

                <div  class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control"  name="nome" placeholder="Nome">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" placeholder="Sobrenome">
                    </div>


                    <div class="form-group col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>

                    <div class="form-group col-sm-6">

                        <label for="tipo">Tipo</label>

                        <select id="id_perfil" name="id_perfil" class="form-control form-control-md">
                            <?php foreach ($viewData["perfil"] as $perfil) { ?>
                                <option><?php echo $perfil->id_perfil . " " . $perfil->descricao ?></option>
                            <?php } ?>	
                        </select> 

                    </div>

                    <div class="form-group col-sm-6">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" name="login" placeholder="Login">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>

                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary  ml-1" id="cadastrar">Cadastrar</button>                    
                        <button type="reset" class="btn btn-danger ml-1" id="limpar">Cancelar</button>                    
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
