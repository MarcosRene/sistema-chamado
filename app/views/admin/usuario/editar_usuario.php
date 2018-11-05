
<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-sm-12 col-md-10 col-lg-10">

            <form action="<?php echo URL_BASE . "usuario/salvar" ?>" method="POST"> 

                <div  class="form-row">
                    <div class="form-group col-sm-6">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control"  name="nome" value="<?php echo $usuario->nome ?>">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="sobrenome">Sobrenome</label>
                        <input type="text" class="form-control" name="sobrenome" value="<?php echo $usuario->sobrenome ?>">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $usuario->email ?>">
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
                        <input type="text" class="form-control" name="login" value="<?php echo $usuario->login ?>">
                    </div>

                    <div class="form-group col-sm-6">
                        <label for="senha">Senha</label>
                        <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>

                    <div class="form-group mb-3">
                         <input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario ?>">
                        <button type="submit" class="btn btn-primary  ml-1" id="cadastrar">Salvar Alterações</button>                    
                         <a href="<?php echo URL_BASE . "usuario/mostrarUsuarios" ?>" class="btn btn-danger">Cancelar</a>                    
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
