<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Sistema de Gerênciamento de Chamados</title>
    </head> 

    <body>
        <div class="item9-2">
            <form method="POST" action="routes.php">
                <h2>Cadastrar Usuário</h2>
                <label>Nome</label>
                <input class="input" type="text" name="nome" required><br>

                <label>Sobrenome</label>
                <input class="input" type="text" name="sobrenome" required><br>

                <label>E-Mail</label>
                <input class="input" type="email" name="email" required><br>

                <label>Tipo usuário</label>
                <select class="input" name="lista"size="4" >
                    <option value="" ></option>
                    <option value="comum" >Usuário comum</option>
                    <option value="tecnico" >Técnico</option>
                    <option value="admin" >Administrador</option>
                </select> <br>

                <label>Login</label>
                <input class="input" type="text" name="login" required><br>

                <label>Senha</label>
                <input class="input" type="password" name="senha" required><br>

                <input type="hidden" name="acao" value="cadastrarUsuario">
                <button type="submit" class="button">Cadastrar</button>
            </form>
        </div>
    </body>
</html>





